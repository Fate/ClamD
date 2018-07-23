<?php

namespace Fate\ClamD\Commands;

use Fate\ClamD\Commands\Command;

final class Ping extends Command
{
    protected static $name = 'PING';

    public function __construct()
    {
        parent::__construct();
    }
}
