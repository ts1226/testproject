<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>テストサイト</title>
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
<body>
    <div class="wrappr">

        <div class="header">
            <h1>仮のサイト</h1>
        </div>
        <div class="sidebar">
            <p>サイドバー</p>
        </div>

            @yield('content')
            
        <div class="footer">
            <p>お問い合わせ</p>
        </div>

    </div>
</body>
</html>