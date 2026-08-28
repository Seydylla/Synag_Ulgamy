<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SU | Synag Ulgamy</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media', // Automatically detects system preference (light or dark)
        }
    </script>
    <script src="../../js/chart.min.js"></script>
</head>

<body class="bg-slate-100 dark:bg-slate-900 font-sans text-slate-800 dark:text-slate-100 antialiased min-h-screen transition-colors duration-200">

    <!-- Top Navigation Bar -->
    <header class="w-full bg-white dark:bg-slate-800 border-b border-slate-200/80 dark:border-slate-700/80 px-3 md:px-5 py-2.5 sticky top-0 z-30 shadow-sm transition-colors duration-200">
        <div class="max-w-[1600px] mx-auto flex items-center justify-between">
            <div class="flex items-center gap-3 md:gap-4">
                <button type="button" class="text-slate-700 dark:text-slate-200 hover:text-slate-900 dark:hover:text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <a href="#" class="flex items-center gap-2">
                    <div class="font-extrabold text-2xl md:text-3xl tracking-wider text-teal-500 dark:text-teal-400">SU</div>
                    <span class="text-sm md:text-base font-bold text-slate-600 dark:text-slate-300 hidden sm:inline-block border-l border-slate-200 dark:border-slate-700 pl-2">Synag Ulgamy</span>
                </a>
            </div>

            <div class="flex items-center gap-3">
                <button type="button" class="relative p-2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200 transition-colors">
                    <svg class="w-6 h-6 md:w-7 md:h-7" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                    <span class="absolute top-1.5 right-1.5 bg-rose-500 text-white text-[11px] font-bold rounded-full w-4 h-4 flex items-center justify-center">0</span>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Outer Container -->
    <div class="max-w-[1600px] mx-auto flex p-2 sm:p-3 md:p-4 gap-3 md:gap-4">

        <!-- Left Sidebar Island -->
        <aside class="hidden md:flex flex-col justify-between w-16 bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200/60 dark:border-slate-700/60 py-5 items-center shrink-0 min-h-[calc(100vh-5rem)] sticky top-16 transition-colors duration-200">
            <div class="flex flex-col items-center gap-6 w-full">
                <!-- User Profile Avatar -->
                <a href="profile.html" class="w-8 h-8 rounded-full border-2 border-teal-400 flex items-center justify-center text-teal-500 hover:opacity-80 transition-opacity">
                    <span class="w-2.5 h-2.5 rounded-full bg-teal-400"></span>
                </a>

                <nav class="flex flex-col gap-5 items-center w-full">
                    <a href="dashboard.html" class="text-teal-500 dark:text-teal-400 p-2 rounded-xl hover:bg-teal-50 dark:hover:bg-teal-950/30 transition-colors" title="Dashboard">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </a>
                    <a href="tests.html" class="text-slate-700 dark:text-slate-300 hover:text-teal-500 dark:hover:text-teal-400 p-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors" title="Tests">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                    </a>
                    <a href="online_test.html" class="text-slate-700 dark:text-slate-300 hover:text-teal-500 dark:hover:text-teal-400 p-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors" title="Online Test">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </a>
                    <a href="settings.html" class="text-slate-700 dark:text-slate-300 hover:text-teal-500 dark:hover:text-teal-400 p-2 rounded-xl hover:bg-slate-50 dark:hover:bg-slate-700/50 transition-colors" title="Settings">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </a>
                </nav>
            </div>

            <div>
                <a href="../../signout.html" class="text-slate-700 dark:text-slate-300 hover:text-red-500 dark:hover:text-red-400 p-2 rounded-xl hover:bg-red-50 dark:hover:bg-red-950/30 transition-colors" title="Sign Out">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </a>
            </div>
        </aside>

        <!-- Main Content Area -->
        <main class="flex-1 w-full space-y-4 md:space-y-5">
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-3 md:gap-4">

                <!-- Left 3 Columns -->
                <div class="lg:col-span-3 space-y-3 md:space-y-4">

                    <!-- Stats Section -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3 md:gap-4">
                        <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between transition-colors duration-200">
                            <div>
                                <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Jemi: 1 test, synanşyk:</p>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white" id="attended-quizzes-count">2</span>
                                    <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">sany</span>
                                </div>
                            </div>
                            <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                </svg>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between transition-colors duration-200">
                            <div>
                                <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Jemi sarp edilen wagt:</p>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white" id="total-spent-time">7</span>
                                    <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">min</span>
                                </div>
                            </div>
                            <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>

                        <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between transition-colors duration-200">
                            <div>
                                <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">1 soraga sarp edilen:</p>
                                <div class="flex items-baseline gap-1.5">
                                    <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white" id="avg-spent-time">1</span>
                                    <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">min</span>
                                </div>
                            </div>
                            <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Chart & Ranking Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
                        <!-- Chart Card -->
                        <div class="md:col-span-2 bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex flex-col justify-between transition-colors duration-200">
                            <h6 class="font-bold text-xs md:text-sm text-slate-700 dark:text-slate-300 mb-3">Soňky 10 synanşyk</h6>
                            <div class="w-full h-48 md:h-52">
                                <canvas id="chart-self-progress"></canvas>
                            </div>
                        </div>

                        <!-- Ranking Cards Stack -->
                        <div class="flex flex-col gap-3 md:gap-4">
                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between flex-1 transition-colors duration-200">
                                <div>
                                    <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Institut boýunça</p>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white" id="ins-position">0</span>
                                        <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">-nji</span>
                                    </div>
                                </div>
                                <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5m0 0h5m-5 0V11m0 0h5m-5 0H7" />
                                    </svg>
                                </div>
                            </div>

                            <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 flex items-center justify-between flex-1 transition-colors duration-200">
                                <div>
                                    <p class="text-xs md:text-sm font-bold text-slate-700 dark:text-slate-300 mb-1.5 md:mb-2">Fakultet boýunça</p>
                                    <div class="flex items-baseline gap-1.5">
                                        <span class="text-3xl md:text-4xl font-black text-slate-800 dark:text-white" id="fac-position">0</span>
                                        <span class="text-xs md:text-base font-semibold text-slate-700 dark:text-slate-300">-njy</span>
                                    </div>
                                </div>
                                <div class="w-11 h-11 md:w-12 md:h-12 rounded-full bg-teal-100 dark:bg-teal-950/60 flex items-center justify-center text-teal-600 dark:text-teal-400 shrink-0">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Top 10 Table Card -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 transition-colors duration-200">
                        <h6 class="font-bold text-xs md:text-sm text-slate-700 dark:text-slate-300 mb-3 md:mb-4" id="top-students-heading">Siz ilki 10-lykda</h6>
                        <div class="overflow-x-auto">
                            <table class="w-full text-left text-xs md:text-sm border-collapse">
                                <thead>
                                    <tr class="border-b border-slate-200 dark:border-slate-700 text-slate-700 dark:text-slate-300 font-bold">
                                        <th class="py-2.5 md:py-3 px-2">T/b</th>
                                        <th class="py-2.5 md:py-3 px-2 text-center">Suraty</th>
                                        <th class="py-2.5 md:py-3 px-2">Ady we familiýasy atasynyň ady</th>
                                        <th class="py-2.5 md:py-3 px-2">Topary</th>
                                        <th class="py-2.5 md:py-3 px-2">Fakultet</th>
                                        <th class="py-2.5 md:py-3 px-2">Tabşyran testi</th>
                                        <th class="py-2.5 md:py-3 px-2">Ortaça bahasy</th>
                                    </tr>
                                </thead>
                                <tbody id="top-students-table-body" class="divide-y divide-slate-100 dark:divide-slate-700/50 text-slate-600 dark:text-slate-300">
                                    <!-- Table row items -->
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
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                </svg>
                            </button>
                            <h4 id="quiz-time-presenter" class="text-base md:text-lg font-bold">-</h4>
                            <button type="button" onclick="arrowRight()" class="hover:opacity-75 transition-opacity">
                                <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Active Users Card -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-4 md:p-5 shadow-sm border border-slate-200/60 dark:border-slate-700/60 min-h-[280px] transition-colors duration-200">
                        <h6 class="font-bold text-xs md:text-sm text-slate-700 dark:text-slate-300 mb-4 md:mb-5">Aktiw ulanyjylar</h6>
                        <div class="space-y-3.5 md:space-y-4" id="online-users-container">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2.5 md:gap-3">
                                    <div class="w-8 h-8 md:w-9 md:h-9 rounded-full bg-slate-800 dark:bg-slate-700 text-white flex items-center justify-center font-semibold text-xs md:text-sm overflow-hidden">
                                        <svg class="w-5 h-5 text-slate-300" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                        </svg>
                                    </div>
                                    <span class="text-xs md:text-sm font-semibold text-slate-700 dark:text-slate-200">Dolandyryjy Ulgam</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-teal-400"></span>
                                    <span class="text-xs md:text-sm font-semibold text-teal-500 dark:text-teal-400">Aktiw</span>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2.5 md:gap-3">
                                    <div class="w-8 h-8 md:w-9 md:h-9 rounded-full bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-300 flex items-center justify-center font-semibold text-xs md:text-sm border border-slate-200 dark:border-slate-600">
                                        UA
                                    </div>
                                    <span class="text-xs md:text-sm font-semibold text-slate-700 dark:text-slate-200">User Admin</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="w-2 h-2 rounded-full bg-teal-400"></span>
                                    <span class="text-xs md:text-sm font-semibold text-teal-500 dark:text-teal-400">Aktiw</span>
                                </div>
                            </div>
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

        let upcomingQuizes = [];
        let last10QuizTitles = ["Samsyk", "Samsyk"];
        let last10QuizGrades = [60, 33];

        function initUpcomingQuizes() {
            if (upcomingQuizes.length > 0) {
                quizItemPresenter.innerHTML = "1/" + upcomingQuizes.length + " &nbsp;&nbsp;&nbsp;&nbsp;" + upcomingQuizes[0]['title'];
                quizTimePresenter.innerHTML = "Ýüklenýär...";
                countDownUpcomingQuizes();
            } else {
                quizItemPresenter.innerHTML = "Golaýda test ýok";
                quizTimePresenter.innerHTML = " - ";
            }
        }

        function arrowLeft() {
            if (upcomingQuizes.length === 0) return;
            QUIZ_ITEM_COUNTER = (QUIZ_ITEM_COUNTER === 0) ? upcomingQuizes.length - 1 : QUIZ_ITEM_COUNTER - 1;
            updateQuizPresenter();
        }

        function arrowRight() {
            if (upcomingQuizes.length === 0) return;
            QUIZ_ITEM_COUNTER = (QUIZ_ITEM_COUNTER === upcomingQuizes.length - 1) ? 0 : QUIZ_ITEM_COUNTER + 1;
            updateQuizPresenter();
        }

        function updateQuizPresenter() {
            quizItemPresenter.innerHTML = (QUIZ_ITEM_COUNTER + 1) + "/" + upcomingQuizes.length + " &nbsp;&nbsp;&nbsp;&nbsp;" + upcomingQuizes[QUIZ_ITEM_COUNTER]['title'];
            countDownUpcomingQuizes();
        }

        function countDownUpcomingQuizes() {
            clearInterval(timer);
            timer = setInterval(intervalsJob, 1000);
        }

        function intervalsJob() {
            if (!upcomingQuizes[QUIZ_ITEM_COUNTER]) return;

            let startTime = new Date(upcomingQuizes[QUIZ_ITEM_COUNTER]['start_time']).getTime();
            let rightNow = new Date().getTime();
            let distance = startTime - rightNow;

            if (distance < 0) {
                clearInterval(timer);
                quizTimePresenter.innerHTML = "GÖÇÜRILDI";
                return;
            }

            let days = Math.floor(distance / (1000 * 60 * 60 * 24));
            let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            let seconds = Math.floor((distance % (1000 * 60)) / 1000);

            quizTimePresenter.innerHTML = days + "g " + hours.toString().padStart(2, "0") + ":" + minutes.toString().padStart(2, "0") + ":" + seconds.toString().padStart(2, "0");
        }

        function createProgressChart(xValues, yValues) {
            let ctx = document.getElementById("chart-self-progress").getContext("2d");

            // Check current system color scheme for Chart ticks and grid colors
            let isDarkMode = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
            let labelColor = isDarkMode ? '#94a3b8' : '#64748b';
            let gridColor = isDarkMode ? 'rgba(148, 163, 184, 0.1)' : 'rgba(0, 0, 0, 0.05)';

            new Chart(ctx, {
                type: "line",
                data: {
                    labels: xValues,
                    datasets: [{
                        fill: false,
                        lineTension: 0.3,
                        backgroundColor: "#2dd4bf",
                        borderColor: "#2dd4bf",
                        data: yValues
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    legend: { display: false },
                    scales: {
                        xAxes: [{
                            ticks: { fontColor: labelColor },
                            gridLines: { color: gridColor }
                        }],
                        yAxes: [{
                            ticks: { min: 0, max: 100, fontColor: labelColor },
                            gridLines: { color: gridColor }
                        }]
                    }
                }
            });
        }

        document.addEventListener("DOMContentLoaded", function () {
            initUpcomingQuizes();
            createProgressChart(last10QuizTitles, last10QuizGrades);
        });
    </script>
</body>

</html>
