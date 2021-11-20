<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        <meta name="robots" content="index,follow">

        <link rel="icon" href="img/favicon.ico">

        <meta name="theme-color" content="#fff">

        <meta name="og:type" content="website">
        <meta name="og:image" content="img/32x32.png">

        <meta name="og:url" content="http://site.ru/">
        <meta name="cannonical" content="http://site.ru/">

        <meta name="og:title" content="Заголовок страницы">

        <meta name="description" content="SEO описание страницы">
        <meta name="og:description" content="SEO описание страницы">

        <meta name="keywords" content="Ключевые слова">

        <link rel="stylesheet" href="css/jquery-ui.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/styles.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <title>Подобрать идеальную дверь за 1 минуту</title>
    </head>

    <body>
        <form class="content">
            <div class="preloader">
                <svg id="mainSVG" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 600">
                    <g id="whole" fill="#FEFEFE" stroke="#FEFEFE" stroke-width="2">
                      <circle id="leader" cx="328" cy="300" r="10"/>
                      <circle class="follower" cx="364" cy="300" r="10"/>
                      <circle class="follower" cx="400" cy="300" r="10"/>
                      <circle class="follower" cx="436" cy="300" r="10"/>
                      <circle class="follower" cx="472" cy="300" r="10"/>
                    </g>
                </svg>
            </div>           
            <div class="welcome show">
                <div class="left"></div>
                <div class="right">
                    <a href="https://vkhodnyedveri.ru/" class="logo">
                        <img src="img/logo.jpg" alt="">
                        <span class="gray">Входные</span> Двери
                        <span class="small">гипермаркет дверей</span>
                    </a>
                    <div class="center">
                        <h1 class="title">Выберите идеальную входную дверь за 1 минуту</h1>
                        <p>Ответьте всего на 3 вопроса и найдете дверь своей мечты +бонус бесплатная доставка</p>
                        <button class="btn btn-green upper" data-next type="button">
                             <i class="fas fa-check"></i>
                             <span>Подобрать дверь</span>
                        </button>
                        <p class="upper">Бонусы после прохождения</p>
                        <div class="bonuses">
                            <div class="bonus">
                                <div class="img" style="background-image:url(img/bonus1.jpeg);"></div>
                                <div class="text">Бесплатный замер</div>
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="bonus">
                                <div class="img" style="background-image:url(img/bonus2.jpeg);"></div>
                                <div class="text">Скидка 20% на установку двери</div>
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="phone">
                            <a href="tel:+79689674003 ">
                                <i class="fas fa-phone-alt"></i> <span>+7 (968) 967-40-03 </span>
                            </a>
                            <span class="time">Пн-Вск 09.00-21.00</span>
                        </div>
                        <div class="requisites">
                            <a href="https://vkhodnyedveri.ru/" target="_blank">vkhodnyedveri.ru</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="questions">
                <div class="left">
                    <p class="title">Выберите идеальную входную дверь за 1 минуту</p>
                    <div class="questions-body">
                        <div class="top">
                            <h2 class="question-1">Вам нужна дверь в квартиру, частный дом, техническая?</h2>
                            <h2 class="question-2">Какие характеристики вам важны в двери?</h2>
                            <h2 class="question-3">Какой бюджет у вас запланирован на покупку двери?</h2>
                            <div class="progress">
                                <p>Готово: <span>0%</span></p>
                                <div class="line">
                                    <div></div>
                                </div>
                            </div>
                        </div>
                        <div class="question-1">
                            <div class="answers">
                                <div class="check-img">
                                    <input name="q1_1" value="Квартира" type="checkbox" id="q1_1">
                                    <label for="q1_1" data-next>
                                        <img src="img/img1.jpg" alt="">
                                        <span>Квартира</span>
                                    </label>
                                </div>
                                <div class="check-img">
                                    <input name="q1_2" value="Частный дом" type="checkbox" id="q1_2">
                                    <label for="q1_2" data-next>
                                        <img src="img/img2.jpg" alt="">
                                        <span>Частный дом</span>
                                    </label>
                                </div>
                                <div class="check-img">
                                    <input name="q1_3" value="Техническая дверь" type="checkbox" id="q1_3">
                                    <label for="q1_3" data-next>
                                        <img src="img/img3.jpg" alt="">
                                        <span>Техническая дверь</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="question-2">
                            <div class="answers">
                                <label class="check" for="q2_1">
                                    <input name="q2_1" value="Терморазрыв" type="checkbox" id="q2_1">
                                    <span>Терморазрыв</span>
                                    <span data-next></span>
                                </label>
                                <label class="check" for="q2_2">
                                    <input name="q2_2" value="Износостойкая отделка" type="checkbox" id="q2_2">
                                    <span>Износостойкая отделка</span>
                                    <span data-next></span>
                                </label>
                                <label class="check" for="q2_3">
                                    <input name="q2_3" value="Взломостойкость" type="checkbox" id="q2_3">
                                    <span>Взломостойкость</span>
                                    <span data-next></span>
                                </label>
                                <label class="check" for="q2_4">
                                    <input name="q2_4" value="Другие" type="checkbox" id="q2_4">
                                    <span>Другие</span>
                                    <span data-next></span>
                                </label>
                            </div>
                        </div>
                        <div class="question-3">
                            <input type="text" name="min" id="min" value="20000" hidden>
                            <input type="text" name="max" id="max" value="80000" hidden>
                            <div id="slider-range"></div>
                        </div>
                        <div class="btns">
                            <button class="btn" data-prev type="button" style="display:none;">
                                <i class="fas fa-chevron-left"></i> <span>Назад</span>
                            </button>
                            <button class="btn btn-green" data-next type="button" disabled>
                                <span>Далее</span> <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="assistant">
                        <img src="img/consultant.png" alt="">
                        <div>
                            <p>Александра <span>Эксперт по выбору дверей</span></p>
                        </div>
                    </div>
                    <div class="slogan">Уличные и квартирные двери сильно отличаются. В уличных дверях должен быть установлен терморазрыв - специальная конструкция, которая не дает двери замерзать.</div>
                    <div class="bonuses">
                        <p>
                            Пройдите опрос, чтобы получить 
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 25 32" id="bonus_arrow">
                                <path d="M1 5.886a14.567 14.567 0 0111.17.58c6.654 3.168 9.812 10.714 7.668 17.549l-1.777 3.733" stroke="#AFAFAF" stroke-miterlimit="10"/>
                                <path d="M16.268 22.697l1.791 5.05 5.05-1.791" stroke="#AFAFAF" stroke-miterlimit="10" stroke-linejoin="bevel"/>
                            </svg>
                        </p>
                        <div></div>
                        <div class="bonus">
                            <div class="img" style="background-image:url(img/bonus1.jpeg);"></div>
                            <div class="text">Бесплатный замер</div>
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="bonus">
                            <div class="img" style="background-image:url(img/bonus2.jpeg);"></div>
                            <div class="text">Скидка 20% на установку двери</div>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="final">
                <p class="title">Отлично. Последний шаг!</p>
                <div class="final-body">
                    <div class="left">
                        <p>Проанализируем ваши ответы и подберем подходящую дверь. Введите свой телефон для получения расчета стоимости </p>
                        <div class="bonus-final">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" id="gift" style="margin-top: -5px; margin-right: 5px; width: 24px; height: 24px; fill: rgb(81, 185, 5);">
                               <path d="M272.696 280.342h183.118V512H272.696zM56.186 280.342h183.118V512H56.186zM398.762 94.432a63.52 63.52 0 007.772-30.521C406.535 28.67 377.864 0 342.624 0c-26.065 0-52.735 13.468-73.168 36.951A130.25 130.25 0 00256 55.511a130.25 130.25 0 00-13.456-18.56C222.111 13.468 195.442 0 169.376 0c-35.24 0-63.911 28.671-63.911 63.911a63.512 63.512 0 007.772 30.521H26.2v152.519h213.104V94.432h33.391v152.519H485.8V94.432h-87.038zm-229.386 0c-16.828 0-30.52-13.692-30.52-30.521s13.692-30.52 30.52-30.52c30.299 0 59.106 30.993 67.489 61.04h-67.489zm173.248 0h-67.489c8.383-30.048 37.19-61.04 67.489-61.04 16.828 0 30.52 13.692 30.52 30.52-.001 16.829-13.692 30.52-30.52 30.52z"/>
                           </svg>
                            Бонусы скидка 30% на стандартную установку и бесплатная доставка будут прикреплены к номеру вашего телефона!
                        </div>
                        <p class="upper">ПОЛУЧИТЕ ВАШИ БОНУСЫ ДАЛЕЕ</p>
                        <div class="bonuses">
                            <div class="bonus">
                                <div class="img" style="background-image:url(img/bonus1.jpeg);"></div>
                                <div class="text">Бесплатный замер</div>
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="bonus">
                                <div class="img" style="background-image:url(img/bonus2.jpeg);"></div>
                                <div class="text">Скидка 20% на установку двери</div>
                                <i class="fas fa-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="input-phone">
                            <input type="text" name="phone" placeholder="+7 (___) ___-__-__" data-inputmask="'mask':'+7 (999) 999-99-99'">
                            <button class="btn-msg" type="button">
                                <span class="icons">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_telegram">
                                            <path d="M201 323.9l-8.4 119.2c12.2 0 17.4-5.2 23.6-11.4l56.8-54.4 117.8 86.2c21.6 12 36.8 5.6 42.6-19.8l77.2-362c6.8-32-11.6-44.4-32.6-36.6L23.8 218.9c-31 12-30.6 29.4-5.2 37.2l116 36.2 269.8-168.8c12.8-8.4 24.2-3.8 14.8 4.6L201 323.9z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="mes_whatsapp" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                                            <style>.atst0{fill:#050505}</style>
                                            <path d="M373.4 305.2l-.2 1.6c-47-23.4-51.8-26.4-57.8-17.4-4.2 6.4-16.4 20.6-20.2 24.8-3.8 4.2-7.4 4.4-13.8 1.6-6.4-3.2-27-10-51.2-31.6-19-17-31.6-37.8-35.4-44.2-6.2-10.8 6.8-12.4 18.8-34.8 2.2-4.4 1-8-.6-11.2-1.6-3.2-14.4-34.6-19.6-47-5.2-12.4-10.4-10.8-14.4-10.8-12.2-1-21.2-.8-29.2 7.4-34.4 37.8-25.8 76.8 3.8 118.4 57.8 75.8 88.8 89.8 145.2 109 15.2 4.8 29.2 4.2 40 2.6 12.2-2 37.6-15.4 43-30.4 5.4-15 5.4-27.6 3.8-30.4-1.6-3.2-5.8-4.8-12.2-7.6z"/>
                                            <path class="atst0" d="M437.8 73.6C273.8-85 2.2 30 2.2 253.8c0 44.8 11.8 88.4 34 126.8L0 512l135.2-35.2c168.6 91 376.8-29.8 376.8-223 0-67.8-26.4-131.6-74.6-179.4l.4-.8zm31.6 179.6c-.2 162.8-178.8 264.6-320.2 181.4l-7.6-4.6-80 20.8L83 373l-5-8C-10 225 91 42 257.8 42c56.6 0 109.8 22 149.8 62 39.8 39.6 61.8 92.8 61.8 149.2z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_viber">
                                            <path d="M485.1 295.3c15.1-128-7.4-208.9-48-245.3-65.5-62.5-286.9-71.7-365.4 2.8-35.2 36.4-47.6 89.8-49 156.1s-3 190.1 112.5 223.8v51.4s-.8 20.7 12.5 25.1c15.1 5 22.1-4.8 69.3-61.3 79 6.8 139.8-8.8 146.7-11.1 16.5-5.5 106.9-17.7 121.4-141.5zM225.3 411.6s-50 62.3-65.7 78.6c-5.2 5.2-10.8 4.8-10.6-5.6 0-6.8.4-85.2.4-85.2-98-28.1-92.2-133.6-91.2-189 1-55.2 11.1-100.5 41-131C168 15 362.1 29.3 411.5 75.9c60.5 53.6 39 204.9 39 210.1-12.3 103.5-85.6 110.1-99.2 114.5-5.5 1.9-58.9 15.5-126 11.1z"/>
                                            <path d="M253 91.4c-8.2 0-8.2 12.7 0 12.7 63.5.4 115.7 44.6 116.3 125.8 0 8.6 12.5 8.4 12.3 0C381 142.6 323.9 92 253 91.4z"/>
                                            <path d="M336.4 216.7c-.2 8.4 12.3 8.8 12.3.2 1-48.2-28.7-87.8-84.4-92-8.2-.6-9 12.3-.8 12.7 48.4 3.8 73.9 36.8 72.9 79.1zM323.1 271.4c-10.6-6.2-21.1-2.4-25.7 3.6l-9.2 11.9c-4.8 6.2-13.5 5.2-13.5 5.2-63.9-16.9-81.2-83.8-81.2-83.8s-.8-9 5.2-13.9l11.5-9.6c5.8-4.6 9.4-15.7 3.6-26.5-15.7-28.5-26.3-38.2-31.7-45.6-5.6-7.2-14.1-8.8-23.1-4h-.2c-18.3 10.8-38.4 30.9-32.1 51.6 11 21.9 31.1 91.4 95.4 144 30.3 24.9 78 50.4 98.4 56.1l.2.2c19.9 6.6 39.4-14.3 49.8-33.3v-.2c4.6-9.2 3.2-17.7-3.6-23.5-11.8-11.1-29.7-23.8-43.8-32.2z"/>
                                            <path d="M273.1 172.3c20.5 1.2 30.3 11.9 31.5 33.6.4 8.6 12.7 8 12.3-.6-1.4-28.7-16.3-44.6-43-46-8.4-.4-9 12.6-.8 13z"/>
                                        </svg>
                                    </span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_vk">
                                            <path d="M425.4 278.3c-8.2-10.4-5.8-15.2 0-24.4 0 0 68.3-94.5 75.3-126.5 3.6-11.6 0-20.2-17-20.2h-55.9c-14.2 0-20.8 7.4-24.4 15.6 0 0-28.6 68.1-68.7 112.3-13 12.8-19 16.8-26.2 16.8-3.6 0-9-4-9-15.8V127.4c0-14-4-20.2-15.8-20.2h-87.9c-9 0-14.2 6.6-14.2 12.6 0 13.2 20.2 16.4 22.2 53.5v80.9c0 17.8-3.2 21-10.4 21-19 0-65.1-68.5-92.5-146.6-5.6-15.2-11-21.4-25.2-21.4H19.9c-16 0-19.2 7.4-19.2 15.6 0 14.6 19 86.7 88.3 182.2 46.3 65.1 111.3 100.5 170.6 100.5 35.6 0 40-7.8 40-21.4 0-62.3-3.2-68.1 14.6-68.1 8.2 0 22.6 4 55.7 35.6 38 37.4 44.2 53.9 65.5 53.9h55.9c16 0 24-7.8 19.4-23.4-10.2-32.5-82.1-99.4-85.3-103.8z"/>
                                        </svg>
                                    </span>
                                </span>
                                Использовать мессенджер
                            </button>
                            <button class="btn btn-green" type="submit" disabled>
                                <i class="fas fa-check"></i> Узнать точную цену
                            </button>
                        </div>
                        <div class="choose" style="display:none;">
                            <p class="subtitle">Куда присылать результат</p>
                            <div class="messengers">
                                <button class="js-input-tg" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_telegram">
                                        <path d="M201 323.9l-8.4 119.2c12.2 0 17.4-5.2 23.6-11.4l56.8-54.4 117.8 86.2c21.6 12 36.8 5.6 42.6-19.8l77.2-362c6.8-32-11.6-44.4-32.6-36.6L23.8 218.9c-31 12-30.6 29.4-5.2 37.2l116 36.2 269.8-168.8c12.8-8.4 24.2-3.8 14.8 4.6L201 323.9z"/>
                                    </svg>
                                    Телеграм
                                </button>
                                <button class="js-input-vb" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_viber">
                                        <path d="M485.1 295.3c15.1-128-7.4-208.9-48-245.3-65.5-62.5-286.9-71.7-365.4 2.8-35.2 36.4-47.6 89.8-49 156.1s-3 190.1 112.5 223.8v51.4s-.8 20.7 12.5 25.1c15.1 5 22.1-4.8 69.3-61.3 79 6.8 139.8-8.8 146.7-11.1 16.5-5.5 106.9-17.7 121.4-141.5zM225.3 411.6s-50 62.3-65.7 78.6c-5.2 5.2-10.8 4.8-10.6-5.6 0-6.8.4-85.2.4-85.2-98-28.1-92.2-133.6-91.2-189 1-55.2 11.1-100.5 41-131C168 15 362.1 29.3 411.5 75.9c60.5 53.6 39 204.9 39 210.1-12.3 103.5-85.6 110.1-99.2 114.5-5.5 1.9-58.9 15.5-126 11.1z"/>
                                        <path d="M253 91.4c-8.2 0-8.2 12.7 0 12.7 63.5.4 115.7 44.6 116.3 125.8 0 8.6 12.5 8.4 12.3 0C381 142.6 323.9 92 253 91.4z"/>
                                        <path d="M336.4 216.7c-.2 8.4 12.3 8.8 12.3.2 1-48.2-28.7-87.8-84.4-92-8.2-.6-9 12.3-.8 12.7 48.4 3.8 73.9 36.8 72.9 79.1zM323.1 271.4c-10.6-6.2-21.1-2.4-25.7 3.6l-9.2 11.9c-4.8 6.2-13.5 5.2-13.5 5.2-63.9-16.9-81.2-83.8-81.2-83.8s-.8-9 5.2-13.9l11.5-9.6c5.8-4.6 9.4-15.7 3.6-26.5-15.7-28.5-26.3-38.2-31.7-45.6-5.6-7.2-14.1-8.8-23.1-4h-.2c-18.3 10.8-38.4 30.9-32.1 51.6 11 21.9 31.1 91.4 95.4 144 30.3 24.9 78 50.4 98.4 56.1l.2.2c19.9 6.6 39.4-14.3 49.8-33.3v-.2c4.6-9.2 3.2-17.7-3.6-23.5-11.8-11.1-29.7-23.8-43.8-32.2z"/>
                                        <path d="M273.1 172.3c20.5 1.2 30.3 11.9 31.5 33.6.4 8.6 12.7 8 12.3-.6-1.4-28.7-16.3-44.6-43-46-8.4-.4-9 12.6-.8 13z"/>
                                    </svg>
                                    Viber
                                </button>
                                <button class="js-input-wp" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="mes_whatsapp" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                                        <style>.atst0{fill:#050505}</style>
                                        <path d="M373.4 305.2l-.2 1.6c-47-23.4-51.8-26.4-57.8-17.4-4.2 6.4-16.4 20.6-20.2 24.8-3.8 4.2-7.4 4.4-13.8 1.6-6.4-3.2-27-10-51.2-31.6-19-17-31.6-37.8-35.4-44.2-6.2-10.8 6.8-12.4 18.8-34.8 2.2-4.4 1-8-.6-11.2-1.6-3.2-14.4-34.6-19.6-47-5.2-12.4-10.4-10.8-14.4-10.8-12.2-1-21.2-.8-29.2 7.4-34.4 37.8-25.8 76.8 3.8 118.4 57.8 75.8 88.8 89.8 145.2 109 15.2 4.8 29.2 4.2 40 2.6 12.2-2 37.6-15.4 43-30.4 5.4-15 5.4-27.6 3.8-30.4-1.6-3.2-5.8-4.8-12.2-7.6z"/>
                                        <path class="atst0" d="M437.8 73.6C273.8-85 2.2 30 2.2 253.8c0 44.8 11.8 88.4 34 126.8L0 512l135.2-35.2c168.6 91 376.8-29.8 376.8-223 0-67.8-26.4-131.6-74.6-179.4l.4-.8zm31.6 179.6c-.2 162.8-178.8 264.6-320.2 181.4l-7.6-4.6-80 20.8L83 373l-5-8C-10 225 91 42 257.8 42c56.6 0 109.8 22 149.8 62 39.8 39.6 61.8 92.8 61.8 149.2z"/>
                                    </svg>
                                    Whatsapp
                                </button>
                                <button class="js-input-msg" type="button">
                                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_messenger">
                                       <path d="M0 237c0 74.6 37.2 141.1 95.4 184.6V512l87.2-47.8c23.3 6.4 47.9 9.9 73.4 9.9 141.4 0 256-106.1 256-237S397.4 0 256 0 0 106.1 0 237zm229-66.3l66.8 69.5 125.6-69.5-140 148.5-65.2-69.5-127.1 69.5L229 170.7z"/>
                                   </svg>
                                    Мессенджер
                                </button>
                            </div>
                            <button class="back" type="button">Вернуться к вводу контактов</button>
                        </div>
                        <div class="choosen" style="display:none;">
                            <div class="telegram" style="display:none;">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_telegram">
                                        <path d="M201 323.9l-8.4 119.2c12.2 0 17.4-5.2 23.6-11.4l56.8-54.4 117.8 86.2c21.6 12 36.8 5.6 42.6-19.8l77.2-362c6.8-32-11.6-44.4-32.6-36.6L23.8 218.9c-31 12-30.6 29.4-5.2 37.2l116 36.2 269.8-168.8c12.8-8.4 24.2-3.8 14.8 4.6L201 323.9z"/>
                                    </svg>
                                </div>
                                <label for="telegram">Введите номер Telegram</label>
                                <input name="tg" type="text" id="telegram" placeholder="+7 (___) ___-__-__" data-inputmask="'mask':'+7 (999) 999-9999'">
                            </div>
                            <div class="viber" style="display:none;">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_viber">
                                        <path d="M485.1 295.3c15.1-128-7.4-208.9-48-245.3-65.5-62.5-286.9-71.7-365.4 2.8-35.2 36.4-47.6 89.8-49 156.1s-3 190.1 112.5 223.8v51.4s-.8 20.7 12.5 25.1c15.1 5 22.1-4.8 69.3-61.3 79 6.8 139.8-8.8 146.7-11.1 16.5-5.5 106.9-17.7 121.4-141.5zM225.3 411.6s-50 62.3-65.7 78.6c-5.2 5.2-10.8 4.8-10.6-5.6 0-6.8.4-85.2.4-85.2-98-28.1-92.2-133.6-91.2-189 1-55.2 11.1-100.5 41-131C168 15 362.1 29.3 411.5 75.9c60.5 53.6 39 204.9 39 210.1-12.3 103.5-85.6 110.1-99.2 114.5-5.5 1.9-58.9 15.5-126 11.1z"/>
                                        <path d="M253 91.4c-8.2 0-8.2 12.7 0 12.7 63.5.4 115.7 44.6 116.3 125.8 0 8.6 12.5 8.4 12.3 0C381 142.6 323.9 92 253 91.4z"/>
                                        <path d="M336.4 216.7c-.2 8.4 12.3 8.8 12.3.2 1-48.2-28.7-87.8-84.4-92-8.2-.6-9 12.3-.8 12.7 48.4 3.8 73.9 36.8 72.9 79.1zM323.1 271.4c-10.6-6.2-21.1-2.4-25.7 3.6l-9.2 11.9c-4.8 6.2-13.5 5.2-13.5 5.2-63.9-16.9-81.2-83.8-81.2-83.8s-.8-9 5.2-13.9l11.5-9.6c5.8-4.6 9.4-15.7 3.6-26.5-15.7-28.5-26.3-38.2-31.7-45.6-5.6-7.2-14.1-8.8-23.1-4h-.2c-18.3 10.8-38.4 30.9-32.1 51.6 11 21.9 31.1 91.4 95.4 144 30.3 24.9 78 50.4 98.4 56.1l.2.2c19.9 6.6 39.4-14.3 49.8-33.3v-.2c4.6-9.2 3.2-17.7-3.6-23.5-11.8-11.1-29.7-23.8-43.8-32.2z"/>
                                        <path d="M273.1 172.3c20.5 1.2 30.3 11.9 31.5 33.6.4 8.6 12.7 8 12.3-.6-1.4-28.7-16.3-44.6-43-46-8.4-.4-9 12.6-.8 13z"/>
                                    </svg>
                                </div>
                                <label for="viber">Введите номер Viber</label>
                                <input name="vb" type="text" id="viber" placeholder="+7 (___) ___-__-__" data-inputmask="'mask':'+7 (999) 999-9999'">
                            </div>
                            <div class="whatsapp" style="display:none;">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="mes_whatsapp" x="0" y="0" viewBox="0 0 512 512" xml:space="preserve">
                                        <style>.atst0{fill:#050505}</style>
                                        <path d="M373.4 305.2l-.2 1.6c-47-23.4-51.8-26.4-57.8-17.4-4.2 6.4-16.4 20.6-20.2 24.8-3.8 4.2-7.4 4.4-13.8 1.6-6.4-3.2-27-10-51.2-31.6-19-17-31.6-37.8-35.4-44.2-6.2-10.8 6.8-12.4 18.8-34.8 2.2-4.4 1-8-.6-11.2-1.6-3.2-14.4-34.6-19.6-47-5.2-12.4-10.4-10.8-14.4-10.8-12.2-1-21.2-.8-29.2 7.4-34.4 37.8-25.8 76.8 3.8 118.4 57.8 75.8 88.8 89.8 145.2 109 15.2 4.8 29.2 4.2 40 2.6 12.2-2 37.6-15.4 43-30.4 5.4-15 5.4-27.6 3.8-30.4-1.6-3.2-5.8-4.8-12.2-7.6z"/>
                                        <path class="atst0" d="M437.8 73.6C273.8-85 2.2 30 2.2 253.8c0 44.8 11.8 88.4 34 126.8L0 512l135.2-35.2c168.6 91 376.8-29.8 376.8-223 0-67.8-26.4-131.6-74.6-179.4l.4-.8zm31.6 179.6c-.2 162.8-178.8 264.6-320.2 181.4l-7.6-4.6-80 20.8L83 373l-5-8C-10 225 91 42 257.8 42c56.6 0 109.8 22 149.8 62 39.8 39.6 61.8 92.8 61.8 149.2z"/>
                                    </svg>
                                </div>
                                <label for="Whatsapp">Введите номер Whatsapp</label>
                                <input name="wp" type="text" id="Whatsapp" placeholder="+7 (___) ___-__-__" data-inputmask="'mask':'+7 (999) 999-9999'">
                            </div>
                            <div class="messenger" style="display:none;">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="mes_messenger">
                                       <path d="M0 237c0 74.6 37.2 141.1 95.4 184.6V512l87.2-47.8c23.3 6.4 47.9 9.9 73.4 9.9 141.4 0 256-106.1 256-237S397.4 0 256 0 0 106.1 0 237zm229-66.3l66.8 69.5 125.6-69.5-140 148.5-65.2-69.5-127.1 69.5L229 170.7z"/>
                                   </svg>
                                </div>
                                <label for="messenger">Скопируйте ссылку messenger</label>
                                <input name="link" type="text" id="messenger" placeholder="https://m.me/userlogin">
                            </div>
                            <button class="other-msg" type="button">Выбрать другой мессенджер</button>
                            <button class="btn btn-green" type="submit" disabled>
                                <i class="fas fa-check"></i> Готово
                            </button>
                        </div>
                        <label class="privacy" for="privacy">
                            <input type="checkbox" id="privacy"> <span>С <a href="#">политикой конфиденциальности</a> ознакомлен</span>
                        </label>
                    </div>
                </div>
            </div>
        </form>
        
        <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
        <script src="js/jquery.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/jquery.inputmask.js"></script>
        <script src="js/scripts.js"></script>
        
        <script>
            // Ползунок и прелоадер
            $(document).ready(function(){
                setTimeout(function(){
                    $('.preloader').fadeOut();
                }, 800);
                
                $(function() {
                    $("#slider-range").slider({
                        range: "min",
                        min: 20000,
                        max: 80000,
                        step: 1000,
                        values: 20000,
                        slide: function(event, ui) {
                            $('.ui-slider-handle').html('<span>' + ui.value + '</span>');
                            $('#min').attr('value', ui.value);
                        }
                    });
                });
                
//                Диапазон
//                $(function() {
//                    $("#slider-range").slider({
//                        range: true,
//                        min: 20000,
//                        max: 80000,
//                        step: 1000,
//                        values: [20000, 80000],
//                        slide: function(event, ui) {
//                            $('.ui-slider-handle:nth-child(2)').html('<span>' + ui.values[0] + '</span>');
//                            $('.ui-slider-handle:nth-child(3)').html('<span>' + ui.values[1] + '</span>');
//                            $('#min').attr('value', ui.values[0]);
//                            $('#max').attr('value', ui.values[1]);
//                        }
//                    });
//                });
            });
            
            // Присваиваем flex
            $('[class*="question-"]').attr('style','display:flex').hide();
            
            var questionsCount = 3;
            var step = 0;
            var progress = 0;
            
            function progressQvuiz(){
                console.log(step);
                
                // Показываем прогресс
                progress = ((step - 1) * 100 / questionsCount).toFixed();
                $('.progress span').text(progress + '%');
                $('.line div').css('width', progress + '%');
                
                // Переход с приветствия
                if(step == 1) {
                    $('.welcome').removeClass('show');
                    $('.questions').addClass('show');
                    
                    $('.ui-slider-handle:nth-child(2)').html('<span>20000</span>');
                    $('.ui-slider-handle:nth-child(3)').html('<span>80000</span>');
                }
                
                // Скрываем кнопку назад на первом этапе
                if(step > 1) {
                    $('[data-prev]').fadeIn();
                } else {
                    $('[data-prev]').fadeOut();
                }
                
                if(step < 3) {
                    $('button[data-next]').prop('disabled', true);
                }
                
                if(step == 3) {
                    setTimeout(function(){
                        $('button[data-next]').prop('disabled', false);
                    }, 200);
                }
              
                if(step == 4){
                    $('.questions').removeClass('show');
                    $('.final').addClass('show');
                }
            }
            
            $('[data-next]').on('click', function(){
                $('.question-' + step).hide();
                step++;
                $('.question-' + step).fadeIn();
                progressQvuiz();
            });
            
            $('[data-prev]').on('click', function(){
                $('.question-' + step).hide();
                step--;
                $('.question-' + step).fadeIn();
                progressQvuiz();
            });
            
            // Активация кнопки далее при ответе
            $('.questions input[type="checkbox"]').on('input', function(){
                if($('.question-1[style="display: flex;"] input[type="checkbox"]').is(':checked')) {
                    $('[data-next]').prop('disabled', false);
                } else if($('.question-2[style="display: flex;"] input[type="checkbox"]').is(':checked')) {
                    $('[data-next]').prop('disabled', false);
                } else {
                    $('[data-next]').prop('disabled', true);
                }
            });
            
            // Ввод контактов
            $('.btn-msg').on('click', function(){
                $('.input-phone').hide();
                $('.choose').fadeIn();
            });
            $('.choose .back').on('click', function(){
                $('.choose').hide();
                $('.input-phone').fadeIn();
            });
            $('.js-input-tg').on('click', function(){
                $('.choose').hide();
                $('.choosen, .choosen .telegram').fadeIn();
            });
            $('.js-input-vb').on('click', function(){
                $('.choose').hide();
                $('.choosen, .choosen .viber').fadeIn();
            });
            $('.js-input-wp').on('click', function(){
                $('.choose').hide();
                $('.choosen, .choosen .whatsapp').fadeIn();
            });
            $('.js-input-msg').on('click', function(){
                $('.choose').hide();
                $('.choosen, .choosen .messenger').fadeIn();
            });
            $('.other-msg').on('click', function(){
                $('.choosen, .choosen > div').hide();
                $('.choose').fadeIn();
            });
            
            // Валидация контактных данных
            var contactComplete = 0;
            var privacyAgree = 0;
            
            function submitTrue(){
                if(contactComplete == 1 && privacyAgree == 1){
                   $('button[type="submit"]').prop('disabled', false);
               } else {
                   $('button[type="submit"]').prop('disabled', true);                   
               }
            }
            $('[data-inputmask]').on('keyup', function(){
                var v = $(this).val();
                if(v.slice(-1) == "_"){
                    contactComplete = 0;
                } else {
                    contactComplete = 1;
                }
                submitTrue();
            });
            $('[data-inputmask]').inputmask('+7 (999) 999-99-99', {
                oncleared: function(){ 
                    setTimeout(function(){
                        contactComplete = 0;
                        submitTrue();
                    }, 100);
                }
            });
            $('#privacy').on('input', function(){
                if($('#privacy').is(':checked')) {
                    privacyAgree = 1;
                } else {
                    privacyAgree = 0;
                }
                submitTrue();
            });
            
            $('#messenger').on('input', function(){
                console.log($('#messenger').val().length);
                if($('#messenger').val().length > 3) {
                    contactComplete = 1;
                } else {
                    contactComplete = 0;
                }
                submitTrue();
            });
            
            // Отправка формы
            $("form").submit(function(e) { //устанавливаем событие отправки для формы с id=form
                e.preventDefault();
                var form_data = $(this).serialize(); //собераем все данные из формы
                $.ajax({
                type: "POST", //Метод отправки
                url: "send.php", //путь до php фаила отправителя
                data: form_data,
                success: function(result) {
                    if (result === 'true'){
                            $('.final').removeClass('show');
                            $('.content').prepend('<div style="margin: 1rem;text-align-center;"><h2>Ваша заявка успешно отправлена!</h2><p>Скоро мы с Вами свяжемся, ну а пока вы можете ознакомиться с нашим ассортиментом. <br>Перенаправляем на наш сайт..</p>');
                            setTimeout(function(){
                                window.location.href = 'https://vkhodnyedveri.ru/';
                            }, 5000);
                        }
                    }
                });  
            });
        </script>
    </body>
</html>