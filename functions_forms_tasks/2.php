<?php
function dl_el($el, $el1) {
    if (strlen($el) == strlen($el1)) {
        return 0;
    }
    return (strlen($el) < strlen($el1)) ? -1 : 1;
}

function tri_slova ($с) {
    $znaki = array(".", ",", "!", "?");
    $cc = $ccc = array();
    $b = '';
    $c = explode(" ", $с);
    $c = str_replace($znaki, " ", $c);
    foreach ($c as $value) {
        if ($value != '') {
            $cc[] = $value;}}
            usort($cc, "dl_el");
    for ($i = 0; $i <= 2; $i++) {
        $ccc[] = array_pop($cc);
    }
    $b = implode(" ", $ccc);
    return $b;
}


if (isset($_POST['one'])) {
    $copy_a = $_POST['one'];
} else {
    $copy_a = '';
}
$e = tri_slova($copy_a);
?>

<html>
<head>
    <title>Длинные слова</title>
</head>
<body>
<h3>Введите текст:</h3>
<form method="post">
    <textarea name="one" id='one' title="one"></textarea><br><br>
    <button type="submit">Отправить</button><br>
    Введенный текст:<br>
    <?= $copy_a ?><br>
    Три самые длинные слова:<br>
    <?= $e ?><br>
</form>
</body>
</html>