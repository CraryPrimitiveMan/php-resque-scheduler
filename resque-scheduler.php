<?php
require_once __DIR__ . '/autoload.php';

use resque\scheduler\Worker;
use resque\scheduler\Init;

$init = new Init();

$REDIS_BACKEND = getenv('REDIS_BACKEND');
if(!empty($REDIS_BACKEND)) {
    $init->redisBackend = $REDIS_BACKEND;
}

$LOGGING = getenv('LOGGING');
$VERBOSE = getenv('VERBOSE');
$VVERBOSE = getenv('VVERBOSE');
if(!empty($LOGGING) || !empty($VERBOSE)) {
    $init->logLevel = Worker::LOG_NORMAL;
} else if(!empty($VVERBOSE)) {
    $init->logLevel = Worker::LOG_VERBOSE;
}

$INTERVAL = getenv('INTERVAL');
if(!empty($INTERVAL)) {
    $init->interval = $INTERVAL;
}

$COUNT = getenv('COUNT');
if(!empty($COUNT) && $COUNT > 1) {
    $init->count = $COUNT;
}

$PIDFILE = getenv('PIDFILE');
if (!empty($PIDFILE)) {
    $init->pidFile = $PIDFILE;
}

$init->run();
