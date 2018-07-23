<?php

namespace MBlankenship\ClamD\Client;

use MBlankenship\ClamD\Client\Client;
use MBlankenship\ClamD\Client\ClientInterface;
use MBlankenship\ClamD\Exception\SocketException;

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
