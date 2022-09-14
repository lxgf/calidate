<button class="hamburger">
    <img src="{{asset('/assets/images/hamburger.svg')}}" alt="menu">
</button>

<div class="nav-overlay"></div>

<nav class="navigation">
    <ul class="navigation__list">
        <li class="navigation__item">
            <a href="/" class="navigation__link
            {{ (request()->segment(1) == null) ? 'is-active' : '' }}
            ">Главная</a>
        </li>
        <li class="navigation__item">
            <a href="/prices" class="navigation__link
            {{ (request()->segment(1) == 'prices') ? 'is-active' : '' }}
            ">Цены</a>
        </li>
        <li class="navigation__item">
            <a href="/works" class="navigation__link
            {{ (request()->segment(1) == 'works') ? 'is-active' : '' }}
            ">Наши Работы</a>
        </li>
        <li class="navigation__item">
            <a href="/techs" class="navigation__link
            {{ (request()->segment(1) == 'techs') ? 'is-active' : '' }}
            ">Технологии</a>
        </li>
    </ul>
</nav>
