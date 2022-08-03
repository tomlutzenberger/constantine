<?php

/**
 * @noinspection PhpUnused
 */

namespace TomLutzenberger\Constantine\Astronomy;

/**
 * Collection of Moon constants
 *
 * @see https://en.wikipedia.org/wiki/Moon
 *
 * @package   TomLutzenberger\Constantine\Astronomy
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class Moon
{
    /**
     * Moon's Apogee
     *
     * The point where thr Moon is farthest from Earth.
     *
     * Symbol: Q
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Apsis
     *
     * @var int
     */
    public const APOGEE = 405400;

    /**
     * Moon's Perigee
     *
     * The point where thr Moon is nearest to Earth.
     *
     * Symbol: q
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Apsis
     *
     * @var int
     */
    public const PERIGEE = 362600;

    /**
     * Moon's Semi-major axis
     *
     * The longest semi-diameter or one half of the major axis (longest diameter
     * in an ellipse).
     *
     * Symbol: a
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Semi-major_and_semi-minor_axes
     *
     * @var int
     */
    public const SEMI_MAJOR_AXIS = 384399;

    /**
     * Moon's Eccentricity
     *
     * Determines the amount by which its orbit around another body deviates
     * from a perfect circle.
     *
     * Symbol: e
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Orbital_eccentricity
     *
     * @var float
     */
    public const ECCENTRICITY = 0.0549;

    /**
     * Moon's Orbital period (sidereal)
     *
     * The time a given astronomical object takes to complete one orbit around
     * another object. Equals 27d 07:43:11.5
     *
     * Symbol: T
     * Unit: days
     *
     * @see https://en.wikipedia.org/wiki/Orbital_period
     *
     * @var float
     */
    public const ORBITAL_PERIOD_SIDEREAL = 27.321661;

    /**
     * Moon's Orbital period (synodic)
     *
     * The time a given astronomical object takes to complete one orbit around
     * another object. Equals 29d 12:44:02.9
     *
     * Symbol: T
     * Unit: days
     *
     * @see https://en.wikipedia.org/wiki/Orbital_period
     *
     * @var float
     */
    public const ORBITAL_PERIOD_SYNODIC = 29.530589;

    /**
     * Moon's average orbital speed
     *
     * The speed at which it orbits around either the barycenter or its speed
     * relative to the center of mass of the most massive body.
     *
     * Symbol: v
     * Unit: km/s
     *
     * @see https://en.wikipedia.org/wiki/Orbital_speed
     *
     * @var float
     */
    public const AVERAGE_ORBITAL_SPEED = 1.022;

    /**
     * Moon's Inclination to ecliptic
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Orbital_inclination
     *
     * @var float
     */
    public const INCLINATION_TO_ECLIPTIC = 5.145;

    /**
     * Moon's Mean radius
     *
     * Symbol: r
     * Unit: km
     *
     * @var float
     */
    public const RADIUS_MEAN = 1737.4;

    /**
     * Moon's Equatorial radius
     *
     * Symbol: r
     * Unit: km
     *
     * @var float
     */
    public const RADIUS_EQUATORIAL = 1738.1;

    /**
     * Moon's Polar radius
     *
     * Symbol: r
     * Unit: km
     *
     * @var float
     */
    public const RADIUS_POLAR = 1736.0;

    /**
     * Moon's flattening
     *
     * Symbol: f
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Flattening
     *
     * @var float
     */
    public const FLATTENING = 0.0012;

    /**
     * Moon's equatorial circumference
     *
     * Symbol: -
     * Unit: km
     *
     * @var float
     */
    public const CIRCUMFERENCE_EQUATORIAL = 10921;

    /**
     * Moon's total surface area
     *
     * Symbol: S
     * Unit: km²
     *
     * @see https://en.wikipedia.org/wiki/Spheroid#Surface_area
     *
     * @var int
     */
    public const SURFACE_AREA_TOTAL = 3.793 * 10E7;

    /**
     * Moon's Volume
     *
     * Symbol: V
     * Unit: km³
     *
     * @see https://en.wikipedia.org/wiki/Volume
     *
     * @var float
     */
    public const VOLUME = 2.1958 * 10E10;

    /**
     * Moon's Mass
     *
     * Symbol: m
     * Unit: kg
     *
     * @see https://en.wikipedia.org/wiki/Mass
     *
     * @var float
     */
    public const MASS = 7.342 * 10E22;

    /**
     * Moon's Mean density
     *
     * Symbol: ρ (Rho)
     * Unit: g/cm³
     *
     * @see https://en.wikipedia.org/wiki/Density
     *
     * @var float
     */
    public const MEAN_DENSITY = 3.344;

    /**
     * Moon's Surface gravity
     *
     * Symbol: g
     * Unit: m/s²
     *
     * @see https://en.wikipedia.org/wiki/Surface_gravity
     *
     * @var float
     */
    public const SURFACE_GRAVITY = 1.622;

    /**
     * Moon's moment of inertia factor
     *
     * Symbol: -
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Moment_of_inertia_factor
     *
     * @var float
     */
    public const MOMENT_OF_INERTIA_FACTOR = 0.3929;

    /**
     * Moon's escape velocity
     *
     * Equals 8600 km/h or 5300 mp/h
     *
     * Symbol: ve
     * Unit: km/s
     *
     * @see https://en.wikipedia.org/wiki/Escape_velocity
     *
     * @var float
     */
    public const ESCAPE_VELOCITY = 2.38;

    /**
     * Moon's synodic rotation period
     *
     * Equals 29d 12:44:02.9
     *
     * Symbol: -
     * Unit: days
     *
     * @see https://en.wikipedia.org/wiki/Rotation_period
     *
     * @var float
     */
    public const ROTATION_PERIOD_SYNODIC = 29.530589;

    /**
     * Moon's sidereal rotation period
     *
     * Symbol: -
     * Unit: days
     *
     * @see https://en.wikipedia.org/wiki/Rotation_period
     * @see https://en.wikipedia.org/wiki/Orbital_period#Sidereal_period
     *
     * @var float
     */
    public const ROTATION_PERIOD_SIDEREAL = 27.321661;

    /**
     * Moon's equatorial rotation velocity
     *
     * Symbol: v
     * Unit: km/s
     *
     * @var float
     */
    public const EQUATORIAL_ROTATION_VELOCITY = 4.627;

    /**
     * Moon's axial tilt (to ecliptic)
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Axial_tilt
     *
     * @var float
     */
    public const AXIAL_TILT_ECLIPTIC = 1.5424;

    /**
     * Moon's axial tilt (to orbit plane)
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Axial_tilt
     *
     * @var float
     */
    public const AXIAL_TILT_ORBIT_PLANE = 6.687;

    /**
     * Moon's axial tilt (to Earth's equator)
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Axial_tilt
     *
     * @var float
     */
    public const AXIAL_TILT_TO_EARTH = 24.0;

    /**
     * Moon's North Pole right ascension
     *
     * Symbol: α (Alpha)
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Right_ascension
     *
     * @var float
     */
    public const NORTH_POLE_RIGHT_ASCENSION = 266.86;

    /**
     * Moon's North Pole declination
     *
     * Symbol: δ (Delta)
     * Unit: ° (degree)
     *
     * @see https://en.wikipedia.org/wiki/Declination
     *
     * @var float
     */
    public const NORTH_POLE_DECLINATION = 65.64;

    /**
     * Moon's geometric albedo
     *
     * Symbol: p
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Albedo
     * @see https://en.wikipedia.org/wiki/Geometric_albedo
     *
     * @var float
     */
    public const ALBEDO_GEOMETRIC = 0.136;

    /**
     * Moon's minimum surface temperature
     *
     * Symbol: -
     * Unit: °C
     *
     * @var float
     */
    public const SURFACE_TEMPERATURE_MIN = -173.15;

    /**
     * Moon's mean surface temperature
     *
     * Symbol: -
     * Unit: °C
     *
     * @var float
     */
    public const SURFACE_TEMPERATURE_MEAN = -23.15;

    /**
     * Moon's maximum surface temperature
     *
     * Symbol: -
     * Unit: °C
     *
     * @var float
     */
    public const SURFACE_TEMPERATURE_MAX = 116.85;

    /**
     * Moon's surface absorbed dose rate (radiation)
     *
     * Symbol: D
     * Unit: μGy/h
     *
     * @see https://en.wikipedia.org/wiki/Absorbed_dose
     * @see https://en.wikipedia.org/wiki/Dose_rate
     *
     * @var float
     */
    public const SURFACE_ABSORBED_DOSE_RATE = 13.2;

    /**
     * Moon's surface equivalent dose rate (radiation)
     *
     * Symbol: H
     * Unit: μSv/h
     *
     * @see https://en.wikipedia.org/wiki/Equivalent_dose
     * @see https://en.wikipedia.org/wiki/Dose_rate
     *
     * @var float
     */
    public const SURFACE_EQUIVALENT_DOSE_RATE = 57.0;

    /**
     * Moon's apparent minimum magnitude
     *
     * Symbol: m
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Apparent_magnitude
     *
     * @var float
     */
    public const APPARENT_MAGNITUDE_MIN = -2.5;

    /**
     * Moon's apparent maximum magnitude
     *
     * Symbol: m
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Apparent_magnitude
     *
     * @var float
     */
    public const APPARENT_MAGNITUDE_MAX = -12.9;

    /**
     * Moon's apparent magnitude (Full moon)
     *
     * Symbol: m
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Apparent_magnitude
     *
     * @var float
     */
    public const APPARENT_MAGNITUDE_FULL_MOON = -12.74;

    /**
     * Moon's minimum angular diameter
     *
     * Symbol: δ (Delta)
     * Unit: ' (arc minutes)
     *
     * @see https://en.wikipedia.org/wiki/Angular_diameter
     *
     * @var float
     */
    public const ANGULAR_DIAMETER_MIN = 29.3;

    /**
     * Moon's maximum angular diameter
     *
     * Symbol: δ (Delta)
     * Unit: ' (arc minutes)
     *
     * @see https://en.wikipedia.org/wiki/Angular_diameter
     *
     * @var float
     */
    public const ANGULAR_DIAMETER_MAX = 34.1;

    /**
     * Moon's surface pressure during day
     *
     * Symbol: p
     * Unit: Pa
     *
     * @see https://en.wikipedia.org/wiki/Atmospheric_pressure
     *
     * @var float
     */
    public const SURFACE_PRESSURE_DAY = 10E-7;

    /**
     * Moon's surface pressure during night
     *
     * Symbol: p
     * Unit: Pa
     *
     * @see https://en.wikipedia.org/wiki/Atmospheric_pressure
     *
     * @var float
     */
    public const SURFACE_PRESSURE_NIGHT = 10E-10;
}
