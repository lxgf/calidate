<!DOCTYPE html>
<html lang="ru">

<head>
    <title>
        @switch(Request::segment(1))
            @case('prices')
                Цены
            @break
            @case('works')
                Работы
            @break
            @case('techs')
                Технологии
            @break
            @default
                Главная
        @endswitch
        — Calidate
    </title>
    <meta charset="utf-8" />
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="
        @switch(Request::segment(1))
            @case('prices')
                Цены на услуги по разработке сайтов
            @break
            @case('works')
                Работы коллектива Calidate
            @break
            @case('techs')
                Технологии, которые мы используем
            @break
            @default
                Команда разработки web-приложений Calidate
        @endswitch
    ">
    <link rel="stylesheet" href="{{asset('/assets/styles/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/styles/index.css')}}">
    <script defer src="{{asset('/assets/libs/jquery-3.6.0.min.js')}}"></script>
    <script defer src="{{asset('/assets/scripts/hamburger.js')}}"></script>
</head>
<body>
    <div class="wrapper">
        @include('includes.modals')
        @include('includes.nav')
        <main class="main">
            @yield('content')
        </main>
        @include('includes.footer')
    </div>
</body>
</html>
