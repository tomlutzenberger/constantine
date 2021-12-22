<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Unit;

/**
 * Collection of ratios and symbols for imperial lengths
 *
 * @see       https://en.wikipedia.org/wiki/Imperial_units
 *
 * @package   TomLutzenberger\Constantine\Unit
 * @copyright 2021 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class ImperialLength
{
    /**
     * Meter to Foot ratio
     *
     * Symbol: ft or '
     *
     * @see https://en.wikipedia.org/wiki/Foot_(unit)
     * @var float
     */
    public const METER_PER_FOOT = 0.3048;

    /**
     * Foot to Meter ratio
     *
     * Symbol: ft or ′
     *
     * @see https://en.wikipedia.org/wiki/Foot_(unit)
     * @var float
     */
    public const FOOT_PER_METER = 1 / 0.3048;

    /**
     * Foot unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Foot_(unit)
     * @var string
     */
    public const SYMBOL_FOOT = 'ft';

    /**
     * Foot unit short symbol
     *
     * @see https://en.wikipedia.org/wiki/Foot_(unit)
     * @var string
     */
    public const SYMBOL_FOOT_SHORT = '′';


    /**
     * Twip to Foot ratio
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Twip
     * @var int
     */
    public const TWIP_PER_FOOT = 17280;

    /**
     * Foot to Twip ratio
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Twip
     * @var float
     */
    public const FOOT_PER_TWIP = 1 / 17280;


    /**
     * Thou to Foot ratio
     *
     * Symbol: th
     *
     * @see https://en.wikipedia.org/wiki/Thousandth_of_an_inch
     * @var int
     */
    public const THOU_PER_FOOT = 12000;

    /**
     * Foot to Thou ratio
     *
     * Symbol: th
     *
     * @see https://en.wikipedia.org/wiki/Thousandth_of_an_inch
     * @var float
     */
    public const FOOT_PER_THOU = 1 / 12000;

    /**
     * Thou unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Thousandth_of_an_inch
     * @var string
     */
    public const SYMBOL_THOU = 'th';


    /**
     * Barleycorn to Foot ratio
     *
     * Symbol: Bc
     *
     * @see https://en.wikipedia.org/wiki/Barleycorn_(unit)
     * @var int
     */
    public const BARLEYCORN_PER_FOOT = 36;

    /**
     * Foot to Barleycorn ratio
     *
     * Symbol: Bc
     *
     * @see https://en.wikipedia.org/wiki/Barleycorn_(unit)
     * @var float
     */
    public const FOOT_PER_BARLEYCORN = 1 / 36;

    /**
     * Barleycorn unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Barleycorn_(unit)
     * @var string
     */
    public const SYMBOL_BARLEYCORN = 'Bc';


    /**
     * Inch to Foot ratio
     *
     * Symbol: in or ″
     *
     * @see https://en.wikipedia.org/wiki/Inch
     * @var int
     */
    public const INCH_PER_FOOT = 12;

    /**
     * Foot to Inch ratio
     *
     * Symbol: in or ″
     *
     * @see https://en.wikipedia.org/wiki/Inch
     * @var float
     */
    public const FOOT_PER_INCH = 1 / 12;

    /**
     * Inch unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Inch
     * @var string
     */
    public const SYMBOL_INCH = 'in';

    /**
     * Inch unit short symbol
     *
     * @see https://en.wikipedia.org/wiki/Inch
     * @var string
     */
    public const SYMBOL_INCH_SHORT = '″';


    /**
     * Hand to Foot ratio
     *
     * Symbol: h
     *
     * @see https://en.wikipedia.org/wiki/Hand_(unit)
     * @var int
     */
    public const HAND_PER_FOOT = 3;

    /**
     * Foot to Hand ratio
     *
     * Symbol: h
     *
     * @see https://en.wikipedia.org/wiki/Hand_(unit)
     * @var float
     */
    public const FOOT_PER_HAND = 1 / 3;

    /**
     * Hand unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Hand_(unit)
     * @var string
     */
    public const SYMBOL_HAND = 'h';


    /**
     * Link to Foot ratio
     *
     * Symbol: lnk or li
     *
     * @see https://en.wikipedia.org/wiki/Link_(unit)
     * @var float
     */
    public const LINK_PER_FOOT = 50 / 33;

    /**
     * Foot to Link ratio
     *
     * Symbol: lnk or li
     *
     * @see https://en.wikipedia.org/wiki/Link_(unit)
     * @var float
     */
    public const FOOT_PER_LINK = 33 / 50;

    /**
     * Link unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Link_(unit)
     * @var string
     */
    public const SYMBOL_LINK = 'lnk';

    /**
     * Link unit short symbol
     *
     * @see https://en.wikipedia.org/wiki/Link_(unit)
     * @var string
     */
    public const SYMBOL_LINK_SHORT = 'li';


    /**
     * Yard to Foot ratio
     *
     * Symbol: yd
     *
     * @see https://en.wikipedia.org/wiki/Yard
     * @var float
     */
    public const YARD_PER_FOOT = 1 / 3;

    /**
     * Foot to Yard ratio
     *
     * Symbol: yd
     *
     * @see https://en.wikipedia.org/wiki/Yard
     * @var int
     */
    public const FOOT_PER_YARD = 3;

    /**
     * Yard unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Yard
     * @var string
     */
    public const SYMBOL_YARD = 'yd';


    /**
     * Rod to Foot ratio
     *
     * Symbol: rd
     *
     * @see https://en.wikipedia.org/wiki/Rod_(unit)
     * @var float
     */
    public const ROD_PER_FOOT = 2 / 33;

    /**
     * Foot to Rod ratio
     *
     * Symbol: rd
     *
     * @see https://en.wikipedia.org/wiki/Rod_(unit)
     * @var float
     */
    public const FOOT_PER_ROD = 16.5;

    /**
     * Rod unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Rod_(unit)
     * @var string
     */
    public const SYMBOL_ROD = 'rd';


    /**
     * Chain to Foot ratio
     *
     * Symbol: ch
     *
     * @see https://en.wikipedia.org/wiki/Chain_(unit)
     * @var float
     */
    public const CHAIN_PER_FOOT = 1 / 66;

    /**
     * Foot to Chain ratio
     *
     * Symbol: ch
     *
     * @see https://en.wikipedia.org/wiki/Chain_(unit)
     * @var int
     */
    public const FOOT_PER_CHAIN = 66;

    /**
     * Chain unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Chain_(unit)
     * @var string
     */
    public const SYMBOL_CHAIN = 'ch';


    /**
     * Furlong to Foot ratio
     *
     * Symbol: fur
     *
     * @see https://en.wikipedia.org/wiki/Furlong
     * @var float
     */
    public const FURLONG_PER_FOOT = 1 / 660;

    /**
     * Foot to Furlong ratio
     *
     * Symbol: fur
     *
     * @see https://en.wikipedia.org/wiki/Furlong
     * @var int
     */
    public const FOOT_PER_FURLONG = 660;

    /**
     * Furlong unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Furlong
     * @var string
     */
    public const SYMBOL_FURLONG = 'fur';


    /**
     * Mile to Foot ratio
     *
     * Symbol: mi
     *
     * @see https://en.wikipedia.org/wiki/Mile
     * @var float
     */
    public const MILE_PER_FOOT = 1 / 5280;

    /**
     * Foot to Mile ratio
     *
     * Symbol: mi
     *
     * @see https://en.wikipedia.org/wiki/Mile
     * @var int
     */
    public const FOOT_PER_MILE = 5280;

    /**
     * Mile unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Mile
     * @var string
     */
    public const SYMBOL_MILE = 'mi';


    /**
     * League to Foot ratio
     *
     * Symbol: lea
     *
     * @see https://en.wikipedia.org/wiki/League_(unit)
     * @var float
     */
    public const LEAGUE_PER_FOOT = 1 / 15840;

    /**
     * Foot to League ratio
     *
     * Symbol: lea
     *
     * @see https://en.wikipedia.org/wiki/League_(unit)
     * @var int
     */
    public const FOOT_PER_LEAGUE = 15840;

    /**
     * League unit symbol
     *
     * @see https://en.wikipedia.org/wiki/League_(unit)
     * @var string
     */
    public const SYMBOL_LEAGUE = 'lea';


    /**
     * Fathom to Foot ratio
     *
     * Nautical unit for measuring the depth of water.
     * Symbol: ftm
     *
     * @see https://en.wikipedia.org/wiki/Fathom
     * @var float
     */
    public const FATHOM_PER_FOOT = 1 / 6.0761;

    /**
     * Foot to Fathom ratio
     *
     * Nautical unit for measuring the depth of water.
     * Symbol: ftm
     *
     * @see https://en.wikipedia.org/wiki/Fathom
     * @var float
     */
    public const FOOT_PER_FATHOM = 6.0761;

    /**
     * Fathom unit symbol
     *
     * Nautical unit for measuring the depth of water.
     *
     * @see https://en.wikipedia.org/wiki/Fathom
     * @var string
     */
    public const SYMBOL_FATHOM = 'ftm';


    /**
     * Cable to Foot ratio
     *
     * Nautical unit.
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Cable_length
     * @var float
     */
    public const CABLE_PER_FOOT = 1 / 607.61;

    /**
     * Foot to Cable ratio
     *
     * Nautical unit.
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Cable_length
     * @var float
     */
    public const FOOT_PER_CABLE = 607.61;


    /**
     * Nautical mile to Foot ratio
     *
     * Nautical unit.
     * Symbol: nmi
     *
     * @see https://en.wikipedia.org/wiki/Nautical_mile
     * @var float
     */
    public const NAUTICAL_MILE_PER_FOOT = 1 / 6076.1;

    /**
     * Foot to Nautical mile ratio
     *
     * Nautical unit.
     * Symbol: nmi
     *
     * @see https://en.wikipedia.org/wiki/Nautical_mile
     * @var float
     */
    public const FOOT_PER_NAUTICAL_MILE = 6076.1;

    /**
     * Nautical mile unit symbol
     *
     * Nautical unit.
     *
     * @see https://en.wikipedia.org/wiki/Nautical_mile
     * @var string
     */
    public const SYMBOL_NAUTICAL_MILE = 'nmi';
}
