//add the autoload in here
<? php

autoLoader = new AutoLoader(__DIR__); //put in index.php
?>
<?php
spl_autoload_register(function ($class) {
  require_once __DIR__
    . DIRECTORY_SEPARATOR
    . str_replace('\\', DIRECTORY_SEPARATOR, $class)
    . '.php';
});
