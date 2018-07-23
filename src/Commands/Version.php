<?php

namespace Fate\ClamD\Commands;

use Fate\ClamD\Commands\Command;

final class Version extends Command
{
    protected static $name = 'VERSION';

    public function __construct()
    {
        parent::__construct();
    }
}
