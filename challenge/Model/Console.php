<?php

declare(strict_types=1);

namespace Challenge\Model;

class Console extends Base\ElectronicItem
    {

    public function maxExtras(): ?int
        {

        return 4;
        }

    public function getType(): string
        {

        return 'console';
        }

    }
