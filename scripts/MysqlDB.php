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
        $config = Config::getInstance();
        $this->_connection = new mysqli($config->getConfig('mysql_settings.host'), 
                                        $config->getConfig('mysql_settings.username'),
                                        $config->getConfig('mysql_settings.password'),
                                        $config->getConfig('mysql_settings.namedb'));
        if($this->_connection->connect_errno) {
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
