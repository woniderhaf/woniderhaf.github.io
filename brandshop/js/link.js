const close = document.querySelector('.close') // кнопка выйти
const placeOrder = document.querySelector('.place__order') // кнопка разместить заказ в шапке
const footerOrder = document.querySelector('.footer__order') // кнопка разместить заказ в подвале

const money = document.querySelector('.money__topUp') //кнопка пополнение баланса
const withdraw = document.querySelectorAll('.withdraw') //кнопка вывести
const replenishment = document.querySelector('.main__replenishment') //кнопка вывести

const card = document.querySelectorAll('.cards a')

card.forEach(img => {
    img.addEventListener('click', () => {
        img.classList.toggle('img__border')        
    })
})


close.addEventListener('click', () => {
    document.location.href = 'index.php'
})

placeOrder.addEventListener('click' , () => {
    document.location.href = "placeAnOrder.php";
})
footerOrder.addEventListener('click' , () => {
    document.location.href = "placeAnOrder.php";
})

money.addEventListener('click', () => {
    document.location.href = 'replenishment.php'
})
withdraw.forEach(item => {
    item.addEventListener('click', () => {
        document.location.href = 'withdraw.php'
    })
})
replenishment.addEventListener('click', () => {
    document.location.href = 'replenishment.php'
})
