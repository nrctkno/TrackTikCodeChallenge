<?php

declare(strict_types=1);

namespace Challenge\Model;

class Microwave extends Base\ElectronicItem
    {

    public function maxExtras(): ?int
        {

        return 0;
        }

    public function getType(): string
        {

        return 'microwave';
        }

    }
