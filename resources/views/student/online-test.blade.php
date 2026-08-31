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
    <style>
        /* Custom 8-pointed star / octagonal shape matching the design */
        .star-badge {
            clip-path: polygon(
                30% 0%, 70% 0%,
                100% 30%, 100% 70%,
                70% 100%, 30% 100%,
                0% 70%, 0% 30%
            );
        }
    </style>
</head>

<body class="bg-slate-100 dark:bg-slate-900 font-sans text-slate-800 dark:text-slate-100 antialiased min-h-screen transition-colors duration-200">

    @include('partials.nav')

    <!-- Main Outer Container -->
    <div class="max-w-[1600px] mx-auto flex p-2 sm:p-3 md:p-4 gap-3 md:gap-4">

        @include('partials.aside')

        <main class="max-w-7xl mx-auto p-4 md:p-6 space-y-4">

            <!-- Top Status Bar -->
            <header class="bg-white dark:bg-slate-800 rounded-lg p-3 px-6 shadow-sm flex items-center justify-between gap-6">
                <!-- Counter -->
                <div id="current-position-presenter" class="text-teal-500 font-bold text-sm shrink-0">
                    1/6
                </div>

                <!-- Progress Bar -->
                <div class="flex-1 bg-slate-100 dark:bg-slate-700 h-2.5 rounded-full overflow-hidden">
                    <div id="questionation_in" class="bg-teal-400 h-full w-1/6 transition-all duration-300"></div>
                </div>

                <!-- Timer -->
                <div id="time-presenter" class="text-teal-500 font-bold text-sm shrink-0 font-mono">
                    22:39:49
                </div>
            </header>

            <!-- Main Content Area Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4 items-start">

                <!-- Left Box: Question Info & Flag -->
                <div class="lg:col-span-3 bg-white dark:bg-slate-800 rounded-lg p-5 shadow-sm space-y-4 relative">
                    <!-- Star Icon (Top-Right) -->
                    <button type="button" class="absolute top-4 right-4 text-slate-300 hover:text-amber-400 transition-colors">
                        <svg id="question-star-status" class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </button>

                    <!-- Question Title & Metadata -->
                    <div class="space-y-1.5">
                        <h2 class="text-xl font-bold text-teal-500">
                            <span id="current-position-presenter-big">1</span>-nji sorag
                        </h2>
                        <p id="submitted-answer-status-presenter" class="text-xs text-slate-600 dark:text-slate-400">
                            Jogap: heniz ýok
                        </p>
                        <p class="text-xs text-slate-600 dark:text-slate-400">
                            Ball: 16.67
                        </p>
                    </div>

                    <!-- Flag Button -->
                    <button id="question-flag-status" type="button" class="w-full bg-teal-400 hover:bg-teal-500 text-white font-medium py-2 px-3 rounded text-xs flex items-center justify-center gap-2 transition-colors">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 24 24">
                            <path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6h-5.6z"/>
                        </svg>
                        <span>Soragy bellemek</span>
                    </button>
                </div>

                <!-- Center Box: Question Text & Options -->
                <div class="lg:col-span-6 bg-white dark:bg-slate-800 rounded-lg p-8 shadow-sm min-h-[300px] flex flex-col justify-between relative">

                    <div class="space-y-8">
                        <!-- Question Heading -->
                        <h1 id="question-field" class="text-center font-bold text-xl text-slate-800 dark:text-slate-100">
                            Algoritm näme _________ ?
                        </h1>

                        <!-- Options List -->
                        <div class="max-w-md mx-auto space-y-3 pl-8">
                            <label for="input-variant-a" class="flex items-center gap-3 cursor-pointer text-sm text-slate-700 dark:text-slate-200">
                                <input id="input-variant-a" type="checkbox" name="variant" class="w-4 h-4 rounded border-slate-300 dark:border-slate-600 text-teal-500 focus:ring-teal-400 dark:bg-slate-700">
                                <span id="variant-a">nadogry</span>
                            </label>

                            <label for="input-variant-b" class="flex items-center gap-3 cursor-pointer text-sm text-slate-700 dark:text-slate-200">
                                <input id="input-variant-b" type="checkbox" name="variant" class="w-4 h-4 rounded border-slate-300 dark:border-slate-600 text-teal-500 focus:ring-teal-400 dark:bg-slate-700">
                                <span id="variant-b">dogry</span>
                            </label>

                            <label for="input-variant-c" class="flex items-center gap-3 cursor-pointer text-sm text-slate-700 dark:text-slate-200">
                                <input id="input-variant-c" type="checkbox" name="variant" class="w-4 h-4 rounded border-slate-300 dark:border-slate-600 text-teal-500 focus:ring-teal-400 dark:bg-slate-700">
                                <span id="variant-c">nadogry</span>
                            </label>

                            <label for="input-variant-d" class="flex items-center gap-3 cursor-pointer text-sm text-slate-700 dark:text-slate-200">
                                <input id="input-variant-d" type="checkbox" name="variant" class="w-4 h-4 rounded border-slate-300 dark:border-slate-600 text-teal-500 focus:ring-teal-400 dark:bg-slate-700">
                                <span id="variant-d">nadogry</span>
                            </label>
                        </div>
                    </div>

                    <!-- Right Nav Arrow Inside Question Box -->
                    <button id="next-question-arrow" type="button" class="absolute right-0 top-1/2 -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white p-2.5 rounded-l flex items-center justify-center transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z"/>
                        </svg>
                    </button>

                    <!-- Left Nav Arrow (Hidden by default on 1st question) -->
                    <button id="previous-question-arrow" type="button" class="hidden absolute left-0 top-1/2 -translate-y-1/2 bg-blue-600 hover:bg-blue-700 text-white p-2.5 rounded-r items-center justify-center transition-colors">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                            <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z"/>
                        </svg>
                    </button>
                </div>

                <!-- Right Box: Question Palette & Finish Button -->
                <div class="lg:col-span-3 bg-white dark:bg-slate-800 rounded-lg p-5 shadow-sm space-y-5">
                    <!-- Section Header -->
                    <h3 class="text-sm font-semibold text-slate-800 dark:text-slate-100">
                        <span class="bg-blue-600 text-white px-1 py-0.5 rounded text-xs mr-0.5">Test</span> soraglarynyň belgileri
                    </h3>

                    <!-- Question Palette Numbers -->
                    <div class="flex flex-wrap gap-2">
                        <button type="button" class="star-badge w-8 h-8 bg-teal-400 text-white text-xs font-semibold flex items-center justify-center">
                            1
                        </button>
                        <button type="button" class="star-badge w-8 h-8 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 text-xs font-semibold flex items-center justify-center border border-slate-300 dark:border-slate-600">
                            2
                        </button>
                        <button type="button" class="star-badge w-8 h-8 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 text-xs font-semibold flex items-center justify-center border border-slate-300 dark:border-slate-600">
                            3
                        </button>
                        <button type="button" class="star-badge w-8 h-8 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 text-xs font-semibold flex items-center justify-center border border-slate-300 dark:border-slate-600">
                            4
                        </button>
                        <button type="button" class="star-badge w-8 h-8 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 text-xs font-semibold flex items-center justify-center border border-slate-300 dark:border-slate-600">
                            5
                        </button>
                        <button type="button" class="star-badge w-8 h-8 bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-200 text-xs font-semibold flex items-center justify-center border border-slate-300 dark:border-slate-600">
                            6
                        </button>
                    </div>

                    <!-- Complete Test Button Form -->
                    <form id="form-quiz-completion" action="test_result.html" method="POST">
                        <input type="hidden" name="sid" value="">
                        <input type="hidden" name="qid" value="">
                        <button type="submit" class="finishtest bg-teal-400 hover:bg-teal-500 text-white font-medium text-xs py-2 px-4 rounded transition-colors">
                            Testi tamamlamak
                        </button>
                    </form>
                </div>

            </div>

        </main>

    </div>
</body>

</html>
