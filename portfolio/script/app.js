let menu = document.querySelector(".navbar_burger_menu")
let items = document.querySelectorAll(".navbar_item")
let navbarList = document.querySelector(".navbar_list")
let main = document.querySelector(".main")
let firstLine = document.querySelector(".first_line")
let secondLine = document.querySelector(".second_line")
let lastLine = document.querySelector(".last_line")
let burger = document.querySelector(".burger_line_block")



menu.addEventListener("click", () => {
    lastLine.classList.toggle("hide")
    secondLine.classList.toggle("rotateg")
    burger.classList.toggle("rotatef")
    navbarList.classList.toggle("active_list")
    main.classList.toggle("active_padding")
    items.forEach(item => {
        item.classList.toggle("active_menu")
    })
})

let img = document.querySelector(".img-main-group")
img.addEventListener("click", (event) => {
    console.log(event.target);
    event.target.classList.toggle("img-main-active");
})
