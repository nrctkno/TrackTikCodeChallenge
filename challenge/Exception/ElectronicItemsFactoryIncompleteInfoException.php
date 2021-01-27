<?php

declare(strict_types=1);

namespace Challenge\Exception;

class ElectronicItemsFactoryIncompleteInfoException extends \Exception
    {

    const MSG = 'Couldn\'t create an electronic item: the item does not have the required information.';

    function __construct(string $message = "", int $code = 0, \Throwable $previous = NULL)
        {
        parent::__construct(self::MSG . $message, $code, $previous);
        }

    }
