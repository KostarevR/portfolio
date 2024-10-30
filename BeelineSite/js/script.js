let btnCard = document.querySelectorAll('.btn-card')
let card = document.querySelectorAll('.card')
let chekRate = document.querySelector('.chek-rate')
let modalTitle = document.querySelector('.modal-title-js')
let modalBody = document.querySelector('.modal-body-js')






card.forEach(item => {
    item.addEventListener('click', () => {
        let partsTitle = item.querySelector('.card-title').innerHTML
        let partsCost = item.querySelector('.cost-title').innerHTML
        let partsCostInt = Number(partsCost)
        let wifiCost = 100;
        let tveCost = 100;
        let totalCount = partsCostInt;


        modalTitle.innerHTML = `
       
        <div class="title-final-price">Тариф «${partsTitle}»</div>
        ` 
        modalBody.innerHTML = `

        <div>
        <div>ИТОГО</div>
        <div>Стоимость подключения:</div>
        <div>Бесплатно!</div>
        <div>Wi-Fi-роутер «Smart Box GIGA»</div>
        <div>Аренда 100 ₽/мес</div>
        <form class="checkb">
        <div class="form-check form-switch">
        <input class="form-check-input check-wifi" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
        </div>
        <div>ТВ-приставка</div>
        <div>Аренда 100 ₽/мес</div>
        <div class="form-check form-switch">
        <input class="form-check-input check-tve" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
        </div>
        <div>У меня Смарт ТВ</div>
        <div class="form-check form-switch">
        <input class="form-check-input check-smart-tv" type="checkbox" role="switch" id="flexSwitchCheckDefault">
        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
        </div>
        <div>Ежемесячный платёж: 
            <div class="cost-final-price mb-4">${totalCount} р/мес</div>
        </div>
        </form>
        <form action="send.php" method="post">
        <label for="exampleInputEmail1" class="form-label mb-4">Контактный номер</label>
        <input type="tel" class="form-control mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="+7(___)___-___">
        <label for="exampleInputEmail1" class="form-label mb-4">ФИО</label>
        <input type="text" name="text" class="form-control mb-4" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Иванов Иван Иванович">
                         
        <button type="submit" class="btn btn-card">Отправить заявку</button>
        </form>
    </div>
        `
        
        // document.querySelector('.check-wifi').addEventListener('click', () => {
        //     let checkWifi = document.querySelector('.check-wifi').value;
        //     if (document.querySelector('.check-wifi').checked) {
        //         console.log(checkWifi)
        //         document.querySelector('.cost-final-price').innerHTML = wifiCost + totalCount + 'р/мес'
        //     }
        //     else {
        //         console.log('0');
        //         document.querySelector('.cost-final-price').innerHTML = totalCount + 'р/мес'

        //     }
        // })

        document.querySelectorAll('.checkb').forEach(item => {
            item.addEventListener('click', (event) => {
                let wifi = item.querySelector('.check-wifi').value;
                let tve = item.querySelector('.check-tve').value;
                let smart = item.querySelector('.check-smart-tv').value;
                

                if (document.querySelector('.check-wifi').checked || document.querySelector('.check-tve').checked) {
                    console.log(wifi)
                    document.querySelector('.cost-final-price').innerHTML = wifiCost + totalCount + 'р/мес'
                    document.querySelector('.cost-final-price').innerHTML = tveCost + totalCount + 'р/мес'

                    // event.stopPropagation()
                }
                else {
                    console.log('0');
                    document.querySelector('.cost-final-price').innerHTML = totalCount + 'р/мес'
    
                }

                if (document.querySelector('.check-wifi').checked & document.querySelector('.check-tve').checked) {
                    console.log(wifi)
                    document.querySelector('.cost-final-price').innerHTML = wifiCost + tveCost + totalCount + 'р/мес'



                }

                if (document.querySelector('.check-tve').checked == true) {
                    document.querySelector('.check-smart-tv').checked = false
                }
                // else {
                //     document.querySelector('.check-smart-tv').checked = true
                // }

                // if (document.querySelector('.check-smart-tv').checked == true) {
                //     document.querySelector('.check-tve').checked = false
                // }
               
            })
        })

    

        
        
        
        

    })
})



