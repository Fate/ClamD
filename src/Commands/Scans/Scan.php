<?php

namespace Fate\ClamD\Commands\Scans;

use Fate\ClamD\Commands\Command;

class Scan extends Command
{
    protected static $name = 'SCAN';

    public function __construct(string $path)
    {
        parent::__construct([$path]);
    }
}
