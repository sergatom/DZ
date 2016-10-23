<?php
function podschet($a)
{
    $a = explode(" ", $a);
    $aa = $bb = array();
    $b = 0;
    $aa = array_unique($a);
    $bb = array_flip($aa);

    foreach ($aa as $value1) {
        foreach ($a as $value2) {
            if ($value1 == $value2) {
                $b += 1;
            }
        }
        $bb[$value1] = $b;
        $b = 0;
    }
    arsort($bb);
    return $bb;
}

if (isset($_POST['one'])) {
    $copy_a = $_POST['one'];
} else {
    $copy_a = '';
}

$e = array();
$e = podschet($copy_a);
?>

<html>
<head>
    <title>Подсчет ягод</title>
</head>
<body>
<h3>Введите текст:</h3>
<form method="post">
    <textarea name="one" id='one' title="one"></textarea><br><br>
    <button type="submit">Отправить</button><br>
    Введенный текст:<br>
    <?= $copy_a ?><br>
    Количество ягод:<br>
    <?php foreach ($e as $key => $value3){ if ($copy_a != '') {  echo "$key", ' - ', "$value3", "</br>"; }} ?>
    <br>
</form>
</body>
</html>