<?php

declare(strict_types=1);

namespace Challenge\Exception;

class ElectronicItemsFactoryInvalidItemException extends \Exception
    {

    const MSG = 'Item type isn\'t valid: ';

    function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL)
        {
        parent::__construct(self::MSG . $message, $code, $previous);
        }

    }
