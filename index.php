<!doctype html>
    <head>
        <!-- Установка кодировки, заголовка сайта и подключение стилей -->
        <meta charset="utf-8">
        <title>Portfolio - Aleksandr Aganin | BloodSugarCube</title>
        <link rel="stylesheet" href="css/style.css">
        <!-- Иконка в браузере -->
        <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons/favicon-16x16.png">
        <link rel="manifest" href="info-files/site.webmanifest">
        <!-- Настройка для видимой, пользователю, области -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <header>
            <!-- Неоновый куб -->
            <div class="cube">
                <div class="cube__top"></div>
                <div>
                    <span class="cube__picture_one" style="--i:0;"></span>
                    <span class="cube__picture_two" styLe="--i:1;"></span>
                    <span class="cube__picture_three" style="--i:2;"></span>
                    <span class="cube__picture_four" style="--i:3;"></span>
                </div>
            </div>
        </header>
        <main>
            <span class="neon-line"></span></span>
            <span class="text-header">Привет, меня зовут Александр!👋</span>
            <div class="text-description" id='text-description'><p>Я помогаю небольшим агентствам и компаниям воплощать их идеи в жизнь.</p>
                <p>Используя Figma, Photoshop, VS Code и кофе, я претворяю ваши</p>
                <p>требования в реальность - вовремя и в рамках бюджета.</p>
            </div>
            <span class="text-question">
                Есть вопросы?&nbsp;
                <a class="to-mail" href="#mail">Свяжитесь со мной по почте.</a>
            </span>
            <span class="neon-line"></span></span>
            <span class="text-header-for-slider">Могу сделать:</span>
            <div class="neon-slide-container">
                <span class="slider-span" id="slider-span1"></span>
                <span class="slider-span" id="slider-span2"></span>
                <span class="slider-span" id="slider-span3"></span>
                <span class="slider-span" id="slider-span4"></span>
                <span class="slider-span" id="slider-span5"></span>
                <div class="products-slider">
                    <div class="slides-div" id="slide-1">
                        <span class="img-container" id="img1"><img src="images/products/site.png" alt="" class="img"
                        ></span>
                        <a href="#slider-span1" class="button"
                        id="button-1"></a>
                        <span class="text-slide" id="text-slide1">Веб-сайт</span>
                        <a class="link-order" href="/order.php" id="link-order1">Заказать</a>
                    </div>
                    <div class="slides-div" id="slide-2">
                        <span class="img-container" id="img2"><img src="images/products/logos.png" alt="" class="img"
                        ></span>
                        <a href="#slider-span2" class="button"
                        id="button-2"></a>
                        <span class="text-slide" id="text-slide2">Логотип</span>
                        <a class="link-order" href="/order.php" id="link-order2">Заказать</a>
                    </div>
                    <div class="slides-div" id="slide-3">
                        <span class="img-container" id="img3"><img src="images/products/icons.png" alt="" class="img"
                        ></span>
                        <a href="#slider-span3" class="button"
                        id="button-3"></a>
                        <span class="text-slide" id="text-slide3">Иконки</span>
                        <a class="link-order" href="/order.php" id="link-order3">Заказать</a>
                    </div>
                    <div class="slides-div" id="slide-4">
                        <span class="img-container" id="img4"><img src="images/products/converting.png" alt="" class="img"
                        ></span>
                        <a href="#slider-span4" class="button"
                        id="button-4"></a>
                        <span class="text-slide" id="text-slide4">Конвертацию в вектор</span>
                        <a class="link-order" href="/order.php" id="link-order4">Заказать</a>
                    </div>
                    <div class="slides-div" id="slide-5">
                        <span class="img-container" id="img5"><img src="images/products/another.png" alt="" class="img"
                        ></span>
                        <a href="#slider-span5" class="button"
                        id="button-5"></a>
                        <span class="text-slide" id="text-slide5">Что-то другое</span>
                        <a class="link-order" href="/order.php" id="link-order5">Заказать</a>
                    </div>
                </div>
            </div>
            <span class="text-header">Недавние работы</span>
            <ol class="list-recent-work">
                <li><a href="">Caffeina</a></li>
                <li><a href="">Museum Mari-El</a></li>
                <li><a href="">Frogwheels</a></li>
                <li><a href="">Something</a></li>
                <li><a href="">Don`t do it</a></li>
            </ol>
        </main>
        <footer>
            <?php 
                $file = file("info-files/count.txt");
                $count = implode("", $file);
                $count++;
                $myfile = fopen("info-files/count.txt","w");
                fputs($myfile,$count);
                fclose($myfile);
            ?>
            <div class="footer-block"><span id="mail">bloodsugarcube@mail.ru </span><span>© BloodSugarCube - All Rights Reserved.</span><span>Просмотров: <?=$count ?></span></div>
        </footer>
        <script src="js/media-query.js" language="javascript"></script>
    </body>
</html>