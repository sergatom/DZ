<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo SITE_NAME ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet">
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="http://getbootstrap.com/examples/starter-template/starter-template.css"/>
    <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="View\styles.css">
    <link rel="stylesheet" href="..\..\View\styles.css">
    <link rel="stylesheet" href="..\Scripts\Common.js">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
          integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <script>
        function Unloader(){
            var o = this;
            this.unload = function(evt)
            {
                var message = "Вы действительно хотите покинуть сайт?";
                if (typeof evt == "undefined") {
                    evt = window.event;
                }
                if (evt) {
                    evt.returnValue = message;
                }
                return message;
            }
            this.resetUnload = function()
            {
                $(window).off('beforeunload', o.unload);
                setTimeout(function(){
                    $(window).on('beforeunload', o.unload);
                }, 1000);
            }
            this.init = function()
            {
                $(window).on('beforeunload', o.unload);
                $('a').on('click', o.resetUnload);
                $(document).on('submit', 'form', o.resetUnload);
                $(document).on('keydown', function(event){
                    if((event.ctrlKey && event.keyCode == 116) || event.keyCode == 116){
                        o.resetUnload();
                    }
                });
            }
            this.init();
        }
        $(function(){
            if(typeof window.obUnloader != 'object')
            {
                window.obUnloader = new Unloader();
            }
        })

        $(function () {
            $("#tags").autocomplete({
                source: <?php echo json_encode($data['tags'], JSON_UNESCAPED_UNICODE)?>
            });
        });
        var delay_popup = 15000;
        setTimeout("document.getElementById('bg_popup').style.display='block'", delay_popup);

        $( document ).ready(function() {

            $('.caption').mouseover(function () {
                var $price = $(this).find('.price');
                var cost = $price.text();
                $price.text(cost * 0.9).data('cost', cost);
            });
            $('.caption').mouseout(function () {
                var $price = $(this).find('.price');
                var cost = $price.data('cost');
                $price.text(cost);
            });
        });
    </script>
    <style>
        #bg_popup {
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            position: fixed;
            z-index: 99999;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
        }
        #popup {
            background: #fff;
            width: 520px;
            margin: 25% auto;
            padding: 5px 20px 13px 20px;
            border: 1px solid lightslategrey;
            position: relative;
            bottom: 150px;
            -webkit-box-shadow: 0px 0px 20px #000;
            -moz-box-shadow: 0px 0px 20px #000;
            box-shadow: 0px 0px 20px #000;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
            border-radius: 5px;
        }
        .close {
            display: block;
            position: absolute;
            top: 15px;
            right: 15px;
            width: 90px;
            height: 25px;
            line-height: 28px;
            color: #fff;
            background: blue;
            cursor: pointer;
            border-radius: 5px;
            -moz-box-shadow: 1px 1px 3px #000;
            -webkit-box-shadow: 1px 1px 3px #000;
            box-shadow: 1px 1px 3px #000;
        }
        .close:hover {
            background-color: yellow;
        }
        .blok {
             margin-bottom: 30px;
            background: red;
         }
        .tov {
            background-color: #3C763D;
        }
        .col-sm-8 {
            background-color: white;
            border-radius: 15px;
            border: 3px;
        }
    </style>
    <base href="/">
</head>
<body>
<div style="width: 100%";>

