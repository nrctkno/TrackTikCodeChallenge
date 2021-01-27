<?php

namespace Challenge\Test;

class ExtrasRestrictions implements \TestInterface
    {

    function configure()
        {
        
        }

    function run()
        {
        $items = \Challenge\Factory\ElectronicItemsFactory::create([
                    [
                        'type' => 'console', 'price' => 199.95, 'wired' => true, 'extras' => [
                            ['type' => 'controller', 'price' => 15.70, 'wired' => false],
                            ['type' => 'controller', 'price' => 15.70, 'wired' => false],
                            ['type' => 'controller', 'price' => 9.99, 'wired' => true],
                            ['type' => 'controller', 'price' => 9.99, 'wired' => true]
                        ]
                    ]
        ]);
        
        
        }

    }
