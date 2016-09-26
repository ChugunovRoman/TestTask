<?php
// одиночка для управления соединением к MySQL
class MysqlDB
{
    static private $_instance;
    private $_connection;
    
    public static function getInstance()
    { 
        if (!self::$_instance) {
            self::$_instance = new self();
        } 
        return self::$_instance;
    }
    
    private function __construct()
    {
        $this->_connection = new mysqli(Config('HOST'), Config('USER'), Config('PASSWORD'), Config('NAME_BD'));
        if(mysqli_connect_errno()) {
            throw new Exception("Failed to conencto to MySQL: ".mysqli_connect_error());
        }
    }
    
    private function __clone() {}
    
    private function __sleep() {}
        
    private function __wakeup() {}
    
    public function getConnection()
    {
        return $this->_connection;
    }
}
