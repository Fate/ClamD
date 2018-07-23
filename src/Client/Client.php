<?php

namespace MBlankenship\ClamD\Client;

use MBlankenship\ClamD\Client\ClientInterface;
use MBlankenship\ClamD\Exception\SocketException;

class Client implements ClientInterface
{
    protected $resource = null;

    public function __construct($resource)
    {
        $this->resource = $resource;
    }

    public function close(): self
    {
        @socket_close($this->resource);

        return $this;
    }

    public function connect(string $address, int $port = 0): self
    {
        $ret = @socket_connect($this->resource, $address, $port);

        if (false === $ret)
        {
            throw SocketException::fromSocket('socket_connect', $this->resource);
        }

        return $this;
    }

    public function recv(int $length, int $flags = 0): string
    {
        $ret = @socket_recv($this->resource, $buffer, $length, $flags);

        if (false === $ret)
        {
            throw SocketException::fromSocket('socket_recv', $this->resource);
        }

        return trim($buffer);
    }

    public function send(string $buffer, int $flags = 0): self
    {
        $ret = @socket_send($this->resource, $buffer, strlen($buffer), $flags);

        if (false === $ret)
        {
            throw SocketException::fromSocket('socket_send', $this->resource);
        }

        return $this;
    }

    public function shutdown(int $how = 2): self
    {
        $ret = @socket_shutdown($this->resource, $how);

        if (false === $ret)
        {
            throw SocketException::fromSocket('socket_shutdown', $this->resource);
        }

        return $this;
    }
}
