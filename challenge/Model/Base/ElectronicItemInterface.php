<?php

declare(strict_types=1);

namespace Challenge\Model\Base;

interface ElectronicItemInterface
    {

    /**
     * Returns the electronic device type
     */
    function getType(): string;

    /**
     * Returns the maximum amount of extras the item can accept
     */
    function maxExtras(): ?int;

    function getPrice(): float;

    function isWired(): bool;

    function hasExtras(): bool;

    function getExtrasCount(): int;

    /**
     * Returns the summarized price of the extras this item contains
     */
    function getExtrasPrice(): float;

    /**
     * Returns the item price, plus the extras price
     */
    function getSubtotal(): float;
    }
