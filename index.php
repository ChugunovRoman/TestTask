<?php
$loader = require_once __DIR__.'/vendor/autoload.php'; // автозагрузка классов (composer)

$config = Config::getInstance();

$arr = ['key1' => "name", 
        'key2' => "value"];

$excpt = new Exception("My exception :)");

$fileLogger = new LoggerFactory($config->getConfig('logger_settings.logger'));
$fileLogger = $fileLogger->logger();
$fileLogger->log($arr);
