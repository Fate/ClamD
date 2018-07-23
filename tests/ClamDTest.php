<?php

use Fate\ClamD\ClamD;
use Fate\ClamD\Client\ClientFactory;
use Fate\ClamD\Commands\Ping;
use PHPUnit\Framework\TestCase;

final class ClamDTest extends TestCase
{
    public function testPing(): void
    {
        $domain = constant(getenv('CLAMD_DOMAIN'));
        $protocol = constant(getenv('CLAMD_PROTOCOL'));
        
        $clamd = new ClamD($domain, $protocol, new ClientFactory);

        $address = getenv('CLAMD_ADDRESS');
        $port = intval(getenv('CLAMD_PORT'));

        $clamd->connect($address, $port);

        $this->assertEquals('PONG', $clamd->execute(new Ping));

        $clamd->shutdown()->close();
    }
}
