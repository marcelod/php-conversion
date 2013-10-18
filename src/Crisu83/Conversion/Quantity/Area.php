<?php
/*
 * This file is part of Conversion.
 *
 * (c) 2013 Christoffer Niska
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Crisu83\Conversion\Quantity;

/**
 * Class Area
 * @package Crisu83\Conversion\Quantity
 */
class Area extends Quantity
{
    /**
     * @var array conversion map (unit => native unit)
     */
    protected static $conversionMap = array(
        Unit::SQUARE_METRE      => 1,
        Unit::HECTARE           => 100,
        Unit::SQUARE_KILOMETRE  => 1000000,
        Unit::SQUARE_INCH       => 0.00064516,
        Unit::SQUARE_FEET       => 0.09290304,
        Unit::SQUARE_YARD       => 0.83612736,
        Unit::ACRE              => 247.105,
        Unit::SQUARE_MILE       => 2589988.110336,
    );

    /**
     * Creates a new quantity.
     * @param string $quantity quantity string
     */
    public function __construct($quantity)
    {
        parent::__construct($quantity);
        $this->native = Unit::SQUARE_METRE;
    }
} 