<?php
// базовый абстрактный класс
abstract class Logger 
{
    protected $text;
    
    public function log($entry)
    {
        $some_text = '';
        if(is_array($entry)) {
            echo "!,";
            foreach($entry as $key => $value) {
                $some_text .= ' ['.$key.'] => '.$value;
            }
            $entry = $some_text;
        }
        if($entry instanceof Exception)
        {
            $entry = $entry->__toString();
        }
        $this->text = date("[Y-m-d H:i:s] ").$entry;
        $this->write();
    }
    
    public function write(){}
}
