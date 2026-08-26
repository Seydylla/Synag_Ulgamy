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

<body class="min-h-screen bg-slate-50 flex items-center justify-center p-4 antialiased">
    <p id="warning-notifer" class="text-red-500 text-sm absolute top-4 left-4 m-0"></p>

    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-xl overflow-hidden grid grid-cols-1 md:grid-cols-2">
        <div class="p-8 md:p-12 flex flex-col justify-center items-start bg-slate-100/50 border-b md:border-b-0 md:border-r border-slate-200" ondragstart="return false;">
            <div class="space-y-3">
                <h2 class="text-2xl md:text-3xl font-extrabold tracking-tight text-teal-600 uppercase leading-tight">
                    Maintainer <br class="hidden md:inline">Big Coder:
                </h2>
                <p class="text-slate-600 text-sm md:text-base italic font-medium">
                    - We will have to learn or Develope.
                </p>
            </div>
        </div>

        <div class="p-8 md:p-12 flex flex-col justify-center">
            <div class="flex justify-center mb-8">
                <button type="button" onclick="Animatedtoggle()" class="px-8 py-2 bg-teal-100 text-teal-700 font-semibold rounded-full hover:bg-teal-200 transition-colors">
                    Giriş
                </button>
            </div>

            <form action="" method="POST" class="space-y-5">
                @csrf
                <div class="relative flex items-center border-b-2 border-slate-200 focus-within:border-teal-500 transition-colors pb-1">
                    <span class="text-slate-400 pr-3">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" name="username" placeholder="Ulanyjy ady" autocomplete="off" class="w-full py-2 bg-transparent text-slate-800 placeholder-slate-400 focus:outline-none text-sm">
                </div>

                <div class="relative flex items-center border-b-2 border-slate-200 focus-within:border-teal-500 transition-colors pb-1">
                    <span class="text-slate-400 pr-3">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" name="password" placeholder="Gizlin açar" class="w-full py-2 bg-transparent text-slate-800 placeholder-slate-400 focus:outline-none text-sm">
                </div>

                <button type="submit" name="signin" class="w-full mt-4 py-3 bg-teal-500 hover:bg-teal-600 text-white font-semibold rounded-xl shadow-md transition-all active:scale-[0.99]">
                    ULGAMA GIR
                </button>
            </form>
        </div>
    </div>
</body>

</html>
