@extends('layouts.default')

@section('content')
    <section class="section performance">
        <div class="container performance__core">
            <h1 class="main-heading">Технологии</h1>
            <p class="description description_status_weird">Технологии, с которыми мы работаем, вы можете <br class="some-break"> видеть ниже. А для вашего проекта подберём <br> <span class="accent">наиболее подходящие.</span></p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <hr class="line">
            <h2 class="heading">Технологии</h2>
            <div class="grid technologies">
                <div class="card">
                    <h3 class="card__title">HTML</h3>
                    <p class="card__text"><span class="accent">Структура</span> и логика</p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">CSS</h3>
                    <p class="card__text">Анимация и <span class="accent">внешний вид</span></p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">JavaScript</h3>
                    <p class="card__text">Динамика и <span class="accent">поведение</span></p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">TypeScript</h3>
                    <p class="card__text">JS и <span class="accent">статическая</span> типизация</p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">React.js</h3>
                    <p class="card__text"><span class="accent">S</span>ingle <span class="accent">P</span>age <span class="accent">A</span>pplication</p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">SASS, SCSS</h3>
                    <p class="card__text"><span class="accent">Продвинутый</span> CSS</p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">PHP</h3>
                    <p class="card__text">Внутренняя <span class="accent">логика</span></p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">Git & GitHub</h3>
                    <p class="card__text">Контроль <span class="accent">версий</span></p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">SQL</h3>
                    <p class="card__text">Работа с <span class="accent">данными</span></p>
                    <hr class="card__line">
                </div>
                <div class="card">
                    <h3 class="card__title">Three.js</h3>
                    <p class="card__text"><span class="accent">Трёхмерная</span> графика</p>
                    <hr class="card__line">
                </div>
            </div>
        </div>
    </section>
@stop
