<?php

declare(strict_types=1);

namespace Challenge\Report;

use Challenge\Collection\Base\ElectronicItemsInterface;

class Question2
    {

    static function Output(ElectronicItemsInterface $items)
        {

        $consoles = $items->getItemsByType('console');

        echo "Question 2:\n\n";
        switch (count($consoles))
            {
            case 0:
                echo "I didn't buy any console.";
                break;
            case 1:
                echo sprintf(
                        "The total for the console with %d extras is %.2f",
                        $consoles[0]->getExtrasCount(),
                        ($consoles[0]->getPrice() + $consoles[0]->getExtrasPrice())
                );
                break;
            default:
                echo "Which one?";
            }
        echo "\n\n\n";
        }

    }
