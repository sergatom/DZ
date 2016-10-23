<?php
function st_rev ($st)
{
    $st1 = '';
    for ($i = strlen($st); $i >= 0; $i--) {
        $st1 .= mb_substr($st, $i, 1, "UTF-8");
    }
    return $st1;
}

$e = '';
if (isset($_POST['one'])) {
    $copy_a = $_POST['one'];
}else{ $copy_a = '';
}

$e = st_rev($copy_a);
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
    Текст в обратном порядне:<br>
    <?= $e ?><br>
</form>
</body>
</html>