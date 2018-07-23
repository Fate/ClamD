<?php

namespace Fate\ClamD\Client;

use Fate\ClamD\Client\Client;
use Fate\ClamD\Client\ClientInterface;
use Fate\ClamD\Exception\SocketException;

class ClientFactory
{
    public function create(int $domain, int $type, int $protocol): ClientInterface
    {
        $resource = @socket_create($domain, $type, $protocol);

        if (false === $resource)
        {
            throw SocketException::fromGlobal('socket_create');
        }

        return new Client($resource);
    }
}
