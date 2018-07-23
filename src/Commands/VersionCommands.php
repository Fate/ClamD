<?php

namespace Fate\ClamD\Commands;

use Fate\ClamD\Commands\Command;

final class VersionCommands extends Command
{
    protected static $name = 'VERSIONCOMMANDS';

    public function __construct()
    {
        parent::__construct();
    }
}
