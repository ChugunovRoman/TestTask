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
    
    private function arrayGet(array $haystack, $needle, $default = null)
    {    
        if(array_key_exists($needle, $haystack)) {
            return $haystack[$needle];
        }

        foreach(explode('.', $needle) as $key) {
            if(is_array($haystack) && array_key_exists($key, $haystack))
                $haystack = $haystack[$key];
            else
                return $default;
        }

        return $haystack;
    } 
    
    public function getConfig($path)
    {
        return $this->arrayGet($this->cfg_file, $path);
    }
    
    private function __sleep () {}
    
    private function __clone () {}
    
    private function __wakeup () {}
}
