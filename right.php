<?php declare(strict_types=1);
echo '<p>Для генерации сертификата введите Ваше имя в поле ниже и нажмите кнопку "Получить сертификат"</p>
    <form action="check.php" method="post">
        <input type="text" name="userName" placeholder="Имя">
        <input type="submit" value="Получить сертификат">
    </form>';
