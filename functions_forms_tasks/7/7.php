<?php

if (isset($_POST['one'])) {
    $coment = $_POST['one'];
}else{ $coment = '';
}
if (isset($_POST['name'])) {
    $name = $_POST['name'];
}else{ $name = '';
}

if ($coment != '') {
    $res_coment = fopen('coment.txt', 'a');
    fwrite($res_coment, str_replace("\n", "", $coment) . PHP_EOL);
    fclose($res_coment);
    if ($name == '') {
        $name = 'Гость';
    }
    $res_name = fopen('name.txt', 'a');
    fwrite($res_name, $name . PHP_EOL);
    fclose($res_name);

    $date = fopen('date.txt', 'a');
    fwrite($date, date("G:i:s - d, F, Y") . PHP_EOL);
    fclose($date);
}
if(filesize('coment.txt') != 0) {
    $mas_coment = file('coment.txt');
    $mas_name = file('name.txt');
    $mas_date = file('date.txt');;
    echo "<b>Коментарии:</b></br></br>";
    for ($i = 0; $i <= count($mas_coment) - 1; $i++) {
        echo $mas_coment[$i], "</br>", "</br>";
        echo '<b>Автор: </b>', $mas_name[$i], "</br>";
        echo '<b>Дата добавления: </b>', $mas_date[$i], "</br>", "<hr>";
    }
}
?>

<html>
<head>
    <title>Гостевая книга</title>
</head>
<body>
<form method="post">
    <b>Введите ваше имя:</b><br>
    <input name="name" id="name" title="name"><br><br>
    <b>Введите коментарий:</b><br>
    <textarea name="one" id='one' title="one"></textarea><br><br>
    <button type="submit">Отправить</button><br>
</form>
</body>
</html>