<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $lesson->title }} - SkillUp</title>

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

        main {
            max-width: 850px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .course-name { color: #7dd3fc; }

        h2 {
            font-size: 30px;
            line-height: 1.4;
        }

        .duration { color: #94a3b8; }

        .content {
            margin-top: 28px;
            padding: 28px;
            background: #142238;
            border: 1px solid #2a3d56;
            border-radius: 14px;
            line-height: 1.9;
            overflow-wrap: anywhere;
        }

        .back {
            display: inline-block;
            margin-top: 24px;
            color: #7dd3fc;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <header>
        <h1>SkillUp</h1>
    </header>

    <main>
        <p class="course-name">{{ $course->title }}</p>

        <h2>{{ $lesson->title }}</h2>

        <p class="duration">
            Durasi belajar: {{ $lesson->duration_minutes }} menit
        </p>

        <article class="content">
            {!! nl2br(e($lesson->content)) !!}
        </article>

        <a class="back"
           href="{{ route('lessons.index', $course) }}">
            ← Kembali ke daftar materi
        </a>
    </main>
</body>
</html>