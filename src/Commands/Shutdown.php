<?php

namespace Fate\ClamD\Commands;

use Fate\ClamD\Commands\Command;

final class Shutdown extends Command
{
    protected static $name = 'SHUTDOWN';

    public function __construct()
    {
        parent::__construct();
    }
}
