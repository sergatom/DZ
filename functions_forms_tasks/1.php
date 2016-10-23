<?php
function zn($stroka) {
    $stroka = trim($stroka, " ");
    $znaki = array(".", ",", "!", "?");
    $stroka = str_replace($znaki, " ", $stroka);
    return $stroka;
}
function probel ($mas) {
    $mas1 = array();
    foreach ($mas as $ms) {
        if ($ms != ' '){
            $mas1[] = $ms;
        }
    }
    $mas1 = array_unique($mas1);
    return $mas1;
}
function getCommonWords($a, $b)
{
    $a = zn($a);
    $b = zn($b);
    $a = explode(" ", $a);
    $b = explode(" ", $b);
    $a = probel($a);
    $b = probel($b);
    $c = array();
    foreach ($a as $value) {
        foreach ($b as $value1) {
            if ($value == $value1) {
                $c[] = $value;
            }
        }
    }
    return $c;
}
$copy_a = $copy_b = $c = '';
if (isset($_POST['one'])) {
    $copy_a = $_POST['one'];
    }else{ $copy_a = '';
}

$copy_b=(@$_POST['two'])? $_POST['two'] : '';
$c = getCommonWords($copy_a, $copy_b);
$c = implode(" ", $c);
?>

<html>
<head>
    <title>Одинаковые слова</title>
</head>
<body>
<h3>Введите текст:</h3>
<form method="post">
    <textarea name="one" id='one' title="one"></textarea><br><br>
    <textarea name="two" id='two' title="two"></textarea><br><br>
    <button type="submit">Отправить</button><br>
    Текст первого поля:<br>
    <?= $copy_a ?><br>
    Текст второго поля:<br>
    <?= $copy_b ?><br>
    Повторяющиеся слова:<br>
    <?= $c ?>
</form>
</body>
</html>