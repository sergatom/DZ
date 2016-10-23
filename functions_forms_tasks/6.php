<?php

if (!file_exists('gallery')) {
    mkdir('gallery');
}
function ob_pic(&$file_post) {
    $file_ary = array();
    $file_count = count($file_post['name']);
    $file_keys = array_keys($file_post);
    for ($i=0; $i<$file_count; $i++) {
        foreach ($file_keys as $key) {
            $file_ary[$i][$key] = $file_post[$key][$i];
        }
    }
    return $file_ary;
}
    if (isset($_FILES['pictures'])) {
        $files = $_FILES['pictures'];
        $files = ob_pic($files);
        foreach ($files as $file) {
            $filename = uniqid();
            $extension = explode('.', $file['name']);
            $extension = end($extension);
            $filename .= ".$extension";
            $move_result = move_uploaded_file($file['tmp_name'], 'gallery/' . $filename);
            if (!$move_result) {
                header('HTTP/1.1 500 Internal Server Error');
                continue;
            }
        }
    }

$files = scandir('gallery');
array_shift($files);
array_shift($files);
$count_pic = 0;
?>

<html>
<head>
    <title>Галерея</title>
</head>
<body>
<h2>Галерея</h2>

<form 	method='post' enctype="multipart/form-data">

    <input type="file" name="pictures[]" multiple>
    <button type='submit'>Загрузить</button>

</form><br>

<?php foreach ($files as $file) { ?>
    <img src='gallery/<?=$file?>' width='250'>
<?php $count_pic += 1; if (($count_pic % 5) == 0){ echo "</br>"; }}?>
</body>
</html>