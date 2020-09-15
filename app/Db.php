<?php 
global $db;

class DB {

    protected $db;

    public function __construct()
    {
        $this->db = new Connection();
        // $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $this->db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function query($sql)
    {
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

$db = new DB();