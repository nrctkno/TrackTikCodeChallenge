<?php

declare(strict_types=1);

namespace Challenge\Model;

class Television extends Base\ElectronicItem
    {

    public function maxExtras(): ?int
        {

        return null;
        }

    public function getType(): string
        {

        return 'television';
        }

    }
