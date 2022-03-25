const modals = document.querySelector('.modals') //окно модалок
const back = document.querySelector('.modal__window__back') // стрелка назад
const register = document.querySelector('#register') // кнопка регистрации

register.addEventListener('click', (e) => { // скролл к модалке регистрации
    e.preventDefault();
    modals.style.transform = 'translateY(-100vh)'
})

back.addEventListener('click', () => { // скролл к модалке войти
    modals.style.transform = 'translateY(0)'
})


const header = document.querySelector('.header')
const main = document.querySelector('.main')
const features = document.querySelector('.features')
const stages = document.querySelector('.stages')
const saving = document.querySelector('.saving')
const guarantee = document.querySelector('.guarantee')
const footer = document.querySelector('.footer')

const place = document.querySelector('.place') // кнопка разместить заказ
const toComeIn = document.querySelector('#toComeIn') // кнопка войти
const modal = document.querySelector('.modals') // модальное окно входа
const modalClose = document.querySelectorAll('.modal__window__close')  // крест закрытия модалки


place.addEventListener('click', () => {
    header.style.display = 'none'
    main.style.display = 'none'
    features.style.display = 'none'
    stages.style.display = 'none'
    saving.style.display = 'none'
    guarantee.style.display = 'none'
    footer.style.display = 'none'


    modal.style.display = 'block'
})

toComeIn.addEventListener('click', () => {
    header.style.display = 'none'
    main.style.display = 'none'
    features.style.display = 'none'
    stages.style.display = 'none'
    saving.style.display = 'none'
    guarantee.style.display = 'none'
    footer.style.display = 'none'


    modal.style.display = 'block'
})

modalClose.forEach((close) => {
    close.addEventListener('click', () => {
        header.style.display = 'block'
        main.style.display = 'block'
        features.style.display = 'block'
        stages.style.display = 'block'
        saving.style.display = 'block'
        guarantee.style.display = 'block'
        footer.style.display = 'block'
    
    
        modal.style.display = 'none'
    })
})



//переход с модалки к размещению заказа
// const entrance = document.querySelector('.modal__form__entrance') //кнопка войти
// entrance.addEventListener('click', () => {
//     alert('click')
//     // здесь нужно реализовать запрос в бд , проверку логина и пароля  и если такой есть, то перейти на сайт размещения заказа
//     e.preventDefault();
//     document.location.href = "check.php";
// } )


