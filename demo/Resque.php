<?php
date_default_timezone_set('GMT');
require __DIR__ . '/../src/Init.php';

use resque\Init;

$init = new Init();
$init->run();
