<?php
function zagl_bukv($a)
{
    function t1($str, $encoding = 'UTF-8')
    {
        $str = mb_strtoupper(mb_substr($str, 0, 1, $encoding), $encoding) . mb_substr($str, 1, mb_strlen($str), $encoding);
        return $str;
    }

    function t($str, $encoding = 'UTF-8')
    {
        $u = 0;
        for ($i = 0; $i <= mb_strlen($str, $encoding); $i++) {
            if (mb_substr($str, 0 , 1, $encoding) == ' ') {
                $str = mb_substr($str, 1, (mb_strlen($str, $encoding)), $encoding);
            }
            $u += 1;
            if (mb_substr($str, 0 , 1, $encoding) != ' ') {
                break;
            }
        }
        return $str . '/' . $u;
    }

    function t2($str, $encoding = 'UTF-8')
    {
        if (mb_substr($str, mb_strlen($str) - 2, 1, $encoding) == '/') {
            for ($i = 0; $i <= mb_substr($str, mb_strlen($str) - 1, 1, $encoding); $i++) {
                $str = ' ' . $str;
            }
        }
        return mb_substr($str, 0, ((mb_strlen($str, $encoding) - 2)), $encoding);
    }

    $a = explode(".", $a);
    $aa = array();
    foreach ($a as $value) {
        $value = t($value);
        $value = t1($value);
        $value = t2($value);
        $aa[] = $value;
    }
    return implode(".", $aa);
}

if (isset($_POST['one'])) {
    $copy_a = $_POST['one'];
} else {
    $copy_a = '';
}

$e = zagl_bukv($copy_a);
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
    Обработанный текст:<br>
    <?= $e ?><br>
</form>
</body>
</html>