<?php
namespace Docker\Stream;

use Http\Client\Socket\Stream;

class DockerTtyStream
{
    /** @var resource The underlying socket */
    public $socket;

    public function __construct(Stream $stream)
    {
        $this->socket = $stream->detach();
    }

    /**
     * Send input to the container
     *
     * @param string $data Data to send
     */
    public function write($data)
    {
        $this->socketWrite($data);
    }

    public function read($maxBytes = 500000)
    {
        if (!is_resource($this->socket) || feof($this->socket)) {
            return null;
        }

        return fread($this->socket, $maxBytes);
    }

    /**
     * Write to the socket
     *
     * @param $data
     *
     * @return int
     */
    private function socketWrite($data)
    {
        return fwrite($this->socket, $data);
    }

}
