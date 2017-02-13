<div style="border:1px solid grey; text-align: left; ">
    <?php foreach ($data['messages'] as $value) :?>
    <?php echo "<p1>Имя:",  $value['user_id'], "</p1><br>";
    echo "<p2>Комментарий:",   $value['message'], "<p2><br>";
    echo "<p2>Рейтинг:",   $value['rating'], "</p2><br>";
    echo "<p2>Дата добавления:",   $value['message_time'], "</p2><br>";
    if (isset($_SESSION['isLogged']) && $_SESSION['is_admin']==1) {
        $url = 'news/edit/'.$value['message_id'];
        echo "<a href=$url>", 'Редакторовать комментарий', "</a><br><br>";
    } ?>
    <?php endforeach;?>
</div>
        <ul class="pagination">
        <?php while ($data['currentPage']<=$data['pagesP']) :?>
        <li><a href="news/usermessages/<?php echo $data['messages'][0]['user_id']?>?page=<?php echo $data['currentPage']?>"><?php echo $data['currentPage']+1?></a></li>
        <?php $data['currentPage']++;?>
        <?php endwhile;?>
</ul>