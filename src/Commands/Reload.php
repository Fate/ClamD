<?php

namespace MBlankenship\ClamD\Commands;

use MBlankenship\ClamD\Commands\Command;

final class Reload extends Command
{
    protected static $name = 'RELOAD';

    public function __construct()
    {
        parent::__construct();
    }
}
