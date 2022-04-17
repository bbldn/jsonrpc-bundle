<?php

namespace BBLDN\JSONRPCBundle\Bundle\Domain\Exception;

class BadRequestException extends JSONRPCException
{
    /**
     * @param string $message
     */
    public function __construct(string $message)
    {
        parent::__construct($message, -32600);
    }
}