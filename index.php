<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Logger</title>
</head>
<body>
	<p>WORK</p>
<?php
    $loader = require_once __DIR__.'/vendor/autoload.php'; // автозагрузка классов (composer)

    // лог в файл
    $fileLogger = new FileLogger("file.log");
    $fileLogger->log("Im write to this file. And I do it. NOW!");
	
	// лог в mysql
    $DBLogger = new MysqlLogger("127.0.0.1", "root", "typedef", "LogDB");
	$DBLogger->log("Im write the log to this table.");
    
    // лог в поток
    $stdoutLogger = new StreamLogger();
    $stdoutLogger->log("Im write to the stream.");
?>
</body>
</html>
