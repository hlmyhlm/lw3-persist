<?php

namespace App;

use Illuminate\Contracts\Queue\Factory as QueueManager;
use Illuminate\Contracts\Filesystem\Factory as FilesystemManager;

class MyThing
{
    public function __construct(
        protected QueueManager $queue,
        protected FilesystemManager $files
    ) {}
}
