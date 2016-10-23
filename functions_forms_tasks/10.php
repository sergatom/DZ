<?php
function sl_unic($a)
{
    $result = 0;
    if ($a != '') {
        $a = explode(" ", $a);
        $b = 0;
        $a1 = $a;
        $a2 = array();
        $a1 = array_unique($a1);
        foreach ($a1 as $value) {
            foreach ($a as $value1) {
                if ($value == $value1) {
                    $b += 1;
                }
            }
            for ($i = 1; $i <= $b; $i++) {
                if ($b > 1) {
                    $a2[] = $value;
                }
            }
            $b = 0;
        }
        $result = count($a) - count($a2);
    }
    return  $result;

}

if (isset($_POST['one'])) {
    $copy_a = $_POST['one'];
} else {
    $copy_a = '';
}

$e = sl_unic($copy_a);
?>

<html>
<head>
    <title>Обратные слова</title>
</head>
<body>
<h3>Введите текст:</h3>
<form method="post">
    <textarea name="one" id='one' title="one"></textarea><br><br>
    <button type="submit">Отправить</button><br>
    Введенный текст:<br>
    <?= $copy_a ?><br>
    Количество уникальных слов в тексте:<br>
    <?= $e ?><br>
</form>
</body>
</html>