<?php foreach ($data['headcolor'] as $value){$color = array_shift($value); if ($color == 'white') {echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\">"; } elseif ($color == 'black') {echo "<nav class=\"navbar navbar-default navbar-fixed-top\">";}} ?>

    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo SITE_NAME ?></a>
        </div>
        <div></div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                        <li>
                            <form role="search" class="navbar-form navbar-left" action="/news/tags/">
                                <div id="find" class="form-group">
                                    <input type="text" id="tags" placeholder="Поиск по тегам" class="form-control" name="tag">
                                    <button type="submit" class="btn btn-default">Поиск</button>
                                </div>
                            </form></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                    <li><a href="search/search/">Поиск</a></li>
                <?php if (!isset($_SESSION['isLogged'])) { ?>
                    <li><a href="login/login/">Вход</a></li>
                <?php } ?>
                <?php if (!isset($_SESSION['isLogged'])) { ?>
                    <li><a href="login/signup/">Регистрация</a></li>
                <?php } ?>
                <?php if (isset($_SESSION['isLogged'])) { if ($_SESSION['isLogged'] == 1 && $_SESSION['is_admin'] == 1) { ?>
                    <li><a href="admin/main/">Админка</a></li>
                <?php }} ?>
                <?php if (isset($_SESSION['isLogged'])) { if ($_SESSION['isLogged'] == 1) { ?>
                    <li><a href="login/logout/">Выход</a></li>
                <?php }} ?>
            </ul>

    </div>
</nav>
<br>
<br>
<br>
<br>

<div align="justify" class="row" style="background-color:<?php foreach ($data['back'] as $value) {
    if($value['is_active']==1){
        echo $value['back_color'];
    }
} ?>">

    <div class="col-sm-2">
        <?php
        foreach ($data['ad'] as $i){
            if ($i['Side'] == 'Left'){
                echo "<div class=\"thumbnail\">
          <div class=\"caption\">
                <p>Товар: ".$i['name']."</p>
                <p>Цена: <span class = \"price\">".$i['price']." </span></p>
                <p>".$i['site']."</p>" ?>
                <?php if (isset($_SESSION['is_admin'])) { ?>
                    <?php if ($_SESSION['is_admin'] == 1){ ?>
                        <p><a href="admin/deletead/<?php echo $i['ad_id']?>">Удалить рекламу</a></p>
                    <?php }} ?>
                <div class='cupon'>
                    <?php echo "Купон на скидку: " . $data['random'] . " примените и получите скидку 10%"; ?>
                </div>
                <?php echo "</div></div>";}}?>
    </div>



    <div class="col-sm-8">
        <div id="bg_popup">
            <div id="popup">
                <p1>Подпишитесь на новостную рассылку</p1>
                <form method="post" action="news/save/">
                    <div class="form-group">
                        <label for="inputName">Ваше имя</label>
                        <input name="name" type="text" class="form-control" id="inputName" placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Ваша фамилия</label>
                        <input name="surname" type="text" class="form-control" id="inputName"
                               placeholder="Ваша фамилия">
                    </div>
                    <div class="form-group">
                        <label for="inputName">Ваша почта</label>
                        <a href="../Product/products.php"></a>
                        <input name="email" type="email" class="form-control" id="inputName" placeholder="Ваша почта">
                    </div>
                    <button type="submit" class="btn btn-primary">Подписаться</button>
                </form>
                <a class="close" href="#" title="Закрыть"
                   onclick="document.getElementById('bg_popup').style.display='none'; return false;">Закрыть</a>
            </div>
        </div>
        <?php if ($message) { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                <?php echo $message ?>
            </div>
        <?php } ?>
        <?php echo $content; ?>
    </div>
    <div class="col-sm-2">
        <?php
        foreach ($data['ad'] as $i){
            if ($i['Side'] == 'Right'){
                echo "<div class=\"thumbnail\">
          <div class=\"caption\">
                <p>Товар: ".$i['name']."</p>
                <p>Цена: <span class = \"price\">".$i['price']." </span></p>
                <p>".$i['site']."</p>"?> <?php ?>
                <?php if (isset($_SESSION['is_admin'])) { ?>
                    <?php if ($_SESSION['is_admin'] == 1){ ?>
                        <p><a href="admin/deletead/<?php echo $i['ad_id']?>">Удалить рекламу</a></p>
                    <?php }} ?>
                <div class='cupon'>
                    <?php echo "Купон на скидку: " . $data['random'] . " примените и получите скидку 10%"; ?>
                </div>
                <?php echo "</div></div>";}}?>
    </div>
</div>
</div>




</body>
</html>