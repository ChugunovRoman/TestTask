<?php
$loader = require_once __DIR__.'/vendor/autoload.php'; // автозагрузка классов (composer)

$config = Config::getInstance();

$fileLogger = new LoggerFactory($config->getConfig());
$fileLogger = $fileLogger->logger();
$fileLogger->log("log text");
