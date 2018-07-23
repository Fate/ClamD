<?php

namespace MBlankenship\ClamD;

use MBlankenship\ClamD\Client\ClientFactory;
use MBlankenship\ClamD\Commands\CommandInterface;

class ClamD
{
    private $client = null;

    public function __construct(int $domain, int $protocol, ClientFactory $factory)
    {
        $this->client = $factory->create($domain, SOCK_STREAM, $protocol);
    }

    public function close(): self
    {
        $this->client->close();

        return $this;
    }

    public function connect(string $address, int $port = 0): self
    {
        $this->client->connect($address, $port);

        return $this;
    }

    public function execute(CommandInterface $command): string
    {
        $this->client->send($command->formatted());
        
        return $this->client->recv(1024);
    }

    public function shutdown(int $how = 2): self
    {
        $this->client->shutdown($how);

        return $this;
    }
}
