<?php

/**
 * @noinspection PhpUnused
 */

namespace TomLutzenberger\Constantine\Math;

/**
 * Collection of Mathematical constants
 *
 * For more basic constants like PI, Euler or SQRT(2):
 *
 * @see https://www.php.net/manual/en/math.constants.php
 *
 * @package   TomLutzenberger\Constantine\Math
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class Math
{
    /**
     * Apéry's constant
     *
     * Symbol: ζ(3) (Zeta)
     *
     * @see https://en.wikipedia.org/wiki/Ap%C3%A9ry%27s_constant
     * @see https://oeis.org/A002117
     *
     * @var float
     */
    public const APERY_CONSTANT = 1.20205690315959428539;

    /**
     * Backhouse's constant
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Backhouse%27s_constant
     * @see https://oeis.org/A072508
     *
     * @var float
     */
    public const BACKHOUSE_CONSTANT = 1.45607494858268967139;

    /**
     * Bernstein's constant
     *
     * Symbol: β (Beta)
     *
     * @see https://en.wikipedia.org/wiki/Bernstein%27s_constant
     * @see https://oeis.org/A073001
     *
     * @var float
     */
    public const BERNSTEIN_CONSTANT = 0.28016949902386913303;

    /**
     * Brun's constant for prime quadruplets
     *
     * Symbol: B₄
     *
     * @see https://en.wikipedia.org/wiki/Brun%27s_theorem#Numerical_estimates
     * @see https://oeis.org/A213007
     *
     * @var float
     */
    public const BRUN_CONSTANT_PRIME_QUADRUPLETS = 0.87058838;

    /**
     * Brun's constant for twin primes
     *
     * Symbol: B₂
     *
     * @see https://en.wikipedia.org/wiki/Brun%27s_theorem#Asymptotic_bounds_on_twin_primes
     * @see https://oeis.org/A065421
     *
     * @var float
     */
    public const BRUN_CONSTANT_TWIN_PRIMES = 1.902160583104;

    /**
     * Cahen's constant
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Cahen%27s_constant
     * @see https://oeis.org/A118227
     *
     * @var float
     */
    public const CAHEN_CONSTANT = 0.6434105462;

    /**
     * Catalan's constant
     *
     * Symbol: K
     *
     * @see https://en.wikipedia.org/wiki/Catalan%27s_constant
     * @see https://oeis.org/A006752
     *
     * @var float
     */
    public const CATALAN_CONSTANT = 0.91596559417721901505;

    /**
     * Conway's constant
     *
     * Symbol: λ (Lambda)
     *
     * @see https://en.wikipedia.org/wiki/Look-and-say_sequence#Growth_in_length
     * @see https://oeis.org/A014715
     *
     * @var float
     */
    public const CONWAY_CONSTANT = 1.30357726903429639125;

    /**
     * Embree-Trefethen constant
     *
     * Symbol: β* (Beta)
     *
     * @see https://en.wikipedia.org/wiki/Embree%E2%80%93Trefethen_constant
     * @see https://oeis.org/A118288
     *
     * @var float
     */
    public const EMBREE_TREFETHEN_CONSTANT = 0.70258;

    /**
     * Erdős-Borwein constant
     *
     * Symbol: E
     *
     * @see https://en.wikipedia.org/wiki/Erd%C5%91s%E2%80%93Borwein_constant
     * @see https://oeis.org/A065442
     *
     * @var float
     */
    public const ERDOS_BORWEIN_CONSTANT = 1.60669515241529176378;

    /**
     * Feigenbaum constant
     *
     * Symbol: δ (Delta)
     *
     * @see https://en.wikipedia.org/wiki/Feigenbaum_constants#The_first_constant
     * @see https://oeis.org/A006890
     *
     * @var float
     */
    public const FEIGENBAUM_CONSTANT = 4.66920160910299067185;

    /**
     * Feigenbaum alpha constant
     *
     * Symbol: α (Alpha)
     *
     * @see https://en.wikipedia.org/wiki/Feigenbaum_constants#The_second_constant
     * @see https://oeis.org/A006891
     *
     * @var float
     */
    public const FEIGENBAUM_ALPHA_CONSTANT = 2.50290787509589282228;

    /**
     * Fransén-Robinson constant
     *
     * Symbol: F
     *
     * @see https://en.wikipedia.org/wiki/Frans%C3%A9n%E2%80%93Robinson_constant
     * @see https://oeis.org/A058655
     *
     * @var float
     */
    public const FRANSEN_ROBINSON_CONSTANT = 2.80777024202851936522;

    /**
     * Gauss's constant
     *
     * Symbol: G
     *
     * @see https://en.wikipedia.org/wiki/Gauss%27s_constant
     * @see https://oeis.org/A014549
     *
     * @var float
     */
    public const GAUSS_CONSTANT = 0.83462684167407318628;

    /**
     * Gauss-Kuzmin-Wirsing constant
     *
     * Symbol: λ (Lambda)
     *
     * @see https://en.wikipedia.org/wiki/Gauss%E2%80%93Kuzmin%E2%80%93Wirsing_operator
     * @see https://oeis.org/A038517
     *
     * @var float
     */
    public const GAUSS_KUZMIN_WIRSING_CONSTANT = 0.30366300289873265859;

    /**
     * Glaisher-Kinkelin constant
     *
     * Symbol: A
     *
     * @see https://en.wikipedia.org/wiki/Glaisher%E2%80%93Kinkelin_constant
     * @see https://oeis.org/A074962
     *
     * @var float
     */
    public const GLAISHER_KINKELIN_CONSTANT = 1.28242712910062263687;

    /**
     * Golden ratio
     *
     * Formula: (1 + √5) / 2
     * Symbol: φ (Phi)
     *
     * @see https://en.wikipedia.org/wiki/Golden_ratio
     * @see https://oeis.org/A001622
     *
     * @var float
     */
    public const GOLDEN_RATIO = 1.61803398874989484820;

    /**
     * Golomb-Dickman constant
     *
     * Symbol: λ (Lambda), μ (Mu)
     *
     * @see https://en.wikipedia.org/wiki/Golomb%E2%80%93Dickman_constant
     * @see https://oeis.org/A084945
     *
     * @var float
     */
    public const GOLOMB_DICKMAN_CONSTANT = 0.62432998854355087099;

    /**
     * Hafner-Sarnak-McCurley constant
     *
     * Symbol: σ (Sigma)
     *
     * @see https://en.wikipedia.org/wiki/Hafner%E2%80%93Sarnak%E2%80%93McCurley_constant
     * @see https://oeis.org/A085849
     *
     * @var float
     */
    public const HAFNER_SARNAK_MCCURLEY_CONSTANT = 0.35323637185499598454;

    /**
     * Khinchin's constant
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Khinchin%27s_constant
     * @see https://oeis.org/A002210
     *
     * @var float
     */
    public const KHINCHIN_CONSTANT = 2.68545200106530644530;

    /**
     * Landau's constant
     *
     * Symbol: L
     *
     * @see https://en.wikipedia.org/wiki/Landau%27s_constants
     * @see https://oeis.org/A081760
     *
     * @var float
     */
    public const LANDAU_CONSTANT = 0.5;

    /**
     * Landau-Ramanujan constant
     *
     * Symbol: K
     *
     * @see https://en.wikipedia.org/wiki/Landau%E2%80%93Ramanujan_constant
     * @see https://oeis.org/A064533
     *
     * @var float
     */
    public const LANDAU_RAMANUJAN_CONSTANT = 0.76422365358922066299;

    /**
     * Laplace limit
     *
     * Symbol: λ (Lambda)
     *
     * @see https://en.wikipedia.org/wiki/Laplace_limit
     * @see https://oeis.org/A033259
     *
     * @var float
     */
    public const LAPLACE_LIMIT = 0.66274341934918158097;

    /**
     * Legendre's constant
     *
     * Symbol: B´L
     *
     * @see https://en.wikipedia.org/wiki/Legendre%27s_constant
     * @see https://oeis.org/A000007
     *
     * @var int
     */
    public const LEGENDRE_CONSTANT = 1;

    /**
     * Lemniscate constant
     *
     * Symbol: ϖ
     *
     * @see https://en.wikipedia.org/wiki/Lemniscate_elliptic_functions#Lemniscate_constant
     * @see https://oeis.org/A062539
     *
     * @var float
     */
    public const LEMNISCATE_CONSTANT = 2.62205755429211981046;

    /**
     * Lévy's constant
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/L%C3%A9vy%27s_constant
     * @see https://oeis.org/A086702
     *
     * @var float
     */
    public const LEVY_CONSTANT = 3.27582291872181115978;

    /**
     * Lieb's square ice constant
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Lieb%27s_square_ice_constant
     * @see https://oeis.org/A118273
     *
     * @var float
     */
    public const LIEB_SQUARE_ICE_CONSTANT = 1.5396007178;

    /**
     * Meissel-Mertens constant
     *
     * Symbol: M1
     *
     * @see https://en.wikipedia.org/wiki/Meissel%E2%80%93Mertens_constant
     * @see https://oeis.org/A077761
     *
     * @var float
     */
    public const MEISSEL_MERTENS_CONSTANT = 0.26149721284764278375;

    /**
     * Mills' constant
     *
     * Symbol: θ (Theta)
     *
     * @see https://en.wikipedia.org/wiki/Mills%27_constant
     * @see https://oeis.org/A051021
     *
     * @var float
     */
    public const MILLS_CONSTANT = 1.30637788386308069046;

    /**
     * Niven's constant
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Niven%27s_constant
     * @see https://oeis.org/A033150
     *
     * @var float
     */
    public const NIVEN_CONSTANT = 1.70521114010536776428;

    /**
     * Omega constant
     *
     * Symbol: Ω (Omega)
     *
     * @see https://en.wikipedia.org/wiki/Omega_constant
     * @see https://oeis.org/A030178
     *
     * @var float
     */
    public const OMEGA_CONSTANT = 0.56714329040978387299;

    /**
     * Plastic constant
     *
     * Symbol: ρ (Rho)
     *
     * @see https://en.wikipedia.org/wiki/Plastic_number
     * @see https://oeis.org/A060006
     *
     * @var float
     */
    public const PLASTIC_CONSTANT = 1.32471795724474602596;

    /**
     * Porter's constant
     *
     * Symbol: -
     *
     * @see https://en.wikipedia.org/wiki/Porter%27s_constant
     * @see https://oeis.org/A086237
     *
     * @var float
     */
    public const PORTER_CONSTANT = 1.4670780794;

    /**
     * Ramanujan-Soldner constant
     *
     * Symbol: μ (Mu)
     *
     * @see https://en.wikipedia.org/wiki/Ramanujan%E2%80%93Soldner_constant
     * @see https://oeis.org/A070769
     *
     * @var float
     */
    public const RAMANUJAN_SOLDNER_CONSTANT = 1.45136923488338105028;

    /**
     * Reciprocal Fibonacci constant
     *
     * Symbol: ψ (Psi)
     *
     * @see https://en.wikipedia.org/wiki/Reciprocal_Fibonacci_constant
     * @see https://oeis.org/A079586
     *
     * @var float
     */
    public const RECIPROCAL_FIBONACCI_CONSTANT = 3.35988566624317755317;

    /**
     * Sierpiński's constant
     *
     * Symbol: K
     *
     * @see https://en.wikipedia.org/wiki/Sierpi%C5%84ski%27s_constant
     * @see https://oeis.org/A062089
     *
     * @var float
     */
    public const SIERPINSKI_CONSTANT = 2.58498175957925321706;

    /**
     * Sophomore's dream1
     *
     * Symbol: I1
     *
     * @see https://en.wikipedia.org/wiki/Sophomore%27s_dream
     * @see https://oeis.org/A083648
     *
     * @var float
     */
    public const SOPHOMORES_DREAM_1 = 0.78343051071213440705;

    /**
     * Sophomore's dream2
     *
     * Symbol: I2
     *
     * @see https://en.wikipedia.org/wiki/Sophomore%27s_dream
     * @see https://oeis.org/A073009
     *
     * @var float
     */
    public const SOPHOMORES_DREAM_2 = 1.29128599706266354040;

    /**
     * Twin prime constant
     *
     * Symbol: C₂
     *
     * @see https://en.wikipedia.org/wiki/Twin_prime#Twin_prime_conjecture
     * @see https://oeis.org/A005597
     *
     * @var float
     */
    public const TWIN_PRIME_CONSTANT = 0.66016181584686957392;

    /**
     * Universal parabolic constant
     *
     * Symbol: P
     *
     * @see https://en.wikipedia.org/wiki/Universal_parabolic_constant
     * @see https://oeis.org/A103710
     *
     * @var float
     */
    public const UNIVERSAL_PARABOLIC_CONSTANT = 2.29558714939263807403;

    /**
     * Viswanath's constant
     *
     * Symbol: K
     *
     * @see https://en.wikipedia.org/wiki/Random_Fibonacci_sequence
     * @see https://oeis.org/A078416
     *
     * @var float
     */
    public const VISWANATH_CONSTANT = 1.13198824;

    /**
     * Wallis Constant
     *
     * Symbol: W
     *
     * @see https://en.wikipedia.org/wiki/John_Wallis#Integral_calculus
     * @see https://oeis.org/A007493
     *
     * @var float
     */
    public const WALLIS_CONSTANT = 2.09455148154232659148;
}
