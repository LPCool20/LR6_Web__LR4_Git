<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"
    />
    <title>Завантаження</title>
</head>
<body>
<?php
$папка = "files";
if (ЗавантаженняФайлу($_POST['url'], $_FILES)!= false)
{
    echo 'Файл успішно завантажено';
}
else echo 'Помилка завантаження.';
function ЗавантаженняФайлу($папка, $Файл)
{
// 1)Перевіряємо чи існує імя
    if ($Файл['FILE']['name']) {
//  Перевіряємо тип файлу
        if ($Файл['FILE']['type'] == 'image/png') echo 'Файл типу png <br>';
// 2)Перевіряємо розмір файлу
        if ($Файл['FILE']['size'] != 0 and $Файл['FILE']['size'] <= 2048000) {
// 3)Перевірка чи завантажився файл на сервер
            if (is_uploaded_file($Файл['FILE']['tmp_name'])) {
// 4)Переміщаємо завантажений файл в необхідну папку $папка
                if (move_uploaded_file($Файл['FILE']['tmp_name'],
                    $папка . "/" . basename($Файл['FILE']['name']))) {
                    return true;
                } else {
                    echo 'Виникла помилка при переміщенні файла в папку' . $папка;
                }
            } else {
                echo 'Виникла помилка при завантаженні файлу на сервер';
            }
        } else {
            echo 'Розмір файлу не повинен перевищувати 2Mб';
        }
    } else {
        echo 'Файл повинен мати назву';
    }
}
?>
</body>
</html>