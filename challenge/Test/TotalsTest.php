<?php

namespace Challenge\Test;

use PHPUnit\Framework\TestCase;

class TotalsTest extends TestCase
    {

    public function testItemsPriceIsCorrectlyAdded()
        {

        $items = \Challenge\Factory\ElectronicItemsFactory::create([
                    [
                        'type' => 'television', 'price' => 50.0, 'wired' => true, 'extras' => [
                            ['type' => 'controller', 'price' => 20.0, 'wired' => false],
                            ['type' => 'controller', 'price' => 30.0, 'wired' => true]
                        ]
                    ]
        ]);

        $this->assertEquals($items->getTotal(), 100.0);
        }

    }
