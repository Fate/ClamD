<?php

namespace Fate\ClamD\Commands;

use Fate\ClamD\Commands\Command;

final class Stats extends Command
{
    protected static $name = 'STATS';

    public function __construct()
    {
        parent::__construct();
    }
}
