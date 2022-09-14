<header class="crm-header">
    <link rel="stylesheet" href="{{asset('/assets/styles/crm/crm-header.css')}}">

    <h1 class="crm-header__heading">
        Calidate CRM
    </h1>
    <p class="crm-header__page">
        ->
        @if(Request::path() == 'crm')
            Заявки клиентов
        @endif
        @if(Request::path() == 'crm/login')
            Вход
        @endif
    </p>
</header>
