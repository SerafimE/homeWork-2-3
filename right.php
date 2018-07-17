<?php declare(strict_types=1);
echo '<h2 style="color:#17A05D">Правильно!</h2>
    <p>Для генерации сертификата введите Ваше имя в поле ниже и нажмите кнопку "Получить сертификат"</p>
    <form action="check.php" method="post">
        <input type="text" name="userName" placeholder="Имя">
        <input type="submit" value="Получить сертификат">
    </form>';