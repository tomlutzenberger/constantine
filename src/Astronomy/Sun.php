<?php

/**
 * @noinspection PhpUnused
 */

namespace TomLutzenberger\Constantine\Astronomy;

/**
 * Collection of Sun constants
 *
 * @see https://en.wikipedia.org/wiki/Sun
 *
 * @package   TomLutzenberger\Constantine\Astronomy
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class Sun
{
    /**
     * Sun's mean distance from Earth
     *
     * Equals to 1 astronomical unit (AU)
     *
     * Symbol: -
     * Unit: km
     *
     * @var int
     */
    public const MEAN_DISTANCE_EARTH = 1.496 * 10E8;

    /**
     * Apparent magnitude
     *
     * Visual brightness
     *
     * Symbol: V
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Apparent_magnitude
     *
     * @var float
     */
    public const APPARENT_MAGNITUDE = -26.74;

    /**
     * Absolute magnitude
     *
     * Symbol: -
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Absolute_magnitude
     *
     * @var float
     */
    public const ABSOLUTE_MAGNITUDE = 4.83;

    /**
     * Spectral classification
     *
     * Symbol: -
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Stellar_classification
     *
     * @var string
     */
    public const SPECTRAL_CLASSIFICATION = 'G2V';

    /**
     * Metallicity
     *
     * The abundance of elements present in an object that are heavier than
     * hydrogen and helium.
     *
     * Symbol: Z
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Metallicity
     *
     * @var float
     */
    public const METALLICITY = 0.0122;

    /**
     * Sun's minimum Angular size (arc)
     *
     * Symbol: -
     * Unit: ' (arc minutes)
     *
     * @see https://en.wikipedia.org/wiki/Angular_size
     *
     * @var float
     */
    public const ANGULAR_SIZE_ARC_MIN = 31.6;

    /**
     * Sun's maximum Angular size (arc)
     *
     * Symbol: -
     * Unit: ' (arc minutes)
     *
     * @see https://en.wikipedia.org/wiki/Angular_size
     *
     * @var float
     */
    public const ANGULAR_SIZE_ARC_MAX = 32.7;

    /**
     * Sun's minimum Angular size (degree)
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Angular_size
     *
     * @var float
     */
    public const ANGULAR_SIZE_DEGREE_MIN = 0.527;

    /**
     * Sun's maximum Angular size (degree)
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Angular_size
     *
     * @var float
     */
    public const ANGULAR_SIZE_DEGREE_MAX = 0.545;

    /**
     * Mean distance from Milky Way core
     *
     * Symbol: -
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Milky_Way
     *
     * @var int
     */
    public const MEAN_DISTANCE_MILKY_WAY_CORE = 2.7 * 10E17;

    /**
     * Galactic period minimum
     *
     * Symbol: -
     * Unit: y (years)
     *
     * @see https://en.wikipedia.org/wiki/Galactic_year
     *
     * @var int
     */
    public const GALACTIC_PERIOD_MIN = 2.25 * 10E8;

    /**
     * Galactic period maximum
     *
     * Symbol: -
     * Unit: y (years)
     *
     * @see https://en.wikipedia.org/wiki/Galactic_year
     *
     * @var int
     */
    public const GALACTIC_PERIOD_MAX = 2.50 * 10E8;

    /**
     * Velocity
     *
     * Orbit around the center of the Milky Way.
     *
     * Symbol: -
     * Unit: km/s
     *
     * @see https://en.wikipedia.org/wiki/Velocity
     *
     * @var int
     */
    public const VELOCITY = 251;

    /**
     * Equatorial radius
     *
     * Symbol: -
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Radius
     *
     * @var int
     */
    public const EQUATORIAL_RADIUS = 695700;

    /**
     * Equatorial circumference
     *
     * Symbol: -
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Circumference
     *
     * @var int
     */
    public const EQUATORIAL_CIRCUMFERENCE = 4.379 * 10E6;

    /**
     * Flattening
     *
     * Symbol: -
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Flattening
     *
     * @var float
     */
    public const FLATTENING = 9 * 10E-6;

    /**
     * Surface area
     *
     * Symbol: S
     * Unit: km²
     *
     * @see https://en.wikipedia.org/wiki/Surface_area
     *
     * @var int
     */
    public const SURFACE_AREA = 6.09 * 10E12;

    /**
     * Volume
     *
     * Symbol: V
     * Unit: km³
     *
     * @see https://en.wikipedia.org/wiki/Volume
     *
     * @var int
     */
    public const VOLUME = 1.41 * 10E18;

    /**
     * Mass
     *
     * Symbol: m
     * Unit: kg
     *
     * @see https://en.wikipedia.org/wiki/Mass
     *
     * @var int
     */
    public const MASS = 1.9885 * 10E30;

    /**
     * Average density
     *
     * Symbol: -
     * Unit: g/cm³
     *
     * @see https://en.wikipedia.org/wiki/Density
     *
     * @var float
     */
    public const AVERAGE_DENSITY = 1.408;

    /**
     * Center density (modeled)
     *
     * Symbol: -
     * Unit: g/cm³
     *
     * @see https://en.wikipedia.org/wiki/Density
     *
     * @var float
     */
    public const CENTER_DENSITY = 162.2;

    /**
     * Equatorial surface gravity
     *
     * Symbol: -
     * Unit: m/s²
     *
     * @see https://en.wikipedia.org/wiki/Surface_gravity
     *
     * @var int
     */
    public const EQUATORIAL_SURFACE_GRAVITY = 274;

    /**
     * Moment of inertia factor (estimate)
     *
     * Symbol: -
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Moment_of_inertia_factor
     *
     * @var float
     */
    public const MOMENT_OF_INERTIA_FACTOR = 0.07;

    /**
     * Escape velocity (from the surface)
     *
     * Symbol: ve
     * Unit: km/s
     *
     * @see https://en.wikipedia.org/wiki/Escape_velocity
     *
     * @var float
     */
    public const ESCAPE_VELOCITY = 617.7;

    /**
     * Center Temperature (modeled)
     *
     * Symbol: -
     * Unit: K
     *
     * @var int
     */
    public const TEMPERATURE_CENTER = 1.57 * 10E7;

    /**
     * Photosphere Temperature (effective)
     *
     * Symbol: -
     * Unit: K
     *
     * @var int
     */
    public const TEMPERATURE_PHOTOSPHERE = 5772;

    /**
     * Corona Temperature
     *
     * Symbol: -
     * Unit: K
     *
     * @var int
     */
    public const TEMPERATURE = 5 * 10E6;

    /**
     * Luminosity (Lₛₒₗ)
     *
     * Symbol: -
     * Unit: W
     *
     * @see https://en.wikipedia.org/wiki/Luminosity
     *
     * @var int
     */
    public const LUMINOSITY = 3.828 * 10E26;

    /**
     * Color (B-V)
     *
     * Symbol: -
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Color_index
     *
     * @var float
     */
    public const COLOR_INDEX = 0.63;

    /**
     * Mean radiance (Iₛₒₗ)
     *
     * Symbol: -
     * Unit: W·m⁻²·sr⁻¹
     *
     * @see https://en.wikipedia.org/wiki/Radiance
     *
     * @var int
     */
    public const MEAN_RADIANCE = 2.009 * 10E7;

    /**
     * Age
     *
     * Symbol: -
     * Unit: y (years)
     *
     * @var int
     */
    public const AGE = 4.6 * 10E9;

    /**
     * Sun's axial tilt (to ecliptic)
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Axial_tilt
     *
     * @var float
     */
    public const AXIAL_TILT_ECLIPTIC = 7.25;

    /**
     * Sun's axial tilt (to galactic plane)
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Axial_tilt
     *
     * @var float
     */
    public const AXIAL_TILT_GALACTIC_PLANE = 67.23;

    /**
     * Sun's North Pole right ascension
     *
     * Symbol: α (Alpha)
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Right_ascension
     *
     * @var float
     */
    public const NORTH_POLE_RIGHT_ASCENSION = 286.13;

    /**
     * Sun's North Pole declination
     *
     * Symbol: δ (Delta)
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Declination
     *
     * @var float
     */
    public const NORTH_POLE_DECLINATION = 63.87;

    /**
     * Sidereal rotation period (at equator)
     *
     * Symbol: -
     * Unit: days
     *
     * @see https://en.wikipedia.org/wiki/Solar_rotation
     *
     * @var float
     */
    public const ROTATION_PERIOD_SIDEREAL = 25.05;

    /**
     * Sun's equatorial rotation velocity
     *
     * Symbol: v
     * Unit: km/s
     *
     * @var float
     */
    public const EQUATORIAL_ROTATION_VELOCITY = 1.997;
}
