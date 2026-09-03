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
