const instImg1 = document.getElementById('instImg1')
const instImg2 = document.getElementById('instImg2')
const instImg3 = document.getElementById('instImg3')
const instImg4 = document.getElementById('instImg4')

const hover = document.querySelectorAll('.hover_inst')

hover[0].addEventListener('mouseover', () => {
    instImg1.style.transform = 'scale(1)'
    hover[0].style.opacity = '1'
})
hover[0].addEventListener('mouseout', () => {
    instImg1.style.transform = 'scale(1.1)'
    hover[0].style.opacity = '0'
})

hover[1].addEventListener('mouseover', () => {
    instImg2.style.transform = 'scale(1)'
    hover[1].style.opacity = '1'
})
hover[1].addEventListener('mouseout', () => {
    instImg2.style.transform = 'scale(1.1)'
    hover[1].style.opacity = '0'
})

hover[2].addEventListener('mouseover', () => {
    instImg3.style.transform = 'scale(1)'
    hover[2].style.opacity = '1'
})
hover[2].addEventListener('mouseout', () => {
    instImg3.style.transform = 'scale(1.1)'
    hover[2].style.opacity = '0'
})

hover[3].addEventListener('mouseover', () => {
    instImg4.style.transform = 'scale(1)'
    hover[3].style.opacity = '1'
})
hover[3].addEventListener('mouseout', () => {
    instImg4.style.transform = 'scale(1.1)'
    hover[3].style.opacity = '0'
})



instImg1.addEventListener('mouseover', () => {
    instImg1.style.transform = 'scale(1)'
    hover[0].style.opacity = '1'
})
instImg1.addEventListener('mouseout', () => {
    instImg1.style.transform = 'scale(1.1)'
    hover[0].style.opacity = '0'
})

instImg2.addEventListener('mouseover', () => {
    instImg2.style.transform = 'scale(1)'
    hover[1].style.opacity = '1'
})
instImg2.addEventListener('mouseout', () => {
    instImg2.style.transform = 'scale(1.1)'
    hover[1].style.opacity = '0'
})

instImg3.addEventListener('mouseover', () => {
    instImg3.style.transform = 'scale(1)'
    hover[2].style.opacity = '1'
})
instImg3.addEventListener('mouseout', () => {
    instImg3.style.transform = 'scale(1.1)'
    hover[2].style.opacity = '0'
})

instImg4.addEventListener('mouseover', () => {
    instImg4.style.transform = 'scale(1)'
    hover[3].style.opacity = '1'
})
instImg4.addEventListener('mouseout', () => {
    instImg4.style.transform = 'scale(1.1)'
    hover[3].style.opacity = '0'
})



