<?php

namespace Model;

class HeadModel extends BaseModel
{
    protected $table = 'style';
    public function getAll()
    {
        $result = $this->db->query('select head_color from ' . $this->table );
        return $result;
    }

    public function saveSelected($color)
    {
        $query = "UPDATE style set `head_color` = '{$color}' where id = 1";
        return $this->db->execute($query);
    }
    public function reboot()
    {
        header("Location: http://localhost/admin/style");
    }
}