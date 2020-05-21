<?php

use log\CustomLogger;
spl_autoload_register(
    function ($class) {
        include_once $class . '.php';
    }
);

require_once realpath("vendor/autoload.php");
$logger = new CustomLogger('log/log.json');
$foo = new Foo($logger);
$foo->doSomething();
