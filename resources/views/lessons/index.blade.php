<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi {{ $course->title }} - SkillUp</title>
    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #0b1220;
            color: #f1f5f9;
        }
        header {
            padding: 22px 7%;
            background: #111c30;
            border-bottom: 1px solid #26364d;
        }
        header h1 { margin: 0; color: #38bdf8; }
        main { max-width: 900px; margin: 40px auto; padding: 0 20px; }
        h2 { font-size: 28px; }
        .description { color: #b8c7d9; line-height: 1.7; }
        .lesson {
            display: block;
            margin: 14px 0;
            padding: 20px;
            border-radius: 12px;
            border: 1px solid #2a4968;
            background: #142238;
            color: #f1f5f9;
            text-decoration: none;
        }
        .lesson:hover { border-color: #38bdf8; background: #19304c; }
        .lesson h3 { margin: 0 0 8px; color: #7dd3fc; }
        .lesson p { margin-bottom: 0; color: #cbd5e1; }
        .empty {
            padding: 20px;
            border-radius: 12px;
            background: #142238;
            color: #cbd5e1;
        }
        .back { display: inline-block; margin-top: 24px; color: #7dd3fc; }
    </style>
</head>
<body>
    <header>
        <h1>SkillUp</h1>
    </header>

    <main>
        <h2>{{ $course->title }}</h2>
        <p class="description">
            {{ $course->description ?: 'Pilih materi di bawah untuk mulai belajar.' }}
        </p>

        <h2>Materi Pelajaran</h2>

        @forelse ($lessons as $lesson)
            <a class="lesson"
               href="{{ route('lessons.show', [$course, $lesson]) }}">
                <h3>{{ $lesson->order_number }}. {{ $lesson->title }}</h3>
                <p>Durasi: {{ $lesson->duration_minutes }} menit</p>
            </a>
        @empty
            <div class="empty">
                Belum ada materi yang diterbitkan untuk kursus ini.
            </div>
        @endforelse

        <a class="back" href="{{ route('courses.index') }}">
            ← Kembali ke daftar kursus
        </a>
    </main>
</body>
</html>