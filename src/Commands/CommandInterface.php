<?php

namespace Fate\ClamD\Commands;

interface CommandInterface
{
    const PREFIX = 'n';

    const SUFFIX = PHP_EOL;

    public function formatted(): string;
}
