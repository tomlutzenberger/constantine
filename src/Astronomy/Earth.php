<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Astronomy;

/**
 * Collection of Earth constants
 *
 * @see       https://en.wikipedia.org/wiki/Earth
 *
 * @package   TomLutzenberger\Constantine\Astronomy
 * @copyright 2021 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 */
class Earth
{
    /**
     * Earth's Aphelion
     * The point where Earth is farthest from the sun.
     *
     * Symbol: Q
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Perihelion_and_aphelion
     * @var int
     */
    public const APHELION = 152100000;

    /**
     * Earth's Perihelion
     * The point where Earth is nearest to the sun.
     *
     * Symbol: q
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Perihelion_and_aphelion
     * @var int
     */
    public const PERIHELION = 147095000;

    /**
     * Earth's Semi-major axis
     * The longest semidiameter or one half of the major axis (longest diameter in an ellipse).
     *
     * Symbol: a
     * Unit: km
     *
     * @see https://en.wikipedia.org/wiki/Semi-major_and_semi-minor_axes
     * @var int
     */
    public const SEMI_MAJOR_AXIS = 149598023;

    /**
     * Earth's Eccentricity
     * Determines the amount by which its orbit around another body deviates from a perfect circle.
     *
     * Symbol: e
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Orbital_eccentricity
     * @var float
     */
    public const ECCENTRICITY = 0.0167086;

    /**
     * Earth's Orbital period
     * The time a given astronomical object takes to complete one orbit around another object.
     *
     * Symbol: T
     * Unit: days
     *
     * @see https://en.wikipedia.org/wiki/Orbital_period
     * @var float
     */
    public const ORBITAL_PERIOD = 365.256363004;

    /**
     * Earth's average orbital speed
     * The speed at which it orbits around either the barycenter or its speed relative to the center of mass of the
     * most massive body.
     *
     * Symbol: v
     * Unit: km/s
     *
     * @see https://en.wikipedia.org/wiki/Orbital_speed
     * @var float
     */
    public const AVERAGE_ORBITAL_SPEED = 29.78;

    /**
     * Earth's Mean anomaly
     * The fraction of an elliptical orbit's period that has elapsed since the orbiting body passed periapsis.
     *
     * Symbol: n
     * Unit: ° (degree)
     *
     * @see          https://en.wikipedia.org/wiki/Mean_anomaly
     * @var float
     * @noinspection GrazieInspection
     */
    public const MEAN_ANOMALY = 358.617;

    /**
     * Earth's Inclination to the Sun's equator
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see          https://en.wikipedia.org/wiki/Orbital_inclination
     * @var float
     * @noinspection GrazieInspection
     */
    public const INCLINATION_TO_SUN_EQUATOR = 7.155;

    /**
     * Earth's Inclination to invariable plane
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see          https://en.wikipedia.org/wiki/Orbital_inclination
     * @var float
     * @noinspection GrazieInspection
     */
    public const INCLINATION_TO_INVARIABLE_PLANE = 1.57869;

    /**
     * Earth's Inclination to J2000 ecliptic
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see          https://en.wikipedia.org/wiki/Orbital_inclination
     * @var float
     * @noinspection GrazieInspection
     */
    public const INCLINATION_TO_J_2000_ECLIPTIC = 0.00005;

    /**
     * Earth's Longitude of ascending node to J2000 ecliptic
     *
     * Symbol: Ω
     * Unit: ° (degree)
     *
     * @see          https://en.wikipedia.org/wiki/Longitude_of_the_ascending_node
     * @var float
     * @noinspection GrazieInspection
     */
    public const LONGITUDE_OF_ASCENDING_NODE = -11.26064;

    /**
     * Earth's Argument of perihelion
     *
     * Symbol: Ω
     * Unit: ° (degree)
     *
     * @see          https://en.wikipedia.org/wiki/Argument_of_periapsis
     * @var float
     * @noinspection GrazieInspection
     */
    public const ARGUMENT_OF_PERIHELION = 114.20783;

    /**
     * Earth's Mean radius
     *
     * Symbol: r
     * Unit: km
     *
     * @var float
     */
    public const RADIUS_MEAN = 6371.0;

    /**
     * Earth's Equatorial radius
     *
     * Symbol: r
     * Unit: km
     *
     * @var float
     */
    public const RADIUS_EQUATORIAL = 6378.137;

    /**
     * Earth's Polar radius
     *
     * Symbol: r
     * Unit: km
     *
     * @var float
     */
    public const RADIUS_POLAR = 6356.752;

    /**
     * Earth's flattening
     *
     * Symbol: f
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Flattening
     * @var float
     */
    public const FLATTENING = 1 / 298.257222101;

    /**
     * Earth's equatorial circumference
     *
     * Symbol: -
     * Unit: km
     *
     * @var float
     */
    public const CIRCUMFERENCE_EQUATORIAL = 40075.017;

    /**
     * Earth's meridional circumference
     *
     * Symbol: -
     * Unit: km
     *
     * @var float
     */
    public const CIRCUMFERENCE_MERIDIONAL = 40007.86;

