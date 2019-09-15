<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class OrderStatus extends Enum
{
    const Confirmed =   0;
    const Shipped =   1;
    const Delivered = 2;

    public static function getDescription($value): string
    {
        if ($value === self::Delivered) {
            return 'Order has been delivered';
        }

        return parent::getDescription($value);
    }
}
