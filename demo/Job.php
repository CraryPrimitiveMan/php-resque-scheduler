<?php
namespace resque\scheduler\demo;

class Job extends \resque\Job
{
    public function perform()
    {
        fwrite(STDOUT, 'Hello World!');
    }
}
