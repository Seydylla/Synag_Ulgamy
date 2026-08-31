<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SU | Synag Ulgamy - Gatnaşyk Žurnaly</title>

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

            <!-- Attendance Journal Form Card -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm border border-slate-200/60 dark:border-slate-700/60 transition-colors duration-200">

                <!-- Title & Top Action -->
                <div class="flex flex-wrap items-center justify-between gap-4 mb-6">
                    <h2 class="text-2xl font-black text-slate-800 dark:text-white">Gatnaşyk žurnaly</h2>
                    <a href="saved_attendance.html" class="px-4 py-1.5 border border-amber-400 text-amber-500 rounded-lg text-xs font-bold hover:bg-amber-400 hover:text-white transition-colors duration-200">
                        Ýatda saklanan gatnaşyklar
                    </a>
                </div>

                <form action="save_attendance.php" method="POST" class="space-y-5">
                    <!-- Date Input -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 dark:text-slate-400 mb-1.5">Sene:</label>
                        <div class="relative max-w-xl">
                            <input type="date" name="attendance_date" value="2026-09-01" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-100 text-sm rounded-lg px-3 py-2 focus:outline-none focus:border-teal-500">
                        </div>
                    </div>

                    <!-- Subject Dropdown -->
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 dark:text-slate-400 mb-1.5">Sapak:</label>
                        <div class="max-w-xl">
                            <select name="subject_id" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-500 dark:text-slate-400 text-sm rounded-lg px-3 py-2 focus:outline-none focus:border-teal-500">
                                <option value="">-- Sapak saýlaň --</option>
                            </select>
                        </div>
                    </div>

                    <!-- Attendance Table -->
                    <div class="overflow-x-auto pt-2">
                        <table class="w-full text-left text-sm border-collapse">
                            <thead>
                                <tr class="bg-slate-100 dark:bg-slate-700/50 text-slate-800 dark:text-slate-200 font-bold border-b border-slate-200 dark:border-slate-700">
                                    <th class="py-3 px-4 w-1/4">Harby talyp</th>
                                    <th class="py-3 px-4 w-1/4">Status</th>
                                    <th class="py-3 px-4 w-1/4">Baha</th>
                                    <th class="py-3 px-4 w-1/4">Sebäp</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 dark:divide-slate-700/50 text-slate-700 dark:text-slate-300">

                                <!-- Student Row 1 -->
                                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
                                    <td class="py-3 px-4 font-semibold text-slate-700 dark:text-slate-200">Admin User</td>
                                    <td class="py-3 px-4">
                                        <select name="status[]" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500">
                                            <option value="present">Sapaga gatnaşdy</option>
                                            <option value="absent">Sapaga gatnaşmady</option>
                                        </select>
                                    </td>
                                    <td class="py-3 px-4">
                                        <input type="text" name="grade[]" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500">
                                    </td>
                                    <td class="py-3 px-4">
                                        <input type="text" name="reason[]" placeholder="Sebäbi" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-400 dark:text-slate-400 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500 placeholder-slate-400">
                                    </td>
                                </tr>

                                <!-- Student Row 2 -->
                                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
                                    <td class="py-3 px-4 font-semibold text-slate-700 dark:text-slate-200">Jemal Esenowa</td>
                                    <td class="py-3 px-4">
                                        <select name="status[]" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500">
                                            <option value="present">Sapaga gatnaşdy</option>
                                            <option value="absent">Sapaga gatnaşmady</option>
                                        </select>
                                    </td>
                                    <td class="py-3 px-4">
                                        <input type="text" name="grade[]" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500">
                                    </td>
                                    <td class="py-3 px-4">
                                        <input type="text" name="reason[]" placeholder="Sebäbi" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-400 dark:text-slate-400 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500 placeholder-slate-400">
                                    </td>
                                </tr>

                                <!-- Student Row 3 -->
                                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
                                    <td class="py-3 px-4 font-semibold text-slate-700 dark:text-slate-200">Admin User</td>
                                    <td class="py-3 px-4">
                                        <select name="status[]" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500">
                                            <option value="present">Sapaga gatnaşdy</option>
                                            <option value="absent">Sapaga gatnaşmady</option>
                                        </select>
                                    </td>
                                    <td class="py-3 px-4">
                                        <input type="text" name="grade[]" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500">
                                    </td>
                                    <td class="py-3 px-4">
                                        <input type="text" name="reason[]" placeholder="Sebäbi" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-400 dark:text-slate-400 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500 placeholder-slate-400">
                                    </td>
                                </tr>

                                <!-- Student Row 4 -->
                                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
                                    <td class="py-3 px-4 font-semibold text-slate-700 dark:text-slate-200">Talyp Talybow</td>
                                    <td class="py-3 px-4">
                                        <select name="status[]" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500">
                                            <option value="present">Sapaga gatnaşdy</option>
                                            <option value="absent">Sapaga gatnaşmady</option>
                                        </select>
                                    </td>
                                    <td class="py-3 px-4">
                                        <input type="text" name="grade[]" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-800 dark:text-slate-200 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500">
                                    </td>
                                    <td class="py-3 px-4">
                                        <input type="text" name="reason[]" placeholder="Sebäbi" class="w-full bg-slate-50 dark:bg-slate-900/50 border border-slate-300 dark:border-slate-700 text-slate-400 dark:text-slate-400 text-sm rounded-lg px-3 py-1.5 focus:outline-none focus:border-teal-500 placeholder-slate-400">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button type="submit" class="bg-emerald-600 hover:bg-emerald-700 text-white font-semibold text-sm px-5 py-2.5 rounded-lg transition-colors duration-200 shadow-sm">
                            Gatnaşygy ýatda sakla
                        </button>
                    </div>

                </form>

            </div>

        </main>
    </div>

</body>

</html>
