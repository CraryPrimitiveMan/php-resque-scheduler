<?php
require_once __DIR__ . '/../autoload.php';

use resque\scheduler\ResqueScheduler;

$in = 120;
$args = array('id' => 1);
ResqueScheduler::enqueueIn($in, 'default', '\resque\scheduler\demo\Job', $args);
