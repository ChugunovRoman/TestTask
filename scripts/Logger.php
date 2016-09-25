<?php
// базовый абстрактный класс
abstract class Logger 
{
    protected $text;
    
    public function log($entry)
    {
        $this->text = date("[Y-m-d H:i:s] ").serialize($entry);
        $this->write();
    }
    public function write(){}
}
