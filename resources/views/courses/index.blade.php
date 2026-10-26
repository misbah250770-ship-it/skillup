
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kursus - SkillUp</title>

    <style>
        * {
            box-sizing: border-box;
        }

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
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        header h1 {
            margin: 0;
            color: #38bdf8;
        }

        a {
            text-decoration: none;
        }

        .header-link {
            color: #7dd3fc;
        }

        main {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .intro {
            margin-bottom: 28px;
        }

        .intro h2 {
            font-size: 30px;
            margin-bottom: 8px;
        }

        .intro p {
            color: #aab9cc;
            line-height: 1.6;
        }

        .courses {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 20px;
        }

        .course {
            background: #142238;
            border: 1px solid #2a3d56;
            border-radius: 14px;
            padding: 24px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: border-color 0.2s, transform 0.2s;
        }

        .course:hover {
            border-color: #38bdf8;
            transform: translateY(-3px);
        }

        .course h3 {
            color: #7dd3fc;
            margin-top: 0;
            line-height: 1.4;
        }

        .course p {
            color: #cbd5e1;
            line-height: 1.7;
            flex-grow: 1;
        }

        .choose-course {
            display: inline-block;
            margin-top: 16px;
            padding: 11px 16px;
            background: #38bdf8;
            color: #0b1220;
            font-weight: bold;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .choose-course:hover {
            background: #7dd3fc;
        }

        .empty {
            background: #142238;
            border: 1px solid #2a3d56;
            border-radius: 12px;
            padding: 24px;
            color: #cbd5e1;
        }

        .back {
            display: inline-block;
            margin-top: 28px;
            color: #7dd3fc;
        }

        footer {
            text-align: center;
            padding: 24px 16px;
            color: #718198;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <header>
        <h1>SkillUp</h1>
        <a class="header-link" href="{{ route('dashboard') }}">
            Kembali ke Dashboard
        </a>
    </header>

    <main>
        <section class="intro">
            <h2>Jelajahi Kursus</h2>
            <p>
                Pilih kursus yang kamu minati dan mulai tingkatkan
                kemampuanmu bersama SkillUp.
            </p>
        </section>

        @if ($courses->isEmpty())
            <div class="empty">
                Belum ada kursus yang tersedia.
            </div>
        @else
            <div class="courses">
                @foreach ($courses as $course)
                    <article class="course">
                        <h3>{{ $course->title }}</h3>

                        <p>
                            {{ $course->description ?: 'Pelajari materi dan tingkatkan kemampuanmu melalui kursus ini.' }}
                        </p>

                        <a
                            class="choose-course"
                            href="{{ route('lessons.index', ['course' => $course->id]) }}"
                        >
                            Pilih Kursus &rarr;
                        </a>
                    </article>
                @endforeach
            </div>
        @endif

        <a class="back" href="{{ route('dashboard') }}">
            &larr; Kembali ke Dashboard
        </a>
    </main>

    <footer>
        &copy; {{ date('Y') }} SkillUp. Belajar dan berkembang bersama.
    </footer>
</body>
</html>
