$('.modals-overlay').click(e => {
    const target = $(e.target)
    if (target.is('.modals-overlay')) {
        target.removeClass('is-showed')
        $('.modals-overlay *').removeClass('is-showed')
    }
})

const leadTargets = [
    $('.contacts')
]

for (const target of leadTargets) {
    target.click(() => {
        $('.modals-overlay').addClass('is-showed')
        $('.lead').addClass('is-showed')
    })
}

const isEmail = email => {
    const regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
    return regex.test(email)
}

$('.lead__btn').click(() => {
    const errors = []
    const name = $('.lead__name').val()
    const surname = $('.lead__surname').val()
    const email = $('.lead__email').val()

    if (name.length < 2) {
        errors.push('Имя д. б. больше 1-го символа')
    }

    if (surname.length <= 2) {
        errors.push('Фамилия д. б. больше 2-х символов')
    }

    if(!isEmail(email)) {
        errors.push('Ошибка в заполнении почты')
    }

    if (errors.length > 0) {
        const errorsText = errors.join('; \n')
        $('.modals-notification__text').text(errorsText)

        const notification = $('.modals-notification')
        const notificationProgress = $('.modals-notification__progress')

        notification.addClass('is-showed')
        notificationProgress.addClass('animate')

        setTimeout(() => {
            notificationProgress.removeClass('animate')
            notification.removeClass('is-showed')
        }, 3000)
    } else {
        $.get(`/send-lead?name=${name}&surname=${surname}&email=${email},&page=${window.location.pathname}`, res => {
            window.location.replace(JSON.parse(res).redirect_url)
        })
    }
})
