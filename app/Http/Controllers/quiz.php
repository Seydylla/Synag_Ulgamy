<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lessons;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class quiz extends Controller
{
    public function index() {
        return view('teacher.quiz.index');
    }

    public function create() {

        $lessons = lessons::all();

        return view('teacher.quiz.create', compact('lessons'));
    }

    public function store(Request $request) {
        // Validate required fields
        $request->validate([
            'lesson' => 'required',
            'title' => 'required|string|max:255',
            'password' => 'required|string',
            'grade-month' => 'required',
        ]);

        DB::transaction(function () use ($request) {
            $teacherUserId = Auth::id() ?? 1;

            // Process Start & End Dates
            if ($request->has('test-start-time') && $request->input('test-start-time') === 'start-time-setted') {
                $startTime = $request->input('start-date') . ' ' . $request->input('start-time') . ':00';
            } else {
                $startTime = '2000-01-01 00:00:00';
            }

            if ($request->has('test-end-time') && $request->input('test-end-time') === 'end-time-setted') {
                $endTime = $request->input('end-date') . ' ' . $request->input('end-time') . ':00';
            } else {
                $endTime = '2200-01-01 00:00:00';
            }

            // Process Duration
            $duration = ($request->has('test-duration-switch') && $request->input('test-duration-switch') === 'test-duration-setted')
                ? ((int) $request->input('duration-time') * 60)
                : (999 * 60);

            // Insert into su_quizes
            $quizId = DB::table('su_quizes')->insertGetId([
                'title'           => $request->input('title'),
                'description'     => '',
                'teacher_user_id' => $teacherUserId,
                'science_id'      => $request->input('science', 0),
                'lesson_id'       => $request->input('lesson'),
                'month'           => $request->input('grade-month'),
                'academic_year'   => 0,
                'created_at'      => now(),
                'updated_at'      => now(),
            ]);

            // Insert into su_quiz_settings
            DB::table('su_quiz_settings')->insert([
                'quiz_id'           => $quizId,
                'name'              => $request->input('title'),
                'password'          => md5($request->input('password')),
                'availability'      => $request->input('availability', 1),
                'start_time'        => $startTime,
                'end_time'          => $endTime,
                'duration'          => $duration,
                'question_quantity' => $request->input('question-quantity', 0),
                'trying_quantity'   => $request->input('try-number', 1),
                'shuffle_questions' => $request->input('question-shuffle', 1),
                'shuffle_choices'   => $request->input('choices-shuffle', 1),
                'answer_type'       => $request->input('answer-type', 1),
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            // Insert into su_quiz_views
            DB::table('su_quiz_views')->insert([
                'quiz_id'               => $quizId,
                'before_grade'          => $request->has('before-grade') ? 1 : 0,
                'before_points'         => $request->has('before-points') ? 1 : 0,
                'before_answer_true'    => $request->has('before-answer-true') ? 1 : 0,
                'before_true_answer'    => $request->has('before-true-answer') ? 1 : 0,
                'before_answer_history' => $request->has('before-answer-history') ? 1 : 0,
                'after_grade'           => $request->has('after-grade') ? 1 : 0,
                'after_points'          => $request->has('after-points') ? 1 : 0,
                'after_answer_true'     => $request->has('after-answer-true') ? 1 : 0,
                'after_true_answer'     => $request->has('after-true-answer') ? 1 : 0,
                'after_answer_history'  => $request->has('after-answer-history') ? 1 : 0,
                'later_grade'           => $request->has('later-grade') ? 1 : 0,
                'later_points'          => $request->has('later-points') ? 1 : 0,
                'later_answer_true'     => $request->has('later-answer-true') ? 1 : 0,
                'later_true_answer'     => $request->has('later-true-answer') ? 1 : 0,
                'later_answer_history'  => $request->has('later-answer-history') ? 1 : 0,
                'created_at'            => now(),
                'updated_at'            => now(),
            ]);

            // Attach Years / Groups
            $linkedYears = $request->input('linked-years', []);
            foreach ($linkedYears as $year) {
                $courses = DB::table('su_users')
                    ->select('institute_id', 'faculty_id', 'department_id', 'major_id')
                    ->where('entrance_year', $year)
                    ->distinct()
                    ->get();

                foreach ($courses as $course) {
                    DB::table('su_quiz_attachments')->insert([
                        'quiz_id'       => $quizId,
                        'institute'     => $course->institute_id,
                        'faculty'       => $course->faculty_id,
                        'department'    => $course->department_id,
                        'major'         => $course->major_id,
                        'entrance_year' => $year,
                        'created_at'    => now(),
                        'updated_at'    => now(),
                    ]);
                }
            }

            $linkedGroups = $request->input('linked-groups', []);
            foreach ($linkedGroups as $groupString) {
                $group = explode(',', $groupString);
                if (count($group) === 5 && !in_array($group[4], $linkedYears)) {
                    DB::table('su_quiz_attachments')->insert([
                        'quiz_id'       => $quizId,
                        'institute'     => $group[0],
                        'faculty'       => $group[1],
                        'department'    => $group[2],
                        'major'         => $group[3],
                        'entrance_year' => $group[4],
                        'created_at'    => now(),
                        'updated_at'    => now(),
                    ]);
                }
            }

            // Store Uploaded Excel File
            if ($request->hasFile('import-file')) {
                $file = $request->file('import-file');
                $filename = 'Questions-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/test_soraglar'), $filename);
            }
        });

        return redirect('/teacher/tests');
    }
}
