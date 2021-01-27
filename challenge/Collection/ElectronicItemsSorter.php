<?php

declare(strict_types=1);

namespace Challenge\Collection;

class ElectronicItemsSorter
    {

    const SORT_ASCENDING = 'sortAscending';
    const SORT_DESCENDING = 'sortDescending';

    public static function sort($comparer_type, $collection, $key)
        {

        usort($collection, ['self', $comparer_type]);

        return $collection;
        }

    public static function sortAscending($a, $b)
        {

        return $a->getSubtotal() >= $b->getSubtotal();
        }

    public static function sortDescending($a, $b)
        {

        return $a->getSubtotal() <= $b->getSubtotal();
        }

    }
