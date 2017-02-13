<div style="width: 100%">
<b>Новости</b>
    <div class="row">
        <?php foreach ($data['category'] as $product) { ?>
            <div id="news_block">
                <h4 style="border: solid 1px"><a
                        href="news/pagination/<?php echo $product['category_id'] ?>?page=0"><?php echo $product['category_name']; ?></a>
                </h4>
                <?php foreach ($product['articles'] as $article) { ?>
                    <b id="news_header"><a
                            href="news/display/<?php echo $article['article_id'] ?>"><?php echo $article['title']; ?></a><br>
                    </b>
                <?php } ?>
            </div>
        <?php } ?>
    </div>
    <b>Топ 5 комментаторов:</b>
        <div class="caption">
            <?php foreach ($data['users'] as $value) { ?>
                <b><a href="news/usermessages/<?php echo $value['user_id'] ?>?page=0"><?php echo $value['login']; ?>
                        <?php echo $value['count(*)']; ?> сообщения</a></b><br>


            <?php } ?>
        </div>
<b>Топ 3 самых комментируемых новости за последние сутки:</b>
<div style="border: solid 1px">
    <?php foreach ($data['threearticle'] as $value) { ?>
        <h4><a href="news/display/<?php echo $value['article_id']?>"><?php echo $value['title']; ?></a></h4>
    <?php } ?>
</div>
<div align="center">
<div id="myCarousel" class="carousel slide" style="height: 500px;width: 650px;" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="<?php echo $data['articles'][0]['photo'] ?>" style="height: 500px;width: 650px;" alt="image">
            <div class="carousel-caption">
                <h3>
                    <a href="news/display/<?php echo $data['articles'][0]['article_id'] ?>"><?php echo $data['articles'][0]['title'] ?></a>
                </h3>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo $data['articles'][1]['photo'] ?>" style="height: 500px;width: 650px;" alt="image">
            <div class="carousel-caption">
                <h3>
                    <a href="news/display/<?php echo $data['articles'][1]['article_id'] ?>"><?php echo $data['articles'][1]['title'] ?>
                </h3>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo $data['articles'][2]['photo'] ?>" style="height: 500px;width: 650px;" alt="image">
            <div class="carousel-caption">
                <h3>
                    <a href="news/display/<?php echo $data['articles'][2]['article_id'] ?>"><?php echo $data['articles'][2]['title'] ?>
                </h3>
            </div>
        </div>

        <div class="item">
            <img src="<?php echo $data['articles'][3]['photo'] ?>" style="height: 500px;width: 650px;" alt="image">
            <div class="carousel-caption">
                <h3>
                    <a href="news/display/<?php echo $data['articles'][3]['article_id'] ?>"><?php echo $data['articles'][3]['title'] ?>
                </h3>
            </div>
        </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>
</div>

