<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SU | Synag Ulgamy - Test Netijeleri</title>

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

        <main class="flex-1 w-full space-y-4 md:space-y-5 overflow-x-hidden">

            <form action="" method="POST" class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm border border-slate-200/60 dark:border-slate-700/60 transition-colors duration-200">

                <!-- Title & Print Action -->
                <div class="flex items-center justify-between gap-4 pb-4 border-b border-slate-100 dark:border-slate-700/60">
                    <h2 class="text-xl md:text-2xl font-black text-slate-800 dark:text-white">
                        Test: <?= htmlspecialchars($quiz_details['title'] ?? '') ?>
                    </h2>
                    <a href="save_quiz_all_results.php?qid=<?= urlencode($_QUIZ_ID) ?>" class="p-2 rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors" title="Çap etmek">
                        <svg class="w-5 h-5 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4H7v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                        </svg>
                    </a>
                </div>

                <!-- Info Summary -->
                <div class="py-3 text-xs md:text-sm text-slate-500 dark:text-slate-400 font-medium border-b border-slate-100 dark:border-slate-700/60 mb-5">
                    Jemi synanşyklar: <span class="text-slate-800 dark:text-slate-200 font-bold"><?= $_NUM_OF_ATTEMPTS ?></span>,
                    Sanawda görkezilen: <span class="text-slate-800 dark:text-slate-200 font-bold"><?= count($opened_sessions) ?></span>
                </div>

                <!-- Filters Section -->
                <div class="space-y-4">
                    <span class="block text-xs font-bold uppercase tracking-wider text-slate-500 dark:text-slate-400">Synanşyklar</span>

                    <div class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-xl border border-slate-200/80 dark:border-slate-700/50 space-y-3">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3">
                            <label class="flex items-center space-x-2 text-xs font-semibold text-slate-700 dark:text-slate-300 cursor-pointer select-none">
                                <input type="checkbox" name="in-progress" class="w-4 h-4 rounded text-teal-600 focus:ring-teal-500 dark:bg-slate-800 dark:border-slate-700" <?= $check_in_progress ? 'checked' : '' ?>>
                                <span>PROSESDAKILER</span>
                            </label>

                            <label class="flex items-center space-x-2 text-xs font-semibold text-slate-700 dark:text-slate-300 cursor-pointer select-none">
                                <input type="checkbox" name="time-expired" class="w-4 h-4 rounded text-teal-600 focus:ring-teal-500 dark:bg-slate-800 dark:border-slate-700" <?= $check_time_expired ? 'checked' : '' ?>>
                                <span>WAGT-TAMAM</span>
                            </label>

                            <label class="flex items-center space-x-2 text-xs font-semibold text-slate-700 dark:text-slate-300 cursor-pointer select-none">
                                <input type="checkbox" name="finished" class="w-4 h-4 rounded text-teal-600 focus:ring-teal-500 dark:bg-slate-800 dark:border-slate-700" <?= $check_finished ? 'checked' : '' ?>>
                                <span>TABŞYRANLAR</span>
                            </label>

                            <label class="flex items-center space-x-2 text-xs font-semibold text-slate-700 dark:text-slate-300 cursor-pointer select-none">
                                <input type="checkbox" name="unsubmitted" class="w-4 h-4 rounded text-teal-600 focus:ring-teal-500 dark:bg-slate-800 dark:border-slate-700" <?= $check_unsubmitted ? 'checked' : '' ?>>
                                <span>IBERILMEDIKLER</span>
                            </label>
                        </div>

                        <div class="pt-2 border-t border-slate-200/60 dark:border-slate-700/60">
                            <label class="inline-flex items-center space-x-2 text-xs font-semibold text-slate-700 dark:text-slate-300 cursor-pointer select-none">
                                <input type="checkbox" name="only-attemp" class="w-4 h-4 rounded text-teal-600 focus:ring-teal-500 dark:bg-slate-800 dark:border-slate-700">
                                <span>Her ulanyjynyň bir synanşygyndan artyk synanşygyny görkezmeli däl <span class="text-teal-600 dark:text-teal-400 font-bold">(Ýokary baha)</span> görkezmeli</span>
                            </label>
                        </div>
                    </div>

                    <!-- Submit Action -->
                    <div class="flex justify-center pt-2">
                        <button type="submit" name="refresh" class="bg-teal-600 hover:bg-teal-700 text-white font-semibold text-xs px-6 py-2.5 rounded-lg transition-colors duration-200 shadow-sm">
                            Hasabaty Täzelemek
                        </button>
                    </div>
                </div>
            </form>

            <!-- Results Table Card -->
            <div class="bg-white dark:bg-slate-800 rounded-2xl p-6 shadow-sm border border-slate-200/60 dark:border-slate-700/60 transition-colors duration-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-xs border-collapse">
                        <thead>
                            <tr class="bg-slate-100 dark:bg-slate-700/50 text-slate-800 dark:text-slate-200 font-bold border-b border-slate-200 dark:border-slate-700">
                                <th class="p-3 text-center"><input type="checkbox" class="w-4 h-4 rounded text-teal-600 focus:ring-teal-500 dark:bg-slate-800 dark:border-slate-700"></th>
                                <th class="p-3">Suraty</th>
                                <th class="p-3">Ady, familiýasy, atasynyň ady</th>
                                <th class="p-3">Topary</th>
                                <th class="p-3">Ýagdaýy</th>
                                <th class="p-3">Testi başlan wagty</th>
                                <th class="p-3">Testi tamamlan wagty</th>
                                <th class="p-3">Sarp edilen wagty</th>
                                <th class="p-3 text-center">Baly</th>
                                <th class="p-3 text-center">Baha</th>
                                <th class="p-3 text-center">Çap etmek</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 dark:divide-slate-700/50 text-slate-700 dark:text-slate-300">
                            <?php foreach ($opened_sessions as $session): ?>
                                <tr class="hover:bg-slate-50/50 dark:hover:bg-slate-700/30 transition-colors">
                                    <td class="p-3 text-center">
                                        <input type="checkbox" class="w-4 h-4 rounded text-teal-600 focus:ring-teal-500 dark:bg-slate-800 dark:border-slate-700">
                                    </td>
                                    <td class="p-3">
                                        <img src="../../img/avatars/<?= htmlspecialchars($session['avatar']) ?>" class="w-10 h-10 rounded-full object-cover border border-slate-200 dark:border-slate-700" alt="Avatar">
                                    </td>
                                    <td class="p-3 font-medium text-slate-800 dark:text-slate-200">
                                        <a href="test_result.php?sid=<?= urlencode($session['id']) ?>&qid=<?= urlencode($session['quiz_id']) ?>&uid=<?= urlencode($session['user_id']) ?>" class="hover:text-teal-600 dark:hover:text-teal-400 transition-colors">
                                            <?= htmlspecialchars($session['firstname'] . ' ' . $session['lastname'] . ' ' . $session['patrioticname']) ?>
                                        </a>
                                    </td>
                                    <td class="p-3 font-semibold text-slate-600 dark:text-slate-400">SE</td>
                                    <td class="p-3">
                                        <span class="inline-block px-2 py-1 rounded text-[10px] font-bold bg-slate-100 dark:bg-slate-700 text-slate-700 dark:text-slate-300">
                                            <?= htmlspecialchars($session['status']) ?>
                                        </span>
                                    </td>
                                    <td class="p-3 text-slate-500 whitespace-nowrap"><?= htmlspecialchars($session['started_at']) ?></td>
                                    <td class="p-3 text-slate-500 whitespace-nowrap"><?= htmlspecialchars($session['finished_at']) ?></td>
                                    <td class="p-3 text-slate-500 whitespace-nowrap">
                                        <?php
                                            $spent_time = strtotime($session['finished_at']) - strtotime($session['started_at']);
                                            echo ((int)($spent_time / 60) . ' minut ' . ($spent_time % 60) . ' sekunt');
                                        ?>
                                    </td>
                                    <td class="p-3 text-center font-bold text-slate-800 dark:text-slate-200">
                                        <?php
                                            $ssid = $session['id'];
                                            $uid = $session['user_id'];
                                            $sql = "SELECT COUNT(id) AS sum FROM su_submitted_answers WHERE session_id = '$ssid' AND user_id = '$uid' AND variant_id IN (SELECT id FROM su_question_variants WHERE correctness = 1)";
                                            $sql_result = mysqli_query($db_connection, $sql);
                                            $number_of_submitted_correct_variants = mysqli_fetch_assoc($sql_result)['sum'];

                                            $final_percentage = ($number_of_correct_variants != 0) ? $number_of_submitted_correct_variants * 100 / $number_of_correct_variants : 0;
                                            echo round($final_percentage) . '%';
                                        ?>
                                    </td>
                                    <td class="p-3 text-center font-black">
                                        <?php
                                            if ($final_percentage < 50) {
                                                echo '<span class="text-rose-500">2 (iki)</span>';
                                            } else if ($final_percentage < 70) {
                                                echo '<span class="text-amber-500">3 (üç)</span>';
                                            } else if ($final_percentage < 85) {
                                                echo '<span class="text-blue-500">4 (dört)</span>';
                                            } else {
                                                echo '<span class="text-emerald-500">5 (bäş)</span>';
                                            }
                                        ?>
                                    </td>
                                    <td class="p-3 text-center">
                                        <a href="save_quiz_results.php?ssid=<?= urlencode($ssid) ?>" class="inline-block p-1.5 rounded hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">
                                            <svg class="w-4 h-4 text-slate-600 dark:text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4H7v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-100 dark:border-slate-700/60 text-center text-xs text-slate-400">
                © Best and best
            </div>

        </main>
    </div>


</body>

</html>
