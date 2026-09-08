<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SU | Synag Ulgamy - Dashboard</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        tailwind.config = { darkMode: 'media' }
    </script>
</head>

<body class="bg-slate-100 dark:bg-slate-900 font-sans text-slate-800 dark:text-slate-100 antialiased min-h-screen transition-colors duration-200">

    @include('partials.nav')

    <div class="max-w-[1600px] mx-auto flex p-2 sm:p-3 md:p-4 gap-3 md:gap-4">

        @include('partials.aside-teacher')

        <main class="flex-1 w-full space-y-4 md:space-y-5">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-3 md:gap-4">

                <div class="lg:col-span-3 space-y-3 md:space-y-4">

                    <!-- Top 3 Stats Section -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 md:gap-4">
                        <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between">
                            <div>
                                <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Jemi testler</p>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white">{{ $num_of_quizes }}</span>
                                    <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">sany</span>
                                </div>
                            </div>
                            <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between">
                            <div>
                                <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Jemi soraglar</p>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white">{{ $num_of_all_questions }}</span>
                                    <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">sany</span>
                                </div>
                            </div>
                            <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h5m-5 0V11m0 0h5m-5 0H7" /></svg>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between">
                            <div>
                                <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Synag tabşyranlar</p>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white">{{ $num_of_quiz_attendance }}</span>
                                    <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">sany</span>
                                </div>
                            </div>
                            <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            </div>
                        </div>
                    </div>

                    <!-- Chart & Time Stats Stack -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
                        <div class="md:col-span-2 bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex flex-col justify-between">
                            <h6 class="font-bold text-xs md:text-sm text-slate-700 dark:text-slate-300 mb-3">Tabşyrlan synaglar boýunça</h6>
                            <div class="w-full h-48 md:h-52">
                                <canvas id="chart-self-progress"></canvas>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3 md:gap-4">
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between flex-1">
                                <div>
                                    <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Jemi wagt</p>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white">{{ $sum_of_spent_time }}</span>
                                        <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">min</span>
                                    </div>
                                </div>
                                <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </div>
                            </div>

                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between flex-1">
                                <div>
                                    <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Ortaça her soraga</p>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white">{{ $avg_answer_time }}</span>
                                        <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">sekunt</span>
                                    </div>
                                </div>
                                <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top 10 Table Card -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60">
                        <h6 class="font-bold text-xs md:text-sm text-slate-700 dark:text-slate-300 mb-3 md:mb-4">Tapawutlanan 10 talyp</h6>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-xs md:text-sm border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-bold">
                                        <th class="py-2.5 md:py-3 px-2">T/b</th>
                                        <th class="py-2.5 md:py-3 px-2 text-center">Suraty</th>
                                        <th class="py-2.5 md:py-3 px-2">Ady we familiýasy atasynyň ady</th>
                                        <th class="py-2.5 md:py-3 px-2">Ugry</th>
                                        <th class="py-2.5 md:py-3 px-2">Tabşyran testi</th>
                                        <th class="py-2.5 md:py-3 px-2">Baly</th>
                                        <th class="py-2.5 md:py-3 px-2">Bahasy</th>
                                        <th class="py-2.5 md:py-3 px-2">Wagt</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-slate-100 dark:divide-slate-700/50 text-slate-600 dark:text-slate-300">
                                    @forelse ($top_students as $i => $student)
                                        <tr>
                                            <td class="py-2.5 md:py-3 px-2">{{ $i + 1 }}</td>
                                            <td class="py-2.5 md:py-3 px-2 text-center">
                                                <div class="w-8 h-8 rounded-full bg-slate-200 dark:bg-slate-700 mx-auto overflow-hidden flex items-center justify-center">
                                                    @if($student['avatar'])
                                                        <img src="{{ asset('img/avatars/' . $student['avatar']) }}" class="w-full h-full object-cover" />
                                                    @else
                                                        <svg class="w-5 h-5 text-slate-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="py-2.5 md:py-3 px-2 font-medium text-teal-600 dark:text-teal-400">
                                                <a href="{{ url('/test_result?sid='.$student['session_id'].'&qid='.$student['quiz_id'].'&uid='.$student['user_id']) }}">
                                                    {{ $student['name'] }}
                                                </a>
                                            </td>
                                            <td class="py-2.5 md:py-3 px-2">{{ $student['ugry'] }}</td>
                                            <td class="py-2.5 md:py-3 px-2">{{ $student['quiz_title'] }}</td>
                                            <td class="py-2.5 md:py-3 px-2 font-semibold">{{ $student['percentage'] }}%</td>
                                            <td class="py-2.5 md:py-3 px-2">{{ $student['grade'] }}</td>
                                            <td class="py-2.5 md:py-3 px-2">{{ $student['time_formatted'] }}</td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="8" class="text-center py-4">Tapawutlanan talyp ýok</td></tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <!-- Right Column -->
                <div class="space-y-3 md:space-y-4">

                    <!-- Banner Container -->
                    <div class="bg-teal-400 dark:bg-teal-600 rounded-2xl p-4 md:p-5 text-white shadow-sm flex flex-col justify-between min-h-[120px]">
                        <p class="font-bold text-xs md:text-sm tracking-wide text-center mb-3" id="quiz-item-presenter">Golaýda test ýok</p>
                        <div class="flex justify-between items-center px-2">
                            <button type="button" onclick="arrowLeft()" class="hover:opacity-75 transition-opacity">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" /></svg>
                            </button>
                            <h4 id="quiz-time-presenter" class="text-base md:text-lg font-bold">-</h4>
                            <button type="button" onclick="arrowRight()" class="hover:opacity-75 transition-opacity">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" /></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Active Users Card -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 min-h-[280px]">
                        <h6 class="font-bold text-xs md:text-sm text-slate-700 dark:text-slate-300 mb-4 md:mb-5">Aktiw ulanyjylar</h6>
                        <div class="space-y-3.5 md:space-y-4">
                            @forelse ($online_users as $user)
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2.5 md:gap-3">
                                        <div class="w-8 h-8 md:w-9 md:h-9 rounded-full bg-slate-800 dark:bg-slate-700 text-white flex items-center justify-center font-semibold text-xs md:text-sm overflow-hidden">
                                            @if($user->avatar)
                                                <img src="{{ asset('img/avatars/' . $user->avatar) }}" class="w-full h-full object-cover" />
                                            @else
                                                <svg class="w-5 h-5 text-slate-300" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                                            @endif
                                        </div>
                                        <span class="text-xs md:text-sm font-semibold text-slate-700 dark:text-slate-200">{{ $user->lastname }} {{ $user->firstname }}</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="w-2 h-2 rounded-full bg-teal-400"></span>
                                        <span class="text-xs md:text-sm font-semibold text-teal-500 dark:text-teal-400">Aktiw</span>
                                    </div>
                                </div>
                            @empty
                                <p class="text-xs text-slate-400">Aktiw ulanyjy ýok</p>
                            @endforelse
                        </div>
                    </div>

                </div>

            </div>
        </main>
    </div>

    <script>
        let timer;
        let QUIZ_ITEM_COUNTER = 0;
        let quizItemPresenter = document.getElementById('quiz-item-presenter');
        let quizTimePresenter = document.getElementById('quiz-time-presenter');
        let upcomingQuizes = @json($upcoming_quizes);

        if(upcomingQuizes.length > 0) {
            quizItemPresenter.innerHTML = "1/" + upcomingQuizes.length + " &nbsp&nbsp&nbsp&nbsp" + upcomingQuizes[0]['title'];
            countDownUpcomingQuizes();
        }

        function arrowLeft() {
            if(upcomingQuizes.length === 0) return;
            QUIZ_ITEM_COUNTER = (QUIZ_ITEM_COUNTER === 0) ? upcomingQuizes.length - 1 : QUIZ_ITEM_COUNTER - 1;
            quizItemPresenter.innerHTML = (QUIZ_ITEM_COUNTER + 1) + "/" + upcomingQuizes.length + " &nbsp&nbsp&nbsp&nbsp" + upcomingQuizes[QUIZ_ITEM_COUNTER]['title'];
            countDownUpcomingQuizes();
        }

        function arrowRight() {
            if(upcomingQuizes.length === 0) return;
            QUIZ_ITEM_COUNTER = (QUIZ_ITEM_COUNTER === upcomingQuizes.length - 1) ? 0 : QUIZ_ITEM_COUNTER + 1;
            quizItemPresenter.innerHTML = (QUIZ_ITEM_COUNTER + 1) + "/" + upcomingQuizes.length + " &nbsp&nbsp&nbsp&nbsp" + upcomingQuizes[QUIZ_ITEM_COUNTER]['title'];
            countDownUpcomingQuizes();
        }

        function countDownUpcomingQuizes() {
            clearInterval(timer);
            timer = setInterval(intervalsJob, 1000);
        }

        function intervalsJob() {
            let startTime = new Date(upcomingQuizes[QUIZ_ITEM_COUNTER]['start_time']).getTime();
            let distance = startTime - new Date().getTime();
            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            quizTimePresenter.innerHTML = days + " gun " + hours.toString().padStart(2, "0") + ":" + minutes.toString().padStart(2, "0") + ":" + seconds.toString().padStart(2, "0");
        }

        // Render Chart
        new Chart(document.getElementById("chart-self-progress"), {
            type: "bar",
            data: {
                labels: @json($chart_labels),
                datasets: [{
                    label: 'Test netijeler (%)',
                    data: @json($chart_percentages),
                    backgroundColor: 'rgba(20, 184, 166, 0.2)',
                    borderColor: 'rgba(20, 184, 166, 1)',
                    borderWidth: 1
                }]
            },
            options: { responsive: true, maintainAspectRatio: false }
        });
    </script>
</body>

</html>
