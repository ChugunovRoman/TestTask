<?php
// будто бы берем настройки из конфига 
function Config($cfg)
{
    switch ($cfg) {
        case 'MYSQL':
            return 1;
        case 'FILE':
            return 2;
        case 'STREAM':
            return 3;
        case 'HOST':
            return 'localhost';
        case 'USER':
            return 'root';
        case 'PASSWORD':
            return 'typedef';
        case 'NAME_BD':
            return 'LogDB';
        case 'FILE_PATH':
            return 'file.log';
    }
}
    