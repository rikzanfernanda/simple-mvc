<?php

class data {
    private $table = 'data';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAll()
    {
    	$this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDataById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

}