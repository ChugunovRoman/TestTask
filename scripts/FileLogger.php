<?php
// класс логера в файл
class FileLogger extends Logger
{
    private $path;
    
    public function __construct($path = 'server.log')
    {
        // если нет файла, то создадим его
		if(!file_exists($path)) {
			$file = fopen($path, "w");
        }
		$this->path = $path;
    }
    public function write()
    {
		return file_put_contents($this->path, $this->text."\n", FILE_APPEND);
    }
}
