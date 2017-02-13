<?php

namespace Controller;

use Model\AdModel;
use Model\HeadModel;
use Model\SearchModel;
use Model\TagsModel;
use Model\BackModel;

class BaseController
{
    protected $name = 'Index';
    protected $layout = 'default';
    protected $data;
    protected $message;

    public function __construct()
    {
        $tagsModel = new TagsModel();
        $tags=$tagsModel->getAll();
        $tagNames = array();
        foreach($tags as $tag)
        {
            $tagNames[] = $tag['tag_name'];
        }
        $this->data['tags'] = $tagNames;
        $jtags=json_encode($tagNames, JSON_UNESCAPED_UNICODE);
        $adModel = new AdModel();
        $this->data['ad'] = $adModel->getAll();
        unset($adModel);
        unset($tagsModel);
        $headModel = new HeadModel();
        $this->data['headcolor'] = $headModel->getAll();
        $backModel = new BackModel();
        $this->data['backcolor']=$backModel->getAll();
        $this->data['head'] = array('Черный' => 'black', 'Белый' => 'white');
        $this->data['back'] = array('Черный' => 'black', 'Белый' => 'white','Красный' => 'red', 'Зеленый' => 'green', 'Серый' => 'grey');
        $this->data['random'] = mt_rand(123, 12345);
        $SearchModel = new SearchModel();
        $this->data['all_categories'] = $SearchModel->getCategory();
    }

    protected function render($templateName)
    {
        $data = $this->data;
        $message = $this->message;
        ob_start();
        include SITE_DIR . DS. "View" . DS . $this->name . DS . $templateName . '.php';
        $content = ob_get_clean();
        include SITE_DIR . DS. "View" . DS . "Layout" . DS . $this->layout .'.php';
    }

    protected function render404()
    {
        $data = $this->data;
        $message = $this->message;
        ob_start();
        include SITE_DIR . DS . "View" . DS .'404.php';
        $content = ob_get_clean();
        include SITE_DIR . DS . "View" . DS . "Layout" .DS . $this->layout . '.php';
    }
}