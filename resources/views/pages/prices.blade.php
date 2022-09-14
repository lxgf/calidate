@extends('layouts.default')

@section('content')
    <section class="section introduction">
        <div class="container introduction__core">
            <h1 class="main-heading">Наши цены</h1>
            <div class="text">
                <p class="words">Обещаем, наши цены вам <br> понравятся.</p>
                <p class="description description_status_additional">С каждым мы решаем это <span class="accent">лично</span>, и конечная цена будет зависеть от <br> особенностей проекта и сложности решаемых задач.</p>
            </div>
            <div class="introduction__block">
                <div class="introduction__animation">
                    <div class="circle-box circle-box--prices">
                        <div class="circle"></div>
                        <div class="circle-overflow"></div>
                    </div>
                </div>
                <div class="prices">
                    <div class="prices__item">
                        <div class="prices__title">frontend</div>
                        <hr class="prices__line">
                        <div class="prices__value">≈ 15,000 ₽</div>
                    </div>
                    <div class="prices__item">
                        <div class="prices__title">backend</div>
                        <hr class="prices__line">
                        <div class="prices__value">≈ 20,000 ₽</div>
                    </div>
                    <div class="prices__item">
                        <div class="prices__title">fullstack</div>
                        <hr class="prices__line">
                        <div class="prices__value">≈ 30,000 ₽</div>
                    </div>
                    <div class="prices__item">
                        <div class="prices__title">дизайн</div>
                        <hr class="prices__line">
                        <div class="prices__value">≈ 6,500 ₽</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
