<?php
if (isset($_POST['one'])) {
    $n = $_POST['one'];
} else {
    $n = '';
}
if ($n != '') {
    $a = fopen('data.txt', 'r');
    $b = fread($a, filesize('data.txt'));
    fclose($a);
    $b = explode(' ', $b);
    $bb = array();
    foreach ($b as $value) {
        if (strlen($value) <= $n) { // в случае использования в файле кирилицы заменяем эту строку на if (mb_strlen($value, $encoding = 'UTF-8') <= $n) { или if (iconv_strlen($value) <= $n) {
            $bb[] = $value;
        }
    }
    $bb = implode(' ', $bb);
    $a = fopen('data.txt', 'w');
    fwrite($a, $bb);
    fclose($a);
}
?>

<html>
<head>
    <title>Обратные слова</title>
</head>
<body>
<h3>Длинна слов</h3>
<form method="post">
    Введите число:<br>
    <textarea name="one" id='one' title="one"></textarea><br><br>
    <button type="submit">Отправить</button><br>
</form>
</body>
</html>