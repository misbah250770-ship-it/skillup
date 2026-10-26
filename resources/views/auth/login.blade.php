<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - SkillUp</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            font-family: Arial, sans-serif;
            background: #f4f6ff;
            color: #202447;
        }

        .card {
            width: 100%;
            max-width: 430px;
            padding: 32px;
            border-radius: 20px;
            background: white;
            box-shadow: 0 12px 40px rgba(40, 45, 100, .10);
        }

        .logo {
            color: #5b5ce2;
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 8px;
        }

        h1 { margin: 16px 0 8px; font-size: 26px; }
        .subtitle { color: #777b94; margin-bottom: 26px; }

        label {
            display: block;
            margin: 16px 0 8px;
            font-size: 14px;
            font-weight: 600;
        }

        input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #dfe2f0;
            border-radius: 10px;
            font-size: 15px;
        }

        input:focus {
            outline: 2px solid #c8c9ff;
            border-color: #6667e8;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 16px;
            font-size: 14px;
        }

        .remember input { width: auto; }

        button {
            width: 100%;
            margin-top: 24px;
            padding: 14px;
            border: 0;
            border-radius: 10px;
            background: #5b5ce2;
            color: white;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover { background: #4849c8; }

        .footer {
            margin-top: 22px;
            text-align: center;
            font-size: 14px;
        }

        a { color: #5b5ce2; text-decoration: none; font-weight: 600; }

        .error {
            margin-top: 14px;
            padding: 12px;
            border-radius: 8px;
            background: #fff0f0;
            color: #b42318;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <main class="card">
        <div class="logo">SkillUp.</div>
        <h1>Selamat datang kembali!</h1>
        <p class="subtitle">Masuk untuk melanjutkan perjalanan belajarmu.</p>

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('login.store') }}">
            @csrf

            <label for="email">Alamat email</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="nama@email.com"
                required
                autocomplete="email"
            >

            <label for="password">Kata sandi</label>
            <input
                id="password"
                type="password"
                name="password"
                placeholder="Masukkan kata sandi"
                required
                autocomplete="current-password"
            >

            <label class="remember">
                <input type="checkbox" name="remember" value="1">
                Ingat saya
            </label>

            <button type="submit">Masuk</button>
        </form>

        <div class="footer">
            Belum punya akun? <a href="{{ route('register') }}">Daftar gratis</a>
            <p><a href="{{ route('home') }}">← Kembali ke beranda</a></p>
        </div>
    </main>
</body>
</html>