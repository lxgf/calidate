@extends('layouts.default')

@section('content')
    <div class="circle-box circle-box--main">
        <div class="circle"></div>
        <div class="circle-overflow"></div>
    </div>
    <section class="section introduction">
        <div class="container introduction__core">
            <h1 class="title">Calidate</h1>
            <p class="description description_size_small vertical">Веб-Студия</p>
            <p class="description description_status_main">Веб-студия, где делают сайты <br> <span class="accent">быстро и просто</span></p>
        </div>
    </section>
    <section class="section service">
        <div class="container service__core">
            <hr class="line">
            <h2 class="heading">услуги</h2>
            <div class="cards">
                <div class="card">
                    <h3 class="card__title">frontend</h3>
                    <p class="card__text">Разработка <span class="accent">клиентской</span> части web-приложения</p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">backend</h3>
                    <p class="card__text">Разработка <span class="accent">серверной</span> части web-приложения</p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">full stack</h3>
                    <p class="card__text">Разработка сайта “под ключ”, <br> <span class="accent">Frontend + Backend</span></p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">design</h3>
                    <p class="card__text">Формирование дизайна сайта</p>
                    <hr class="card__line">
                </div>
            </div>
            <div class="guide">
                <p class="guide__text">Смотрите также наши:</p>
                <ul class="guide__list">
                    <li class="guide__item"><a href="/prices" class="guide__link">Цены →</a></li>
                    <li class="guide__item"><a href="/works" class="guide__link">Работы →</a></li>
                    <li class="guide__item"><a href="/techs" class="guide__link">Технологии →</a></li>
                </ul>
            </div>
        </div>
    </section>
@stop
