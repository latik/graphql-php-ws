<?php

namespace GraphQLWs\Exception;

use Throwable;

/**
 * Exception because the client is unauthorised.
 */
class UnauthorizedException extends ConnectionExceptionBase
{
    /**
     * {@inheritdoc}
     */
    protected $code = 4401;

    /**
     * {@inheritdoc}
     */
    public function __construct($message = "Unauthorized", Throwable $previous = null)
    {
        parent::__construct($message, $previous);
    }
}
