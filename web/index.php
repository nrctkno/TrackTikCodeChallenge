<?php

require_once __DIR__ . '/../vendor/autoload.php';

if (!defined('STDIN'))
    {
    echo '<pre>';
    }

$items = \Challenge\Factory\ElectronicItemsFactory::create([
            [//subtotal: 251,33
                'type' => 'console', 'price' => 199.95, 'wired' => true, 'extras' => [
                    ['type' => 'controller', 'price' => 15.70, 'wired' => false],
                    ['type' => 'controller', 'price' => 15.70, 'wired' => false],
                    ['type' => 'controller', 'price' => 9.99, 'wired' => true],
                    ['type' => 'controller', 'price' => 9.99, 'wired' => true]
                ]
            ],
            [//subtotal: 99,5
                'type' => 'television', 'price' => 90, 'wired' => true, 'extras' => [
                    ['type' => 'controller', 'price' => 4.75, 'wired' => false],
                    ['type' => 'controller', 'price' => 4.75, 'wired' => false]
                ]
            ],
            [//subtotal: 154,74
                'type' => 'television', 'price' => 149.99, 'wired' => true, 'extras' => [
                    ['type' => 'controller', 'price' => 4.75, 'wired' => false]
                ]
            ],
            [
                'type' => 'microwave', 'price' => 62.5, 'wired' => true
            ]
        ]);


Challenge\Report\Question1::output($items);

Challenge\Report\Question2::output($items);

