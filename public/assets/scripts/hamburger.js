$('.hamburger').click(() => {
    $('.hamburger').addClass('is-hidden')
    $('.nav-overlay').addClass('is-showed')
    $('.navigation').addClass('is-showed')
})

$('.nav-overlay').click(e => {
    if (
        e.target.matches('.nav-overlay')
    ) {
        $('.hamburger').removeClass('is-hidden')
        $('.nav-overlay').removeClass('is-showed')
        $('.navigation').removeClass('is-showed')
    }
})
