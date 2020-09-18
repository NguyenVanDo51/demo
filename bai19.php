Viết PHP script để lấy thư mục gốc
<?php
    echo __FILE__;
    echo PHP_EOL . dirname(__FILE__) ;
    echo PHP_EOL . getcwd();
    echo PHP_EOL . $_SERVER['DOCUMENT_ROOT'];

    $path = explode('/' ,__DIR__);
    var_dump("Root folder: " . $path[1]);
