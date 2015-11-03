<?php
namespace resque\scheduler;

require_once __DIR__ . '/../autoload.php';

/**
 * Class Init, a init file for worker
 * @author Harry Sun <sunguangjun@126.com>
 * @copyright 2015 Harry Sun <sunguangjun@126.com>
 * @license http://www.opensource.org/licenses/mit-license.php The MIT License
 * @package resque
 */

class Init extends \resque\Init
{
    /**
     * Start a worker
     */
    protected function _startWorker()
    {
        $worker = new Worker();
        $worker->logLevel = $this->logLevel;
        fwrite(STDOUT, '*** Starting scheduler worker ' . PHP_EOL);
        $worker->work($this->interval);
    }
}
