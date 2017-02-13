<?php

namespace Controller;

use Model\SearchModel;

class SearchController extends BaseController
{
    protected $name = 'Search';

    public function search(){
        $this->render("search");
    }

}