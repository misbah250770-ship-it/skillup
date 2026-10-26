
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - SkillUp</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6ff;
            color: #202447;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            padding: 20px 7%;
            background: white;
            border-bottom: 1px solid #e6e8f4;
        }

        .logo {
            color: #5b5ce2;
            font-size: 25px;
            font-weight: 800;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        select, button {
            padding: 10px 12px;
            border-radius: 9px;
            border: 1px solid #dfe2f0;
            background: white;
            color: inherit;
            cursor: pointer;
        }

        .logout {
            background: #5b5ce2;
            border-color: #5b5ce2;
            color: white;
        }

        main {
            width: 86%;
            max-width: 1100px;
            margin: 42px auto;
        }

        .welcome {
            padding: 34px;
            border-radius: 20px;
            background: linear-gradient(120deg, #5b5ce2, #8585f5);
            color: white;
        }

        .welcome h1 {
            margin-top: 0;
            font-size: 30px;
        }

        .welcome p {
            line-height: 1.7;
        }

        .section-title {
            margin-top: 35px;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 20px;
        }

        .card-link {
            display: block;
            color: inherit;
            text-decoration: none;
            border-radius: 16px;
        }

        .card {
            height: 100%;
            padding: 24px;
            border-radius: 16px;
            background: white;
            border: 1px solid #e8eaf5;
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card-link:hover .card {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(40, 50, 100, 0.10);
        }

        .card h3 {
            margin-top: 0;
        }

        .card p {
            color: #777b94;
            line-height: 1.6;
        }

        .notice {
            padding: 14px 16px;
            margin-bottom: 18px;
            border-radius: 10px;
            background: #eafaf0;
            color: #187443;
        }

        html[data-theme="dark"] body {
            background: #111322;
            color: #f2f3ff;
        }

        html[data-theme="dark"] header,
        html[data-theme="dark"] .card {
            background: #1b1e32;
            border-color: #30344f;
        }

        html[data-theme="dark"] .card p {
            color: #b5b9d2;
        }

        html[data-theme="dark"] select {
            background: #1b1e32;
            border-color: #30344f;
            color: #f2f3ff;
        }

        @media (max-width: 600px) {
            header {
                padding: 16px 5%;
                flex-wrap: wrap;
            }

            main {
                width: 90%;
                margin-top: 25px;
            }

            .welcome {
                padding: 25px;
            }

            .welcome h1 {
                font-size: 25px;
            }

            .header-actions {
                flex-wrap: wrap;
            }
        }
    </style>

    <script>
        (function () {
            const saved = localStorage.getItem('skillup-theme') || 'auto';
            const dark = saved === 'dark' ||
                (saved === 'auto' &&
                window.matchMedia('(prefers-color-scheme: dark)').matches);

            document.documentElement.dataset.theme = dark ? 'dark' : 'light';
        })();
    </script>
</head>

<body>
    <header>
        <div class="logo">SkillUp.</div>

        <div class="header-actions">
            <select id="themeSelect" aria-label="Pilih tema">
                <option value="light">Terang</option>
                <option value="dark">Gelap</option>
                <option value="auto">Otomatis</option>
            </select>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logout" type="submit">Keluar</button>
            </form>
        </div>
    </header>

    <main>
        @if (session('success'))
            <div class="notice">{{ session('success') }}</div>
        @endif

        <section class="welcome">
            <h1>Halo, {{ auth()->user()->name }}! 👋</h1>
            <p>
                Selamat datang di dashboard SkillUp. Saatnya melanjutkan
                perjalanan belajarmu dan mengembangkan keterampilan baru.
            </p>
        </section>

        <h2 class="section-title">Ruang belajarmu</h2>

        <div class="cards">
            <a href="{{ route('courses.index') }}" class="card-link">
                <article class="card">
                    <h3>📚 Kursus Saya</h3>
                    <p>
                        Temukan materi pembelajaran untuk menambah
                        pengetahuan dan keterampilanmu.
                    </p>
                </article>
            </a>

            <article class="card">
                <h3>📝 Kuis</h3>
                <p>
                    Uji pemahamanmu melalui kuis dan lihat hasil belajarmu.
                </p>
            </article>

            <article class="card">
                <h3>📈 Progres Belajar</h3>
                <p>
                    Pantau perkembangan belajar dan materi yang sudah
                    kamu selesaikan.
                </p>
            </article>
        </div>
    </main>

    <script>
        const themeSelect = document.getElementById('themeSelect');
        const savedTheme = localStorage.getItem('skillup-theme') || 'auto';

        themeSelect.value = savedTheme;

        themeSelect.addEventListener('change', function () {
            localStorage.setItem('skillup-theme', this.value);

            const dark = this.value === 'dark' ||
                (this.value === 'auto' &&
                window.matchMedia('(prefers-color-scheme: dark)').matches);

            document.documentElement.dataset.theme = dark ? 'dark' : 'light';
        });
    </script>
</body>
</html>
