<div class="modals-overlay">
    <noindex>
        <div class="lead">
            <div class="lead__inner">
                <label class="lead__label">
                    Имя
                    <input type="text" class="lead__input lead__name">
                </label>
                <label class="lead__label">
                    Фамилия
                    <input type="text" class="lead__input lead__surname">
                </label>
                <label class="lead__label">
                    Почта
                    <input type="text" class="lead__input lead__email">
                </label>
            </div>
            <button class="lead__btn">
                Отправить
            </button>
        </div>
    </noindex>
    <script defer src="{{asset('/assets/scripts/modals.js')}}"></script>
</div>

<div class="modals-notification">
    <p class="modals-notification__text"></p>
    <div class="modals-notification__progress-bar">
        <div class="modals-notification__progress"></div>
    </div>
</div>
