<?php

declare(strict_types=1);

namespace Challenge\Model;

class Controller extends Base\ElectronicItem
    {

    public function maxExtras(): ?int
        {

        return 0;
        }

    public function getType(): string
        {

        return 'controller';
        }

    }
