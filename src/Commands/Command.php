<?php

namespace MBlankenship\ClamD\Commands;

use MBlankenship\ClamD\Commands\CommandInterface;

class Command implements CommandInterface
{
    protected static $name = '';

    protected $args = [];

    public function __construct(array $args = [])
    {
        array_unshift($args, self::PREFIX . static::$name);
        
        $lastIndex = 1 - count($args);
        $last = $args[$lastIndex];
    
        $args[$lastIndex] = $last . self::SUFFIX;

        $this->args = $args;
    }

    public function formatted(): string
    {
        return implode(' ', $this->args);
    }
}
