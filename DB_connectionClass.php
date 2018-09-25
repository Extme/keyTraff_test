<?php

class DB_connection {

    protected $connection;
    private static $instance = null;

    public static function getInstance() {

        if (self::$instance == null) {
            self::$instance = new DB_connection;
        }

        return self::$instance;
    }

    public function __construct() {
        
        $this->connection = new PDO("mysql:host=127.0.0.1;dbname=key_traff", 'root', '');
        if (!$this->connection) {
            throw new Exception('Connection failed');
        }
    }

    public function query($sql) {

    if(!$this->connection) {
        return false;
    }

    $result = $this->connection->query($sql);
    return $result;
    }
}    

?>	



