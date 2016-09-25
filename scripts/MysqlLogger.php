<?php
// класс логера в mysql
class MysqlLogger extends Logger
{
    private $mysqli;
    
    public function __construct($host = 'localhost', $user = 'root', $pass = '', $dbname = 'LogDB')
    {
        $this->mysqli = new mysqli($host, $user, $pass, $dbname);
        
        if($this->mysqli->connect_errno) {
            echo "Error: ".$this->mysqli->connect_error."<br>";
        }
    }
    public function write()
    {
        
        if($stmt = $this->mysqli->prepare('INSERT INTO `log` (LogText) values(?)')) {
            $stmt->bind_param('s', $this->text);
            $stmt->execute(); 
        }
    }	
}
