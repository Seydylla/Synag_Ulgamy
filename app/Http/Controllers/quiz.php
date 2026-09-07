<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\lessons;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class quiz extends Controller
{
    public function index() {
        $quizzes = DB::table('su_quizes as q')
            ->leftJoin('su_quiz_settings as s', 'q.id', '=', 's.quiz_id')
            ->select([
                'q.id',
                'q.title',
                DB::raw("'ADMIN USER' as teacher_name"),
                DB::raw('COALESCE(s.duration, 1800) as duration'),
                DB::raw('COALESCE(s.question_quantity, 0) as question_count')
            ])
            ->orderBy('q.id', 'desc')
            ->get();

        return view('teacher.quiz.index', compact('quizzes'));
    }

    public function create() {
        $lessons = lessons::all();
        return view('teacher.quiz.create', compact('lessons'));
    }

    public function store(Request $request) {
        $request->validate([
            'lesson' => 'required',
            'title' => 'required|string|max:255',
            'password' => 'required|string',
            'grade-month' => 'required',
        ]);

        DB::transaction(function () use ($request) {
            $teacherUserId = Auth::id() ?? 1;

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

            $duration = ($request->has('test-duration-switch') && $request->input('test-duration-switch') === 'test-duration-setted')
                ? ((int) $request->input('duration-time') * 60)
                : (999 * 60);

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

            // Store uploaded file to public directory
            if ($request->hasFile('import-file')) {
                $file = $request->file('import-file');
                $filename = 'Questions-' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('uploads/test_soraglar'), $filename);
            }
        });

        return redirect('/teacher/tests');
    }

    public function destroy($id){
        // Scan uploads directory and delete all files starting with "Questions-"
        $folderPath = public_path('uploads/test_soraglar');

        if (File::exists($folderPath)) {
            $files = File::files($folderPath);
            foreach ($files as $file) {
                if (str_contains($file->getFilename(), 'Questions-')) {
                    File::delete($file->getRealPath());
                }
            }
        }

        // Remove records from database tables
        DB::table('su_quiz_attachments')->where('quiz_id', $id)->delete();
        DB::table('su_quiz_settings')->where('quiz_id', $id)->delete();
        DB::table('su_quiz_views')->where('quiz_id', $id)->delete();
        DB::table('su_quizes')->where('id', $id)->delete();

        return redirect('/teacher/tests')->with('success', 'Synag we degişli faýl üstünlikli pozuldy!');
    }

    public function edit($id) {
        $quiz = DB::table('su_quizes as q')
            ->leftJoin('su_quiz_settings as s', 'q.id', '=', 's.quiz_id')
            ->leftJoin('su_quiz_views as v', 'q.id', '=', 'v.quiz_id')
            ->select([
                'q.id',
                'q.title',
                'q.description',
                'q.science_id',
                'q.lesson_id',
                'q.month',
                's.password',
                's.availability',
                's.start_time',
                's.end_time',
                's.duration',
                's.question_quantity',
                's.trying_quantity',
                's.shuffle_questions',
                's.shuffle_choices',
                's.answer_type',
                'v.before_grade',
                'v.before_points',
                'v.before_answer_true',
                'v.before_true_answer',
                'v.before_answer_history',
                'v.after_grade',
                'v.after_points',
                'v.after_answer_true',
                'v.after_true_answer',
                'v.after_answer_history',
                'v.later_grade',
                'v.later_points',
                'v.later_answer_true',
                'v.later_true_answer',
                'v.later_answer_history'
            ])
            ->where('q.id', $id)
            ->first();

        if (!$quiz) {
            return redirect('/teacher/tests')->with('error', 'Synag tapylmady.');
        }

        $lessons = lessons::all();

        return view('teacher.quiz.edit', compact('quiz', 'lessons'));
    }

    public function update(Request $request, $id) {

        $request->validate([
            'lesson' => 'required',
            'title'  => 'required|string|max:255',
            'import-file' => 'nullable|file|mimes:xlsx,xls|max:10240', // Validate optional file
        ]);

        DB::transaction(function () use ($request, $id) {
            $startTime = ($request->has('test-start-time') && $request->input('test-start-time') === 'start-time-setted')
                ? $request->input('start-date') . ' ' . $request->input('start-time') . ':00'
                : '2000-01-01 00:00:00';

            $endTime = ($request->has('test-end-time') && $request->input('test-end-time') === 'end-time-setted')
                ? $request->input('end-date') . ' ' . $request->input('end-time') . ':00'
                : '2200-01-01 00:00:00';

            $duration = ($request->has('test-duration-switch') && $request->input('test-duration-switch') === 'test-duration-setted')
                ? ((int) $request->input('duration-time') * 60)
                : (999 * 60);

            // Update main quiz details
            DB::table('su_quizes')->where('id', $id)->update([
                'title'      => $request->input('title'),
                'lesson_id'  => $request->input('lesson'),
                'month'      => $request->input('grade-month'),
                'updated_at' => now(),
            ]);

            // Update settings
            $settingsData = [
                'name'              => $request->input('title'),
                'availability'      => $request->input('availability', 1),
                'start_time'        => $startTime,
                'end_time'          => $endTime,
                'duration'          => $duration,
                'trying_quantity'   => $request->input('try-number', 1),
                'shuffle_questions' => $request->input('question-shuffle', 1),
                'shuffle_choices'   => $request->input('choices-shuffle', 1),
                'answer_type'       => $request->input('answer-type', 1),
                'updated_at'        => now(),
            ];

            if ($request->filled('password')) {
                $settingsData['password'] = md5($request->input('password'));
            }

            DB::table('su_quiz_settings')->where('quiz_id', $id)->update($settingsData);

            // Update view configurations
            DB::table('su_quiz_views')->where('quiz_id', $id)->update([
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
                'updated_at'            => now(),
            ]);

            // Handle Excel file update if a new file was uploaded
            if ($request->hasFile('import-file')) {
                $folderPath = public_path('uploads/test_soraglar');

                if (File::exists($folderPath)) {
                    // Delete previous "Questions-" files from the folder
                    $existingFiles = File::files($folderPath);
                    foreach ($existingFiles as $oldFile) {
                        if (str_contains($oldFile->getFilename(), 'Questions-')) {
                            File::delete($oldFile->getRealPath());
                        }
                    }

                    // Save the new uploaded file
                    $file = $request->file('import-file');
                    $filename = 'Questions-' . uniqid() . '.' . $file->getClientOriginalExtension();
                    $file->move($folderPath, $filename);
                }
            }
        });

        return redirect('/teacher/tests')->with('success', 'Synag üstünlikli täzelendi!');
    }

    public function result($id) {
        // Fetch quiz and settings
        $quiz_details = DB::table('su_quizes as q')
            ->leftJoin('su_quiz_settings as s', 'q.id', '=', 's.quiz_id')
            ->select('q.id', 'q.title', 's.duration', 's.question_quantity')
            ->where('q.id', $id)
            ->first();

        if (!$quiz_details) {
            return redirect('/teacher/tests')->with('error', 'Synag tapylmady.');
        }

        // Convert object to array if required by Blade view
        $quiz_details = (array) $quiz_details;

        // Fetch quiz attempt sessions (or empty array if not implemented yet)
        $opened_sessions = DB::table('su_quiz_sessions as s')
            ->join('su_users as u', 's.user_id', '=', 'u.id')
            ->select('s.*', 'u.firstname', 'u.lastname', 'u.patrioticname', 'u.avatar')
            ->where('s.quiz_id', $id)
            ->get()
            ->toArray();

        $_QUIZ_ID = $id;
        $_NUM_OF_ATTEMPTS = count($opened_sessions);
        $check_in_progress = true;
        $check_time_expired = true;
        $check_finished = true;
        $check_unsubmitted = true;

        return view('teacher.quiz.results', compact(
            'quiz_details',
            'opened_sessions',
            '_QUIZ_ID',
            '_NUM_OF_ATTEMPTS',
            'check_in_progress',
            'check_time_expired',
            'check_finished',
            'check_unsubmitted'
        ));
    }
}
