
let btnArea = document.querySelectorAll('.btn-area')
let p12 = document.querySelector('.player');
let playerWins = document.querySelector('.player-win')
let clearRes = document.querySelector('.clear-res').addEventListener('click', () => {
localStorage.clear()
localStorage.setItem('X', 0)
localStorage.setItem('O', 0)
location.reload()
})
let pVsp = document.querySelector('.p-vs-p')
let pVsIi = document.querySelector('.p-vs-ii')

// pVsp.addEventListener('click', () => {
//     localStorage.clear()
//     localStorage.setItem('X', 0)
//     localStorage.setItem('O', 0)
//     location.reload()
// })

// test game vs ii



// test game vs ii
// pVsp.addEventListener('click', () => {
    // localStorage.clear()
    // localStorage.setItem('X', 0)
    // localStorage.setItem('O', 0)
    // location.reload()


console.log('выбрана игра с другом');

start(btnArea);

function start(btnArea) {
    let i = 0;
    p12.innerHTML = 'Игру традиционно начинают "Х"'
    


    
	for (let area of btnArea) {
		area.addEventListener('click', function stop() {
			if (i % 2 == 0) {
                p12.innerHTML = 'Ходят "O"'
				this.textContent = 'X';
                this.classList.add('p1')
                this.classList.remove('empty')
                this.removeEventListener('click', stop);
			} else {
                p12.innerHTML = 'Ходят "X"'
				this.textContent = 'O';
                this.classList.add('p2')
                this.classList.remove('empty')
                this.removeEventListener('click', stop);
			}

            
            if (isVictory(btnArea) ) {
                let winner = this.textContent
                let winnerKey = localStorage.getItem(winner)
                winnerKey++
                localStorage.setItem(winner, winnerKey)
                let localSavePointRead = localStorage.getItem(winner, winnerKey)
                console.log(localSavePointRead + ' localSavePointRead')
                alert(this.textContent + ' Победили!');
                location.reload();
            } else if (i == 8) {
                alert('Ничья');
                location.reload();
            }
            
            i++;
		});
	}
}

playerWins.innerHTML = `
X = ${localStorage.getItem('X')}
O = ${localStorage.getItem('O')}

`


function isVictory(btnArea) {
	let combs = [
		[0, 1, 2],
		[3, 4, 5],
		[6, 7, 8],
		[0, 3, 6],
		[1, 4, 7],
		[2, 5, 8],
		[0, 4, 8],
		[2, 4, 6],
	];




	for (let comb of combs) {
		if (
            
			btnArea[comb[0]].textContent == btnArea[comb[1]].textContent &&
			btnArea[comb[1]].textContent == btnArea[comb[2]].textContent &&
			btnArea[comb[0]].textContent != ''
		) {
			return true;
		}
	}
	
	return false;
}


// })