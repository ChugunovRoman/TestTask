<?php
// берем настройки из конфига 
function Config($cfg)
{
    $config = parse_ini_file('./config.ini', true);
    switch ($cfg) {
        case 'MYSQL':
            return 1;
        case 'FILE':
            return 2;
        case 'STREAM':
            return 3;
        case 'HOST':
            return $config['mysql_settings']['host'];
        case 'USER':
            return $config['mysql_settings']['username'];
        case 'PASSWORD':
            return $config['mysql_settings']['password'];
        case 'NAME_BD':
            return $config['mysql_settings']['namedb'];
        case 'FILE_PATH':
            return $config['file_settings']['filepath'];
    }
}
    