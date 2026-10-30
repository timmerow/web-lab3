<?php
date_default_timezone_set('Europe/Moscow');
$time = time();
$title = 'Богданов Тимофей Александрович | 251-361 | ЛР3 | Обо мне';
$interests = ['Программирование', 'Компьютерные технологии', 'Спорт'];

// При чётной и нечётной секунде фотографии меняются местами.
if (date('s', $time) % 2 == 0) {
    $photo1 = 'images/workspace.jpg';
    $photo2 = 'images/laptop.jpg';
} else {
    $photo1 = 'images/laptop.jpg';
    $photo2 = 'images/workspace.jpg';
}
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
                $current_page = true;
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
                $current_page = false;
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
            <h1>Тимофей Богданов</h1>
            <p>Меня зовут Тимофей. Я родился в посёлке Рефтинский Свердловской области. Сейчас живу в Москве и учусь в Московском политехническом университете.</p>
            <p>Помимо учёбы, я работаю и занимаюсь спортом. В свободное время интересуюсь программированием и компьютерными технологиями.</p>
            <p>Этот сайт создан в рамках лабораторной работы по основам веб-технологий. Здесь представлена небольшая информация обо мне и моей учёбе.</p>
        </section>

        <section>
            <h2>Мои интересы</h2>
            <p>Основные интересы перечислены в списке:</p>
            <ul>
                <?php
                foreach ($interests as $interest) {
                    echo '<li>' . $interest . '</li>';
                }
                ?>
            </ul>
            <p>Программирование и компьютерные технологии связаны с моей учёбой. На отдельной странице можно посмотреть список предметов и узнать, какие задачи рассматриваются при их изучении.</p>
        </section>

        <section>
            <h2>Рабочее место</h2>
            <p>На фотографиях показаны примеры рабочего места с ноутбуком. Это иллюстрации к теме сайта. Ноутбук позволяет работать с текстами, писать программы и открывать учебные материалы в браузере.</p>
            <img src="<?php echo $photo1; ?>" alt="Рабочее место с ноутбуком">
            <img src="<?php echo $photo2; ?>" alt="Другой пример рабочего места с ноутбуком">
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
