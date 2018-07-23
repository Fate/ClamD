<?php

namespace MBlankenship\ClamD\Exception;

use RuntimeException;

class SocketException extends RuntimeException
{
    /**
     * Message string template.
     */
    private const MESSAGE = '%s() failed: reason: [%d] %s';

    /**
     * Create a SocketException.
     *
     * @param string $method
     * @param integer $errno
     * @param string $strerr
     */
    public function __construct(string $method, int $errno, string $strerr)
    {
        parent::__construct(sprintf(self::MESSAGE, $method, $errno, $strerr));
    }

    /**
     * Generate SocketException from the last global socket error.
     *
     * @param string $method
     * @return \Fate\ClamAV\Exception\SocketException
     */
    public static function fromGlobal(string $method)
    {
        $errno = socket_last_error();

        return self::fromErrno($method, $errno);
    }

    /**
     * Generate SocketException from the last error on a socket.
     *
     * @param string $method
     * @param resource $socket
     * @return \Fate\ClamAV\Exception\SocketException
     */
    public static function fromSocket(string $method, $socket)
    {
        $errno = socket_last_error($socket);

        return self::fromErrno($method, $errno);
    }

    /**
     * Generate SocketException from an error code.
     *
     * @param string $method
     * @param integer $errno
     * @return \Fate\ClamAV\Exception\SocketException
     */
    protected static function fromErrno(string $method, int $errno)
    {
        $strerr = socket_strerror($errno);

        return new static($method, $errno, $strerr);
    }
}