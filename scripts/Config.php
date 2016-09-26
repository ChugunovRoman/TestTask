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
    
    public function getConfig($prop = 'logger', $menu = 'logger_settings')
    {
        return $this->cfg_file[$menu][$prop];
    }
    
    private function __sleep () {}
    
    private function __clone () {}
    
    private function __wakeup () {}
}
