<?php

namespace Fate\ClamD\Client;

interface ClientInterface
{
    public function close();

    public function connect(string $address, int $port = 0);

    public function recv(int $length, int $flags = 0);

    public function send(string $buffer, int $flags = 0);

    public function shutdown(int $how = 2);
}