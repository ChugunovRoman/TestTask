<?php
// класс настроек программы  
class Config
{
    static private $_instance;
    private $cfg_file;
    
    public static function getInstance()
    {
        if (!self::$_instance) {
            self::$_instance = new self();
        } 
        return self::$_instance;
    }
    
    private function __construct ()
    {
        $this->cfg_file = parse_ini_file('./config.ini', true);
    }
    
    public function getConfig($path)
    {
        return arrayGet($this->cfg_file, $path);
    }
    
    private function __sleep () {}
    
    private function __clone () {}
    
    private function __wakeup () {}
}
