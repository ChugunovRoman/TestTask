<?php
// класс логера в mysql
class MysqlLogger extends Logger
{
    private $mysqli;
    
    public function __construct()
    {
        $db = MysqlDB::getInstance();
        $this->mysqli = $db->getConnection();
    }
    public function write()
    {        
        if($stmt = $this->mysqli->prepare('INSERT INTO `log` (LogText) values(?)')) {
            $stmt->bind_param('s', $this->text);
            $stmt->execute(); 
        }
    }	
}