    /**
     * Earth's total surface area
     *
     * Symbol: S
     * Unit: km²
     *
     * @see https://en.wikipedia.org/wiki/Spheroid#Surface_area
     * @var int
     */
    public const SURFACE_AREA_TOTAL = 510065623;
    /**
     * Earth's land surface area
     *
     * Symbol: S
     * Unit: km²
     *
     * @see https://en.wikipedia.org/wiki/Spheroid#Surface_area
     * @var int
     */
    public const SURFACE_AREA_LAND = 148940000;
    /**
     * Earth's water surface area
     *
     * Symbol: S
     * Unit: km²
     *
     * @see https://en.wikipedia.org/wiki/Spheroid#Surface_area
     * @var int
     */
    public const SURFACE_AREA_WATER = 361132000;


    /**
     * Earth's Volume
     *
     * Symbol: V
     * Unit: km3
     *
     * @see https://en.wikipedia.org/wiki/Volume
     * @var float
     */
    public const VOLUME = 1.08321 * 10E12;

    /**
     * Earth's Mass
     *
     * Symbol: m
     * Unit: kg
     *
     * @see https://en.wikipedia.org/wiki/Mass
     * @var float
     */
    public const MASS = 5.97237 * 10E24;

    /**
     * Earth's Mean density
     *
     * Symbol: ρ
     * Unit: g/cm3
     *
     * @see https://en.wikipedia.org/wiki/Density
     * @var float
     */
    public const MEAN_DENSITY = 5.514;

    /**
     * Earth's Surface gravity
     * Equals 1G
     *
     * Symbol: g
     * Unit: m/s2
     *
     * @see https://en.wikipedia.org/wiki/Surface_gravity
     * @var float
     */
    public const SURFACE_GRAVITY = 9.80665;

    /**
     * Earth's moment of inertia factor
     *
     * Symbol: -
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Moment_of_inertia_factor
     * @var float
     */
    public const MOMENT_OF_INERTIA_FACTOR = 0.3307;

    /**
     * Earth's escape velocity
     *
     * Symbol: ve
     * Unit: km/s
     *
     * @see https://en.wikipedia.org/wiki/Escape_velocity
     * @var float
     */
    public const ESCAPE_VELOCITY = 11.186;

    /**
     * Earth's rotation period
     *
     * Symbol: -
     * Unit: days
     *
     * @see https://en.wikipedia.org/wiki/Rotation_period
     * @var float
     */
    public const ROTATION_PERIOD = 1.0;

    /**
     * Earth's sidereal rotation period
     * Equals to 23:56:04.100
     *
     * Symbol: -
     * Unit: days
     *
     * @see https://en.wikipedia.org/wiki/Rotation_period
     * @see https://en.wikipedia.org/wiki/Orbital_period#Sidereal_period
     * @var float
     */
    public const SIDEREAL_ROTATION_PERIOD = 0.99726968;


    /**
     * Earth's equatorial rotation velocity
     *
     * Symbol: v
     * Unit: km/s
     *
     * @var float
     */
    public const EQUATORIAL_ROTATION_VELOCITY = 0.4651;


    /**
     * Earth's axial tilt
     *
     * Symbol: -
     * Unit: ° (degree)
     *
     * @see          https://en.wikipedia.org/wiki/Axial_tilt
     * @var float
     * @noinspection GrazieInspection
     */
    public const AXIAL_TILT = 23.4392811;

    /**
     * Earth's geometric albedo
     *
     * Symbol: p
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Albedo
     * @see https://en.wikipedia.org/wiki/Geometric_albedo
     * @var float
     */
    public const ALBEDO_GEOMETRIC = 0.367;

    /**
     * Earth's bond albedo
     *
     * Symbol: A
     * Unit: -
     *
     * @see https://en.wikipedia.org/wiki/Albedo
     * @see https://en.wikipedia.org/wiki/Bond_albedo
     * @var float
     */
    public const ALBEDO_BOND = 0.306;

    /**
     * Earth's minimum surface temperature
     *
     * Symbol:
     * Unit: °C
     *
     * @see https://en.wikipedia.org/wiki/Earth#Weather_and_climate
     * @var float
     */
    public const SURFACE_TEMPERATURE_MIN = -89.2;

    /**
     * Earth's mean surface temperature
     *
     * Symbol:
     * Unit: °C
     *
     * @see https://en.wikipedia.org/wiki/Earth#Weather_and_climate
     * @var float
     */
    public const SURFACE_TEMPERATURE_MEAN = 14.0;

    /**
     * Earth's maximum surface temperature
     *
     * Symbol:
     * Unit: °C
     *
     * @see https://en.wikipedia.org/wiki/Earth#Weather_and_climate
     * @var float
     */
    public const SURFACE_TEMPERATURE_MAX = 56.7;

    /**
     * Earth's surface equivalent dose rate (radiation)
     *
     * Symbol: H
     * Unit: μSv/h
     *
     * @see https://en.wikipedia.org/wiki/Equivalent_dose
     * @see https://en.wikipedia.org/wiki/Dose_rate
     * @var float
     */
    public const SURFACE_EQUIVALENT_DOSE_RATE = 0.274;

    /**
     * Earth's surface pressure at mean sea level
     *
     * Symbol: p
     * Unit: kPa
     *
     * @see https://en.wikipedia.org/wiki/Atmospheric_pressure
     * @var float
     */
    public const SURFACE_PRESSURE = 101.325;
}
