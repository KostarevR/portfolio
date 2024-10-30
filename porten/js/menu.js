let burger = document.querySelector('.nav-bar-burger')
let navBar = document.querySelector('.navbar__items')
let burgerSpan = document.querySelector('.burger-span')
let navBarOpen =document.querySelector('.navbar__items__open')

burger.addEventListener('click', () => {
    navBar.classList.toggle('navbar__items__open')
    burger.classList.toggle('nav-bar-burger__active')
    burgerSpan.classList.toggle('burger-span__close')
})


navBar.addEventListener('click', () => {
    navBar.classList.remove('navbar__items__open')
    burger.classList.remove('nav-bar-burger__active')
    burgerSpan.classList.remove('burger-span__close')
})
