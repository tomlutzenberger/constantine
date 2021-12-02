<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Unit;

/**
 * Collection of ratios and symbols for imperial areas
 *
 * @see       https://en.wikipedia.org/wiki/Imperial_units
 *
 * @package   TomLutzenberger\Constantine\Unit
 * @copyright 2021 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class ImperialArea
{

    /**
     * Square Meter to Square Foot ratio
     *
     * Symbol: sq. ft or ft²
     *
     * @see https://en.wikipedia.org/wiki/Square_foot
     * @var float
     */
    public const SQUARE_METER_PER_SQUARE_FOOT = 0.09290304;

    /**
     * Square Foot to Square Meter ratio
     *
     * Symbol: sq. ft or ft²
     * Calculated value: 10.76391041670972230833...
     *
     * @see https://en.wikipedia.org/wiki/Square_foot
     * @var float
     */
    public const SQUARE_FOOT_PER_SQUARE_METER = ImperialLength::FOOT_PER_METER * ImperialLength::FOOT_PER_METER;

    /**
     * Square Foot unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Square_foot
     * @var string
     */
    public const SYMBOL_FOOT = 'sq. ft';

    /**
     * Square Foot unit short symbol
     *
     * @see https://en.wikipedia.org/wiki/Square_foot
     * @var string
     */
    public const SYMBOL_FOOT_SHORT = 'ft²';


    /**
     * Perch to Square Foot ratio
     *
     * Symbol: -
     * Calculated value: 0.00367309458218549128...
     *
     * @see https://en.wikipedia.org/wiki/Rod_(unit)#Area_and_volume
     * @var float
     */
    public const PERCH_PER_SQUARE_FOOT = 1 / 272.25;

    /**
     * Square Foot to Perch ratio
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Rod_(unit)#Area_and_volume
     * @var float
     */
    public const SQUARE_FOOT_PER_PERCH = 272.25;


    /**
     * Rood to Square Foot ratio
     *
     * Symbol: ro
     * Calculated value: 9.18273645546372819100...e-5
     *
     * @see https://en.wikipedia.org/wiki/Rood_(unit)
     * @var float
     */
    public const ROOD_PER_SQUARE_FOOT = 1 / 10890;

    /**
     * Square Foot to Rood ratio
     *
     * Symbol: ro
     *
     * @see https://en.wikipedia.org/wiki/Rood_(unit)
     * @var int
     */
    public const SQUARE_FOOT_PER_ROOD = 10890;

    /**
     * Rood unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Rood_(unit)
     * @var string
     */
    public const SYMBOL_ROOD = 'ro';


    /**
     * Acre to Square Foot ratio
     *
     * Symbol: ac
     * Calculated value: 2.29568411386593204775...e-5
     *
     * @see https://en.wikipedia.org/wiki/Acre
     * @var float
     */
    public const ACRE_PER_SQUARE_FOOT = 1 / 43560;

    /**
     * Square Foot to Acre ratio
     *
     * Symbol: ac
     *
     * @see https://en.wikipedia.org/wiki/Acre
     * @var int
     */
    public const SQUARE_FOOT_PER_ACRE = 43560;

    /**
     * Acre unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Acre
     * @var string
     */
    public const SYMBOL_ACRE = 'ac';


    /**
     * Square Mile to Square Foot ratio
     *
     * Symbol: sq mi or mi²
     * Calculated value: 3.58700642791551882461...e-8
     *
     * @see https://en.wikipedia.org/wiki/Square_mile
     * @var float
     */
    public const SQUARE_MILE_PER_SQUARE_FOOT = 1 / 27878400;

    /**
     * Square Foot to Square Mile ratio
     *
     * Symbol: sq mi or mi²
     *
     * @see https://en.wikipedia.org/wiki/Square_mile
     * @var int
     */
    public const SQUARE_FOOT_PER_SQUARE_MILE = 27878400;

    /**
     * Square Mile unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Square_mile
     * @var string
     */
    public const SYMBOL_SQUARE_MILE = 'sq mi';

    /**
     * Square Mile unit short symbol
     *
     * @see https://en.wikipedia.org/wiki/Square_mile
     * @var string
     */
    public const SYMBOL_SQUARE_MILE_SHORT = 'mi²';
}
