<?php
date_default_timezone_set('Europe/Moscow');
$time = time();
$title = 'Богданов Тимофей Александрович | 251-361 | ЛР3 | Учёба';
$subjects = ['Алгоритмы и структуры данных', 'Языки программирования', 'Базы данных', 'Основы веб-технологий'];
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
                $current_page = true;
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
            <h1>Моя учёба</h1>
            <p>Я учусь в Московском политехническом университете. На этой странице собраны предметы, связанные с программированием, хранением данных и созданием сайтов.</p>
            <p>Эти направления дополняют друг друга: алгоритм задаёт порядок действий, язык программирования позволяет его записать, а база данных помогает хранить информацию.</p>
        </section>

        <section>
            <h2>Что я изучаю</h2>
            <ul>
                <?php
                foreach ($subjects as $subject) {
                    echo '<li>' . $subject . '</li>';
                }
                ?>
            </ul>
            <table>
                <thead>
                    <tr>
                        <th scope="col">Предмет</th>
                        <th scope="col">Чем занимаюсь</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Алгоритмы и структуры данных</td>
                        <td>Изучаю различные алгоритмы и способы организации данных. Решаю практические задачи.</td>
                    </tr>
                    <tr>
                        <td>Языки программирования</td>
                        <td>Изучаю языки программирования и учусь создавать программы для решения разных задач.</td>
                    </tr>
                    <tr>
                        <td>Базы данных</td>
                        <td>Изучаю принципы работы с базами данных, составляю SQL-запросы и выполняю задания.</td>
                    </tr>
                    <tr>
                        <td>Основы веб-технологий</td>
                        <td>Изучаю HTML и CSS, учусь создавать и оформлять веб-страницы.</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>Учебные задачи</h2>
            <p>Практические задания помогают связать теорию с результатом. Например, при создании сайта нужно определить структуру страницы, разместить текст и изображения, а затем настроить оформление.</p>
            <p>После написания кода необходимо проверить результат: открываются ли страницы, работают ли ссылки и правильно ли отображаются данные. Для сайта с PHP проверяется и выполнение программы на сервере.</p>
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
