<!DOCTYPE html> 
<html lang="ru"> 
<head> 
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="./CSS/style.css">
    <title>Главная</title> 
</head> 
<body>
    <div class="container">
        <ul class="menu">
            <li><a href="/main">Главная</a></li>
            <li><a href="/portfolio">Портфолио</a></li>
            <li><a href="/about">О нас</a></li>
            <li><a href="/contact">Контакты</a></li>
            <li><a href="/partner">Партнеры</a></li>
            <li><a href="/phpinfo">Система</a></li>
        </ul>
        <?php include $content_view; ?>
    </div>
</body> 
</html>