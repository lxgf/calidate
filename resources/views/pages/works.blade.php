@extends('layouts.default')

@section('content')
    <section class="section performance">
        <div class="container performance__core">
            <h1 class="main-heading">Наши работы</h1>
            <p class="description description_status_weird">Здесь вы сами можете <br class="break"> увидеть наши работы. <br> <span class="accent">Смотрите, что мы умеем.</span></p>
        </div>
    </section>
    <section class="section year">
        <div class="container year__core">
            <hr class="line">
            <h2 class="heading">2022</h2>
            <div class="grid">
                <noindex>
                    <a href="https://otzyvy-o-remonte.ru/" target="_blank" class="card work">
                        <h3 class="card__title">Агрегатор отзывов</h3>
                        <p class="card__text">
                            <span class="accent">FullStack</span> разработка сайта
                        <hr class="card__line">
                    </a>
                </noindex>
                <noindex>
                    <a href="https://avalremont.ru/remont-kvartir/v-novostrojke--vc" target="_blank" class="card work">
                        <h3 class="card__title">Авальремонт</h3>
                        <p class="card__text">Разработка <span class="accent">
                                обновленных версий
                            </span> сайта</p>
                        <hr class="card__line">
                    </a>
                </noindex>
                <noindex>
                    <a href="https://окна-будущего.рф" target="_blank" class="card work">
                        <h3 class="card__title">Окна Будущего</h3>
                        <p class="card__text">Работы по <span class="accent">
                                безопасности
                            </span> сайта</p>
                        <hr class="card__line">
                    </a>
                </noindex>
                <noindex>
                    <a href="/" target="_blank" class="card work">
                        <h3 class="card__title">Сайт визитка</h3>
                        <p class="card__text">
                            <span class="accent">
                                Дизайн + fullstack
                            </span> <br> разработка сайта-визитки нашей команды
                        <hr class="card__line">
                    </a>
                </noindex>
            </div>
        </div>
    </section>
    <section class="section year">
        <div class="container year__core">
            <hr class="line">
            <h2 class="heading">2021</h2>
            <div class="grid">
                <noindex>
                    <a href="https://jeeptourskavkaz.ru/" target="_blank" class="card work">
                        <h3 class="card__title">Йети</h3>
                        <p class="card__text">Разработка страниц для сайта туров <span class="accent">Йети</span></p>
                        <hr class="card__line">
                    </a>
                </noindex>
            </div>
        </div>
    </section>
@stop
