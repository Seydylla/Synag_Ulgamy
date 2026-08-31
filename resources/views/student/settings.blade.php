<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SU | Synag Ulgamy - Settings</title>

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

            <!-- Settings Header / Placeholder Box -->
            <div class="bg-white dark:bg-slate-800 rounded-lg p-6 shadow-sm border border-slate-200 dark:border-slate-700">
                <h5 class="text-lg font-bold text-slate-800 dark:text-slate-100 uppercase tracking-wide">
                    SAZLAMALAR SAHYPASY
                </h5>
            </div>

        </main>

    </div>

</body>

</html>
