<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Unit;

/**
 * Collection of ratios and symbols for time
 *
 * @see https://en.wikipedia.org/wiki/Second
 * @see https://en.wikipedia.org/wiki/Orders_of_magnitude_(time)
 *
 * @package   TomLutzenberger\Constantine\Unit
 * @copyright 2021 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class Time
{

    /**
     * Second unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second
     * @var string
     */
    public const SYMBOL_SECOND = 's';


    /**
     * Decisecond to Second ratio
     *
     * Symbol: ds
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_DECISECOND = 10e-1;

    /**
     * Decisecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_DECISECOND = 'ds';


    /**
     * Centisecond to Second ratio
     *
     * Symbol: cs
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_CENTISECOND = 10e-2;

    /**
     * Centisecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_CENTISECOND = 'cs';


    /**
     * Millisecond to Second ratio
     *
     * Symbol: ms
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_MILLISECOND = 10e-3;

    /**
     * Millisecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_MILLISECOND = 'ms';


    /**
     * Microsecond to Second ratio
     *
     * Symbol: µs
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_MICROSECOND = 10e-6;

    /**
     * Microsecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_MICROSECOND = 'µs';


    /**
     * Nanosecond to Second ratio
     *
     * Symbol: ns
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_NANOSECOND = 10e-9;

    /**
     * Nanosecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_NANOSECOND = 'ns';


    /**
     * Picosecond to Second ratio
     *
     * Symbol: ps
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_PICOSECOND = 10e-12;

    /**
     * Picosecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_PICOSECOND = 'ps';


    /**
     * Femtosecond to Second ratio
     *
     * Symbol: fs
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_FEMTOSECOND = 10e-15;

    /**
     * Femtosecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_FEMTOSECOND = 'fs';


    /**
     * Attosecond to Second ratio
     *
     * Symbol: as
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_ATTOSECOND = 10e-18;

    /**
     * Attosecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_ATTOSECOND = 'as';


    /**
     * Zeptosecond to Second ratio
     *
     * Symbol: zs
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_ZEPTOSECOND = 10e-21;

    /**
     * Zeptosecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_ZEPTOSECOND = 'zs';


    /**
     * Yoctosecond to Second ratio
     *
     * Symbol: ys
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var float
     */
    public const SECOND_PER_YOCTOSECOND = 10e-24;

    /**
     * Yoctosecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_YOCTOSECOND = 'ys';


    /**
     * Decasecond to Second ratio
     *
     * Symbol: das
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_DECASECOND = 10e1;

    /**
     * Decasecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_DECASECOND = 'das';


    /**
     * Hectosecond to Second ratio
     *
     * Symbol: hs
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_HECTOSECOND = 10e2;

    /**
     * Hectosecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_HECTOSECOND = 'hs';


    /**
     * Kilosecond to Second ratio
     *
     * Symbol: ks
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_KILOSECOND = 10e3;

    /**
     * Kilosecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_KILOSECOND = 'ks';


    /**
     * Megasecond to Second ratio
     *
     * Symbol: Ms
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_MEGASECOND = 10e6;

    /**
     * Megasecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_MEGASECOND = 'Ms';


    /**
     * Gigasecond to Second ratio
     *
     * Symbol: Gs
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_GIGASECOND = 10e9;

    /**
     * Gigasecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_GIGASECOND = 'Gs';


    /**
     * Terasecond to Second ratio
     *
     * Symbol: Ts
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_TERASECOND = 10e12;

    /**
     * Terasecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_TERASECOND = 'Ts';


    /**
     * Petasecond to Second ratio
     *
     * Symbol: Ps
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_PETASECOND = 10e15;

    /**
     * Petasecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_PETASECOND = 'Ps';


    /**
     * Exasecond to Second ratio
     *
     * Symbol: Es
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_EXASECOND = 10e18;

    /**
     * Exasecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_EXASECOND = 'Es';


    /**
     * Zettasecond to Second ratio
     *
     * Symbol: Zs
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_ZETTASECOND = 10e21;

    /**
     * Zettasecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_ZETTASECOND = 'Zs';


    /**
     * Yottasecond to Second ratio
     *
     * Symbol: Ys
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var int
     */
    public const SECOND_PER_YOTTASECOND = 10e24;

    /**
     * Yottasecond unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Second#SI_multiples
     * @var string
     */
    public const SYMBOL_YOTTASECOND = 'Ys';


    /**
     * Seconds per minute
     * @var int
     */
    public const SECONDS_PER_MINUTE = 60;

    /**
     * Seconds per hour
     * @var int
     */
    public const SECONDS_PER_HOUR = 3600;

    /**
     * Seconds per day
     * @var int
     */
    public const SECONDS_PER_DAY = 86400;

    /**
     * Seconds per week
     * @var int
     */
    public const SECONDS_PER_WEEK = 604800;

    /**
     * Seconds per month, based on a month with 30 days
     * @var int
     */
    public const SECONDS_PER_MONTH = 2592000;

    /**
     * Seconds per year, based on a year with 365 days
     * @var int
     */
    public const SECONDS_PER_YEAR = 31536000;


    /**
     * Minute unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Minute
     * @var string
     */
    public const SYMBOL_MINUTE = 'm';

    /**
     * Minutes per hour
     * @var int
     */
    public const MINUTES_PER_HOUR = 60;

    /**
     * Minutes per day
     * @var int
     */
    public const MINUTES_PER_DAY = 1440;

    /**
     * Minutes per week
     * @var int
     */
    public const MINUTES_PER_WEEK = 10080;

    /**
     * Minutes per month, based on a month with 30 days
     * @var int
     */
    public const MINUTES_PER_MONTH = 43200;

    /**
     * Minutes per year, based on a year with 365 days
     * @var int
     */
    public const MINUTES_PER_YEAR = 525600;


    /**
     * Hour unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Hour
     * @var string
     */
    public const SYMBOL_HOUR = 'h';

    /**
     * Hours per day
     * @var int
     */
    public const HOURS_PER_DAY = 24;

    /**
     * Hours per week
     * @var int
     */
    public const HOURS_PER_WEEK = 168;

    /**
     * Hours per month, based on a month with 30 days
     * @var int
     */
    public const HOURS_PER_MONTH = 720;

    /**
     * Hours per year, based on a year with 365 days
     * @var int
     */
    public const HOURS_PER_YEAR = 8760;


    /**
     * Day unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Day
     * @var string
     */
    public const SYMBOL_DAY = 'd';

    /**
     * Days per week
     * @var int
     */
    public const DAYS_PER_WEEK = 7;

    /**
     * Days per month, based on a month with 30 days
     * @var int
     */
    public const DAYS_PER_MONTH = 30;

    /**
     * Days per year, based on a year with 365 days
     * @var int
     */
    public const DAYS_PER_YEAR = 365;


    /**
     * Weeks per month, as a "rule of thumb"
     * It is recommenced to calculate individually, if accuracy is needed.
     * @var int
     */
    public const WEEKS_PER_MONTH = 4;

    /**
     * Weeks per year, as a "rule of thumb"
     * It is recommenced to calculate individually, if accuracy is needed.
     * @var int
     */
    public const WEEKS_PER_YEAR = 52;


    /**
     * Months per year
     * @var int
     */
    public const MONTHS_PER_YEAR = 12;


    /**
     * Months per quarter
     * @var int
     */
    public const MONTHS_PER_QUARTER = 3;

    /**
     * Quarters per year
     * @var int
     */
    public const QUARTERS_PER_YEAR = 4;


    /**
     * Year unit symbol
     *
     * @see https://en.wikipedia.org/wiki/Year
     * @var string
     */
    public const SYMBOL_YEAR = 'yr';

    /**
     * Years per Decade
     * @var int
     */
    public const YEARS_PER_DECADE = 10;

    /**
     * Years per Century
     * @var int
     */
    public const YEARS_PER_CENTURY = 100;

    /**
     * Years per Millennium
     * @var int
     */
    public const YEARS_PER_MILLENNIUM = 1000;
}
