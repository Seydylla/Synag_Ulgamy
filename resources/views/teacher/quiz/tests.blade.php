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

    <div class="max-w-[1600px] mx-auto flex p-2 sm:p-3 md:p-4 gap-3 md:gap-4">

        @include('partials.aside-teacher')

        <main class="flex-1 w-full space-y-4 md:space-y-5">

            <!-- Top Action Bar -->
            <div class="flex justify-end w-full">
                <a href="add_test.html" class="px-5 py-2 border border-teal-500 text-teal-600 dark:text-teal-400 hover:bg-teal-500 hover:text-white rounded uppercase text-sm font-semibold transition-colors duration-200 tracking-wide">
                    Synag goş
                </a>
            </div>

            <!-- Test Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4 md:gap-5">

                <!-- Card 1: SAMSYK -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm border border-slate-200/60 dark:border-slate-700/60 relative overflow-hidden flex flex-col justify-center items-center text-center min-h-[220px] transition-colors duration-200 group">

                    <!-- Decorative Background Element (Right side pattern) -->
                    <div class="absolute -right-16 top-1/2 -translate-y-1/2 opacity-10 dark:opacity-5 pointer-events-none text-slate-900 dark:text-white">
                        <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="4 4" />
                            <path d="M50 10 L60 40 L90 50 L60 60 L50 90 L40 60 L10 50 L40 40 Z" opacity="0.5"/>
                            <circle cx="50" cy="50" r="20" stroke="currentColor" stroke-width="4" fill="none"/>
                        </svg>
                    </div>

                    <!-- Top Right Action Buttons -->
                    <div class="absolute top-4 right-4 flex gap-1.5 z-10">
                        <a href="edit_quiz.html" class="w-7 h-7 bg-slate-800 dark:bg-slate-700 text-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity shadow-sm" title="Edit Questions">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </a>
                        <a href="result_test.html" class="w-7 h-7 bg-teal-500 text-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity shadow-sm" title="Results">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                        </a>
                        <button type="button" class="w-7 h-7 bg-rose-500 text-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity shadow-sm" title="Delete Quiz" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="z-10 mt-2">
                        <h3 class="text-xl font-black text-slate-800 dark:text-white uppercase mb-1 tracking-wider">SAMSYK</h3>
                        <p class="text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-widest mb-4">ADMIN USER</p>

                        <div class="flex items-center justify-center gap-3 text-sm font-semibold text-slate-700 dark:text-slate-300">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                <span>5 sorag</span>
                            </div>
                            <span class="w-px h-5 bg-slate-300 dark:bg-slate-600"></span>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>999 min</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Decoration Icons -->
                    <div class="absolute bottom-4 flex justify-center gap-2 opacity-30 dark:opacity-20 pointer-events-none z-10 text-slate-800 dark:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10L12 2zm0 14.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10L12 2zm0 14.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10L12 2zm0 14.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10L12 2zm0 14.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                    </div>
                </div>

                <!-- Card 2: SAFDASDFAS -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm border border-slate-200/60 dark:border-slate-700/60 relative overflow-hidden flex flex-col justify-center items-center text-center min-h-[220px] transition-colors duration-200 group">

                    <!-- Decorative Background Element -->
                    <div class="absolute -right-16 top-1/2 -translate-y-1/2 opacity-10 dark:opacity-5 pointer-events-none text-slate-900 dark:text-white">
                        <svg class="w-64 h-64" fill="currentColor" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="40" stroke="currentColor" stroke-width="2" fill="none" stroke-dasharray="4 4" />
                            <path d="M50 10 L60 40 L90 50 L60 60 L50 90 L40 60 L10 50 L40 40 Z" opacity="0.5"/>
                            <circle cx="50" cy="50" r="20" stroke="currentColor" stroke-width="4" fill="none"/>
                        </svg>
                    </div>

                    <!-- Top Right Action Buttons -->
                    <div class="absolute top-4 right-4 flex gap-1.5 z-10">
                        <a href="edit_quiz.html" class="w-7 h-7 bg-slate-800 dark:bg-slate-700 text-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity shadow-sm" title="Edit Questions">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </a>
                        <a href="result_test.html" class="w-7 h-7 bg-teal-500 text-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity shadow-sm" title="Results">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7 12l3-3 3 3 4-4M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z"></path></svg>
                        </a>
                        <button type="button" class="w-7 h-7 bg-rose-500 text-white rounded-full flex items-center justify-center hover:opacity-80 transition-opacity shadow-sm" title="Delete Quiz" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>

                    <!-- Content -->
                    <div class="z-10 mt-2">
                        <h3 class="text-xl font-black text-slate-800 dark:text-white uppercase mb-1 tracking-wider">SAFDASDFAS</h3>
                        <p class="text-xs font-bold text-slate-600 dark:text-slate-400 uppercase tracking-widest mb-4">ADMIN USER</p>

                        <div class="flex items-center justify-center gap-3 text-sm font-semibold text-slate-700 dark:text-slate-300">
                            <div class="flex items-center gap-1.5">
                                <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path></svg>
                                <span>6 sorag</span>
                            </div>
                            <span class="w-px h-5 bg-slate-300 dark:bg-slate-600"></span>
                            <div class="flex items-center gap-1.5">
                                <svg class="w-5 h-5 text-slate-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span>10000 min</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bottom Decoration Icons -->
                    <div class="absolute bottom-4 flex justify-center gap-2 opacity-30 dark:opacity-20 pointer-events-none z-10 text-slate-800 dark:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10L12 2zm0 14.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10L12 2zm0 14.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10L12 2zm0 14.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L2 12l10 10 10-10L12 2zm0 14.5a2.5 2.5 0 110-5 2.5 2.5 0 010 5z"/></svg>
                    </div>
                </div>

            </div>
        </main>
    </div>

    <!-- Recreated Tailwind Modal for Deletion -->
    <div id="deleteModal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-slate-900/50 backdrop-blur-sm transition-opacity">
        <div class="bg-white dark:bg-slate-800 rounded-2xl w-full max-w-md mx-4 shadow-xl border border-slate-200 dark:border-slate-700 transform transition-all">
            <div class="flex items-center justify-between p-4 border-b border-slate-200 dark:border-slate-700">
                <h5 class="text-lg font-bold text-slate-800 dark:text-white">Duýduryş!</h5>
                <button type="button" class="text-slate-400 hover:text-slate-600 dark:hover:text-slate-300 transition-colors" onclick="document.getElementById('deleteModal').classList.add('hidden')">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>
            <div class="p-6 flex justify-center text-center">
                <label class="text-slate-700 dark:text-slate-300 font-medium text-lg">Siz hakykatdanam bu synagy<br>pozmakçymy?</label>
            </div>
            <div class="p-4 border-t border-slate-200 dark:border-slate-700 flex justify-center gap-4">
                <button type="button" class="px-5 py-2.5 bg-slate-200 dark:bg-slate-700 text-slate-800 dark:text-slate-200 font-semibold rounded-lg hover:bg-slate-300 dark:hover:bg-slate-600 transition-colors uppercase text-sm" onclick="document.getElementById('deleteModal').classList.add('hidden')">
                    Bes etmek
                </button>
                <form action="operations/remove_quiz.php" method="POST" class="m-0">
                    <input type="hidden" name="qid" value="REPLACE_WITH_ID">
                    <button type="submit" class="px-5 py-2.5 bg-rose-500 text-white font-semibold rounded-lg hover:bg-rose-600 transition-colors uppercase text-sm">
                        Synagy Öçür
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
