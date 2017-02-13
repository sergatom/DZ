<?php foreach ($data['pages'] as $value) :?>
    <h3 id="news_header"><a href="news/display/<?php echo $value['article_id'] ?>" ><?php echo $value['title']; ?></a></h3>
<?php endforeach;?>
<ul class="pagination">
    <?php while ($data['currentPage']<=$data['pagesP']) :?>
        <li>
            <a href="news/pagination/<?php echo $data['pages'][0]['category_id'] ?>?page=<?php echo $data['currentPage'] ?>">

                <?php $a = $data['currentPage'] + 1;
                echo $a; ?></a></li>

        <?php $data['currentPage'] += 1;?>
        <?php endwhile;?>
</ul>