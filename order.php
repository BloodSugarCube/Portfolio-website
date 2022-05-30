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
        <span class="hover-underlined-off"></span>
        <a href="index.php" class="out-link"></a>
        <div class="neon-form">
            <div class="text-header"><h1>Заказ</h1>
            </div>
            <form class="form" action="send.php" method="post">
                <div class="form-inner">
                    <input type="text" name="name" placeholder="Укажите ваше имя">
                    <input type="email" name="email" placeholder="Укажите ваш e-mail">
                    <input class="select" name="choice_order" list="choice" placeholder="Выбор/Своя идея"/>
                        <datalist id="choice">
                            <option value="Логотип"/>
                            <option value="Иконки"/>
                            <option value="Веб-сайт"/>
                            <option value="Конвертация в вектор"/>
                            <option value="Что-то другое"/>
                        </datalist>
                    <input type="submit" value="Отправить">
                </div>
            </form>
        </div>
    </body>
</html>