<!-- Top Navigation Bar -->
<header class="w-full bg-white dark:bg-slate-800 border-b border-slate-200/80 dark:border-slate-700/80 px-3 md:px-5 py-2.5 sticky top-0 z-30 shadow-sm transition-colors duration-200">
    <div class="max-w-[1600px] mx-auto flex items-center justify-between">
        <div class="flex items-center gap-3 md:gap-4">
            <!-- Mobile Menu Toggle Button (Visible on mobile, hidden on md and up) -->
            <button type="button" onclick="toggleMobileMenu()" class="text-slate-700 dark:text-slate-200 hover:text-slate-900 dark:hover:text-white focus:outline-none md:hidden p-1">
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

<!-- Mobile Navigation Overlay & Sidebar Drawer (Hidden on md and larger) -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-slate-900/50 backdrop-blur-sm z-40 hidden md:hidden transition-opacity" onclick="toggleMobileMenu()"></div>

<div id="mobile-sidebar" class="fixed top-0 left-0 w-64 h-full bg-white dark:bg-slate-800 z-50 transform -translate-x-full transition-transform duration-300 ease-in-out md:hidden flex flex-col justify-between p-5 border-r border-slate-200 dark:border-slate-700">
    <div>
        <!-- Mobile Sidebar Header -->
        <div class="flex items-center justify-between mb-8 pb-4 border-b border-slate-200 dark:border-slate-700">
            <div class="flex items-center gap-2">
                <div class="font-extrabold text-2xl tracking-wider text-teal-500 dark:text-teal-400">SU</div>
                <span class="text-sm font-bold text-slate-600 dark:text-slate-300">Synag Ulgamy</span>
            </div>
            <button type="button" onclick="toggleMobileMenu()" class="text-slate-400 hover:text-slate-600 dark:hover:text-white">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation Links -->
        <nav class="space-y-2">
            <a href="dashboard.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-teal-50 dark:bg-teal-950/40 text-teal-600 dark:text-teal-400 font-semibold">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                </svg>
                Dashboard
            </a>
            <a href="tests.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700/50 font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                Tests
            </a>
            <a href="online_test.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700/50 font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                </svg>
                Online Test
            </a>
            <a href="settings.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-slate-700 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700/50 font-medium">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Settings
            </a>
        </nav>
    </div>

    <!-- Mobile Sign Out -->
    <a href="../../signout.html" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-red-600 dark:text-red-400 hover:bg-red-50 dark:hover:bg-red-950/30 font-semibold">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        Sign Out
    </a>
</div>

<script>
    function toggleMobileMenu() {
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('mobile-menu-overlay');

        const isOpen = !sidebar.classList.contains('-translate-x-full');

        if (isOpen) {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        } else {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }
    }
</script>
