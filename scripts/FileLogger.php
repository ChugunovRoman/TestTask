<?php
// класс логера в файл
class FileLogger extends Logger
{
    private $path;
    
    public function __construct()
    {
        // проверяем, можем ли создать файл (проверка на запись)
		if(is_writable(Config('FILE_PATH'))) {
			$this->path = Config('FILE_PATH');
        } else {
            //echo $path." failed to open stream: Permission denied.";
            $this->path = 'server.log';
        }
    }
    public function write()
    {
		return file_put_contents($this->path, $this->text."\n", FILE_APPEND);
    }
}
