<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js',
        'resources/js/sign-up-form.js',
    ])
    <title>SU | Login</title>
</head>

<body class="min-h-screen bg-slate-50 dark:bg-slate-900 flex items-center justify-center p-4 antialiased transition-colors duration-200">
    <p id="warning-notifer" class="text-red-500 dark:text-red-400 text-sm absolute top-4 left-4 m-0"></p>

    <div class="w-full max-w-4xl bg-white dark:bg-slate-800 rounded-2xl shadow-xl border border-slate-200/60 dark:border-slate-700/60 overflow-hidden grid grid-cols-1 md:grid-cols-2 transition-colors duration-200">
        <div class="p-8 md:p-12 flex flex-col justify-center items-start bg-slate-100/50 dark:bg-slate-800/50 border-b md:border-b-0 md:border-r border-slate-200 dark:border-slate-700" ondragstart="return false;">
            <div class="space-y-3">
                <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight text-teal-600 dark:text-teal-400 uppercase leading-tight">
                    Maintainer <br class="hidden md:inline">Big Coder:
                </h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base italic font-medium">
                    - We will have to learn or Develope.
                </p>
            </div>
        </div>

        <div class="p-8 md:p-12 flex flex-col justify-center">
            <div class="flex justify-center mb-8">
                <button type="button" onclick="Animatedtoggle()" class="px-8 py-2 bg-teal-100 dark:bg-teal-950/40 text-teal-700 dark:text-teal-300 font-semibold rounded-full hover:bg-teal-200 dark:hover:bg-teal-900/40 transition-colors">
                    Giriş
                </button>
            </div>

            <form action="" method="POST" class="space-y-5">
                @csrf
                <div class="relative flex items-center border-b-2 border-slate-200 dark:border-slate-700 focus-within:border-teal-500 dark:focus-within:border-teal-400 transition-colors pb-1">
                    <span class="text-slate-400 dark:text-slate-500 pr-3">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" name="username" placeholder="Ulanyjy ady" autocomplete="off" class="w-full py-2 bg-transparent text-slate-800 dark:text-slate-100 placeholder-slate-400 dark:placeholder-slate-500 focus:outline-none text-sm">
                </div>

                <div class="relative flex items-center border-b-2 border-slate-200 dark:border-slate-700 focus-within:border-teal-500 dark:focus-within:border-teal-400 transition-colors pb-1">
                    <span class="text-slate-400 dark:text-slate-500 pr-3">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" placeholder="Gizlin açar" class="w-full py-2 bg-transparent text-slate-800 dark:text-slate-100 placeholder-slate-400 dark:placeholder-slate-500 focus:outline-none text-sm">
                </div>

                <button type="submit" name="signin" class="w-full mt-4 py-3 bg-teal-500 dark:bg-teal-600 hover:bg-teal-600 dark:hover:bg-teal-500 text-white font-semibold rounded-xl shadow-md transition-all active:scale-[0.99]">
                    ULGAMA GIR
                </button>
            </form>
        </div>
    </div>
</body>

</html>
