@extends('layouts.crm')

@section('content')
    <div class="crm-login">
        <link rel="stylesheet" href="{{asset('/assets/styles/crm/crm-login.css')}}">
        <script defer src="{{asset('/assets/scripts/crm/viewError.js')}}"></script>

        @include('includes.crm.overlay')

        <form action="{{route('loginAction')}}" method="POST" class="crm-login-form">
            {{ csrf_field() }}

            <input type="hidden" name="error" value="{{Session::get('error')}}" class="error">

            <label class="crm-login-form__label">
                Логин
                <input required type="email" name="email" class="crm-login-form__input crm-login-form__email"
                       value="{{old('email')}}">
            </label>
            <label class="crm-login-form__label">
                Пароль
                <input required type="password" name="password" class="crm-login-form__input crm-login-form__pwd">
            </label>

            <button class="crm-login-form__btn login">
                Зайти
            </button>
        </form>
    </div>
@stop
