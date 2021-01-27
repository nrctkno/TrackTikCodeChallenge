<?php

namespace Challenge\Test;

use PHPUnit\Framework\TestCase;

class ExtrasRestrictionsTest extends TestCase
    {

    public function testExcessInConsole()
        {
        $this->expectException(\Challenge\Exception\ElectronicItemExtrasExceededException::class);

        \Challenge\Factory\ElectronicItemsFactory::create([
            [
                'type' => 'console', 'price' => 199.95, 'wired' => true, 'extras' => [
                    ['type' => 'controller', 'price' => 15.70, 'wired' => false],
                    ['type' => 'controller', 'price' => 15.70, 'wired' => false],
                    ['type' => 'controller', 'price' => 15.70, 'wired' => false],
                    ['type' => 'controller', 'price' => 9.99, 'wired' => true],
                    ['type' => 'controller', 'price' => 9.99, 'wired' => true]
                ]
            ]
        ]);
        }

    public function testExcessInMicrowave()
        {
        $this->expectException(\Challenge\Exception\ElectronicItemExtrasExceededException::class);

        \Challenge\Factory\ElectronicItemsFactory::create([
            [
                'type' => 'microwave', 'price' => 50.0, 'wired' => true, 'extras' => [
                    ['type' => 'controller', 'price' => 15.70, 'wired' => false]
                ]
            ]
        ]);
        }

    public function testNoLimitationsInTV()
        {

        try
            {
            \Challenge\Factory\ElectronicItemsFactory::create([
                [
                    'type' => 'television', 'price' => 50.0, 'wired' => true, 'extras' => [
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false],
                        ['type' => 'controller', 'price' => 10.0, 'wired' => false]
                    ]
                ]
            ]);
            } catch (\Exception $notExpected)
            {
            $this->fail();
            }

        $this->assertTrue(true);
        }

    }
