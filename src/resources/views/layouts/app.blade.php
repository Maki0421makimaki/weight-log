<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>body-log</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    @yield('css')
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo">
                PiGLy
            </a>
        </div>

        <div class="header-buttons">
            <button class=>目標体重設定</button>
            <button class=>ログアウト</button>
        </div>

    </header>

    <main>
        @yield('content')
    </main>
    
</body>
</html>