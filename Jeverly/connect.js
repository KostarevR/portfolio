

async function getRes() {
    let resp = await fetch('../item.json')
    let content = await resp.json()
    console.log(content)

    let itemCard = document.querySelector('.item-card')

    let key;
    for(key in content) {
        console.log(content[key]);

        itemCard.innerHTML += `
            <div class="col">
                <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">${content[key].ID}</h5>
                <h5 class="card-title">${content[key].LastName}</h5>
                <h5 class="card-title">${content[key].FirstName}</h5>
                <p class="card-text">${content[key].Age}</p>
                <a href="#" class="btn btn-light">Go somewhere</a>
            </div>
            </div>
            </div>
        `
    }



}

getRes()


export default getRes;