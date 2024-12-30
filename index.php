<?php
require_once('database/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <title>NieR | Fandom</title>
</head>
<body>
<header class="p-3">
    <div class="container d-flex justify-content-between align-items-center">
        <div class="logo">
            <a href="index.php" class=" text-decoration-none">
                <h1 class="m-0">NieR Automata Guides</h1>
            </a>
        </div>
        <nav class="nav">
            <a class="nav-link" href="index.php">Главная</a>
            <a class="nav-link" href="guides_list.php">Гайды</a>
            <a class="nav-link" href="contact.php">Контакты</a>
        </nav>
    </div>
    <hr class="my-2">
</header>
<main class="container mt-4">
<section class="hero bg-light text-dark py-5 text-center">
    <div class="container">
        <h2 class="display-4">Добро пожаловать в мир NieR: Automata!</h2>
        <p class="lead">Здесь вы найдёте гайды, секреты и подробности, чтобы пройти игру на 100%.</p>
        <a href="guides_list.php" class="btn btn-primary btn-lg">Начать изучение гайдов</a>
        <hr class="my-4">
    </div>
</section>
<section class="container my-5 d-flex">
    <div class="image-container" style="flex: 0 0 60%;">
        <img src="icons/art1.jpg" alt="Artwork" class="img-fluid">
        <img src="icons/art2.jpg" alt="Second Artwork" class="img-fluid mt-3">
    </div>
    <div class="text-container" style="flex: 1; padding-left: 20px;">
        <h2>О сайте</h2>
        <p>
            Добро пожаловать на наш сайт, посвящённый геймерам, которые хотят пройти *NieR: Automata* на 100%! Здесь вы найдёте подробные гайды, секреты и советы, которые помогут вам разобраться в каждом аспекте игры.
        </p>
        <p>
            Наши гайды охватывают всё: от основных механик и боевых стратегий до секретных локаций и скрытых концовок. Мы стремимся предоставить точную информацию, чтобы вы могли насладиться игрой и раскрыть все её тайны.
        </p>
        <p>
            Независимо от того, являетесь ли вы новичком в мире *NieR* или опытным игроком, вы найдёте полезные материалы, которые сделают ваше путешествие по этому удивительному миру ещё более захватывающим.
        </p>
        <p>
            Мы регулярно обновляем сайт новыми гайдами и статьями, чтобы вы всегда были в курсе всех изменений и новинок игры.
        </p>
        <p>
            Присоединяйтесь к нашему сообществу и делитесь своими впечатлениями и опытом прохождения игры!
        </p>
    </div>
</section>
</main>
<footer class="text-dark py-4 mt-5">
    <hr>
    <div class="container text-center">
        <p>&copy; 2024 NieR Fandom. Все права защищены.</p>
        <p>Создано фанатами для фанатов!</p>
    </div>
    <h6 class="text-center">Design by &copy; Enigma</h6>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>