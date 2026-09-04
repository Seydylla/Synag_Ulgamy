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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-slate-100 dark:bg-slate-900 font-sans text-slate-800 dark:text-slate-100 antialiased h-screen flex flex-col transition-colors duration-200 overflow-hidden">

    @include('partials.nav')
    <div class="max-w-[1600px] w-full mx-auto flex-1 grid grid-cols-[auto_1fr] p-4 gap-4 overflow-hidden">

        @include('partials.aside-teacher')

        <main class="w-full h-full overflow-y-auto no-scrollbar min-w-0">
            <div class="bg-slate-800/60 rounded-xl border border-slate-700/50 shadow-xl overflow-hidden text-slate-200">
                <div class="border-b border-slate-700/50 px-6 py-3 bg-slate-800/40">
                    <h2 class="text-xl font-semibold text-slate-100">Täze synag goşmak</h2>
                </div>

                <form id="form-quiz-settings" action="/teacher/tests" enctype="multipart/form-data" method="POST" class="p-5">
                    @csrf
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-1">
                                    Dersiň ady <span class="text-rose-500">*</span>
                                </label>
                                <select name="lesson" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-teal-500">
                                    @foreach($lessons as $lesson)
                                        <option value="{{ $lesson->id }}">{{ $lesson->title }}</option>
                                    @endforeach
                                </select>
                                <p class="text-xs text-slate-400 mt-1">Egerde okadýan dersiňiz bolmadyk ýagdaýynda Administratora ýüz tutyň!</p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-1">
                                    Testiň ady <span class="text-rose-500">*</span>
                                </label>
                                <input type="text" name="title" required class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-teal-500">
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-300 mb-1">
                                        Synagyň gizlin açary <span class="text-rose-500">*</span>
                                    </label>
                                    <input type="password" name="password" required class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-teal-500">
                                    <p class="text-xs text-slate-400 mt-1">Parolyňyzyň uzynlygy 8-20 simwoldan ybarat bolmaly.</p>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-slate-300 mb-1">Elýeterlilik</label>
                                    <select name="availability" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-teal-500">
                                        <option value="1" selected>Talyplara görkezmek</option>
                                        <option value="0">Talyplardan gizlenen</option>
                                    </select>
                                </div>
                            </div>

                            <div x-data="{ enabled: false }">
                                <label class="inline-flex items-center gap-2 cursor-pointer mb-1.5">
                                    <input type="checkbox" name="test-start-time" value="start-time-setted" x-model="enabled" class="sr-only peer">
                                    <div class="w-9 h-5 bg-slate-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-teal-500 relative"></div>
                                    <span class="text-sm font-medium text-slate-300">Synagyň başlamaly wagty</span>
                                </label>
                                <div class="grid grid-cols-2 gap-4">
                                    <input type="date" name="start-date" :disabled="!enabled" class="bg-slate-900 border border-slate-700 rounded-lg px-3 py-1.5 text-sm text-slate-200 disabled:opacity-40 disabled:cursor-not-allowed">
                                    <input type="time" name="start-time" :disabled="!enabled" class="bg-slate-900 border border-slate-700 rounded-lg px-3 py-1.5 text-sm text-slate-200 disabled:opacity-40 disabled:cursor-not-allowed">
                                </div>
                            </div>

                            <div x-data="{ enabled: false }">
                                <label class="inline-flex items-center gap-2 cursor-pointer mb-1.5">
                                    <input type="checkbox" name="test-end-time" value="end-time-setted" x-model="enabled" class="sr-only peer">
                                    <div class="w-9 h-5 bg-slate-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-teal-500 relative"></div>
                                    <span class="text-sm font-medium text-slate-300">Synagyň tamamlanmaly wagty</span>
                                </label>
                                <div class="grid grid-cols-2 gap-4">
                                    <input type="date" name="end-date" :disabled="!enabled" class="bg-slate-900 border border-slate-700 rounded-lg px-3 py-1.5 text-sm text-slate-200 disabled:opacity-40 disabled:cursor-not-allowed">
                                    <input type="time" name="end-time" :disabled="!enabled" class="bg-slate-900 border border-slate-700 rounded-lg px-3 py-1.5 text-sm text-slate-200 disabled:opacity-40 disabled:cursor-not-allowed">
                                </div>
                            </div>

                            <div x-data="{ enabled: true }">
                                <label class="inline-flex items-center gap-2 cursor-pointer mb-1.5">
                                    <input type="checkbox" name="test-duration-switch" value="test-duration-setted" x-model="enabled" class="sr-only peer">
                                    <div class="w-9 h-5 bg-slate-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-teal-500 relative"></div>
                                    <span class="text-sm font-medium text-slate-300">Synagyň dowamlylygy (minut)</span>
                                </label>
                                <input type="number" name="duration-time" min="1" value="30" :disabled="!enabled" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-1.5 text-sm text-slate-200 disabled:opacity-40">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-1">Baha haýsy aýa degişli</label>
                                <select name="grade-month" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-teal-500">
                                    <option value="Jan">Ýanwar</option>
                                    <option value="Feb">Fewral</option>
                                    <option value="Mar">Mart</option>
                                    <option value="Apr">Aprel</option>
                                    <option value="May">Maý</option>
                                    <option value="Jun">Iýun</option>
                                    <option value="Jul">Iýul</option>
                                    <option value="Aug">Awgust</option>
                                    <option value="Sep">Sentýabr</option>
                                    <option value="Oct">Oktýabr</option>
                                    <option value="Nov">Noýabr</option>
                                    <option value="Dec">Dekabr</option>
                                </select>
                            </div>

                            <div class="grid grid-cols-3 gap-3">
                                <div>
                                    <label class="block text-xs font-medium text-slate-300 mb-1">Synanşyk sany</label>
                                    <select name="try-number" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-2 py-1.5 text-sm text-slate-200">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-300 mb-1">Soraglar tötänleýin</label>
                                    <select name="question-shuffle" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-2 py-1.5 text-sm text-slate-200">
                                        <option value="1" selected>Hawa</option>
                                        <option value="0">Ýok</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-xs font-medium text-slate-300 mb-1">Jogaplar tötänleýin</label>
                                    <select name="choices-shuffle" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-2 py-1.5 text-sm text-slate-200">
                                        <option value="1" selected>Hawa</option>
                                        <option value="0">Ýok</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-1">Jogaplamaň görnüşleri</label>
                                <select name="answer-type" class="w-full bg-slate-900 border border-slate-700 rounded-lg px-3 py-2 text-sm text-slate-200 focus:outline-none focus:border-teal-500">
                                    <option value="1" selected>Açyk synanşyk</option>
                                    <option value="2">Soraglary bir synanşykda jogaplamak</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-slate-300 mb-1">Netijäni görkezmek</label>
                                <div class="bg-slate-900/70 border border-slate-700/60 rounded-xl p-3 grid grid-cols-3 gap-3 text-xs">
                                    <div class="space-y-1.5">
                                        <p class="font-semibold text-slate-200 mb-1">Synanşyk wagtynda</p>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="before-grade" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Baha
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="before-points" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Ballar
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="before-answer-true" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Jogap dogrymy
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="before-true-answer" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Dogry jogap
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="before-answer-history" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Jogap taryhy
                                        </label>
                                    </div>

                                    <div class="space-y-1.5">
                                        <p class="font-semibold text-slate-200 mb-1">Synanşykdan soň</p>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="after-grade" checked class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Baha
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="after-points" checked class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Ballar
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="after-answer-true" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Jogap dogrymy
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="after-true-answer" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Dogry jogap
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="after-answer-history" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Jogap taryhy
                                        </label>
                                    </div>

                                    <div class="space-y-1.5">
                                        <p class="font-semibold text-slate-200 mb-1">Synag tamamlanandan soň</p>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="later-grade" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Baha
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="later-points" checked class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Ballar
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="later-answer-true" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Jogap dogrymy
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="later-true-answer" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Dogry jogap
                                        </label>
                                        <label class="flex items-center gap-2 text-slate-400">
                                            <input type="checkbox" name="later-answer-history" class="rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0"> Jogap taryhy
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-slate-300 mb-1">Toparlar</label>
                                    <div class="bg-slate-900 border border-slate-700 rounded-xl p-3 h-44 overflow-y-auto space-y-3 text-xs no-scrollbar">
                                        <div>
                                            <label class="flex items-center gap-2 text-teal-400 font-medium">
                                                <input type="checkbox" name="linked-years[]" value="2024" class="dependency-box rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0">
                                                1-nji Kurs
                                            </label>
                                            <div class="ml-4 mt-1 space-y-1">
                                                <label class="flex items-center gap-2 text-slate-400 hover:text-slate-200">
                                                    <input type="checkbox" name="linked-groups[]" value="1,1,1,1,2024" class="dependency-box rounded bg-slate-800 border-slate-700 text-teal-500 focus:ring-0">
                                                    <span>TETI / IT / PM / Programma üpjünçiligi</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div x-data="{ fileName: null, isDragging: false }">
                                    <label class="block text-sm font-medium text-slate-300 mb-1">Sorag faýly</label>
                                    <div
                                        @dragover.prevent="isDragging = true"
                                        @dragleave.prevent="isDragging = false"
                                        @drop.prevent="isDragging = false; $refs.fileInput.files = $event.dataTransfer.files; fileName = $refs.fileInput.files[0].name"
                                        :class="isDragging ? 'border-teal-500 bg-teal-500/10' : 'border-slate-700 bg-slate-900/50'"
                                        class="border-2 border-dashed rounded-xl h-44 flex flex-col justify-center items-center p-3 transition-colors relative text-center"
                                    >
                                        <input
                                            x-ref="fileInput"
                                            type="file"
                                            name="import-file"
                                            accept=".xlsx, .xls"
                                            required
                                            @change="fileName = $event.target.files[0]?.name"
                                            class="absolute inset-0 w-full h-full opacity-0 cursor-pointer"
                                        >
                                        <svg class="w-8 h-8 text-teal-400 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/>
                                        </svg>
                                        <p x-text="fileName || 'DRAG & DROP'" class="text-xs font-semibold text-slate-200 uppercase tracking-wide"></p>
                                        <p x-show="!fileName" class="text-[10px] text-slate-400 mt-0.5">ýükle ýa-da şu ýere goý</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex justify-end gap-3 pt-3 border-t border-slate-700/50">
                                <button type="button" class="px-5 py-2 rounded-lg border border-rose-500/40 text-rose-400 hover:bg-rose-500/10 transition text-xs font-medium uppercase tracking-wider">
                                    Bes etmek
                                </button>
                                <button type="submit" class="px-5 py-2 rounded-lg border border-teal-500 text-teal-400 hover:bg-teal-500/10 transition text-xs font-medium uppercase tracking-wider">
                                    Ýatda saklamak
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>
