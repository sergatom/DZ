<?php

namespace Model;

class SearchModel extends BaseModel
{
    public function getCategory()
    {
        $result = $this->db->query('select category_name from ' . 'categories');
        return $result;
    }
}