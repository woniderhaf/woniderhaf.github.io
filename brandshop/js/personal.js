const eye1 = document.querySelector('.eye1')
const eye2 = document.querySelector('.eye2')
const eye3 = document.querySelector('.eye3')

const pass__new__one = document.querySelector('#pass__new__one')
const pass__new__two = document.querySelector('#pass__new__two')
const pass__old = document.querySelector('#pass__old')

eye1.addEventListener('click' , () => {
    pass__new__one.setAttribute('type', 'text')
    eye1.addEventListener('click' , () => {
        pass__new__one.setAttribute('type', 'password')
    })  
})

eye2.addEventListener('click' , () => {
    pass__new__two.setAttribute('type', 'text')
    eye2.addEventListener('click' , () => {
        pass__new__two.setAttribute('type', 'password')
    })  
})

eye3.addEventListener('click' , () => {
    pass__old.setAttribute('type', 'text')
    eye3.addEventListener('click' , () => {
        pass__old.setAttribute('type', 'password')
    })  
})