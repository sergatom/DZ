<?php
function rev ($a)
{
    $a = ' ' . $a;
    $a = explode(".", $a);
    $a = array_reverse($a);
    unset($a[0]);
    return implode(".", $a) . '.';
}

if (isset($_POST['one'])) {
    $copy_a = $_POST['one'];
} else {
    $copy_a = '';
}

$e = rev($copy_a);
?>

<html>
<head>
    <title>Предложения в обратном порядке</title>
</head>
<body>
<h3>Введите текст:</h3>
<form method="post">
    <textarea name="one" id='one' title="one"></textarea><br><br>
    <button type="submit">Отправить</button><br>
    Введенный текст:<br>
    <?= $copy_a ?><br>
    Обработанный текст:<br>
    <?= $e ?><br>
</form>
</body>
</html>