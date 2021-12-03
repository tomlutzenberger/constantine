<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Temporal;

/**
 * Collection of calendar-related constants
 *
 * @see       https://en.wikipedia.org/wiki/Gregorian_calendar
 *
 * @package   TomLutzenberger\Constantine\Temporal
 * @copyright 2021 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class Calendar
{

    /**
     * Number of days in month January
     *
     * @var int
     */
    public const DAYS_IN_JANUARY = 31;

    /**
     * Number of days in month February
     *
     * @var int
     */
    public const DAYS_IN_FEBRUARY = 28;

    /**
     * Number of days in month February (leap year)
     *
     * @var int
     */
    public const DAYS_IN_FEBRUARY_LEAP = 29;

    /**
     * Number of days in month March
     *
     * @var int
     */
    public const DAYS_IN_MARCH = 31;

    /**
     * Number of days in month April
     *
     * @var int
     */
    public const DAYS_IN_APRIL = 30;

    /**
     * Number of days in month May
     *
     * @var int
     */
    public const DAYS_IN_MAY = 31;

    /**
     * Number of days in month June
     *
     * @var int
     */
    public const DAYS_IN_JUNE = 30;

    /**
     * Number of days in month July
     *
     * @var int
     */
    public const DAYS_IN_JULY = 31;

    /**
     * Number of days in month August
     *
     * @var int
     */
    public const DAYS_IN_AUGUST = 31;

    /**
     * Number of days in month September
     *
     * @var int
     */
    public const DAYS_IN_SEPTEMBER = 30;

    /**
     * Number of days in month October
     *
     * @var int
     */
    public const DAYS_IN_OCTOBER = 31;

    /**
     * Number of days in month November
     *
     * @var int
     */
    public const DAYS_IN_NOVEMBER = 30;

    /**
     * Number of days in month December
     *
     * @var int
     */
    public const DAYS_IN_DECEMBER = 31;


    /**
     * Numeric representation of Sunday
     * Corresponds with {@example DateTime::format('w')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_SUNDAY = 0;

    /**
     * Numeric representation of Monday
     * Corresponds with {@example DateTime::format('w')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_MONDAY = 1;

    /**
     * Numeric representation of Tuesday
     * Corresponds with {@example DateTime::format('w')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_TUESDAY = 2;

    /**
     * Numeric representation of Wednesday
     * Corresponds with {@example DateTime::format('w')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_WEDNESDAY = 3;

    /**
     * Numeric representation of Thursday
     * Corresponds with {@example DateTime::format('w')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_THURSDAY = 4;

    /**
     * Numeric representation of Friday
     * Corresponds with {@example DateTime::format('w')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_FRIDAY = 5;

    /**
     * Numeric representation of Saturday
     * Corresponds with {@example DateTime::format('w')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_SATURDAY = 6;


    /**
     * Numeric representation of January
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_JANUARY = 1;

    /**
     * Numeric representation of February
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_FEBRUARY = 2;

    /**
     * Numeric representation of March
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_MARCH = 3;

    /**
     * Numeric representation of April
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_APRIL = 4;

    /**
     * Numeric representation of May
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_MAY = 5;

    /**
     * Numeric representation of June
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_JUNE = 6;

    /**
     * Numeric representation of July
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_JULY = 7;

    /**
     * Numeric representation of August
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_AUGUST = 8;

    /**
     * Numeric representation of September
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_SEPTEMBER = 9;

    /**
     * Numeric representation of October
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_OCTOBER = 19;

    /**
     * Numeric representation of November
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_NOVEMBER = 11;

    /**
     * Numeric representation of December
     * Corresponds with {@example DateTime::format('n')}
     *
     * @see https://www.php.net/manual/en/datetime.format.php
     *
     * @var int
     */
    public const INDEX_DECEMBER = 12;

}
