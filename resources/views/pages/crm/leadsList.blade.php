@extends('layouts.crm')

@section('content')
    <div class="crm-leads">
        <button class="crm-leads__create-btn create-lead">+</button>

        <link rel="stylesheet" href="{{asset('/assets/styles/crm/crm-leads.css')}}">
        <script defer src="{{asset('/assets/scripts/crm/leads.js')}}"></script>

        <div class="crm-leads__row crm-head">
            <p class="crm-leads__cell crm-head__name">
                Имя
            </p>
            <p class="crm-leads__cell crm-head__surname">
                Фамилия
            </p>
            <p class="crm-leads__cell crm-head__email">
                Почта
            </p>
            <p class="crm-leads__cell crm-head__page">
                Страница
            </p>
            <p class="crm-leads__cell crm-head__created-at">
                Создан
            </p>
        </div>
        @foreach($leads as $lead)
            <div class="crm-leads__row crm-lead" data-id="{{$lead->id}}">
                <div class="crm-lead-ol">
                    <button class="crm-lead-ol__remove-btn remove-lead">
                        ✕
                    </button>
                </div>

                <input type="text" class="crm-leads__cell crm-leads__input crm-lead__name" data-col="name" value="{{$lead->name}}">
                <input type="text" class="crm-leads__cell crm-leads__input crm-lead__surname" data-col="surname" value="{{$lead->surname}}">
                <input type="text" class="crm-leads__cell crm-leads__input crm-lead__email" data-col="email" value="{{$lead->email}}">
                <input type="email" class="crm-leads__cell crm-leads__input crm-lead__page" data-col="page" value="{{$lead->page}}">
                <p class="crm-leads__cell crm-lead__created-at" data-col="created_at">
                    {{$lead->created_at}}
                </p>
            </div>
        @endforeach
    </div>
@stop
