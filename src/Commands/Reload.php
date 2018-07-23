<?php

namespace Fate\ClamD\Commands;

use Fate\ClamD\Commands\Command;

final class Reload extends Command
{
    protected static $name = 'RELOAD';

    public function __construct()
    {
        parent::__construct();
    }
}
