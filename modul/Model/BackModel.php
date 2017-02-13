<?php

namespace Model;

class BackModel extends BaseModel
{
    protected $table = 'style';

    public function getAll()
    {
        $result = $this->db->query('select background_color from ' . $this->table);
        return $result;
    }
    public function saveSelected($color)
    {
        $query = "UPDATE style set `background_color` = '{$color}' where id = 1";
        return $this->db->execute($query);
    }
}