<?php
date_default_timezone_set('Europe/Moscow');
$time = time();
$title = 'Богданов Тимофей Александрович | 251-361 | ЛР3 | Веб-технологии';
$technologies = ['HTML — структура страницы', 'CSS — оформление страницы', 'PHP — формирование страницы на сервере'];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <p class="site-name">Моя домашняя страница</p>
            <nav>
                <a href="<?php
                $name = 'Обо мне';
                $link = 'index.php';
                $current_page = false;
                echo $link;
                ?>"<?php
                if ($current_page) {
                    echo ' class="selected-menu"';
                }
                echo '>' . $name;
                ?></a>
                <a href="<?php
                $name = 'Учёба';
                $link = 'study.php';
                $current_page = false;
                echo $link;
                ?>"<?php
                if ($current_page) {
                    echo ' class="selected-menu"';
                }
                echo '>' . $name;
                ?></a>
                <a href="<?php
                $name = 'Веб-технологии';
                $link = 'web.php';
                $current_page = true;
                echo $link;
                ?>"<?php
                if ($current_page) {
                    echo ' class="selected-menu"';
                }
                echo '>' . $name;
                ?></a>
            </nav>
        </div>
    </header>

    <main class="container">
        <section>
            <h1>Веб-технологии</h1>
            <p>Веб-страница состоит из элементов: заголовков, абзацев, списков, ссылок и изображений. Браузер получает HTML-код и показывает пользователю содержимое страницы.</p>
            <p>Оформление задаётся отдельно с помощью CSS. Это позволяет использовать одинаковые цвета, шрифты и отступы на нескольких страницах, подключив к ним один файл стилей.</p>
        </section>

        <section>
            <h2>Из чего состоит сайт</h2>
            <ul>
                <?php
                foreach ($technologies as $technology) {
                    echo '<li>' . $technology . '</li>';
                }
                ?>
            </ul>
            <p>HTML задаёт смысл и порядок элементов. Например, заголовок обозначается тегом h1, абзац — тегом p, а ссылка — тегом a. CSS определяет, как эти элементы выглядят на экране.</p>
            <p>PHP выполняется на сервере до передачи страницы браузеру. Программа может получить текущую дату, выбрать изображение по условию и вывести элементы списка из массива.</p>
        </section>

        <section>
            <h2>Статическая и динамическая страница</h2>
            <p>У статической страницы содержимое хранится в готовом HTML-файле. Чтобы изменить такой текст, нужно отредактировать файл. При обычном запросе сервер передаёт его браузеру.</p>
            <p>У динамической страницы часть HTML-кода создаётся во время выполнения программы. В этой работе PHP формирует заголовок вкладки, пункты меню, списки и время в подвале. На главной странице он также выбирает фотографии.</p>
            <p>При обновлении страницы сервер выполняет PHP заново. Поэтому время формирования меняется, а выбор фотографии зависит от секунды нового запроса. Без нового запроса уже открытая страница сама не обновляется.</p>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>Богданов Тимофей Александрович</p>
            <p>Сформировано <?php echo date('d.m.Y в H-i:s', $time); ?></p>
        </div>
    </footer>
</body>
</html>
