<?php

declare(strict_types=1);

namespace Challenge\Model\Base;

use Challenge\Collection\Base\ElectronicItemsInterface;
use Challenge\Exception\ElectronicItemExtrasExceededException;

abstract class ElectronicItem implements ElectronicItemInterface
    {

    /**
     * @var float
     */
    private $price;

    /**
     * @var bool
     */
    private $wired;

    /**
     * @var Challenge\Collection\Base\ElectronicItemsInterface
     */
    private $extras;

    /**
     * Gets the item type
     */
    abstract function getType(): string;

    /**
     * Gets the maximum of extras allowed
     */
    abstract function maxExtras(): ?int;

    /**
     * @param float $price
     * @param bool $wired
     * @param ElectronicItemsInterface $extras
     */
    public function __construct(float $price, bool $wired, ElectronicItemsInterface $extras)
        {

        $max_extras = $this->maxExtras();
        $curr_extras = count($extras);

        if (!is_null($max_extras) && ($curr_extras > $max_extras))
            {

            throw new ElectronicItemExtrasExceededException(
                    'Maximum: ' . $max_extras
                    . '; found: ' . $curr_extras
            );
            }

        $this->price = $price;
        $this->wired = $wired;
        $this->extras = $extras;
        }

    public function getPrice(): float
        {

        return $this->price;
        }

    public function isWired(): bool
        {

        return $this->wired;
        }

    public function getExtrasCount(): int
        {

        return count($this->extras);
        }

    public function hasExtras(): bool
        {

        return $this->getExtrasCount() > 0;
        }

    public function getExtrasPrice(): float
        {

        return $this->extras->getTotal();
        }

    public function getSubtotal(): float
        {

        return $this->getPrice() + $this->getExtrasPrice();
        }

    }
