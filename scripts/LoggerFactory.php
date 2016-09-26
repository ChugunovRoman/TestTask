<?php
// фабрика, возвращает выбранный логгер
class LoggerFactory
{
    const MYSQL   = 1;
    const FILE    = 2;
    const STREAM  = 3;

    private $mode;

    public function __construct($mode)
    {
        $this->mode = $mode;
    }

    public function logger()
    {
        switch($this->mode) {
            case (self::MYSQL):
                return new MysqlLogger;
            case (self::FILE):
                return new FileLogger;
            case (self::STREAM):
                return new StreamLogger;
        }
    }
}
