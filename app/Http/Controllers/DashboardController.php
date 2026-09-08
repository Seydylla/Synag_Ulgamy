<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id() ?? 1;

        // 1. Top 3 Stats
        $num_of_quizes = DB::table('su_quizes')->where('teacher_user_id', $userId)->count();

        $num_of_all_questions = DB::table('su_quiz_questions')
            ->whereIn('quiz_id', function ($query) use ($userId) {
                $query->select('id')->from('su_quizes')->where('teacher_user_id', $userId);
            })->count();

        $num_of_quiz_attendance = DB::table('su_quiz_sessions')
            ->whereIn('quiz_id', function ($query) use ($userId) {
                $query->select('id')->from('su_quizes')->where('teacher_user_id', $userId);
            })->count();

        // 2. Spent Time & Avg Time Stats
        $sum_of_spent_time = (int) (DB::table('su_quiz_settings')
            ->whereIn('quiz_id', function ($query) use ($userId) {
                $query->select('id')->from('su_quizes')->where('teacher_user_id', $userId);
            })->sum('duration') / 60);

        $avg_answer_time = $num_of_all_questions > 0
            ? round(($sum_of_spent_time * 60) / $num_of_all_questions)
            : 0;

        // 3. Top 10 Students Calculation
        $quiz_attempts = DB::table('su_quiz_sessions as s')
            ->join('su_users as u', 's.user_id', '=', 'u.id')
            ->where('s.status', 'TABŞYRDY')
            ->whereIn('s.quiz_id', function ($query) use ($userId) {
                $query->select('id')->from('su_quizes')->where('teacher_user_id', $userId);
            })
            ->select('s.id', 's.quiz_id', 's.user_id', 's.started_at', 's.finished_at', 'u.firstname', 'u.lastname', 'u.patrioticname', 'u.avatar', 'u.institute_id', 'u.faculty_id', 'u.department_id', 'u.major_id')
            ->get();

        $quiz_grades = [];
        foreach ($quiz_attempts as $attempt) {
            $ssid = $attempt->id;
            $qid = $attempt->quiz_id;

            $number_of_correct_variants = DB::table('su_question_variants')
                ->where('correctness', 1)
                ->whereIn('question_id', function ($q) use ($qid) {
                    $q->select('question_id')->from('su_quiz_questions')->where('quiz_id', $qid);
                })->count();

            $submitted_correct = DB::table('su_submitted_answers')
                ->where('session_id', $ssid)
                ->whereIn('variant_id', function ($q) {
                    $q->select('id')->from('su_question_variants')->where('correctness', 1);
                })->count();

            $percentage = ($number_of_correct_variants > 0) ? ($submitted_correct * 100) / $number_of_correct_variants : 0;

            if ($percentage < 50) $grade = '2 (iki)';
            elseif ($percentage < 70) $grade = '3 (üç)';
            elseif ($percentage < 85) $grade = '4 (dört)';
            else $grade = '5 (bäş)';

            // Fetch organ names
            $inst = DB::table('su_institutions')->where('id', $attempt->institute_id)->value('short_name') ?? '';
            $fac = DB::table('su_faculties')->where('id', $attempt->faculty_id)->value('short_name') ?? '';
            $dep = DB::table('su_departments')->where('id', $attempt->department_id)->value('short_name') ?? '';
            $maj = DB::table('su_majors')->where('id', $attempt->major_id)->value('short_name') ?? '';
            $quiz_title = DB::table('su_quizes')->where('id', $qid)->value('title') ?? '';

            $spent_seconds = strtotime($attempt->finished_at) - strtotime($attempt->started_at);

            $quiz_grades[] = [
                'session_id' => $ssid,
                'quiz_id' => $qid,
                'user_id' => $attempt->user_id,
                'name' => trim("{$attempt->firstname} {$attempt->lastname} {$attempt->patrioticname}"),
                'avatar' => $attempt->avatar,
                'ugry' => implode(' / ', array_filter([$inst, $fac, $dep, $maj])),
                'quiz_title' => $quiz_title,
                'percentage' => round($percentage),
                'grade' => $grade,
                'time_formatted' => (int)($spent_seconds / 60) . ' minut ' . ($spent_seconds % 60) . ' sekunt',
            ];
        }

        usort($quiz_grades, fn($a, $b) => $b['percentage'] <=> $a['percentage']);
        $top_students = array_slice($quiz_grades, 0, 10);

        // 4. Progress Chart Data
        $quizes_data = DB::table('su_quizes')->where('teacher_user_id', $userId)->get(['id', 'title']);
        $chart_labels = [];
        $chart_percentages = [];

        foreach ($quizes_data as $quiz) {
            $chart_labels[] = $quiz->title;

            $corrects = DB::table('su_submitted_answers')
                ->where('quiz_id', $quiz->id)
                ->whereIn('variant_id', function ($q) {
                    $q->select('id')->from('su_question_variants')->where('correctness', 1);
                })->count();

            $incorrects = DB::table('su_submitted_answers')
                ->where('quiz_id', $quiz->id)
                ->whereIn('variant_id', function ($q) {
                    $q->select('id')->from('su_question_variants')->where('correctness', 0);
                })->count();

            $total = ($corrects + $incorrects) > 0 ? ($corrects + $incorrects) : 1;
            $chart_percentages[] = round((100 * $corrects) / $total, 2);
        }

        // 5. Upcoming Quizzes
        $upcoming_quizes = DB::table('su_quizes as q')
            ->join('su_quiz_settings as s', 'q.id', '=', 's.quiz_id')
            ->where('q.teacher_user_id', $userId)
            ->where('s.start_time', '>', now())
            ->select('q.title', 's.start_time')
            ->get();

        // 6. Active Users
        $online_users = DB::table('su_users')->where('current_status', 1)->get();

        return view('teacher.dashboard', compact(
            'num_of_quizes',
            'num_of_all_questions',
            'num_of_quiz_attendance',
            'sum_of_spent_time',
            'avg_answer_time',
            'top_students',
            'chart_labels',
            'chart_percentages',
            'upcoming_quizes',
            'online_users'
        ));
    }
}
