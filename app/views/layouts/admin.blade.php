<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ BASE_URL.'public/css/style.css' }}">
    <title> {{ $title }}</title>
</head>
<body>
    <div class="container">
        <header class="header-main">
            <ul class="menu">
                <li><a href="">Quản lý khoá học</a></li>
                <li><a href="">Quản lý người dùng</a></li>
                <li><a href="">Quản lý người dùng</a></li>
                <li><a href="">Quản lý đánh giá</a></li>
            </ul>
        </header>
        @yield('content')
        <footer>EzCode</footer>
    <div>
</body>
</html>