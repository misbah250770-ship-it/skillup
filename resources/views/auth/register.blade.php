<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun - SkillUp</title>
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

        .success {
            padding: 12px;
            border-radius: 8px;
            background: #eafaf0;
            color: #187443;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <main class="card">
        <div class="logo">SkillUp.</div>
        <h1>Buat akun baru</h1>
        <p class="subtitle">Mulai perjalanan belajarmu bersama SkillUp.</p>

        @if (session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="error">
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <label for="name">Nama lengkap</label>
            <input
                id="name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Masukkan nama lengkap"
                required
                autocomplete="name"
            >

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
                placeholder="Minimal 8 karakter"
                required
                minlength="8"
                autocomplete="new-password"
            >

            <label for="password_confirmation">Konfirmasi kata sandi</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                placeholder="Ulangi kata sandi"
                required
                minlength="8"
                autocomplete="new-password"
            >

            <button type="submit">Daftar Gratis</button>
        </form>

        <div class="footer">
            Sudah punya akun? <a href="{{ route('login') }}">Masuk</a>
        </div>
    </main>
</body>
</html>