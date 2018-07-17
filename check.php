<?php declare(strict_types=1);
$userName = $_POST['userName'];
session_start();
$_SESSION['userName'] = $userName;
$text1 = "Настоящим сертификатом удостоверяется, что";
$text2 = $userName;
$text3 = "успешно прошёл(ла) психологический тест на терпимость к студентам";
$image = imagecreatetruecolor(960, 640);
$backColor = imagecolorallocate($image, 208, 208, 208);
$textColor = imagecolorallocate($image, 76, 140, 245);
$textColor1 = imagecolorallocate($image, 222, 81, 69);
$boxFile = __DIR__ . '/cert.png';
if (!file_exists($boxFile)) {
    echo 'Файл с картинкой не найден!';
    exit;
}
$imBox = imagecreatefrompng($boxFile);
imagefill($image, 0, 0, $backColor);
imagecopy($image, $imBox, 0, 0, 0, 0, 960, 640);
$fontFile = __DIR__ . '/Heinrich_Text.ttf';
if (!file_exists($fontFile)) {
    echo 'Файл со шрифтом не найден!';
    exit;
}
imagettftext($image, 27, 0, 110, 230, $textColor, $fontFile, $text1);
imagettftext($image, 40, 0, 310, 300, $textColor1, $fontFile, $text2);
imagettftext($image, 20, 0, 85, 360, $textColor, $fontFile, $text3);
header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
