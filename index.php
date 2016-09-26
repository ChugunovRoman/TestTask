<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Logger</title>
</head>
<body>
<?php
    $loader = require_once __DIR__.'/vendor/autoload.php'; // автозагрузка классов (composer)

    $fileLogger = new LoggerFactory(Config('FILE'));
    $fileLogger = $fileLogger->logger();
    $fileLogger->log("file");
    
    $fileLogger = new LoggerFactory(Config('MYSQL'));
    $fileLogger = $fileLogger->logger();
    $fileLogger->log("mysql");
    
    $fileLogger = new LoggerFactory(Config('STREAM'));
    $fileLogger = $fileLogger->logger();
    $fileLogger->log("stream");
    
?>
</body>
</html>
