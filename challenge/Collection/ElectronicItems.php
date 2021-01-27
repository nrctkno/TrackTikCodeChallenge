<?php

declare(strict_types=1);

namespace Challenge\Collection;

class ElectronicItems implements Base\ElectronicItemsInterface, \Countable
    {

    private $items = array();

    public function __construct(array $items)
        {

        $this->items = $items;
        }

    public function getSortedItems($type)
        {

        return ElectronicItemsSorter::sort($type, $this->items, 'price');
        }

    public function getItemsByType($type)
        {

        return array_filter($this->items, function($item) use ($type)
            {
            return $item->getType() === $type;
            }
        );
        }

    public function getTotal()
        {
        $total = 0;
        foreach ($this->items as $item)
            {
            $total += $item->getSubtotal();
            }

        return $total;
        }

    public function count()
        {

        return count($this->items);
        }

    }
