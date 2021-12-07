const wow = new WOW({
    boxClass: 'wow', /* класс, который необходим для работы wow.js */
    animateClass: 'animate__animated', /* класс, который будет автоматически добавляться анимируемым элементам при прокрутке страницы */
    offset: 30, /* по-умолчанию установлено значение 0, то есть как только при прокрутке страницы, элемент достигает низа окна браузера проигрываться анимация, в данном случае анимация начнется на 30px выше от низа окна браузера */
    mobile: true, /* если true, то на мобильных тоже будет анимация, если false, то на мобильных анимация отключается */
    live: true /* если true, то анимация будет работать даже на динамически добавляемых элементах, если false, то только на тех элементах, которые были на странице при ее загрузке */
  })
  wow.init(); /* Инициализация плагина с установленными выше свойствами */
  

// ссылки в header 
var nav = document.querySelector('.nav')
var navLink = document.getElementsByClassName('nav-link')
// выпадающие списки
const blog = document.querySelector('.linkBlog')
const dropdownBlog = document.querySelector('.dropdown-blog')
const dropdownPages = document.querySelector('.dropdown-pages')
const page = document.querySelector('.linkPages')

//эффект при наведении
const burgerPresident = document.querySelector('.burger-president')
const brPt = document.getElementById('brPt')
const burgerCeratti = document.querySelector('.burger-ceratti')
const brCi = document.getElementById('brCi')
//


burgerPresident.addEventListener('mouseover', () => {
 brPt.style.transform = 'scale(1.1)';
})
burgerPresident.addEventListener('mouseout', () => {
 brPt.style.transform = 'scale(1)';
})

burgerCeratti.addEventListener('mouseover', () => {
 brCi.style.transform = 'scale(1.1)';
})
burgerCeratti.addEventListener('mouseout', () => {
 brCi.style.transform = 'scale(1)';
})


// активный класс
for (var i = 0; i < navLink.length; i++) {
    navLink[i].addEventListener("click", function() {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
}

// выпадающие списки
function blogs() {
    dropdownBlog.classList.remove('animate__fadeOutDown')
    dropdownBlog.classList.add('animate__animated', 'animate__fadeInUp')
    dropdownBlog.style.opacity = '1'
    dropdownBlog.style.display = 'block'

}

dropdownBlog.addEventListener('mouseout', () => {
    dropdownBlog.classList.remove('animate__fadeInUp')
    dropdownBlog.classList.add('animate__fadeOutDown')
})

blog.addEventListener('click', () => {
    blog.classList.contains('active') ?   blogs() : console.log();
})

function pages() {
    dropdownPages.classList.remove('animate__fadeOutDown')
    dropdownPages.classList.add('animate__animated', 'animate__fadeInUp')
    dropdownPages.style.opacity = '1'
    dropdownPages.style.display = 'block'
}

dropdownPages.addEventListener('mouseout', () => {
    dropdownPages.classList.remove('animate__fadeInUp')
    dropdownPages.classList.add('animate__fadeOutDown')
})

page.addEventListener('click', () => {
    page.classList.contains('active') ?   pages() : console.log();
})


// модальное окно
document.addEventListener('DOMContentLoaded', function() {

    // получим кнопку id="btn" с помощью которой будем открывать модальное окно
    const btn = document.querySelector('#btn');
    // активируем контент id="modal" как модальное окно
    const modal = new bootstrap.Modal(document.querySelector('#modal'));
    // при нажатии на кнопку
    btn.addEventListener('click', function() {
      // открываем модальное окно
      modal.show();
      
    });
    const close = document.querySelector('#close')
    close.addEventListener('click', () => {
        modal.hide();
    })
});