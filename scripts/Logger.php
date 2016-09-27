<?php
// базовый абстрактный класс
abstract class Logger 
{
    protected $text;
    
    public function log($entry)
    {
        if(is_array($entry) or is_object($entry)) {
            $some_text = '';
            foreach($entry as $key => $value) {
                $some_text .= ' ['.$key.'] => '.$value;
            }
            $entry = $some_text;
        }
        $this->text = date("[Y-m-d H:i:s] ").$entry;
        $this->write();
    }
    
    public function write(){}
}
