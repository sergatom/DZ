<h3>Комментарии: </h3>
<?php foreach ($data['messages'] as $key => $value) { ?>
    <div style="border:1px solid black; text-align: left;">
        <p1><b>Имя:</b> <?php echo $value['login'] ?></p1>
        <br>
        <p2><b>Комментарий:</b> <?php echo $value['message'] ?></p2>
        <br>
        <p2><b>Рейтинг:</b> <?php echo $value['rating'] ?></p2>
        <br>
        <p2><b>Опубликовано:</b> <?php echo $value['message_time'] ?></p2>
        <br>
    </div>
        <a href="admin/allow/<?php echo $value['message_id'] ?> "
           class="btn btn-default" role="button">Опубликовать</a>
<?php } ?>
<br>