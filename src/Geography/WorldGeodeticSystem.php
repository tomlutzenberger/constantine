<?php

/**
 * @noinspection PhpUnused
 */

namespace TomLutzenberger\Constantine\Geography;

/**
 * Collection of Geodetic constants (currently WGS84)
 *
 * @see https://en.wikipedia.org/wiki/World_Geodetic_System
 * @see https://www.unoosa.org/pdf/icg/2012/template/WGS_84.pdf
 *
 * @package   TomLutzenberger\Constantine\Geography
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class WorldGeodeticSystem
{
    /**
     * Semi-major Axis
     *
     * Symbol: a
     * Unit: m (meters)
     *
     * @var float
     */
    public const SEMI_MAJOR_AXIS = 6378137.0;

    /**
     * Semi-minor axis
     *
     * Symbol: b
     * Unit: m (meters)
     *
     * @var float
     */
    public const SEMI_MINOR_AXIS = 6356752.314245;

    /**
     * Flattening Factor of the Earth
     *
     * Symbol: 1/f
     * Unit: -
     *
     * @var float
     */
    public const FLATTENING_FACTOR = 298.257223563;

    /**
     * Nominal Mean Angular Velocity of the Earth
     *
     * Symbol: ω
     * Unit: radians/second
     *
     * @var float
     */
    public const NOMINAL_MEAN_ANGULAR_VELOCITY = 7292115 * 10E-11;

    /**
     * Geocentric Gravitational Constant (Mass of Earth’s Atmosphere Included)
     *
     * Symbol: GM
     * Unit: meter³/second²
     *
     * @var float
     */
    public const GEOCENTRIC_GRAVITATIONAL_CONSTANT = 3.986004418 * 10E14;
}
