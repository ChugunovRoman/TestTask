<?php
// базовый абстрактный класс
abstract class Logger 
{
    protected $text;
    
    public function log($entry)
    {
        if(is_array($entry)) {
            $entry = print_r($entry, true);
        } elseif($entry instanceof Exception) {
            $entry = $entry->getMessage();
        }            
        
        $this->text = date("[Y-m-d H:i:s] ").$entry;
        $this->write();
    }
    
    public function write(){}
}
