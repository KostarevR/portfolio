
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>

<body>

    <header>
        <div class="head">
            <div class="navbar">
                <div class="navbar_logo">
                    <a href="#">
                        <img width="80" src="/img/logo3 (1).png" alt="logo">
                    </a>
                </div>
                <div class="navbar_burger_menu">
                    <div class="burger_line_block">
                        <div class="burger_line first_line"></div>
                        <div class="burger_line second_line"></div>
                        <div class="burger_line last_line"></div>
                    </div>
                </div>
                <div class="navbar_items">
                    <ul class="navbar_list">
                        <li class="navbar_item"><a href="#home" class="navbar_link">Главная</a></li>
                        <li class="navbar_item"><a href="#about" class="navbar_link">Протфолио</a></li>
                        <li class="navbar_item"><a href="#skills" class="navbar_link">Навыки</a></li>
                        <li class="navbar_item"><a href="#contact" class="navbar_link">Связь</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    
    <main class="main">
        <div class="home" id="home">
            <div class="hello_text">
                <h1>Привет, я<br> Fullstack Developer</h1>
                <div>Разработка полноценного сайта,<br> лендинга, онлайн магазина или <br> полноценного приложения это ко мне</div>
                <button class="button"><a href="#contact">Создать сайт</a></button>
            </div>
            <div class="hello_img">
                <div><img src="/img/method-draw-image (2).svg" alt="" srcset=""></div>
            </div>
        </div>
        <div class="about" id="about">
            <div class="block_title">Мои работы</div>
            <!-- <div class="about_code">
                    <span class="numLine">1</span><span class="blue">class </span><span class="green">Developer </span><span class="yellow">{</span><br>
                        <span class="numLine">2</span><span class="paddingSecondLine blue">public</span> <span class="cyan">$firstName</span> = <span class="orange">"Ruslan"</span>;<br>
                        <span class="numLine">3</span><span class="paddingSecondLine blue">public</span> <span class="cyan">$lastName</span> = <span class="orange">"Kostarev"</span>;<br>
                        <span class="numLine">4</span><span class="paddingSecondLine blue">public</span> <span class="cyan">$job</span> = <span class="orange">"Developer"</span>;<br>
                        <span class="numLine">5</span><span class="paddingSecondLine blue">public</span> <span class="cyan">$happyClients</span> = <span class="blue">true</span>;<br>
                        <span class="numLine">6</span>
                        <br>
                        <span class="numLine">7</span><span class="blue paddingSecondLine">function </span><span class="yellow">say </span><span class="violet">( ) </span><span class="violet">{</span><br>
                            <span class="numLine">8</span><span class="yellow paddingNewLine">echo </span><span class="orange">"Считай что твой сайт уже готов!"</span>;<br>

                            <span class="numLine">9</span> <span class="violet paddingSecondLine">}</span>
                    <br>
                    <span class="numLine">10</span><span class="yellow">}</span>
            </div> -->

            <div class="img-main-group">
                <img class="img-main" width="200" src="/img/5253592284547640048.jpg" alt="">
                <img class="img-main" width="200" src="/img/5253592284547640047.jpg" alt="">
                <img class="img-main" width="200" src="/img/5253592284547640046.jpg" alt="">
            </div>


            <!--  -->

        </div>
        <div class="title">
            <div class="block_title">Skill-Set</div>
            <!-- <div class="border_line"></div> -->
        </div>
        <div class="skills" id="skills">
            <div class="skills_items">
                <div class="skills_card">
                    <img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCI+CjxwYXRoIGZpbGw9IiNGNDUxMUUiIGQ9Ik00Mi4yLDIyLjFMMjUuOSw1LjhDMjUuNCw1LjMsMjQuNyw1LDI0LDVjMCwwLDAsMCwwLDBjLTAuNywwLTEuNCwwLjMtMS45LDAuOGwtMy41LDMuNWw0LjEsNC4xYzAuNC0wLjIsMC44LTAuMywxLjMtMC4zYzEuNywwLDMsMS4zLDMsM2MwLDAuNS0wLjEsMC45LTAuMywxLjNsNCw0YzAuNC0wLjIsMC44LTAuMywxLjMtMC4zYzEuNywwLDMsMS4zLDMsM3MtMS4zLDMtMywzYy0xLjcsMC0zLTEuMy0zLTNjMC0wLjUsMC4xLTAuOSwwLjMtMS4zbC00LTRjLTAuMSwwLTAuMiwwLjEtMC4zLDAuMXYxMC40YzEuMiwwLjQsMiwxLjUsMiwyLjhjMCwxLjctMS4zLDMtMywzcy0zLTEuMy0zLTNjMC0xLjMsMC44LTIuNCwyLTIuOFYxOC44Yy0xLjItMC40LTItMS41LTItMi44YzAtMC41LDAuMS0wLjksMC4zLTEuM2wtNC4xLTQuMUw1LjgsMjIuMUM1LjMsMjIuNiw1LDIzLjMsNSwyNGMwLDAuNywwLjMsMS40LDAuOCwxLjlsMTYuMywxNi4zYzAsMCwwLDAsMCwwYzAuNSwwLjUsMS4yLDAuOCwxLjksMC44czEuNC0wLjMsMS45LTAuOGwxNi4zLTE2LjNjMC41LTAuNSwwLjgtMS4yLDAuOC0xLjlDNDMsMjMuMyw0Mi43LDIyLjYsNDIuMiwyMi4xeiI+PC9wYXRoPgo8L3N2Zz4=" />
                    <div class="skills_title">Git version control</div>
                    <div class="skills_description">Каждое изменение проекта фиксируется, на любом этапе разработки можно все вернуть назад</div>
                </div>
                <!-- #F4511E -->
                <div class="skills_card">
                    <img src="data:image/png;base64,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">
                    <div class="skills_title">Web Development</div>
                    <div class="skills_description">Разработка сайта или его "натяжка" на любую интересующую CMS WordPress, Tilda, Opencard, Bitrix</div>
                </div>
                <div class="skills_card">
                    <img width="50" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEZUlEQVR4nO1bb4gVVRSfiiQJE0la2p1zBtegEL/5QfrUl4wl3X3nPHqCIhgF+60QYhGE2AKFEsT+QX8Q+6CFJSEogZGRlliB7criQl9MQcVS213fufM28M/EnTf7mjfOzvuzw7w3782F34d358yde3/vzO/ee+Zcw6ijlAr9qBh/FsbbitFpZ3h9/KmU6wUjrqIYv2z1wBoGwcHYCBCCsZYPqFFPIBiLjwCG8dQRwDCeEZCVmIrNfeZsHvvTBN3nuMZvZBrAmQiOt1rVs1mAUzkNwh+StzYLw5+NdR53CuGuTvCA9/T9iuD9SDvC74Xx87nfMwQrnVHjQcXwV9WgCC8I48f17EkSIACKiuGE7rwfQnjZN7C9ZQJwb0RHjznDax52CuZiIbzjecDr5efipwHbbW49mZvmbFtGgJ2DwTBbZ13Po5XO1SQATjhbrUe8f/uAr/5H9z42BwIecGV2EFe413L4qjDeaxkBwnDMJhwOQhF8VI8HCME1TZbbPuEngYHeKW54crlTWLVIEcwEXwO7YPaV24UP2lsDKMoDYFq4/wn3OsOO+++1XvEG+UX1wPDsVKF/adi1lBGA2gvOzazHZd4z3g16mK4vMr7kI23yFvU+7tm/3WIRxAUT4P2jv94YenqJPQS9AXJmdb2nKSXP9jWvvZFaz04NAcp7rxXjRIiHbCzfDz947V0XwuNR4pdKAtS8gEk99QWFsB50CAHYNJJYCH1oE64JQgi3VFy0ownIwcthtsUhXFX/QijNBLDrBdOKccqPqiVqCAF6He8J2VGt9JV6gt8V49cNg+BwcM/Q3hpAcLjSbmXHB0WnYDy0gP6tSxEB+I9ifFOjeuPkLmu3NwMh+CU9BHBHaQBmBKhu9QBxozPwmQ5a+KEITncFASpvvRhmqwMclZBV+DR41QtmFGIBwUa9c0zeAxjPCuE79wO+jfIAYTxixFxstjhtIjjhEhgXfAuqtBDgpF8DOCPAyTyAs1fAaVgDCE7fHHjqsbheT8cwHpC89UbyGkA4oj9oBG1LZD0rhHfnnQYJzhXz1jNxJkMIw+5WEDAampmRM6k7IkKciaCTiSBns4DT6CwwFxOMivP544XC+FvHxgSjihsvJPhbT3OdGhPcHgF/vHBPW8YEheFMaIcIDkYS0EHT4PowW/3tPmoh1DEESNlFQ4QJJrvFA5ymNKCqk2i7scUmEKb8qSFACC4pghcW8jXo/6M88E2qCBCGf4XN1bpeZ3xJHp9vBvZQ31pNoJth5o9Etz8B+J1bx+ZArVy/2oADbv/y1ub0EEC4v54kp3ogDBd1W0Uyn0ucACG8q3OAQwSqVEMDJvTqTuf66UTJpkWQ8LzOIJsvaSoBAsxNobaDK3qiPoz4U2HjKFpHvNyEhAlg2BcmTlX/RtQ0SHjIzSRvUgT1QkwY3povgaptNUAlhHYh4JBLAONXXUmA6Ngg4fmkBx8/AdTlR2dVRFZ2VxyeLuk1N+GpFB2fP1nv8fn/ALZm6MpduMBmAAAAAElFTkSuQmCC">
                    <div class="skills_title">Front-end Development</div>
                    <div class="skills_description">Полная или частичная разработка визуальной части</div>
                </div>
                <div class="skills_card">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFC0lEQVR4nO1ZW4gcVRBtV01QEBQxbpyu6s26Im40JkajQtQvJaC7UzXjBEUN+VrzJ/GJL3bRH/HxJfrj40eNH/74QOMLoqBZ0QjGYHyAGqOCazS7O7d6Ng+lpe5M7zw2me5xe6dbTEGxs31v1z3nVk3dqjuOMw8JRlaf6JO7Rhg2GIaHhfBlQzAuDN8Ygp+Ecb9hPKxqP9tndmy8NvchKeAtakNtOd0UU8ytEIb7hPBdwyjCGCShasswviME95q8e8GCgN83fO4pPsEmQ/hZUsAjiRF+qmvq2vMmEFzlnOATjgjDb90iIHP1D2G8JygNLvpXJKYLuXOEcFeKBIImJdw1NeQOdESiXHCvFMI/UwfPc72j2GKRmCI4WwimMgA6OLLC5MwQLoskIoxb0geLEWEGL8YgApOpA+VI3f8/IkLwUgaABu0VXogkMlPA/sx/2fNenxNHynm4onYQBRnTfWWCtbFImKFlZ9bTMO7MAPhA1RB8oZgaMbYnwvBDeRgH6yUKbBKCidRIEEwoBsVi8RVhuWH4MZLIbCVKcHtQco6vF404Yhg/6aIHxnXNsGhUIsJ4p2H0dTwWkfpu4E7DWApGnZ5ZjxVhueTxbkO4VQhNcjuPxjC8JYR3hRFhCYw6PYZgvTB+2Ti/MyJ1/VYX8EturnGuDb0iXGwYbzIMY5q6DcN2Ydit7q81U4dUq02WPrNj22tzx/RdtRGGTig+51zdMCH87kiYnChp7278Wxg/EIL7ffYua118PqK2KuRdLoQPCOGHtbWOiiXSYCddnyGYMYw7DMOzpuDdYdi9QdOjtgDlUu8ZU9fiaYHjHKeqn/WZHSNYa8i9sRrz8Jy1QTDTSRjGIAJvpJahOO4G4mvRRIq5FR3tTvdJVAy758eKV59hOMmLhcRIMIqfh6FYJDSe9a/kvZV6OGbIE98L913YiLGtCMErQck9yb5QGlxkCG5LtbQne76MzWJaN7A4ZmNlXbhDit6q8Nk0nXW6Ydjc1dqL9DCGzbp2A7aLDMHnOh6LSI3MYWF4slLqx6bxordKGB8UhvfDciGh+PeF8D17juS9lY1rVgp9nhA+ZQj/CufHJlKPTThUO4WvDmuvUDT0/OHcpfbKVK8/GbfEPtl1rn0HNqiN1nurQGsrgmuqNu2VaxOujok0uxsmDMEztqxoKVeSEJ9zriG8WdcQwt/bYYk01km4GMKfDeHbQvC4ltqatnV39bpGT3LV0G74v45peWPnaovA+ITe+aot6SAMo4loVZtWhuK4GwhvRruXcLUhOJg2WDmqN+BAY0aNCq9SFssUQ1gpM14fi8SsZ9i9xDDuzY4ncK/2LbEJGMLnw1QYXLf0ZL3SF4bpFAmIIXykpeV9OpKINUDwUZm88+qh1r+kRmh390jAV7al5v4lIQ5tgQ3Dxzoej0g1Mxw0DI9KyettCjly19i2lmFbkt8jjX9h2CaEoxrWTZhKXq8heKwxCcUmUnctHNAOUC/tGi8hrJvXDSy27WkeNjb9GErwtSHYM+dk12fVseqPofpOHjaqDbXlNNoedXr0txANdZupWnB1TKRl136p1jywvtVTSYgwLrW2dQ3GX9thSbpn36NXOOp2vYPSpkdDT4s8PcUn896poV39rM90TOfYuQy3VkMGt9Y8GCTYs+PraWUoiZ/JXo0mcqxnx2z17KFkuWfvWLLYs89LstKzJypp9OwLLgvZsx8T5z8u/wC8OKqP0KfibgAAAABJRU5ErkJggg==">
                    <div class="skills_title">Back-end Development</div>
                    <div class="skills_description">Разработка серверной части а так же построение базы данных и админ панели</div>
                </div>
                <div class="skills_card">
                    <img width="65" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADN0lEQVR4nO1aO4/TQBDeQ9AhQUOXHUvHtUjHqwPRAyfvJKQBRMkP4CEaECl5/QAaEPA3jvIqoKKCA1GSo4EoMxGl0fqcEPbseDfY8V60nzRKHK9nPd/OK/YKERAQEBAQELAfkTwUB0jBdUa4lyf6XCLEilhW0K7xH0nBozxJzyFcE8tOAOetftw6QSh7WsSyIhFiRa/wnpVXcmts/FITUIRp4wMBWKEHJCVZt2kZZ/3aPIBKsm7TMs769RGAi42psceNV7bseGL03+pQbRkkgwCTaRtxms8wpPQ4m2NSHdrR1UobIdonBFRmcOMhYKxk2fFCCGAFm01n+0JRsLkAAuSWt1Ug6wBrJYA8bi2XLge4IhCAwQN63oUAd6KTjPCVEb4MlDxunte/EcpvrGBbfx9stNbG4zmO1uu+P1HnBNp4UrI/jKFDCl6TkrdydD7Jsvhzake3GeEOIbwaIlzR17qQ4BUBnBk/UjIeYYSMcud3G1b36FTwfqjkOUb5lhEu7XqA3BnFLaXFhQRvCOA4Wiclv2sDtFGpQR15xhz3s7t6hFEOf3SPHdafv+Lo6NT1/ZS4dnSx6Pp5729ukMUEtsanYxVc1t3bMJbnScG7HD1OJDROADsYn+pT8ikruM8ID3QuKNBnTUKjBLCj8XnxP1OvBQmNEcBzGF8U//9DQiMEDDZaa2a21xWgTNes+J9ZVaaqg9lXNEIAp3Vbvkhunj7ECohR3rDSVRL/edC69RzJBXGQFLw0+4rGPIDNum3hATbx79pXNJ0D+v/EKLbOVhH/LjnGhyrQt8nWLvHvkmB96QP6ZSSwks9s4n+iz7avaJoAWxII4YNl/bc23hsCykiwif95jPeKAA1GOGVWB123R7HcmBX/k6ri2Fd4R8A0Cdl/+ze6brOCu+l/f5SPc/v/7HkAIXRdjPeSgAkJCrYZ4bOu29oLGOUn/cQn7/lA6gHZeBfjvSVgkQgEYPCAXqUemhS8fxeeovL7o0W/fvaOADTe78/Yl+eJ1LMjhMydFx68Cc6VunaEkOeuXxsoECAnq5+3M2T5d2NjRoDeeBx2Y0P9Wdc3JGVZv+qsGxAQEBAQECAWiD8ROFcIBAkJDgAAAABJRU5ErkJggg==">
                    <div class="skills_title">Fullstack Development</div>
                    <div class="skills_description">Разработка готового продукта включая внешнюю и внутреннюю часть с нуля</div>
                </div>
                <div class="skills_card">
                    <img width="50" src="data:image/png;base64,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">
                    <div class="skills_title">Administration</div>
                    <div class="skills_description">Помощь в наладке и администрировании вашего сайта плюс доработка необходимого функционала</div>
                </div>
            </div>
            <div><img src="/img/method-draw-image (4).svg" alt="" srcset=""></div>
        </div>
        <div class="contact" id="contact">
            <h2 class="block_title">Связаться со мной</h2>
            <div class="contact_mail">
                <!-- <form class="contact_form" action="">
                <input class="form_input" type="email" name="" id="" placeholder="Email">
                <input class="form_input" type="text" name="" id="" placeholder="Message">
                <button class="button">Связаться со мной</button>
            </form> -->
                <div class="contact_another">
                    <a class="contact_link" href="https://wa.me/79826512219?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%F0%9F%91%8B%20%D0%9C%D0%B5%D0%BD%D1%8F%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%B5%D1%81%D1%83%D0%B5%D1%82...">
                        <img width="95" src="data:image/png;base64,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">
                    </a>
                    <a class="contact_link" href="https://tlgg.ru/@kostarevrus">
                        <img width="80" src="data:image/png;base64,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">
                    </a>
                    <a class="contact_link" href="tel:+79826512219">
                        <div class="block_title ">+7 982-651-22-19</div>
                    </a>
                </div>
                <div><img src="/img/method-draw-image (5).svg" alt=""></div>
            </div>
            <!-- <div class="or block_title">OR</div> -->
        </div>

    </main>
    <footer>

    </footer>









    <script src="/script/app.js"></script>
</body>

</html>