<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SU | Synag Ulgamy - Tests</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'media',
        }
    </script>
</head>

<body class="bg-slate-100 dark:bg-slate-900 font-sans text-slate-800 dark:text-slate-100 antialiased min-h-screen transition-colors duration-200">

    @include('partials.nav')

    <!-- Main Outer Container -->
    <div class="max-w-[1600px] mx-auto flex p-2 sm:p-3 md:p-4 gap-3 md:gap-4">

        @include('partials.aside')

        <main class="max-w-7xl mx-auto w-full p-4 md:p-6 space-y-6">

            <!-- Card Grid Matrix -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Test Card 1 -->
                <div class="bg-white dark:bg-slate-800 rounded-lg p-6 shadow-sm border border-slate-200 dark:border-slate-700 flex flex-column flex-col justify-between space-y-4">
                    <div class="space-y-2">
                        <span class="inline-block bg-teal-100 dark:bg-teal-900/40 text-teal-600 dark:text-teal-400 text-xs font-semibold px-2.5 py-1 rounded">
                            MAGLUMAT ULGAMLARY
                        </span>
                        <h3 class="text-lg font-bold text-slate-800 dark:text-slate-100 uppercase tracking-wide">
                            A. ATAYEW
                        </h3>
                    </div>

                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400 font-medium py-2 border-y border-slate-100 dark:border-slate-700/50">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>20 sorag</span>
                        </div>
                        <span class="text-slate-300 dark:text-slate-600">|</span>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>30 min</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="button" class="w-full bg-teal-400 hover:bg-teal-500 text-white font-medium text-xs py-2.5 px-4 rounded shadow-sm transition-colors uppercase tracking-wider">
                            Synaga başla
                        </button>
                    </div>
                </div>

                <!-- Test Card 2 -->
                <div class="bg-white dark:bg-slate-800 rounded-lg p-6 shadow-sm border border-slate-200 dark:border-slate-700 flex flex-col justify-between space-y-4">
                    <div class="space-y-2">
                        <span class="inline-block bg-teal-100 dark:bg-teal-900/40 text-teal-600 dark:text-teal-400 text-xs font-semibold px-2.5 py-1 rounded">
                            PROGRAMMA KECICI
                        </span>
                        <h3 class="text-lg font-bold text-slate-800 dark:text-slate-100 uppercase tracking-wide">
                            B. NURYYEV
                        </h3>
                    </div>

                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400 font-medium py-2 border-y border-slate-100 dark:border-slate-700/50">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>15 sorag</span>
                        </div>
                        <span class="text-slate-300 dark:text-slate-600">|</span>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>25 min</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="button" class="w-full bg-teal-400 hover:bg-teal-500 text-white font-medium text-xs py-2.5 px-4 rounded shadow-sm transition-colors uppercase tracking-wider">
                            Synaga başla
                        </button>
                    </div>
                </div>

                <!-- Test Card 3 -->
                <div class="bg-white dark:bg-slate-800 rounded-lg p-6 shadow-sm border border-slate-200 dark:border-slate-700 flex flex-col justify-between space-y-4">
                    <div class="space-y-2">
                        <span class="inline-block bg-teal-100 dark:bg-teal-900/40 text-teal-600 dark:text-teal-400 text-xs font-semibold px-2.5 py-1 rounded">
                            MAGLUMAT BAZALARY
                        </span>
                        <h3 class="text-lg font-bold text-slate-800 dark:text-slate-100 uppercase tracking-wide">
                            M. SAPAROW
                        </h3>
                    </div>

                    <div class="flex items-center gap-4 text-xs text-slate-500 dark:text-slate-400 font-medium py-2 border-y border-slate-100 dark:border-slate-700/50">
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>25 sorag</span>
                        </div>
                        <span class="text-slate-300 dark:text-slate-600">|</span>
                        <div class="flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-teal-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>40 min</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="button" class="w-full bg-teal-400 hover:bg-teal-500 text-white font-medium text-xs py-2.5 px-4 rounded shadow-sm transition-colors uppercase tracking-wider">
                            Synaga başla
                        </button>
                    </div>
                </div>

            </div>

            <!-- <div class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm flex items-center justify-center p-4 z-50">
                <div class="bg-white dark:bg-slate-800 max-w-md w-full rounded-lg shadow-xl overflow-hidden border border-slate-200 dark:border-slate-700">
                    <div class="flex items-center justify-between p-4 border-b border-slate-100 dark:border-slate-700">
                        <h3 class="text-base font-semibold text-slate-800 dark:text-slate-100">
                            Synaga başlamak
                        </h3>
                        <button type="button" class="text-slate-400 hover:text-slate-500">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>

                    <form action="#" method="POST" class="p-6 space-y-4">
                        <div class="text-center space-y-2 text-xs text-slate-600 dark:text-slate-400">
                            <p>Rugsat berilen synanşyk: 1, Synanşyldy: 0</p>
                            <p class="font-medium text-slate-700 dark:text-slate-300">Synaga başlamak üçin size paroly bilmek zerur</p>

                            <div class="relative max-w-xs mx-auto pt-2">
                                <input type="password" placeholder="Parol giriziň" class="w-full bg-slate-50 dark:bg-slate-700 border border-slate-300 dark:border-slate-600 rounded px-3 py-2 text-sm text-slate-800 dark:text-slate-100 focus:outline-none focus:ring-2 focus:ring-teal-400">
                                <button type="button" class="absolute right-3 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600 dark:hover:text-slate-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="text-center text-xs text-slate-500 dark:text-slate-400 space-y-3 pt-2">
                            <p>
                                Synag üçin wagt çäklendirilen we ol <span class="font-bold text-teal-500">30 min</span> deň. Siziň synanşygyňyzyň, baglanyş pursadyndan başlap yzyna hasap gider, we siz wagt gutarmanka synagy tamamlamaly. Siz şu wagt başlamakçymy?
                            </p>

                            <div class="flex items-center justify-center gap-3 pt-2">
                                <button type="submit" class="bg-teal-400 hover:bg-teal-500 text-white font-medium text-xs px-5 py-2.5 rounded transition-colors uppercase tracking-wider">
                                    Synaga başla
                                </button>
                                <button type="button" class="bg-slate-200 dark:bg-slate-700 hover:bg-slate-300 dark:hover:bg-slate-600 text-slate-700 dark:text-slate-200 font-medium text-xs px-5 py-2.5 rounded transition-colors uppercase tracking-wider">
                                    Bes etmek
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div> -->

        </main>

    </div>
</body>

</html>
