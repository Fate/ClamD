<?php

namespace MBlankenship\ClamD\Commands;

use MBlankenship\ClamD\Commands\Command;

final class Version extends Command
{
    protected static $name = 'VERSION';

    public function __construct()
    {
        parent::__construct();
    }
}
