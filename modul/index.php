<?php

define('SITE_DIR', __DIR__);
define('DS', DIRECTORY_SEPARATOR);
define('SITE_NAME', 'Новости');
define('SITE_HOST', $_SERVER['HTTP_HOST']);

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'mod_10');

function autoload($className)
{
    $className = str_replace('\\', DS, $className);
    $file = SITE_DIR . DS . $className . '.php' ;
    if(file_exists($file))
    {
        include_once $file;
    }
}
spl_autoload_register('autoload');
    
$controller = 'index';
$action = 'index';
$parameters = null;
session_start();

if( isset($_GET['route']))
{
    $route = explode('/', $_GET['route']);
    if(isset($route[0]))
    {
        $controller = $route[0];
    }
    if(isset($route[1]))
    {
        $action = $route[1];
    }
    if(isset($route[2]))
    {
        $parameters = $route[2];
    }
}
$controller=ucfirst($controller);
$controllerName = "\\Controller\\{$controller}Controller";

$controllerObj = new $controllerName();
if(is_callable(array($controllerObj, $action)))
{
    $controllerObj->$action($parameters);
} else
    {
    echo 'Starting default!';
    $controllerObj->index($parameters);
    }


/*
Сервер баз данных:  	db2.ho.ua
Имя базы данных:  	skill
Имя пользователя:  	skill
Управление базой:  	https://www.ho.ua/phpMyAdmin
Пароль gfhjkm

<?php foreach ($data['pages'] as $value){?>
<h3 id="news_header"><a href="news/display/<?php echo $value['article_id'] ?>" ><?php echo $value['title']; ?></a></h3>
<?php } ?>
<ul class="pagination">
    <? while ($data['currentPage']<=$data['pagesP']){?>
    <li><a href="news/pagination/<?php echo $data['pages'][0]['category_id']?>?page=
<?php echo $data['currentPage']?>"><?php echo $data['currentPage']+1?></a></li>
    <?php $data['currentPage']++; "}" ?>
</ul>

<?php foreach ($data['pages'] as $value){?>
    <h3 id="news_header"><a href="news/display/<?php echo $value['article_id'] ?>" ><?php echo $value['title']; ?></a></h3>
<?php "}"?>
<ul class="pagination">
    <? while ($data['currentPage']<=$data['pagesP']){?>
        <li><a href="news/pagination/
<?php echo $data['pages'][0]['category_id']?>
?page=<?php echo $data['currentPage']?>">
                <?php echo $data['currentPage']+1?></a></li>
        <?php $data['currentPage']++; }?>
</ul>


<br>
<ul class="pagination">
    <li class="disabled"><a href="#">«</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">»</a></li>
</ul>












<?php

class Button
{
    public $page;
    public $text;
    public $isActive;

    public function __construct($page, $isActive = true, $text = null)
    {
        $this->page = $page;
        $this->text = is_null($text) ? $page : $text;
        $this->isActive = $isActive;
    }
}

class Pagination
{
    public $buttons = array();
    public $pagesCount;

    public function __construct(Array $options = array('itemsCount' => 257, 'itemsPerPage' => 10, 'currentPage' => 1))
    {
        extract($options);
        $pagesCount = ceil($itemsCount / $itemsPerPage);
    }

    $this->buttons[] = new Button($currentPage - 1, $currentPage > 1, 'Previous');

    for ($i = 1; $i <= $pagesCount; $i++) {
        $active = $currentPage != $i;
        $this->buttons[] = new Button($i, $active);
    }

    $this->buttons[] = new Button($currentPage + 1, $currentPage < $pagesCount, 'Next');
    if ($currentPage > $pagesCount) {
        $currentPage = $pagesCount;
    }
}

$pagination = new Pagination();

$Button = new Button;


$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$p = new Pagination(array(
    'itemsCount' => 23,
    'itemsPerPage' => 5,
    'currentPage' => $page
));
?>

<b>Pagination test</b> <hr/>

<?php foreach ($p->buttons as $button) :
    if ($button->isActive) : ?>
        <a href = '?page=<?=$button->page?>'><?=$button->text?></a>
    <?php else : ?>
        <span style="color:#555555"><?=$button->text?></span>
    <?php endif;
endforeach; ?>
*/