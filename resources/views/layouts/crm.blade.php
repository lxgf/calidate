<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Calidate CRM</title>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('/assets/styles/reset.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/styles/crm/crm-main.css')}}">
    <script defer src="{{asset('/assets/libs/jquery-3.6.0.min.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<noindex>
    <div class="wrapper">
        @include('includes.crm.crmHeader')
        <main>
            @yield('content')
        </main>
        @include('includes.crm.crmFooter')
    </div>
</noindex>
</body>
</html>
