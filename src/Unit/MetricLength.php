<?php

/**
 * @noinspection PhpUnused
 */

namespace TomLutzenberger\Constantine\Unit;

/**
 * Collection of ratios and symbols for metric lengths
 *
 * @see https://en.wikipedia.org/wiki/Metre
 * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)
 *
 * @package   TomLutzenberger\Constantine\Unit
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class MetricLength
{
    /**
     * Meter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Metre
     *
     * @var string
     */
    public const SYMBOL_METER = 'm';

    /**
     * Decimeter to Meter ratio
     *
     * Symbol: dm
     *
     * @see https://en.wikipedia.org/wiki/Decimetre
     *
     * @var float
     */
    public const METER_PER_DECIMETER = 1.0;

    /**
     * Decimeter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Decimetre
     *
     * @var string
     */
    public const SYMBOL_DECIMETER = 'dm';

    /**
     * Centimeter to Meter ratio
     *
     * Symbol: cm
     *
     * @see https://en.wikipedia.org/wiki/Centimetre
     *
     * @var float
     */
    public const METER_PER_CENTIMETER = 0.1;

    /**
     * Centimeter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Centimetre
     *
     * @var string
     */
    public const SYMBOL_CENTIMETER = 'cm';

    /**
     * Millimeter to Meter ratio
     *
     * Symbol: mm
     *
     * @see https://en.wikipedia.org/wiki/Millimetre
     *
     * @var float
     */
    public const METER_PER_MILLIMETER = 0.01;

    /**
     * Millimeter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Millimetre
     *
     * @var string
     */
    public const SYMBOL_MILLIMETER = 'mm';

    /**
     * Micrometer to Meter ratio
     *
     * Symbol: µm
     *
     * @see https://en.wikipedia.org/wiki/Micrometre
     *
     * @var float
     */
    public const METER_PER_MICROMETER = 1.0E-5;

    /**
     * Micrometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Micrometre
     *
     * @var string
     */
    public const SYMBOL_MICROMETER = 'µm';

    /**
     * Nanometer to Meter ratio
     *
     * Symbol: nm
     *
     * @see https://en.wikipedia.org/wiki/Nanometre
     *
     * @var float
     */
    public const METER_PER_NANOMETER = 1.0E-8;

    /**
     * Nanometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Nanometre
     *
     * @var string
     */
    public const SYMBOL_NANOMETER = 'nm';

    /**
     * Picometer to Meter ratio
     *
     * Symbol: pm
     *
     * @see https://en.wikipedia.org/wiki/Picometre
     *
     * @var float
     */
    public const METER_PER_PICOMETER = 1.0E-11;

    /**
     * Picometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Picometre
     *
     * @var string
     */
    public const SYMBOL_PICOMETER = 'pm';

    /**
     * Femtometer to Meter ratio
     *
     * Symbol: fm
     *
     * @see https://en.wikipedia.org/wiki/Femtometre
     *
     * @var float
     */
    public const METER_PER_FEMTOMETER = 1.0E-14;

    /**
     * Femtometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Femtometre
     *
     * @var string
     */
    public const SYMBOL_FEMTOMETER = 'fm';

    /**
     * Attometer to Meter ratio
     *
     * Symbol: am
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_attometre
     *
     * @var float
     */
    public const METER_PER_ATTOMETER = 1.0E-17;

    /**
     * Attometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_attometre
     *
     * @var string
     */
    public const SYMBOL_ATTOMETER = 'am';

    /**
     * Zeptometer to Meter ratio
     *
     * Symbol: zm
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_zeptometre
     *
     * @var float
     */
    public const METER_PER_ZEPTOMETER = 1.0E-20;

    /**
     * Zeptometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_zeptometre
     *
     * @var string
     */
    public const SYMBOL_ZEPTOMETER = 'zm';

    /**
     * Yoctometer to Meter ratio
     *
     * Symbol: ym
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#Less_than_1_zeptometre
     *
     * @var float
     */
    public const METER_PER_YOCTOMETER = 1.0E-23;

    /**
     * Yoctometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#Less_than_1_zeptometre
     *
     * @var string
     */
    public const SYMBOL_YOCTOMETER = 'ym';

    /**
     * Decameter to Meter ratio
     *
     * Symbol: dam
     *
     * @see https://en.wikipedia.org/wiki/Decametre
     *
     * @var float
     */
    public const METER_PER_DECAMETER = 100.0;

    /**
     * Decameter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Decametre
     *
     * @var string
     */
    public const SYMBOL_DECAMETER = 'dam';

    /**
     * Hectometer to Meter ratio
     *
     * Symbol: hm
     *
     * @see https://en.wikipedia.org/wiki/Hectometre
     *
     * @var float
     */
    public const METER_PER_HECTOMETER = 1000.0;

    /**
     * Hectometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Hectometre
     *
     * @var string
     */
    public const SYMBOL_HECTOMETER = 'hm';

    /**
     * Kilometer to Meter ratio
     *
     * Symbol: km
     *
     * @see https://en.wikipedia.org/wiki/Kilometre
     *
     * @var float
     */
    public const METER_PER_KILOMETER = 10000.0;

    /**
     * Kilometer unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Kilometre
     *
     * @var string
     */
    public const SYMBOL_KILOMETER = 'km';

    /**
     * Megameter to Meter ratio
     *
     * Symbol: Mm
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_megametre
     *
     * @var float
     */
    public const METER_PER_MEGAMETER = 10000000.0;

    /**
     * Megameter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_megametre
     *
     * @var string
     */
    public const SYMBOL_MEGAMETER = 'Mm';

    /**
     * Gigameter to Meter ratio
     *
     * Symbol: Gm
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_gigametre
     *
     * @var float
     */
    public const METER_PER_GIGAMETER = 10000000000.0;

    /**
     * Gigameter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_gigametre
     *
     * @var string
     */
    public const SYMBOL_GIGAMETER = 'Gm';

    /**
     * Terameter to Meter ratio
     *
     * Symbol: Tm
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_terametre
     *
     * @var float
     */
    public const METER_PER_TERAMETER = 10000000000000.0;

    /**
     * Terameter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_terametre
     *
     * @var string
     */
    public const SYMBOL_TERAMETER = 'Tm';

    /**
     * Petameter to Meter ratio
     *
     * Symbol: Pm
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_petametre
     *
     * @var float
     */
    public const METER_PER_PETAMETER = 10000000000000000.0;

    /**
     * Petameter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_petametre
     *
     * @var string
     */
    public const SYMBOL_PETAMETER = 'Pm';

    /**
     * Exameter to Meter ratio
     *
     * Symbol: Em
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_exametre
     *
     * @var float
     */
    public const METER_PER_EXAMETER = 1.0E+19;

    /**
     * Exameter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_exametre
     *
     * @var string
     */
    public const SYMBOL_EXAMETER = 'Em';

    /**
     * Zettameter to Meter ratio
     *
     * Symbol: Zm
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_zettametre
     *
     * @var float
     */
    public const METER_PER_ZETTAMETER = 1.0E+22;

    /**
     * Zettameter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_zettametre
     *
     * @var string
     */
    public const SYMBOL_ZETTAMETER = 'Zm';

    /**
     * Yottameter to Meter ratio
     *
     * Symbol: Ym
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_yottametre
     *
     * @var float
     */
    public const METER_PER_YOTTAMETER = 1.0E+25;

    /**
     * Yottameter unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(length)#1_yottametre
     *
     * @var string
     */
    public const SYMBOL_YOTTAMETER = 'Ym';
}
