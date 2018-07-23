<?php

namespace MBlankenship\ClamD\Commands;

use MBlankenship\ClamD\Commands\Command;

final class Shutdown extends Command
{
    protected static $name = 'SHUTDOWN';

    public function __construct()
    {
        parent::__construct();
    }
}
