<!DOCTYPE html>
<html lang="tk">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SU | Ýatda sakla PDF</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
</head>

<body id="printable-field" class="bg-white font-serif text-slate-900 p-8 antialiased">

    <div class="max-w-7xl mx-auto space-y-6">

        <!-- Header -->
        <div class="text-center space-y-2">
            <h1 class="text-lg font-bold uppercase tracking-wide">
                Türkmenistanyň Prezidentiniň ýanyndaky Döwlet gullugy akademiýasy
            </h1>
            <p class="text-base font-semibold text-slate-700">
                "{{ $quiz_details['title'] ?? '' }}" testiniň netijeleri
            </p>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto border border-slate-300 rounded-lg">
            <table class="w-full text-left text-xs border-collapse">
                <thead>
                    <tr class="bg-slate-100 text-slate-800 font-bold border-b border-slate-300">
                        <th class="p-2 border-r border-slate-300 text-center">t/b</th>
                        <th class="p-2 border-r border-slate-300">F.A.Aa</th>
                        <th class="p-2 border-r border-slate-300 text-center">Baha</th>
                        <th class="p-2 border-r border-slate-300 text-center">Sorag</th>
                        <th class="p-2 border-r border-slate-300 text-center">Dogry</th>
                        <th class="p-2 border-r border-slate-300 text-center">Nädogry</th>
                        <th class="p-2 border-r border-slate-300 text-center">Jogapsyz</th>
                        <th class="p-2 border-r border-slate-300 text-center">Wagty</th>
                        <th class="p-2 text-center">Dowamlylygy</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @foreach ($quiz_sessions as $index => $session)
                        @php
                            $spent_time = strtotime($session['finished_at']) - strtotime($session['started_at']);
                        @endphp
                        <tr>
                            <td class="p-2 border-r border-slate-200 text-center font-medium">{{ $index + 1 }}</td>
                            <td class="p-2 border-r border-slate-200 font-semibold">{{ $session['firstname'] }} {{ $session['lastname'] }}</td>
                            <td class="p-2 border-r border-slate-200 text-center font-bold">{{ $session['final_grade'] }}</td>
                            <td class="p-2 border-r border-slate-200 text-center">{{ $number_of_questions }}</td>
                            <td class="p-2 border-r border-slate-200 text-center">
                                {{ $session['correct_count'] }} [{{ $number_of_questions > 0 ? round(($session['correct_count'] * 100) / $number_of_questions) : 0 }}%]
                            </td>
                            <td class="p-2 border-r border-slate-200 text-center">
                                {{ $session['incorrect_count'] }} [{{ $number_of_questions > 0 ? round(($session['incorrect_count'] * 100) / $number_of_questions) : 0 }}%]
                            </td>
                            <td class="p-2 border-r border-slate-200 text-center">
                                {{ $session['unanswered_count'] }} [{{ $number_of_questions > 0 ? round(($session['unanswered_count'] * 100) / $number_of_questions) : 0 }}%]
                            </td>
                            <td class="p-2 border-r border-slate-200 text-center whitespace-nowrap">{{ $session['started_at'] }}</td>
                            <td class="p-2 text-center whitespace-nowrap">
                                {{ (int)($spent_time / 60) }} minut {{ $spent_time % 60 }} sekunt
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Summary Footer -->
        <div class="pt-4 border-t border-slate-300 grid grid-cols-2 gap-4 text-xs">
            <div class="space-y-1">
                <p><span class="font-bold">Jemi tabşyrlan test:</span> {{ $total_sessions }} sany</p>
                <p><span class="font-bold">5-lik baha:</span> {{ $five_counter }} [{{ $total_sessions > 0 ? round(($five_counter * 100) / $total_sessions, 1) : 0 }}%]</p>
                <p><span class="font-bold">4-lik baha:</span> {{ $four_counter }} [{{ $total_sessions > 0 ? round(($four_counter * 100) / $total_sessions, 1) : 0 }}%]</p>
                <p><span class="font-bold">3-lik baha:</span> {{ $three_counter }} [{{ $total_sessions > 0 ? round(($three_counter * 100) / $total_sessions, 1) : 0 }}%]</p>
                <p><span class="font-bold">2-lik baha:</span> {{ $two_counter }} [{{ $total_sessions > 0 ? round(($two_counter * 100) / $total_sessions, 1) : 0 }}%]</p>
            </div>
            <div class="space-y-1 text-right">
                <p><span class="font-bold">Ortança baha:</span> {{ round($quiz_avg, 2) }}</p>
                <p><span class="font-bold">Hasabat çap edildi:</span> {{ date('d.m.Y H:i:s') }}</p>
                <p class="pt-2">
                    Hasabaty çap eden:
                    <span class="font-bold underline decoration-slate-400 decoration-1 underline-offset-4">
                        {{ substr(auth()->user()->firstname ?? 'A', 0, 1) }}. {{ auth()->user()->lastname ?? 'User' }}
                    </span>
                </p>
            </div>
        </div>

    </div>

    <!-- HTML2PDF Generation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const printableField = document.getElementById('printable-field');
            const opt = {
                margin:       0.3,
                filename:     "{{ strtolower(str_replace(' ', '_', $quiz_details['title'] ?? 'test')) }}_netijeleri.pdf",
                image:        { type: 'jpeg', quality: 0.98 },
                html2canvas:  { scale: 2 },
                jsPDF:        { unit: 'in', format: 'letter', orientation: 'landscape' }
            };

            html2pdf().set(opt).from(printableField).save().then(function() {
                setTimeout(function() {
                    window.location.replace("{{ url('/teacher/tests/' . $quiz_details['id'] . '/result') }}");
                }, 1000);
            });
        });
    </script>
</body>

</html>
