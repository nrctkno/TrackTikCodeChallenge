<?php

declare(strict_types=1);

namespace Challenge\Collection\Base;

interface ElectronicItemsInterface
    {

    /**
     * Returns the items depending on the sorting type requested
     * 
     * @return array 
     */
    function getSortedItems($type);

    /**
     * Returns an array containing the items that match a specific type
     * 
     * @param string $type
     * @return array 
     */
    function getItemsByType($type);

    /**
     * Returns the total price of the collection
     * 
     * @return float
     */
    function getTotal();
    }
