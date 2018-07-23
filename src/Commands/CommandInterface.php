<?php

namespace MBlankenship\ClamD\Commands;

interface CommandInterface
{
    const PREFIX = 'n';

    const SUFFIX = PHP_EOL;

    public function formatted(): string;
}
