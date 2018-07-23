<?php

namespace MBlankenship\ClamD\Commands;

use MBlankenship\ClamD\Commands\Command;

final class Ping extends Command
{
    protected static $name = 'PING';

    public function __construct()
    {
        parent::__construct();
    }
}
