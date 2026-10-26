<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4355db">
    <meta name="description" content="SkillUp adalah platform edukasi interaktif untuk meningkatkan kemampuan belajar.">
    <title>SkillUp — Belajar, Berkembang, Berprestasi</title>

    <script>
        (function () {
            try {
                const saved = localStorage.getItem('skillup-theme') || 'auto';
                const dark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                const theme = saved === 'auto' ? (dark ? 'dark' : 'light') : saved;
                document.documentElement.setAttribute('data-theme', theme);
            } catch (e) {
                document.documentElement.setAttribute('data-theme', 'light');
            }
        })();
    </script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="navbar">
        <a class="brand" href="{{ route('home') }}" aria-label="SkillUp Beranda">
            <span class="brand-icon">S</span>
            <span>Skill<span class="brand-accent">Up</span></span>
        </a>

        <nav class="nav-links" aria-label="Navigasi utama">
            <a class="nav-link active" href="#beranda">Beranda</a>
            <a class="nav-link" href="#kategori">Kategori</a>
            <a class="nav-link" href="#kursus">Kursus</a>
            <a class="nav-link" href="#tentang">Tentang</a>

            <div class="theme-control">
                <label for="themeSelect" class="theme-label">Tema</label>
                <select id="themeSelect" class="theme-toggle" aria-label="Pilih tema tampilan">
                    <option value="light">☀️ Terang</option>
                    <option value="dark">🌙 Gelap</option>
                    <option value="auto">🖥️ Otomatis</option>
                </select>
            </div>
        </nav>

        <div class="nav-actions">
            <a class="login-link" href="{{ route('login') }}">Masuk</a>
            <a class="button button-primary button-small" href="{{ route('register') }}">Daftar Gratis</a>
        </div>
    </header>

    <main>
        <section class="hero" id="beranda">
            <div class="hero-content">
                <div class="eyebrow">
                    <span class="eyebrow-dot"></span>
                    PLATFORM BELAJAR INTERAKTIF
                </div>

                <h1>
                    Tingkatkan Skill.<br>
                    <span class="gradient-text">Wujudkan Potensimu.</span>
                </h1>

                <p class="hero-description">
                    Belajar keterampilan baru dengan cara yang lebih mudah.
                    Jelajahi materi, ikuti kuis, dan pantau perkembangan
                    belajarmu dalam satu platform.
                </p>

                <div class="hero-actions">
                    <a href="#kursus" class="button button-primary">
                        Mulai Belajar <span aria-hidden="true">→</span>
                    </a>
                    <a href="#kategori" class="button button-outline">
                        Jelajahi Kategori
                    </a>
                </div>

                <div class="hero-trust">
                    <div class="avatar-stack" aria-hidden="true">
                        <span>A</span><span>B</span><span>C</span>
                    </div>
                    <div>
                        <strong>Belajar sesuai ritmemu</strong>
                        <p>Materi terstruktur, progres terpantau</p>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="decor decor-one"></div>
                <div class="decor decor-two"></div>

                <div class="learning-card">
                    <div class="learning-card-top">
                        <div class="learning-symbol">✦</div>
                        <span class="status-pill">Mulai berkembang</span>
                    </div>

                    <p class="card-overline">RUANG BELAJARMU</p>
                    <h2>Setiap langkah adalah kemajuan.</h2>
                    <p class="learning-copy">
                        Pilih materi, pelajari hal baru, dan terus tingkatkan
                        kemampuanmu setiap hari.
                    </p>

                    <div class="mini-course">
                        <div class="mini-course-icon icon-blue">⌘</div>
                        <div class="mini-course-info">
                            <strong>Belajar Teknologi</strong>
                            <span>Mulai dari dasar</span>
                        </div>
                        <span class="mini-arrow">↗</span>
                    </div>

                    <div class="mini-course">
                        <div class="mini-course-icon icon-purple">✳</div>
                        <div class="mini-course-info">
                            <strong>Asah Kreativitas</strong>
                            <span>Kembangkan ide baru</span>
                        </div>
                        <span class="mini-arrow">↗</span>
                    </div>

                    <div class="learning-note">
                        <span class="note-check">✓</span>
                        <span>Belajar sedikit demi sedikit, setiap hari.</span>
                    </div>
                </div>

                <div class="floating-badge badge-top">
                    <span class="floating-icon">✦</span>
                    <span>
                        <strong>Terus berkembang</strong>
                        <small>Satu langkah setiap hari</small>
                    </span>
                </div>

                <div class="floating-badge badge-bottom">
                    <span class="progress-ring">↗</span>
                    <span>
                        <strong>Progres belajar</strong>
                        <small>Pantau perkembanganmu</small>
                    </span>
                </div>
            </div>
        </section>

        <section class="benefits" aria-label="Keunggulan SkillUp">
            <div class="benefit-item">
                <span class="benefit-icon">◎</span>
                <div>
                    <strong>Materi Terstruktur</strong>
                    <p>Belajar langkah demi langkah</p>
                </div>
            </div>

            <div class="benefit-item">
                <span class="benefit-icon">✓</span>
                <div>
                    <strong>Kuis Interaktif</strong>
                    <p>Uji pemahamanmu</p>
                </div>
            </div>

            <div class="benefit-item">
                <span class="benefit-icon">↗</span>
                <div>
                    <strong>Progres Belajar</strong>
                    <p>Lihat perkembanganmu</p>
                </div>
            </div>
        </section>

        <section class="section categories-section" id="kategori">
            <div class="section-heading">
                <div>
                    <span class="section-label">JELAJAHI MINATMU</span>
                    <h2>Belajar sesuai tujuanmu</h2>
                    <p>Pilih bidang yang ingin kamu kuasai.</p>
                </div>
                <a href="#kursus" class="text-link">Lihat semua kursus →</a>
            </div>

            <div class="category-grid">
                <a class="category-card category-programming" href="#kursus">
                    <span class="category-icon">⌘</span>
                    <h3>Pemrograman</h3>
                    <p>Logika, website, dan pengembangan aplikasi.</p>
                    <span class="category-arrow">↗</span>
                </a>

                <a class="category-card category-design" href="#kursus">
                    <span class="category-icon">✳</span>
                    <h3>Desain Digital</h3>
                    <p>Visual, kreativitas, dan desain antarmuka.</p>
                    <span class="category-arrow">↗</span>
                </a>

                <a class="category-card category-technology" href="#kursus">
                    <span class="category-icon">◈</span>
                    <h3>Teknologi</h3>
                    <p>Kenali perkembangan dunia digital.</p>
                    <span class="category-arrow">↗</span>
                </a>

                <a class="category-card category-business" href="#kursus">
                    <span class="category-icon">▥</span>
                    <h3>Bisnis Digital</h3>
                    <p>Pelajari strategi dan keterampilan bisnis.</p>
                    <span class="category-arrow">↗</span>
                </a>
            </div>
        </section>

        <section class="section courses-section" id="kursus">
            <div class="section-heading">
                <div>
                    <span class="section-label">MULAI PERJALANANMU</span>
                    <h2>Kursus pilihan untukmu</h2>
                    <p>Temukan keterampilan baru dan kembangkan potensimu.</p>
                </div>
                <span class="course-count">{{ $courses->count() }} kursus tersedia</span>
            </div>

            <div class="course-grid">
                @forelse ($courses as $course)
                    @php
                        $coverClasses = [
                            'Pemrograman' => 'cover-code',
                            'Desain Digital' => 'cover-design',
                            'Teknologi' => 'cover-tech',
                            'Bisnis Digital' => 'cover-business',
                        ];

                        $coverSymbols = [
                            'Pemrograman' => '</>',
                            'Desain Digital' => '✳',
                            'Teknologi' => '◈',
                            'Bisnis Digital' => '↗',
                        ];

                        $coverClass = $coverClasses[$course->category] ?? 'cover-code';
                        $coverSymbol = $coverSymbols[$course->category] ?? '✦';
                    @endphp

                    <article class="course-card">
                        <div class="course-cover {{ $coverClass }}">
                            <span class="cover-tag">{{ strtoupper($course->level) }}</span>
                            <span class="cover-art">{{ $coverSymbol }}</span>
                            <span class="cover-caption">{{ strtoupper($course->category) }}</span>
                        </div>

                        <div class="course-body">
                            <span class="course-category">{{ $course->category }}</span>
                            <h3>{{ $course->title }}</h3>
                            <p>{{ $course->description ?: 'Pelajari keterampilan baru melalui materi pembelajaran SkillUp.' }}</p>

                            <div class="course-meta">
                                <span>▤ Materi terstruktur</span>
                                <span>◷ Bertahap</span>
                            </div>

                            <a href="#kursus" class="course-link" aria-label="Detail {{ $course->title }}">
                                Pelajari kursus <span>→</span>
                            </a>
                        </div>
                    </article>
                @empty
                    <div class="empty-courses">
                        <div class="empty-icon">✦</div>
                        <h3>Belum ada kursus tersedia</h3>
                        <p>Kursus akan ditampilkan di sini setelah ditambahkan.</p>
                    </div>
                @endforelse
            </div>

            <p class="demo-notice">
                Kursus ditampilkan dari database SkillUp menggunakan Laravel Eloquent.
                Halaman detail kursus akan diaktifkan pada tahap berikutnya.
            </p>
        </section>

        <section class="cta-section" id="daftar">
            <div class="cta-decoration">✦</div>
            <span class="section-label">WAKTUNYA MULAI</span>
            <h2>Masa depanmu dimulai dari apa yang kamu pelajari hari ini.</h2>
            <p>Bangun kebiasaan belajar dan tingkatkan kemampuanmu bersama SkillUp.</p>
            <a class="button button-light" href="#kursus">
                Jelajahi Pembelajaran <span>→</span>
            </a>
        </section>
    </main>

    <footer class="footer" id="tentang">
        <a class="brand footer-brand" href="{{ route('home') }}">
            <span class="brand-icon">S</span>
            <span>Skill<span class="brand-accent">Up</span></span>
        </a>

        <p>Platform Edukasi Interaktif untuk Meningkatkan Kemampuan Belajar.</p>
        <span class="footer-copy">
            © {{ date('Y') }} SkillUp. Dibuat untuk pengalaman belajar yang lebih baik.
        </span>
    </footer>

    <script>
        (function () {
            const themeSelect = document.getElementById('themeSelect');
            const mediaQuery = window.matchMedia('(prefers-color-scheme: dark)');

            function applyTheme(theme) {
                const actualTheme = theme === 'auto'
                    ? (mediaQuery.matches ? 'dark' : 'light')
                    : theme;

                document.documentElement.setAttribute('data-theme', actualTheme);
                document.documentElement.style.colorScheme = actualTheme;
            }

            let savedTheme = 'auto';

            try {
                savedTheme = localStorage.getItem('skillup-theme') || 'auto';
            } catch (e) {
                // Website tetap bisa digunakan jika penyimpanan browser tidak tersedia.
            }

            themeSelect.value = savedTheme;
            applyTheme(savedTheme);

            themeSelect.addEventListener('change', function () {
                const selectedTheme = this.value;

                try {
                    localStorage.setItem('skillup-theme', selectedTheme);
                } catch (e) {
                    // Tema tetap berubah untuk halaman saat ini.
                }

                applyTheme(selectedTheme);
            });

            mediaQuery.addEventListener('change', function () {
                let currentTheme = 'auto';

                try {
                    currentTheme = localStorage.getItem('skillup-theme') || 'auto';
                } catch (e) {
                    // Gunakan mode otomatis sebagai nilai bawaan.
                }

                if (currentTheme === 'auto') {
                    applyTheme('auto');
                }
            });
        })();
    </script>
</body>
</html>