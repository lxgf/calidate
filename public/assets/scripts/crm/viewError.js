const error = $('.error').val()

if (error) {
    $('.overlay').addClass('is-showed')

    let text = ''

    switch (error) {
        case 'email is wrong':
            text = 'Ошибка входа!'
            break

        default:
    }

    $('.overlay-text').text(text)
    setTimeout(() => {
        $('.overlay').removeClass('is-showed')
        $('.overlay-text').text('')
    }, 1000)
}
