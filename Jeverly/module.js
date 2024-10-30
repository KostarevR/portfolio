import getRes from './connect.js'



let btnAdd =  document.querySelector('.btn-add')

btnAdd.addEventListener("click", () => {
    getRes()
})
