<?php

namespace MBlankenship\ClamD\Commands;

use MBlankenship\ClamD\Commands\Command;

final class VersionCommands extends Command
{
    protected static $name = 'VERSIONCOMMANDS';

    public function __construct()
    {
        parent::__construct();
    }
}
