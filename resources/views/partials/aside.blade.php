<aside class="hidden md:flex flex-col justify-between w-16 bg-white dark:bg-slate-800 rounded-2xl shadow-sm border border-slate-200/60 dark:border-slate-700/60 py-5 items-center shrink-0 h-[calc(100vh-6rem)] sticky top-16 transition-colors duration-200">
    <div class="flex flex-col items-center gap-6 w-full">

        <nav class="flex flex-col gap-5 items-center w-full">
            <div class="w-full relative group flex justify-center">
                <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-teal-500 rounded-r-full {{ request()->is('student/dashboard*') ? 'opacity-100' : 'opacity-0 group-hover:opacity-100' }} transition-opacity duration-200"></div>
                <a href="/student/dashboard"
                   class="{{ request()->is('student/dashboard*') ? 'text-teal-500 dark:text-teal-400 bg-teal-50 dark:bg-teal-950/30' : 'text-slate-700 dark:text-slate-300 hover:text-teal-500 dark:hover:text-teal-400 hover:bg-slate-50 dark:hover:bg-slate-700/50' }} p-2 rounded-xl transition-colors"
                   title="Dashboard">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                    </svg>
                </a>
            </div>

            <div class="w-full relative group flex justify-center">
                <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-teal-500 rounded-r-full {{ request()->is('student/tests*') ? 'opacity-100' : 'opacity-0 group-hover:opacity-100' }} transition-opacity duration-200"></div>
                <a href="/student/tests"
                   class="{{ request()->is('student/tests*') ? 'text-teal-500 dark:text-teal-400 bg-teal-50 dark:bg-teal-950/30' : 'text-slate-700 dark:text-slate-300 hover:text-teal-500 dark:hover:text-teal-400 hover:bg-slate-50 dark:hover:bg-slate-700/50' }} p-2 rounded-xl transition-colors"
                   title="Tests">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </a>
            </div>

            <div class="w-full relative group flex justify-center">
                <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-teal-500 rounded-r-full {{ request()->is('student/online-test*') ? 'opacity-100' : 'opacity-0 group-hover:opacity-100' }} transition-opacity duration-200"></div>
                <a href="/student/online-test"
                   class="{{ request()->is('student/online-test*') ? 'text-teal-500 dark:text-teal-400 bg-teal-50 dark:bg-teal-950/30' : 'text-slate-700 dark:text-slate-300 hover:text-teal-500 dark:hover:text-teal-400 hover:bg-slate-50 dark:hover:bg-slate-700/50' }} p-2 rounded-xl transition-colors"
                   title="Online Test">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                    </svg>
                </a>
            </div>

            <div class="w-full relative group flex justify-center">
                <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-teal-500 rounded-r-full {{ request()->is('student/settings*') ? 'opacity-100' : 'opacity-0 group-hover:opacity-100' }} transition-opacity duration-200"></div>
                <a href="/student/settings"
                   class="{{ request()->is('student/settings*') ? 'text-teal-500 dark:text-teal-400 bg-teal-50 dark:bg-teal-950/30' : 'text-slate-700 dark:text-slate-300 hover:text-teal-500 dark:hover:text-teal-400 hover:bg-slate-50 dark:hover:bg-slate-700/50' }} p-2 rounded-xl transition-colors"
                   title="Settings">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </a>
            </div>
        </nav>
    </div>

    <div class="w-full relative group flex justify-center">
        <div class="absolute left-0 top-1/2 -translate-y-1/2 w-1 h-6 bg-red-500 rounded-r-full opacity-0 group-hover:opacity-100 transition-opacity duration-200"></div>

        <a href="/signout" class="p-2 rounded-xl text-slate-700 dark:text-slate-300 hover:text-red-500 dark:hover:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/30 transition-colors" title="Sign Out">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </a>
    </div>
</aside>
