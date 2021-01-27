<?php

declare(strict_types=1);

namespace Challenge\Report;

use Challenge\Model\Base\ElectronicItemInterface;
use Challenge\Collection\Base\ElectronicItemsInterface;
use Challenge\Collection\ElectronicItemsSorter;

class Question1
    {

    public static function Output(ElectronicItemsInterface $items)
        {

        $sorted_items = $items->getSortedItems(ElectronicItemsSorter::SORT_ASCENDING);

        echo "Question 1:\n\n";
        foreach ($sorted_items as $item)
            {
            self::printItem($item);
            }

        echo "--------------------------------------\n";
        echo sprintf("Total                          $%.2f \n\n\n", $items->getTotal());
        }

    private static function printItem(ElectronicItemInterface $item)
        {

        echo sprintf("%-30s $%' 6.2f \n", $item->getType(), $item->getSubtotal());

        if ($item->hasExtras())
            {

            echo sprintf(
                    "(includes %d extras for $%.2f)\n",
                    $item->getExtrasCount(),
                    $item->getExtrasPrice()
            );
            }
        }

    }
