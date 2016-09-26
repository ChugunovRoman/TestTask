<?php
// класс логера в файл
class FileLogger extends Logger
{
    private $path;
    
    public function __construct()
    {
        $config = Config::getInstance();
        // проверяем, можем ли создать файл (проверка на запись)
		if(is_writable($config->getConfig('filepath', 'file_settings'))) {
			$this->path = $config->getConfig('filepath', 'file_settings');
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
