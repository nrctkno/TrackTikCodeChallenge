<?php

namespace Challenge\Test;

use PHPUnit\Framework\TestCase;

class FactoryTest extends TestCase
    {

    public function testInvalidItemType()
        {
        $this->expectException(\Challenge\Exception\ElectronicItemsFactoryInvalidItemException::class);

        \Challenge\Factory\ElectronicItemsFactory::create([
            ['type' => 'car', 'price' => 50000.0, 'wired' => false]
        ]);
        }

    public function testAbsentPriceThrowsException()
        {
        $this->expectException(\Challenge\Exception\ElectronicItemsFactoryIncompleteInfoException::class);

        \Challenge\Factory\ElectronicItemsFactory::create([
            ['type' => 'microwave', 'wired' => true]
        ]);
        }

    public function testAbsentWiredThrowsException()
        {
        $this->expectException(\Challenge\Exception\ElectronicItemsFactoryIncompleteInfoException::class);

        \Challenge\Factory\ElectronicItemsFactory::create([
            ['type' => 'microwave', 'price' => 50000.0]
        ]);
        }

    }
