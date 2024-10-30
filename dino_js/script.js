const dino = document.getElementById('dino')
const cactus = document.getElementById('cactus')
const score = document.getElementById('score')



document.addEventListener('keydown', function(event){
    jump()
})
function jump() {
    if (dino.classList != 'jump') {
        dino.classList.add('jump')
    }
    setTimeout(function() {
        dino.classList.remove('jump')
    }, 300)
}

let countScore = 0
setInterval(() => {
    countScore += 1
    score.textContent = countScore
}, 100)

// придумай как решить усложнение добавить скорости кактусу после 20 очков
let speedRun = setInterval(function() {
    let speedUp = parseFloat(window.getComputedStyle(cactus).animationDuration)
    if (score.textContent > 100) {
        cactus.style.animationDuration = '1.3s'
        
    } 
    
})



let isAlive = setInterval(function() {
    let dinoTop = parseInt(window.getComputedStyle(dino).getPropertyValue('top'))
    let cactusLeft = parseInt(window.getComputedStyle(cactus).getPropertyValue('left'))

    if (cactusLeft < 50 && cactusLeft > 0 && dinoTop >= 140) {
        countScore = 0
        alert('GAME OVER! \n' + 'Score: ' + score.textContent)

    }
}, 10)

