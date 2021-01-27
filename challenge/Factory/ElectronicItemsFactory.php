<?php

declare(strict_types=1);

namespace Challenge\Factory;

use Challenge\Collection\ElectronicItems;

class ElectronicItemsFactory
    {

    const ERROR_IMCOMPLETE_INFO = 'Couldn\'t create an electronic item: the item does not have the required information. Required: \'%s\'; found: \'%s\'.';
    const ERROR_INVALID_ITEM = 'Item type isn\'t valid: \'%s\'.';
    const REQUIRED_ATTRIBUTES = ['type', 'price', 'wired'];

    public static function create(array $items_definition): ElectronicItems
        {

        $items = [];

        foreach ($items_definition as $def)
            {

            $found_attributes = array_keys($def);
            self::validateAttributes($found_attributes);

            $item_class = '\Challenge\Model\\' . ucfirst($def['type']);
            self::validateItemClass($item_class, $def['type']);

            $extras = (array_key_exists('extras', $def) && is_array($def['extras'])) ?
                    self::create($def['extras']) :
                    new ElectronicItems([]);

            $items[] = new $item_class($def['price'], $def['wired'], $extras);
            }

        return new ElectronicItems($items);
        }

    private static function validateAttributes($found_attributes): void
        {

        if (count(array_diff(self::REQUIRED_ATTRIBUTES, $found_attributes)) > 0)
            {

            throw new \Exception(sprintf(
                            self::ERROR_IMCOMPLETE_INFO,
                            join(', ', self::REQUIRED_ATTRIBUTES),
                            join(', ', $found_attributes)
            ));
            }
        }

    private static function validateItemClass($item_class, $requested_type): void
        {

        if (!class_exists($item_class))
            {

            throw new \Exception(sprintf(
                            self::ERROR_INVALID_ITEM,
                            $requested_type
            ));
            }
        }

    }
