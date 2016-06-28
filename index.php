<?php

define('DRIPS_STARTUP', __DIR__.'/vendor/drips/drips/index.php');

if(!is_dir(__DIR__.'/vendor')){
    echo '<h1>Welcome to Drips!</h1>';
    echo '<p>Please execute <code>php drips install</code> on the command line to continue!</p>';
} else {
    if(!defined('DRIPS_DIRECTORY')){
        define('DRIPS_DIRECTORY', __DIR__);
    }
    if(!include(DRIPS_STARTUP)){
        die('Die Drips-Installation ist fehlgeschlagen!');
    }
}
