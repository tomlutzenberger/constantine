<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\I18N;

/**
 * Collection of official ISO 4217 currencies and their units
 *
 * @see https://en.wikipedia.org/wiki/ISO_4217
 *
 * @package   TomLutzenberger\Constantine\I18N
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class Currency
{
    /**
     * ISO-4217 Code for the United Arab Emirates dirham
     *
     * Countries:
     * - United Arab Emirates
     *
     * @var string
     */
    public const ALPHA_3_CODE_AED = 'AED';

    /**
     * ISO-4271 Number for the United Arab Emirates dirham
     *
     * @var int
     */
    public const NUMERIC_CODE_AED = 784;

    /**
     * ISO-4271 name for currency AED
     *
     * @var string
     */
    public const NAME_AED = 'United Arab Emirates dirham';

    /**
     * The number of digits after the decimal separator for AED
     *
     * @var int
     */
    public const DIGITS_AED = 2;

    /**
     * Short name for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_AED = 'Dirham';

    /**
     * Short name of minor unit for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_AED = 'Fils';

    /**
     * Symbol for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AED = 'د.إ';

    /**
     * Symbol of minor unit for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AED = 'فلس';

    /**
     * Symbol of minor unit for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AED = 1 / 100;

    /**
     * ISO-4217 Code for the Afghan afghani
     *
     * Countries:
     * - Afghanistan
     *
     * @var string
     */
    public const ALPHA_3_CODE_AFN = 'AFN';

    /**
     * ISO-4271 Number for the Afghan afghani
     *
     * @var int
     */
    public const NUMERIC_CODE_AFN = 971;

    /**
     * ISO-4271 name for currency AFN
     *
     * @var string
     */
    public const NAME_AFN = 'Afghan afghani';

    /**
     * The number of digits after the decimal separator for AFN
     *
     * @var int
     */
    public const DIGITS_AFN = 2;

    /**
     * Short name for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_AFN = 'Afghani';

    /**
     * Short name of minor unit for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     * @see https://en.wikipedia.org/wiki/Afghan_pul
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_AFN = 'Pul';

    /**
     * Symbol for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AFN = '؋';

    /**
     * Symbol of minor unit for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     * @see https://en.wikipedia.org/wiki/Afghan_pul
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AFN = '';

    /**
     * Symbol of minor unit for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AFN = 1 / 100;

    /**
     * ISO-4217 Code for the Albanian lek
     *
     * Countries:
     * - Albania
     *
     * @var string
     */
    public const ALPHA_3_CODE_ALL = 'ALL';

    /**
     * ISO-4271 Number for the Albanian lek
     *
     * @var int
     */
    public const NUMERIC_CODE_ALL = 8;

    /**
     * ISO-4271 name for currency ALL
     *
     * @var string
     */
    public const NAME_ALL = 'Albanian lek';

    /**
     * The number of digits after the decimal separator for ALL
     *
     * @var int
     */
    public const DIGITS_ALL = 2;

    /**
     * Short name for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ALL = 'lek';

    /**
     * Short name of minor unit for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ALL = 'qindarkë';

    /**
     * Symbol for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ALL = 'L';

    /**
     * Symbol of minor unit for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ALL = '';

    /**
     * Symbol of minor unit for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ALL = 1 / 100;

    /**
     * ISO-4217 Code for the Armenian dram
     *
     * Countries:
     * - Armenia
     *
     * @var string
     */
    public const ALPHA_3_CODE_AMD = 'AMD';

    /**
     * ISO-4271 Number for the Armenian dram
     *
     * @var int
     */
    public const NUMERIC_CODE_AMD = 051;

    /**
     * ISO-4271 name for currency AMD
     *
     * @var string
     */
    public const NAME_AMD = 'Armenian dram';

    /**
     * The number of digits after the decimal separator for AMD
     *
     * @var int
     */
    public const DIGITS_AMD = 2;

    /**
     * Short name for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_AMD = 'dram';

    /**
     * Short name of minor unit for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_AMD = 'luma';

    /**
     * Symbol for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AMD = '֏';

    /**
     * Symbol of minor unit for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AMD = '';

    /**
     * Symbol of minor unit for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AMD = 1 / 100;

    /**
     * ISO-4217 Code for the Netherlands Antillean guilder
     *
     * Countries:
     * - Curaçao (CW)
     * - Sint Maarten (SX)
     *
     * @var string
     */
    public const ALPHA_3_CODE_ANG = 'ANG';

    /**
     * ISO-4271 Number for the Netherlands Antillean guilder
     *
     * @var int
     */
    public const NUMERIC_CODE_ANG = 532;

    /**
     * ISO-4271 name for currency ANG
     *
     * @var string
     */
    public const NAME_ANG = 'Netherlands Antillean guilder';

    /**
     * The number of digits after the decimal separator for ANG
     *
     * @var int
     */
    public const DIGITS_ANG = 2;

    /**
     * Short name for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ANG = 'guilder';

    /**
     * Short name of minor unit for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ANG = 'cent';

    /**
     * Symbol for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ANG = 'ƒ';

    /**
     * Symbol of minor unit for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ANG = '';

    /**
     * Symbol of minor unit for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ANG = 1 / 100;

    /**
     * ISO-4217 Code for the Angolan kwanza
     *
     * Countries:
     * - Angola
     *
     * @var string
     */
    public const ALPHA_3_CODE_AOA = 'AOA';

    /**
     * ISO-4271 Number for the Angolan kwanza
     *
     * @var int
     */
    public const NUMERIC_CODE_AOA = 973;

    /**
     * ISO-4271 name for currency AOA
     *
     * @var string
     */
    public const NAME_AOA = 'Angolan kwanza';

    /**
     * The number of digits after the decimal separator for AOA
     *
     * @var int
     */
    public const DIGITS_AOA = 2;

    /**
     * Short name for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_AOA = 'kwanza';

    /**
     * Short name of minor unit for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_AOA = 'cêntimo';

    /**
     * Symbol for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AOA = 'Kz';

    /**
     * Symbol of minor unit for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AOA = '';

    /**
     * Symbol of minor unit for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AOA = 1 / 100;

    /**
     * ISO-4217 Code for the Argentine peso
     *
     * Countries:
     * - Argentina
     *
     * @var string
     */
    public const ALPHA_3_CODE_ARS = 'ARS';

    /**
     * ISO-4271 Number for the Argentine peso
     *
     * @var int
     */
    public const NUMERIC_CODE_ARS = 032;

    /**
     * ISO-4271 name for currency ARS
     *
     * @var string
     */
    public const NAME_ARS = 'Argentine peso';

    /**
     * The number of digits after the decimal separator for ARS
     *
     * @var int
     */
    public const DIGITS_ARS = 2;

    /**
     * Short name for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ARS = 'peso';

    /**
     * Short name of minor unit for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ARS = 'centavo';

    /**
     * Symbol for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ARS = '$';

    /**
     * Symbol of minor unit for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ARS = '';

    /**
     * Symbol of minor unit for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ARS = 1 / 100;

    /**
     * ISO-4217 Code for the Australian dollar
     *
     * Countries:
     * - Australia
     * - Christmas Island (CX)
     * - Cocos (Keeling) Islands (CC)
     * - Heard Island and McDonald Islands (HM)
     * - Kiribati (KI)
     * - Nauru (NR)
     * - Norfolk Island (NF)
     * - Tuvalu (TV)
     *
     * @var string
     */
    public const ALPHA_3_CODE_AUD = 'AUD';

    /**
     * ISO-4271 Number for the Australian dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_AUD = 036;

    /**
     * ISO-4271 name for currency AUD
     *
     * @var string
     */
    public const NAME_AUD = 'Australian dollar';

    /**
     * The number of digits after the decimal separator for AUD
     *
     * @var int
     */
    public const DIGITS_AUD = 2;

    /**
     * Short name for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_AUD = 'Australian dollar';

    /**
     * Short name of minor unit for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_AUD = 'cent';

    /**
     * Symbol for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AUD = '$';

    /**
     * Symbol of minor unit for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AUD = 'c';

    /**
     * Symbol of minor unit for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AUD = 1 / 100;

    /**
     * ISO-4217 Code for the Aruban florin
     *
     * Countries:
     * - Aruba
     *
     * @var string
     */
    public const ALPHA_3_CODE_AWG = 'AWG';

    /**
     * ISO-4271 Number for the Aruban florin
     *
     * @var int
     */
    public const NUMERIC_CODE_AWG = 533;

    /**
     * ISO-4271 name for currency AWG
     *
     * @var string
     */
    public const NAME_AWG = 'Aruban florin';

    /**
     * The number of digits after the decimal separator for AWG
     *
     * @var int
     */
    public const DIGITS_AWG = 2;

    /**
     * Short name for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_AWG = 'florin';

    /**
     * Short name of minor unit for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_AWG = 'cent';

    /**
     * Symbol for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AWG = 'ƒ';

    /**
     * Symbol of minor unit for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AWG = '';

    /**
     * Symbol of minor unit for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AWG = 1 / 100;

    /**
     * ISO-4217 Code for the Azerbaijani manat
     *
     * Countries:
     * - Azerbaijan
     *
     * @var string
     */
    public const ALPHA_3_CODE_AZN = 'AZN';

    /**
     * ISO-4271 Number for the Azerbaijani manat
     *
     * @var int
     */
    public const NUMERIC_CODE_AZN = 944;

    /**
     * ISO-4271 name for currency AZN
     *
     * @var string
     */
    public const NAME_AZN = 'Azerbaijani manat';

    /**
     * The number of digits after the decimal separator for AZN
     *
     * @var int
     */
    public const DIGITS_AZN = 2;

    /**
     * Short name for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_AZN = 'manat';

    /**
     * Short name of minor unit for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_AZN = 'qəpik';

    /**
     * Symbol for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AZN = '₼';

    /**
     * Symbol of minor unit for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AZN = '';

    /**
     * Symbol of minor unit for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AZN = 1 / 100;

    /**
     * ISO-4217 Code for the Bosnia and Herzegovina convertible mark
     *
     * Countries:
     * - Bosnia and Herzegovina
     *
     * @var string
     */
    public const ALPHA_3_CODE_BAM = 'BAM';

    /**
     * ISO-4271 Number for the Bosnia and Herzegovina convertible mark
     *
     * @var int
     */
    public const NUMERIC_CODE_BAM = 977;

    /**
     * ISO-4271 name for currency BAM
     *
     * @var string
     */
    public const NAME_BAM = 'Bosnia and Herzegovina convertible mark';

    /**
     * The number of digits after the decimal separator for BAM
     *
     * @var int
     */
    public const DIGITS_BAM = 2;

    /**
     * Short name for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BAM = 'mark';

    /**
     * Short name of minor unit for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BAM = 'pfenig';

    /**
     * Symbol for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BAM = 'KM';

    /**
     * Symbol of minor unit for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BAM = 'pf';

    /**
     * Symbol of minor unit for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BAM = 1 / 100;

    /**
     * ISO-4217 Code for the Barbados dollar
     *
     * Countries:
     * - Barbados
     *
     * @var string
     */
    public const ALPHA_3_CODE_BBD = 'BBD';

    /**
     * ISO-4271 Number for the Barbados dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_BBD = 052;

    /**
     * ISO-4271 name for currency BBD
     *
     * @var string
     */
    public const NAME_BBD = 'Barbados dollar';

    /**
     * The number of digits after the decimal separator for BBD
     *
     * @var int
     */
    public const DIGITS_BBD = 2;

    /**
     * Short name for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BBD = 'dollar';

    /**
     * Short name of minor unit for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BBD = 'cent';

    /**
     * Symbol for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BBD = '$';

    /**
     * Symbol of minor unit for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BBD = 'c';

    /**
     * Symbol of minor unit for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BBD = 1 / 100;

    /**
     * ISO-4217 Code for the Bangladeshi taka
     *
     * Countries:
     * - Bangladesh
     *
     * @var string
     */
    public const ALPHA_3_CODE_BDT = 'BDT';

    /**
     * ISO-4271 Number for the Bangladeshi taka
     *
     * @var int
     */
    public const NUMERIC_CODE_BDT = 050;

    /**
     * ISO-4271 name for currency BDT
     *
     * @var string
     */
    public const NAME_BDT = 'Bangladeshi taka';

    /**
     * The number of digits after the decimal separator for BDT
     *
     * @var int
     */
    public const DIGITS_BDT = 2;

    /**
     * Short name for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BDT = 'taka';

    /**
     * Short name of minor unit for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BDT = 'poysha';

    /**
     * Symbol for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BDT = '৳';

    /**
     * Symbol of minor unit for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BDT = 'p';

    /**
     * Symbol of minor unit for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BDT = 1 / 100;

    /**
     * ISO-4217 Code for the Bulgarian lev
     *
     * Countries:
     * - Bulgaria
     *
     * @var string
     */
    public const ALPHA_3_CODE_BGN = 'BGN';

    /**
     * ISO-4271 Number for the Bulgarian lev
     *
     * @var int
     */
    public const NUMERIC_CODE_BGN = 975;

    /**
     * ISO-4271 name for currency BGN
     *
     * @var string
     */
    public const NAME_BGN = 'Bulgarian lev';

    /**
     * The number of digits after the decimal separator for BGN
     *
     * @var int
     */
    public const DIGITS_BGN = 2;

    /**
     * Short name for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BGN = 'lev';

    /**
     * Short name of minor unit for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BGN = 'stotinka';

    /**
     * Symbol for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BGN = 'лв';

    /**
     * Symbol of minor unit for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BGN = '';

    /**
     * Symbol of minor unit for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BGN = 1 / 100;

    /**
     * ISO-4217 Code for the Bahraini dinar
     *
     * Countries:
     * - Bahrain
     *
     * @var string
     */
    public const ALPHA_3_CODE_BHD = 'BHD';

    /**
     * ISO-4271 Number for the Bahraini dinar
     *
     * @var int
     */
    public const NUMERIC_CODE_BHD = 48;

    /**
     * ISO-4271 name for currency BHD
     *
     * @var string
     */
    public const NAME_BHD = 'Bahraini dinar';

    /**
     * The number of digits after the decimal separator for BHD
     *
     * @var int
     */
    public const DIGITS_BHD = 3;

    /**
     * Short name for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BHD = 'dinar';

    /**
     * Short name of minor unit for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BHD = 'fils';

    /**
     * Symbol for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BHD = '.د.ب';

    /**
     * Symbol of minor unit for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BHD = '';

    /**
     * Symbol of minor unit for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BHD = 1 / 1000;

    /**
     * ISO-4217 Code for the Burundian franc
     *
     * Countries:
     * - Burundi
     *
     * @var string
     */
    public const ALPHA_3_CODE_BIF = 'BIF';

    /**
     * ISO-4271 Number for the Burundian franc
     *
     * @var int
     */
    public const NUMERIC_CODE_BIF = 108;

    /**
     * ISO-4271 name for currency BIF
     *
     * @var string
     */
    public const NAME_BIF = 'Burundian franc';

    /**
     * The number of digits after the decimal separator for BIF
     *
     * @var int
     */
    public const DIGITS_BIF = 0;

    /**
     * Short name for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BIF = 'franc';

    /**
     * Short name of minor unit for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BIF = 'centime';

    /**
     * Symbol for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BIF = 'FBu';

    /**
     * Symbol of minor unit for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BIF = '';

    /**
     * Symbol of minor unit for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BIF = 1 / 100;

    /**
     * ISO-4217 Code for the Bermudian dollar
     *
     * Countries:
     * - Bermuda
     *
     * @var string
     */
    public const ALPHA_3_CODE_BMD = 'BMD';

    /**
     * ISO-4271 Number for the Bermudian dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_BMD = 060;

    /**
     * ISO-4271 name for currency BMD
     *
     * @var string
     */
    public const NAME_BMD = 'Bermudian dollar';

    /**
     * The number of digits after the decimal separator for BMD
     *
     * @var int
     */
    public const DIGITS_BMD = 2;

    /**
     * Short name for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BMD = 'Bermudian dollar';

    /**
     * Short name of minor unit for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BMD = 'cent';

    /**
     * Symbol for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BMD = '$';

    /**
     * Symbol of minor unit for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BMD = 'cent';

    /**
     * Symbol of minor unit for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BMD = 1 / 100;

    /**
     * ISO-4217 Code for the Brunei dollar
     *
     * Countries:
     * - Brunei
     *
     * @var string
     */
    public const ALPHA_3_CODE_BND = 'BND';

    /**
     * ISO-4271 Number for the Brunei dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_BND = 96;

    /**
     * ISO-4271 name for currency BND
     *
     * @var string
     */
    public const NAME_BND = 'Brunei dollar';

    /**
     * The number of digits after the decimal separator for BND
     *
     * @var int
     */
    public const DIGITS_BND = 2;

    /**
     * Short name for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BND = 'Brunei dollar';

    /**
     * Short name of minor unit for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BND = 'sen';

    /**
     * Symbol for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BND = 'B$';

    /**
     * Symbol of minor unit for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BND = '';

    /**
     * Symbol of minor unit for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BND = 1 / 100;

    /**
     * ISO-4217 Code for the Boliviano
     *
     * Countries:
     * - Bolivia
     *
     * @var string
     */
    public const ALPHA_3_CODE_BOB = 'BOB';

    /**
     * ISO-4271 Number for the Boliviano
     *
     * @var int
     */
    public const NUMERIC_CODE_BOB = 68;

    /**
     * ISO-4271 name for currency BOB
     *
     * @var string
     */
    public const NAME_BOB = 'Boliviano';

    /**
     * The number of digits after the decimal separator for BOB
     *
     * @var int
     */
    public const DIGITS_BOB = 2;

    /**
     * Short name for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BOB = 'boliviano';

    /**
     * Short name of minor unit for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BOB = 'centavo';

    /**
     * Symbol for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BOB = 'Bs';

    /**
     * Symbol of minor unit for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BOB = 'c.';

    /**
     * Symbol of minor unit for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BOB = 1 / 100;

    /**
     * ISO-4217 Code for the Brazilian real
     *
     * Countries:
     * - Brazil
     *
     * @var string
     */
    public const ALPHA_3_CODE_BRL = 'BRL';

    /**
     * ISO-4271 Number for the Brazilian real
     *
     * @var int
     */
    public const NUMERIC_CODE_BRL = 986;

    /**
     * ISO-4271 name for currency BRL
     *
     * @var string
     */
    public const NAME_BRL = 'Brazilian real';

    /**
     * The number of digits after the decimal separator for BRL
     *
     * @var int
     */
    public const DIGITS_BRL = 2;

    /**
     * Short name for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BRL = 'real';

    /**
     * Short name of minor unit for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BRL = 'centavo';

    /**
     * Symbol for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BRL = 'R$';

    /**
     * Symbol of minor unit for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BRL = '';

    /**
     * Symbol of minor unit for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BRL = 1 / 100;

    /**
     * ISO-4217 Code for the Bahamian dollar
     *
     * Countries:
     * - Bahamas
     *
     * @var string
     */
    public const ALPHA_3_CODE_BSD = 'BSD';

    /**
     * ISO-4271 Number for the Bahamian dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_BSD = 044;

    /**
     * ISO-4271 name for currency BSD
     *
     * @var string
     */
    public const NAME_BSD = 'Bahamian dollar';

    /**
     * The number of digits after the decimal separator for BSD
     *
     * @var int
     */
    public const DIGITS_BSD = 2;

    /**
     * Short name for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BSD = 'dollar';

    /**
     * Short name of minor unit for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BSD = 'cent';

    /**
     * Symbol for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BSD = 'B$';

    /**
     * Symbol of minor unit for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BSD = '';

    /**
     * Symbol of minor unit for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BSD = 1 / 100;

    /**
     * ISO-4217 Code for the Bhutanese ngultrum
     *
     * Countries:
     * - Bhutan
     *
     * @var string
     */
    public const ALPHA_3_CODE_BTN = 'BTN';

    /**
     * ISO-4271 Number for the Bhutanese ngultrum
     *
     * @var int
     */
    public const NUMERIC_CODE_BTN = 064;

    /**
     * ISO-4271 name for currency BTN
     *
     * @var string
     */
    public const NAME_BTN = 'Bhutanese ngultrum';

    /**
     * The number of digits after the decimal separator for BTN
     *
     * @var int
     */
    public const DIGITS_BTN = 2;

    /**
     * Short name for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BTN = 'ngultrum';

    /**
     * Short name of minor unit for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BTN = 'chhertum';

    /**
     * Symbol for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BTN = 'Nu.';

    /**
     * Symbol of minor unit for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BTN = 'Ch.';

    /**
     * Symbol of minor unit for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BTN = 1 / 100;

    /**
     * ISO-4217 Code for the Botswana pula
     *
     * Countries:
     * - Botswana
     *
     * @var string
     */
    public const ALPHA_3_CODE_BWP = 'BWP';

    /**
     * ISO-4271 Number for the Botswana pula
     *
     * @var int
     */
    public const NUMERIC_CODE_BWP = 072;

    /**
     * ISO-4271 name for currency BWP
     *
     * @var string
     */
    public const NAME_BWP = 'Botswana pula';

    /**
     * The number of digits after the decimal separator for BWP
     *
     * @var int
     */
    public const DIGITS_BWP = 2;

    /**
     * Short name for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BWP = 'pula';

    /**
     * Short name of minor unit for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BWP = 'thebe';

    /**
     * Symbol for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BWP = 'P';

    /**
     * Symbol of minor unit for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BWP = '';

    /**
     * Symbol of minor unit for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BWP = 1 / 100;

    /**
     * ISO-4217 Code for the Belarusian ruble
     *
     * Countries:
     * - Belarus
     *
     * @var string
     */
    public const ALPHA_3_CODE_BYN = 'BYN';

    /**
     * ISO-4271 Number for the Belarusian ruble
     *
     * @var int
     */
    public const NUMERIC_CODE_BYN = 933;

    /**
     * ISO-4271 name for currency BYN
     *
     * @var string
     */
    public const NAME_BYN = 'Belarusian ruble';

    /**
     * The number of digits after the decimal separator for BYN
     *
     * @var int
     */
    public const DIGITS_BYN = 2;

    /**
     * Short name for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BYN = 'ruble';

    /**
     * Short name of minor unit for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BYN = 'kapiejka';

    /**
     * Symbol for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BYN = 'Br';

    /**
     * Symbol of minor unit for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BYN = '';

    /**
     * Symbol of minor unit for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BYN = 1 / 100;

    /**
     * ISO-4217 Code for the Belize dollar
     *
     * Countries:
     * - Belize
     *
     * @var string
     */
    public const ALPHA_3_CODE_BZD = 'BZD';

    /**
     * ISO-4271 Number for the Belize dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_BZD = 84;

    /**
     * ISO-4271 name for currency BZD
     *
     * @var string
     */
    public const NAME_BZD = 'Belize dollar';

    /**
     * The number of digits after the decimal separator for BZD
     *
     * @var int
     */
    public const DIGITS_BZD = 2;

    /**
     * Short name for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_BZD = 'Belize dollar';

    /**
     * Short name of minor unit for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_BZD = 'cent';

    /**
     * Symbol for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BZD = '$';

    /**
     * Symbol of minor unit for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BZD = '';

    /**
     * Symbol of minor unit for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BZD = 1 / 100;

    /**
     * ISO-4217 Code for the Canadian dollar
     *
     * Countries:
     * - Canada
     *
     * @var string
     */
    public const ALPHA_3_CODE_CAD = 'CAD';

    /**
     * ISO-4271 Number for the Canadian dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_CAD = 124;

    /**
     * ISO-4271 name for currency CAD
     *
     * @var string
     */
    public const NAME_CAD = 'Canadian dollar';

    /**
     * The number of digits after the decimal separator for CAD
     *
     * @var int
     */
    public const DIGITS_CAD = 2;

    /**
     * Short name for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CAD = 'Canadian dollar';

    /**
     * Short name of minor unit for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CAD = 'Cent';

    /**
     * Symbol for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CAD = '$';

    /**
     * Symbol of minor unit for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CAD = '¢';

    /**
     * Symbol of minor unit for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CAD = 1 / 100;

    /**
     * ISO-4217 Code for the Congolese franc
     *
     * Countries:
     * - Democratic Republic of the Congo
     *
     * @var string
     */
    public const ALPHA_3_CODE_CDF = 'CDF';

    /**
     * ISO-4271 Number for the Congolese franc
     *
     * @var int
     */
    public const NUMERIC_CODE_CDF = 976;

    /**
     * ISO-4271 name for currency CDF
     *
     * @var string
     */
    public const NAME_CDF = 'Congolese franc';

    /**
     * The number of digits after the decimal separator for CDF
     *
     * @var int
     */
    public const DIGITS_CDF = 2;

    /**
     * Short name for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CDF = 'Congolese franc';

    /**
     * Short name of minor unit for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CDF = 'centime';

    /**
     * Symbol for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CDF = 'FC';

    /**
     * Symbol of minor unit for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CDF = '';

    /**
     * Symbol of minor unit for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CDF = 1 / 100;

    /**
     * ISO-4217 Code for the Swiss franc
     *
     * Countries:
     * - Switzerland
     * - Liechtenstein (LI)
     *
     * @var string
     */
    public const ALPHA_3_CODE_CHF = 'CHF';

    /**
     * ISO-4271 Number for the Swiss franc
     *
     * @var int
     */
    public const NUMERIC_CODE_CHF = 756;

    /**
     * ISO-4271 name for currency CHF
     *
     * @var string
     */
    public const NAME_CHF = 'Swiss franc';

    /**
     * The number of digits after the decimal separator for CHF
     *
     * @var int
     */
    public const DIGITS_CHF = 2;

    /**
     * Short name for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CHF = 'Franken';

    /**
     * Short name of minor unit for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CHF = 'Rappen';

    /**
     * Symbol for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CHF = 'Fr.';

    /**
     * Symbol of minor unit for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CHF = 'Rp.';

    /**
     * Symbol of minor unit for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CHF = 1 / 100;

    /**
     * ISO-4217 Code for the Chilean peso
     *
     * Countries:
     * - Chile
     *
     * @var string
     */
    public const ALPHA_3_CODE_CLP = 'CLP';

    /**
     * ISO-4271 Number for the Chilean peso
     *
     * @var int
     */
    public const NUMERIC_CODE_CLP = 152;

    /**
     * ISO-4271 name for currency CLP
     *
     * @var string
     */
    public const NAME_CLP = 'Chilean peso';

    /**
     * The number of digits after the decimal separator for CLP
     *
     * @var int
     */
    public const DIGITS_CLP = 0;

    /**
     * Short name for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CLP = 'peso';

    /**
     * Short name of minor unit for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CLP = 'centavo';

    /**
     * Symbol for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CLP = '$';

    /**
     * Symbol of minor unit for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CLP = '';

    /**
     * Symbol of minor unit for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CLP = 1 / 100;

    /**
     * ISO-4217 Code for the Chinese yuan
     *
     * Countries:
     * - China
     *
     * @var string
     */
    public const ALPHA_3_CODE_CNY = 'CNY';

    /**
     * ISO-4271 Number for the Chinese yuan
     *
     * @var int
     */
    public const NUMERIC_CODE_CNY = 156;

    /**
     * ISO-4271 name for currency CNY
     *
     * @var string
     */
    public const NAME_CNY = 'Chinese yuan';

    /**
     * The number of digits after the decimal separator for CNY
     *
     * @var int
     */
    public const DIGITS_CNY = 2;

    /**
     * Short name for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CNY = 'yuán';

    /**
     * Short name of minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CNY = 'jiǎo';

    /**
     * Short name of sub-minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     *
     * @var string
     */
    public const SUB_MINOR_UNIT_NAME_CNY = 'fēn';

    /**
     * Symbol for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CNY = '元';

    /**
     * Symbol of minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CNY = '角';

    /**
     * Symbol of sub-minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     *
     * @var string
     */
    public const SUB_MINOR_UNIT_SYMBOL_CNY = '分';

    /**
     * Symbol of minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CNY = 1 / 10;

    /**
     * Symbol of sub-minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     *
     * @var float
     */
    public const SUB_MINOR_UNIT_RATIO_CNY = 1 / 100;

    /**
     * ISO-4217 Code for the Colombian peso
     *
     * Countries:
     * - Colombia
     *
     * @var string
     */
    public const ALPHA_3_CODE_COP = 'COP';

    /**
     * ISO-4271 Number for the Colombian peso
     *
     * @var int
     */
    public const NUMERIC_CODE_COP = 170;

    /**
     * ISO-4271 name for currency COP
     *
     * @var string
     */
    public const NAME_COP = 'Colombian peso';

    /**
     * The number of digits after the decimal separator for COP
     *
     * @var int
     */
    public const DIGITS_COP = 2;

    /**
     * Short name for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_COP = 'peso';

    /**
     * Short name of minor unit for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_COP = 'centavo';

    /**
     * Symbol for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_COP = '$';

    /**
     * Symbol of minor unit for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_COP = '';

    /**
     * Symbol of minor unit for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_COP = 1 / 100;

    /**
     * ISO-4217 Code for the Costa Rican colon
     *
     * Countries:
     * - Costa Rica
     *
     * @var string
     */
    public const ALPHA_3_CODE_CRC = 'CRC';

    /**
     * ISO-4271 Number for the Costa Rican colon
     *
     * @var int
     */
    public const NUMERIC_CODE_CRC = 188;

    /**
     * ISO-4271 name for currency CRC
     *
     * @var string
     */
    public const NAME_CRC = 'Costa Rican colon';

    /**
     * The number of digits after the decimal separator for CRC
     *
     * @var int
     */
    public const DIGITS_CRC = 2;

    /**
     * Short name for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CRC = 'colón';

    /**
     * Short name of minor unit for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CRC = 'céntimo'; // NOSONAR - php:S1192

    /**
     * Symbol for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CRC = '₡';

    /**
     * Symbol of minor unit for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CRC = '';

    /**
     * Symbol of minor unit for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CRC = 1 / 100;

    /**
     * ISO-4217 Code for the Cuban convertible peso
     *
     * Countries:
     * - Cuba
     *
     * @var string
     */
    public const ALPHA_3_CODE_CUC = 'CUC';

    /**
     * ISO-4271 Number for the Cuban convertible peso
     *
     * @var int
     */
    public const NUMERIC_CODE_CUC = 931;

    /**
     * ISO-4271 name for currency CUC
     *
     * @var string
     */
    public const NAME_CUC = 'Cuban convertible peso';

    /**
     * The number of digits after the decimal separator for CUC
     *
     * @var int
     */
    public const DIGITS_CUC = 2;

    /**
     * Short name for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CUC = 'convertible peso';

    /**
     * Short name of minor unit for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CUC = 'centavo convertible';

    /**
     * Symbol for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CUC = '$';

    /**
     * Symbol of minor unit for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CUC = '¢';

    /**
     * Symbol of minor unit for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CUC = 1 / 100;

    /**
     * ISO-4217 Code for the Cuban peso
     *
     * Countries:
     * - Cuba
     *
     * @var string
     */
    public const ALPHA_3_CODE_CUP = 'CUP';

    /**
     * ISO-4271 Number for the Cuban peso
     *
     * @var int
     */
    public const NUMERIC_CODE_CUP = 192;

    /**
     * ISO-4271 name for currency CUP
     *
     * @var string
     */
    public const NAME_CUP = 'Cuban peso';

    /**
     * The number of digits after the decimal separator for CUP
     *
     * @var int
     */
    public const DIGITS_CUP = 2;

    /**
     * Short name for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CUP = 'Cuban Peso';

    /**
     * Short name of minor unit for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CUP = 'centavo';

    /**
     * Symbol for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CUP = '₱';

    /**
     * Symbol of minor unit for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CUP = '¢';

    /**
     * Symbol of minor unit for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CUP = 1 / 100;

    /**
     * ISO-4217 Code for the Cape Verdean escudo
     *
     * Countries:
     * - Cabo Verde
     *
     * @var string
     */
    public const ALPHA_3_CODE_CVE = 'CVE';

    /**
     * ISO-4271 Number for the Cape Verdean escudo
     *
     * @var int
     */
    public const NUMERIC_CODE_CVE = 132;

    /**
     * ISO-4271 name for currency CVE
     *
     * @var string
     */
    public const NAME_CVE = 'Cape Verdean escudo';

    /**
     * The number of digits after the decimal separator for CVE
     *
     * @var int
     */
    public const DIGITS_CVE = 2;

    /**
     * Short name for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CVE = 'escudo';

    /**
     * Short name of minor unit for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CVE = 'centavo';

    /**
     * Symbol for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CVE = '$';

    /**
     * Symbol of minor unit for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CVE = '';

    /**
     * Symbol of minor unit for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CVE = 1 / 100;

    /**
     * ISO-4217 Code for the Czech koruna
     *
     * Countries:
     * - Czechia
     *
     * @var string
     */
    public const ALPHA_3_CODE_CZK = 'CZK';

    /**
     * ISO-4271 Number for the Czech koruna
     *
     * @var int
     */
    public const NUMERIC_CODE_CZK = 203;

    /**
     * ISO-4271 name for currency CZK
     *
     * @var string
     */
    public const NAME_CZK = 'Czech koruna';

    /**
     * The number of digits after the decimal separator for CZK
     *
     * @var int
     */
    public const DIGITS_CZK = 2;

    /**
     * Short name for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_CZK = 'koruna';

    /**
     * Short name of minor unit for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_CZK = 'haléř';

    /**
     * Symbol for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CZK = 'Kč';

    /**
     * Symbol of minor unit for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CZK = 'h';

    /**
     * Symbol of minor unit for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CZK = 1 / 100;

    /**
     * ISO-4217 Code for the Djiboutian franc
     *
     * Countries:
     * - Djibouti
     *
     * @var string
     */
    public const ALPHA_3_CODE_DJF = 'DJF';

    /**
     * ISO-4271 Number for the Djiboutian franc
     *
     * @var int
     */
    public const NUMERIC_CODE_DJF = 262;

    /**
     * ISO-4271 name for currency DJF
     *
     * @var string
     */
    public const NAME_DJF = 'Djiboutian franc';

    /**
     * The number of digits after the decimal separator for DJF
     *
     * @var int
     */
    public const DIGITS_DJF = 0;

    /**
     * Short name for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_DJF = 'Djiboutian franc';

    /**
     * Short name of minor unit for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_DJF = 'centime';

    /**
     * Symbol for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_DJF = 'Fdj';

    /**
     * Symbol of minor unit for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_DJF = '';

    /**
     * Symbol of minor unit for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_DJF = 1 / 100;

    /**
     * ISO-4217 Code for the Danish krone
     *
     * Countries:
     * - Denmark
     * - Faroe Islands (FO)
     * - Greenland (GL)
     *
     * @var string
     */
    public const ALPHA_3_CODE_DKK = 'DKK';

    /**
     * ISO-4271 Number for the Danish krone
     *
     * @var int
     */
    public const NUMERIC_CODE_DKK = 208;

    /**
     * ISO-4271 name for currency DKK
     *
     * @var string
     */
    public const NAME_DKK = 'Danish krone';

    /**
     * The number of digits after the decimal separator for DKK
     *
     * @var int
     */
    public const DIGITS_DKK = 2;

    /**
     * Short name for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_DKK = 'krone';

    /**
     * Short name of minor unit for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_DKK = 'øre';

    /**
     * Symbol for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_DKK = 'kr.';

    /**
     * Symbol of minor unit for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_DKK = '';

    /**
     * Symbol of minor unit for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_DKK = 1 / 100;

    /**
     * ISO-4217 Code for the Dominican peso
     *
     * Countries:
     * - Dominican Republic
     *
     * @var string
     */
    public const ALPHA_3_CODE_DOP = 'DOP';

    /**
     * ISO-4271 Number for the Dominican peso
     *
     * @var int
     */
    public const NUMERIC_CODE_DOP = 214;

    /**
     * ISO-4271 name for currency DOP
     *
     * @var string
     */
    public const NAME_DOP = 'Dominican peso';

    /**
     * The number of digits after the decimal separator for DOP
     *
     * @var int
     */
    public const DIGITS_DOP = 2;

    /**
     * Short name for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_DOP = 'Peso dominicano';

    /**
     * Short name of minor unit for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_DOP = 'centavo';

    /**
     * Symbol for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_DOP = '$';

    /**
     * Symbol of minor unit for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_DOP = '';

    /**
     * Symbol of minor unit for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_DOP = 1 / 100;

    /**
     * ISO-4217 Code for the Algerian dinar
     *
     * Countries:
     * - Algeria
     *
     * @var string
     */
    public const ALPHA_3_CODE_DZD = 'DZD';

    /**
     * ISO-4271 Number for the Algerian dinar
     *
     * @var int
     */
    public const NUMERIC_CODE_DZD = 012;

    /**
     * ISO-4271 name for currency DZD
     *
     * @var string
     */
    public const NAME_DZD = 'Algerian dinar';

    /**
     * The number of digits after the decimal separator for DZD
     *
     * @var int
     */
    public const DIGITS_DZD = 2;

    /**
     * Short name for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_DZD = 'dinar';

    /**
     * Short name of minor unit for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_DZD = 'centime';

    /**
     * Symbol for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_DZD = 'دج';

    /**
     * Symbol of minor unit for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_DZD = '';

    /**
     * Symbol of minor unit for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_DZD = 1 / 100;

    /**
     * ISO-4217 Code for the Egyptian pound
     *
     * Countries:
     * - Egypt
     *
     * @var string
     */
    public const ALPHA_3_CODE_EGP = 'EGP';

    /**
     * ISO-4271 Number for the Egyptian pound
     *
     * @var int
     */
    public const NUMERIC_CODE_EGP = 818;

    /**
     * ISO-4271 name for currency EGP
     *
     * @var string
     */
    public const NAME_EGP = 'Egyptian pound';

    /**
     * The number of digits after the decimal separator for EGP
     *
     * @var int
     */
    public const DIGITS_EGP = 2;

    /**
     * Short name for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_EGP = 'Pound';

    /**
     * Short name of minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_EGP = 'Piastre';

    /**
     * Short name of sub-minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     *
     * @var string
     */
    public const SUB_MINOR_UNIT_NAME_EGP = 'Millieme';

    /**
     * Symbol for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_EGP = '£';

    /**
     * Symbol of minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_EGP = 'pt.';

    /**
     * Symbol of sub-minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     *
     * @var string
     */
    public const SUB_MINOR_UNIT_SYMBOL_EGP = '';

    /**
     * Symbol of minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_EGP = 1 / 100;

    /**
     * Symbol of sub-minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     *
     * @var float
     */
    public const SUB_MINOR_UNIT_RATIO_EGP = 1 / 1000;

    /**
     * ISO-4217 Code for the Eritrean nakfa
     *
     * Countries:
     * - Eritrea
     *
     * @var string
     */
    public const ALPHA_3_CODE_ERN = 'ERN';

    /**
     * ISO-4271 Number for the Eritrean nakfa
     *
     * @var int
     */
    public const NUMERIC_CODE_ERN = 232;

    /**
     * ISO-4271 name for currency ERN
     *
     * @var string
     */
    public const NAME_ERN = 'Eritrean nakfa';

    /**
     * The number of digits after the decimal separator for ERN
     *
     * @var int
     */
    public const DIGITS_ERN = 2;

    /**
     * Short name for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ERN = 'nakfa';

    /**
     * Short name of minor unit for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ERN = 'cent';

    /**
     * Symbol for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ERN = 'Nkf';

    /**
     * Symbol of minor unit for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ERN = '';

    /**
     * Symbol of minor unit for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ERN = 1 / 100;

    /**
     * ISO-4217 Code for the Ethiopian birr
     *
     * Countries:
     * - Ethiopia
     *
     * @var string
     */
    public const ALPHA_3_CODE_ETB = 'ETB';

    /**
     * ISO-4271 Number for the Ethiopian birr
     *
     * @var int
     */
    public const NUMERIC_CODE_ETB = 230;

    /**
     * ISO-4271 name for currency ETB
     *
     * @var string
     */
    public const NAME_ETB = 'Ethiopian birr';

    /**
     * The number of digits after the decimal separator for ETB
     *
     * @var int
     */
    public const DIGITS_ETB = 2;

    /**
     * Short name for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ETB = 'birr';

    /**
     * Short name of minor unit for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ETB = 'santim';

    /**
     * Symbol for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ETB = 'Br';

    /**
     * Symbol of minor unit for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ETB = '';

    /**
     * Symbol of minor unit for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ETB = 1 / 100;

    /**
     * ISO-4217 Code for the Euro
     *
     * Countries:
     * - Åland Islands (AX)
     * - European Union (EU)
     * - Andorra (AD)
     * - Austria (AT)
     * - Belgium (BE)
     * - Cyprus (CY)
     * - Estonia (EE)
     * - Finland (FI)
     * - France (FR)
     * - French Southern and Antarctic Lands (TF)
     * - Germany (DE)
     * - Greece (GR)
     * - Guadeloupe (GP)
     * - Ireland (IE)
     * - Italy (IT)
     * - Latvia (LV)
     * - Lithuania (LT)
     * - Luxembourg (LU)
     * - Malta (MT)
     * - French Guiana (GF)
     * - Martinique (MQ)
     * - Mayotte (YT)
     * - Monaco (MC)
     * - Montenegro (ME)
     * - Netherlands (NL)
     * - Portugal (PT)
     * - Réunion (RE)
     * - Saint Barthélemy (BL)
     * - Saint Martin (MF)
     * - Saint Pierre and Miquelon (PM)
     * - San Marino (SM)
     * - Slovakia (SK)
     * - Slovenia (SI)
     * - Spain (ES)
     * - Vatican City (VA)
     *
     * @var string
     */
    public const ALPHA_3_CODE_EUR = 'EUR';

    /**
     * ISO-4271 Number for the Euro
     *
     * @var int
     */
    public const NUMERIC_CODE_EUR = 978;

    /**
     * ISO-4271 name for currency EUR
     *
     * @var string
     */
    public const NAME_EUR = 'Euro';

    /**
     * The number of digits after the decimal separator for EUR
     *
     * @var int
     */
    public const DIGITS_EUR = 2;

    /**
     * Short name for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_EUR = 'Euro';

    /**
     * Short name of minor unit for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_EUR = 'cent';

    /**
     * Symbol for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_EUR = '€';

    /**
     * Symbol of minor unit for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_EUR = 'c';

    /**
     * Symbol of minor unit for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_EUR = 1 / 100;

    /**
     * ISO-4217 Code for the Fiji dollar
     *
     * Countries:
     * - Fiji
     *
     * @var string
     */
    public const ALPHA_3_CODE_FJD = 'FJD';

    /**
     * ISO-4271 Number for the Fiji dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_FJD = 242;

    /**
     * ISO-4271 name for currency FJD
     *
     * @var string
     */
    public const NAME_FJD = 'Fiji dollar';

    /**
     * The number of digits after the decimal separator for FJD
     *
     * @var int
     */
    public const DIGITS_FJD = 2;

    /**
     * Short name for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_FJD = 'Fijian dollar';

    /**
     * Short name of minor unit for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_FJD = 'cent';

    /**
     * Symbol for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_FJD = 'FJ$';

    /**
     * Symbol of minor unit for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_FJD = 'c';

    /**
     * Symbol of minor unit for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_FJD = 1 / 100;

    /**
     * ISO-4217 Code for the Falkland Islands pound
     *
     * Countries:
     * - Falkland Islands (pegged to GBP 1:1)
     *
     * @var string
     */
    public const ALPHA_3_CODE_FKP = 'FKP';

    /**
     * ISO-4271 Number for the Falkland Islands pound
     *
     * @var int
     */
    public const NUMERIC_CODE_FKP = 238;

    /**
     * ISO-4271 name for currency FKP
     *
     * @var string
     */
    public const NAME_FKP = 'Falkland Islands pound';

    /**
     * The number of digits after the decimal separator for FKP
     *
     * @var int
     */
    public const DIGITS_FKP = 2;

    /**
     * Short name for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_FKP = 'Pound';

    /**
     * Short name of minor unit for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_FKP = 'penny';

    /**
     * Symbol for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_FKP = '£';

    /**
     * Symbol of minor unit for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_FKP = 'p';

    /**
     * Symbol of minor unit for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_FKP = 1 / 100;

    /**
     * ISO-4217 Code for the Pound sterling
     *
     * Countries:
     * - United Kingdom
     * - Isle of Man (IM, see Manx pound)
     * - Jersey (JE, see Jersey pound)
     * - Guernsey (GG, see Guernsey pound)
     * - Tristan da Cunha (SH-TA)
     *
     * @var string
     */
    public const ALPHA_3_CODE_GBP = 'GBP';

    /**
     * ISO-4271 Number for the Pound sterling
     *
     * @var int
     */
    public const NUMERIC_CODE_GBP = 826;

    /**
     * ISO-4271 name for currency GBP
     *
     * @var string
     */
    public const NAME_GBP = 'Pound sterling';

    /**
     * The number of digits after the decimal separator for GBP
     *
     * @var int
     */
    public const DIGITS_GBP = 2;

    /**
     * Short name for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_GBP = 'Pound';

    /**
     * Short name of minor unit for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_GBP = 'Penny';

    /**
     * Symbol for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GBP = '£';

    /**
     * Symbol of minor unit for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GBP = 'p';

    /**
     * Symbol of minor unit for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GBP = 1 / 100;

    /**
     * ISO-4217 Code for the Georgian lari
     *
     * Countries:
     * - Georgia
     *
     * @var string
     */
    public const ALPHA_3_CODE_GEL = 'GEL';

    /**
     * ISO-4271 Number for the Georgian lari
     *
     * @var int
     */
    public const NUMERIC_CODE_GEL = 981;

    /**
     * ISO-4271 name for currency GEL
     *
     * @var string
     */
    public const NAME_GEL = 'Georgian lari';

    /**
     * The number of digits after the decimal separator for GEL
     *
     * @var int
     */
    public const DIGITS_GEL = 2;

    /**
     * Short name for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_GEL = 'Lari';

    /**
     * Short name of minor unit for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_GEL = 'Tetri';

    /**
     * Symbol for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GEL = '₾';

    /**
     * Symbol of minor unit for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GEL = '';

    /**
     * Symbol of minor unit for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GEL = 1 / 100;

    /**
     * ISO-4217 Code for the Ghanaian cedi
     *
     * Countries:
     * - Ghana
     *
     * @var string
     */
    public const ALPHA_3_CODE_GHS = 'GHS';

    /**
     * ISO-4271 Number for the Ghanaian cedi
     *
     * @var int
     */
    public const NUMERIC_CODE_GHS = 936;

    /**
     * ISO-4271 name for currency GHS
     *
     * @var string
     */
    public const NAME_GHS = 'Ghanaian cedi';

    /**
     * The number of digits after the decimal separator for GHS
     *
     * @var int
     */
    public const DIGITS_GHS = 2;

    /**
     * Short name for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_GHS = 'Cedi';

    /**
     * Short name of minor unit for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_GHS = 'pesewa';

    /**
     * Symbol for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GHS = 'GH₵';

    /**
     * Symbol of minor unit for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GHS = 'Gp';

    /**
     * Symbol of minor unit for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GHS = 1 / 100;

    /**
     * ISO-4217 Code for the Gibraltar pound
     *
     * Countries:
     * - Gibraltar (pegged to GBP 1:1)
     *
     * @var string
     */
    public const ALPHA_3_CODE_GIP = 'GIP';

    /**
     * ISO-4271 Number for the Gibraltar pound
     *
     * @var int
     */
    public const NUMERIC_CODE_GIP = 292;

    /**
     * ISO-4271 name for currency GIP
     *
     * @var string
     */
    public const NAME_GIP = 'Gibraltar pound';

    /**
     * The number of digits after the decimal separator for GIP
     *
     * @var int
     */
    public const DIGITS_GIP = 2;

    /**
     * Short name for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_GIP = 'Pound';

    /**
     * Short name of minor unit for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_GIP = 'Penny';

    /**
     * Symbol for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GIP = '£';

    /**
     * Symbol of minor unit for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GIP = 'p';

    /**
     * Symbol of minor unit for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GIP = 1 / 100;

    /**
     * ISO-4217 Code for the Gambian dalasi
     *
     * Countries:
     * - Gambia
     *
     * @var string
     */
    public const ALPHA_3_CODE_GMD = 'GMD';

    /**
     * ISO-4271 Number for the Gambian dalasi
     *
     * @var int
     */
    public const NUMERIC_CODE_GMD = 270;

    /**
     * ISO-4271 name for currency GMD
     *
     * @var string
     */
    public const NAME_GMD = 'Gambian dalasi';

    /**
     * The number of digits after the decimal separator for GMD
     *
     * @var int
     */
    public const DIGITS_GMD = 2;

    /**
     * Short name for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_GMD = 'Dalasi';

    /**
     * Short name of minor unit for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_GMD = 'butut';

    /**
     * Symbol for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GMD = 'D';

    /**
     * Symbol of minor unit for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GMD = '';

    /**
     * Symbol of minor unit for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GMD = 1 / 100;

    /**
     * ISO-4217 Code for the Guinean franc
     *
     * Countries:
     * - Guinea
     *
     * @var string
     */
    public const ALPHA_3_CODE_GNF = 'GNF';

    /**
     * ISO-4271 Number for the Guinean franc
     *
     * @var int
     */
    public const NUMERIC_CODE_GNF = 324;

    /**
     * ISO-4271 name for currency GNF
     *
     * @var string
     */
    public const NAME_GNF = 'Guinean franc';

    /**
     * The number of digits after the decimal separator for GNF
     *
     * @var int
     */
    public const DIGITS_GNF = 0;

    /**
     * Short name for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_GNF = 'Franc';

    /**
     * Short name of minor unit for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_GNF = 'centime';

    /**
     * Symbol for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GNF = 'FG';

    /**
     * Symbol of minor unit for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GNF = '';

    /**
     * Symbol of minor unit for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GNF = 1 / 100;

    /**
     * ISO-4217 Code for the Guatemalan quetzal
     *
     * Countries:
     * - Guatemala
     *
     * @var string
     */
    public const ALPHA_3_CODE_GTQ = 'GTQ';

    /**
     * ISO-4271 Number for the Guatemalan quetzal
     *
     * @var int
     */
    public const NUMERIC_CODE_GTQ = 320;

    /**
     * ISO-4271 name for currency GTQ
     *
     * @var string
     */
    public const NAME_GTQ = 'Guatemalan quetzal';

    /**
     * The number of digits after the decimal separator for GTQ
     *
     * @var int
     */
    public const DIGITS_GTQ = 2;

    /**
     * Short name for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_GTQ = 'Quetzal';

    /**
     * Short name of minor unit for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_GTQ = 'centavo';

    /**
     * Symbol for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GTQ = 'Q';

    /**
     * Symbol of minor unit for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GTQ = '';

    /**
     * Symbol of minor unit for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GTQ = 1 / 100;

    /**
     * ISO-4217 Code for the Guyanese dollar
     *
     * Countries:
     * - Guyana
     *
     * @var string
     */
    public const ALPHA_3_CODE_GYD = 'GYD';

    /**
     * ISO-4271 Number for the Guyanese dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_GYD = 328;

    /**
     * ISO-4271 name for currency GYD
     *
     * @var string
     */
    public const NAME_GYD = 'Guyanese dollar';

    /**
     * The number of digits after the decimal separator for GYD
     *
     * @var int
     */
    public const DIGITS_GYD = 2;

    /**
     * Short name for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_GYD = 'Dollar';

    /**
     * Short name of minor unit for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_GYD = 'cent';

    /**
     * Symbol for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GYD = '$';

    /**
     * Symbol of minor unit for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GYD = '';

    /**
     * Symbol of minor unit for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GYD = 1 / 100;

    /**
     * ISO-4217 Code for the Hong Kong dollar
     *
     * Countries:
     * - Hong Kong
     *
     * @var string
     */
    public const ALPHA_3_CODE_HKD = 'HKD';

    /**
     * ISO-4271 Number for the Hong Kong dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_HKD = 344;

    /**
     * ISO-4271 name for currency HKD
     *
     * @var string
     */
    public const NAME_HKD = 'Hong Kong dollar';

    /**
     * The number of digits after the decimal separator for HKD
     *
     * @var int
     */
    public const DIGITS_HKD = 2;

    /**
     * Short name for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_HKD = 'Dollar';

    /**
     * Short name of minor unit for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_HKD = 'sīn';

    /**
     * Symbol for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HKD = '$';

    /**
     * Symbol of minor unit for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HKD = '¢';

    /**
     * Symbol of minor unit for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HKD = 1 / 100;

    /**
     * ISO-4217 Code for the Honduran lempira
     *
     * Countries:
     * - Honduras
     *
     * @var string
     */
    public const ALPHA_3_CODE_HNL = 'HNL';

    /**
     * ISO-4271 Number for the Honduran lempira
     *
     * @var int
     */
    public const NUMERIC_CODE_HNL = 340;

    /**
     * ISO-4271 name for currency HNL
     *
     * @var string
     */
    public const NAME_HNL = 'Honduran lempira';

    /**
     * The number of digits after the decimal separator for HNL
     *
     * @var int
     */
    public const DIGITS_HNL = 2;

    /**
     * Short name for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_HNL = 'Lempira';

    /**
     * Short name of minor unit for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_HNL = 'centavo';

    /**
     * Symbol for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HNL = 'L';

    /**
     * Symbol of minor unit for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HNL = '';

    /**
     * Symbol of minor unit for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HNL = 1 / 100;

    /**
     * ISO-4217 Code for the Croatian kuna
     *
     * Countries:
     * - Croatia
     *
     * @var string
     */
    public const ALPHA_3_CODE_HRK = 'HRK';

    /**
     * ISO-4271 Number for the Croatian kuna
     *
     * @var int
     */
    public const NUMERIC_CODE_HRK = 191;

    /**
     * ISO-4271 name for currency HRK
     *
     * @var string
     */
    public const NAME_HRK = 'Croatian kuna';

    /**
     * The number of digits after the decimal separator for HRK
     *
     * @var int
     */
    public const DIGITS_HRK = 2;

    /**
     * Short name for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_HRK = 'Kuna';

    /**
     * Short name of minor unit for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_HRK = 'lipa';

    /**
     * Symbol for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HRK = 'kn';

    /**
     * Symbol of minor unit for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HRK = 'lp';

    /**
     * Symbol of minor unit for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HRK = 1 / 100;

    /**
     * ISO-4217 Code for the Haitian gourde
     *
     * Countries:
     * - Haiti
     *
     * @var string
     */
    public const ALPHA_3_CODE_HTG = 'HTG';

    /**
     * ISO-4271 Number for the Haitian gourde
     *
     * @var int
     */
    public const NUMERIC_CODE_HTG = 332;

    /**
     * ISO-4271 name for currency HTG
     *
     * @var string
     */
    public const NAME_HTG = 'Haitian gourde';

    /**
     * The number of digits after the decimal separator for HTG
     *
     * @var int
     */
    public const DIGITS_HTG = 2;

    /**
     * Short name for currency HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_HTG = 'Gourde';

    /**
     * Short name of minor unit for currency HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_HTG = 'santim';

    /**
     * Symbol for currency HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HTG = 'G';

    /**
     * Symbol of minor unit for currency HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HTG = '¢';

    /**
     * Symbol of minor unit for currency HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HTG = 1 / 100;

    /**
     * ISO-4217 Code for the Hungarian forint
     *
     * Countries:
     * - Hungary
     *
     * @var string
     */
    public const ALPHA_3_CODE_HUF = 'HUF';

    /**
     * ISO-4271 Number for the Hungarian forint
     *
     * @var int
     */
    public const NUMERIC_CODE_HUF = 348;

    /**
     * ISO-4271 name for currency HUF
     *
     * @var string
     */
    public const NAME_HUF = 'Hungarian forint';

    /**
     * The number of digits after the decimal separator for HUF
     *
     * @var int
     */
    public const DIGITS_HUF = 2;

    /**
     * Short name for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_HUF = 'Forint';

    /**
     * Short name of minor unit for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_HUF = 'fillér';

    /**
     * Symbol for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HUF = 'Ft';

    /**
     * Symbol of minor unit for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HUF = '';

    /**
     * Symbol of minor unit for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HUF = 1 / 100;

    /**
     * ISO-4217 Code for the Indonesian rupiah
     *
     * Countries:
     * - Indonesia
     *
     * @var string
     */
    public const ALPHA_3_CODE_IDR = 'IDR';

    /**
     * ISO-4271 Number for the Indonesian rupiah
     *
     * @var int
     */
    public const NUMERIC_CODE_IDR = 360;

    /**
     * ISO-4271 name for currency IDR
     *
     * @var string
     */
    public const NAME_IDR = 'Indonesian rupiah';

    /**
     * The number of digits after the decimal separator for IDR
     *
     * @var int
     */
    public const DIGITS_IDR = 2;

    /**
     * Short name for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_IDR = 'Rupiah';

    /**
     * Short name of minor unit for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_IDR = 'sen';

    /**
     * Symbol for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_IDR = 'Rp';

    /**
     * Symbol of minor unit for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_IDR = '';

    /**
     * Symbol of minor unit for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_IDR = 1 / 100;

    /**
     * ISO-4217 Code for the Israeli new shekel
     *
     * Countries:
     * - Israel
     *
     * @var string
     */
    public const ALPHA_3_CODE_ILS = 'ILS';

    /**
     * ISO-4271 Number for the Israeli new shekel
     *
     * @var int
     */
    public const NUMERIC_CODE_ILS = 376;

    /**
     * ISO-4271 name for currency ILS
     *
     * @var string
     */
    public const NAME_ILS = 'Israeli new shekel';

    /**
     * The number of digits after the decimal separator for ILS
     *
     * @var int
     */
    public const DIGITS_ILS = 2;

    /**
     * Short name for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ILS = 'Israeli shekel';

    /**
     * Short name of minor unit for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ILS = 'agora';

    /**
     * Symbol for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ILS = '₪';

    /**
     * Symbol of minor unit for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ILS = '';

    /**
     * Symbol of minor unit for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ILS = 1 / 100;

    /**
     * ISO-4217 Code for the Indian rupee
     *
     * Countries:
     * - India
     * - Bhutan
     *
     * @var string
     */
    public const ALPHA_3_CODE_INR = 'INR';

    /**
     * ISO-4271 Number for the Indian rupee
     *
     * @var int
     */
    public const NUMERIC_CODE_INR = 356;

    /**
     * ISO-4271 name for currency INR
     *
     * @var string
     */
    public const NAME_INR = 'Indian rupee';

    /**
     * The number of digits after the decimal separator for INR
     *
     * @var int
     */
    public const DIGITS_INR = 2;

    /**
     * Short name for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_INR = 'Rupee';

    /**
     * Short name of minor unit for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_INR = 'paisa';

    /**
     * Symbol for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_INR = '₹';

    /**
     * Symbol of minor unit for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_INR = '';

    /**
     * Symbol of minor unit for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_INR = 1 / 100;

    /**
     * ISO-4217 Code for the Iraqi dinar
     *
     * Countries:
     * - Iraq
     *
     * @var string
     */
    public const ALPHA_3_CODE_IQD = 'IQD';

    /**
     * ISO-4271 Number for the Iraqi dinar
     *
     * @var int
     */
    public const NUMERIC_CODE_IQD = 368;

    /**
     * ISO-4271 name for currency IQD
     *
     * @var string
     */
    public const NAME_IQD = 'Iraqi dinar';

    /**
     * The number of digits after the decimal separator for IQD
     *
     * @var int
     */
    public const DIGITS_IQD = 3;

    /**
     * Short name for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_IQD = 'Dinar';

    /**
     * Short name of minor unit for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_IQD = 'fils';

    /**
     * Symbol for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_IQD = 'د.ع';

    /**
     * Symbol of minor unit for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_IQD = '';

    /**
     * Symbol of minor unit for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_IQD = 1 / 1000;

    /**
     * ISO-4217 Code for the Iranian rial
     *
     * Countries:
     * - Iran
     *
     * @var string
     */
    public const ALPHA_3_CODE_IRR = 'IRR';

    /**
     * ISO-4271 Number for the Iranian rial
     *
     * @var int
     */
    public const NUMERIC_CODE_IRR = 364;

    /**
     * ISO-4271 name for currency IRR
     *
     * @var string
     */
    public const NAME_IRR = 'Iranian rial';

    /**
     * The number of digits after the decimal separator for IRR
     *
     * @var int
     */
    public const DIGITS_IRR = 2;

    /**
     * Short name for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_IRR = 'Rial';

    /**
     * Short name of minor unit for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_IRR = '';

    /**
     * Symbol for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_IRR = '﷼';

    /**
     * Symbol of minor unit for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_IRR = '';

    /**
     * Symbol of minor unit for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_IRR = 1.0;

    /**
     * ISO-4217 Code for the Icelandic króna
     *
     * Countries:
     * - Iceland
     *
     * @var string
     */
    public const ALPHA_3_CODE_ISK = 'ISK';

    /**
     * ISO-4271 Number for the Icelandic króna
     *
     * @var int
     */
    public const NUMERIC_CODE_ISK = 352;

    /**
     * ISO-4271 name for currency ISK
     *
     * @var string
     */
    public const NAME_ISK = 'Icelandic króna';

    /**
     * The number of digits after the decimal separator for ISK
     *
     * @var int
     */
    public const DIGITS_ISK = 0;

    /**
     * Short name for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ISK = 'Króna';

    /**
     * Short name of minor unit for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ISK = 'eyrir';

    /**
     * Symbol for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ISK = 'kr';

    /**
     * Symbol of minor unit for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ISK = 'a';

    /**
     * Symbol of minor unit for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ISK = 1 / 100;

    /**
     * ISO-4217 Code for the Jamaican dollar
     *
     * Countries:
     * - Jamaica
     *
     * @var string
     */
    public const ALPHA_3_CODE_JMD = 'JMD';

    /**
     * ISO-4271 Number for the Jamaican dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_JMD = 388;

    /**
     * ISO-4271 name for currency JMD
     *
     * @var string
     */
    public const NAME_JMD = 'Jamaican dollar';

    /**
     * The number of digits after the decimal separator for JMD
     *
     * @var int
     */
    public const DIGITS_JMD = 2;

    /**
     * Short name for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_JMD = 'Dollar';

    /**
     * Short name of minor unit for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_JMD = 'cent';

    /**
     * Symbol for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_JMD = '$';

    /**
     * Symbol of minor unit for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_JMD = '';

    /**
     * Symbol of minor unit for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_JMD = 1 / 100;

    /**
     * ISO-4217 Code for the Jordanian dinar
     *
     * Countries:
     * - Jordan
     *
     * @var string
     */
    public const ALPHA_3_CODE_JOD = 'JOD';

    /**
     * ISO-4271 Number for the Jordanian dinar
     *
     * @var int
     */
    public const NUMERIC_CODE_JOD = 400;

    /**
     * ISO-4271 name for currency JOD
     *
     * @var string
     */
    public const NAME_JOD = 'Jordanian dinar';

    /**
     * The number of digits after the decimal separator for JOD
     *
     * @var int
     */
    public const DIGITS_JOD = 3;

    /**
     * Short name for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_JOD = 'Dinar';

    /**
     * Short name of minor unit for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_JOD = 'fils';

    /**
     * Symbol for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_JOD = 'د.أ';

    /**
     * Symbol of minor unit for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_JOD = '';

    /**
     * Symbol of minor unit for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_JOD = 1 / 1000;

    /**
     * ISO-4217 Code for the Japanese yen
     *
     * Countries:
     * - Japan
     *
     * @var string
     */
    public const ALPHA_3_CODE_JPY = 'JPY';

    /**
     * ISO-4271 Number for the Japanese yen
     *
     * @var int
     */
    public const NUMERIC_CODE_JPY = 392;

    /**
     * ISO-4271 name for currency JPY
     *
     * @var string
     */
    public const NAME_JPY = 'Japanese yen';

    /**
     * The number of digits after the decimal separator for JPY
     *
     * @var int
     */
    public const DIGITS_JPY = 0;

    /**
     * Short name for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_JPY = 'Yen';

    /**
     * Short name of minor unit for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_JPY = '';

    /**
     * Symbol for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_JPY = '¥';

    /**
     * Symbol of minor unit for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_JPY = '';

    /**
     * Symbol of minor unit for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_JPY = 1.0;

    /**
     * ISO-4217 Code for the Kenyan shilling
     *
     * Countries:
     * - Kenya
     *
     * @var string
     */
    public const ALPHA_3_CODE_KES = 'KES';

    /**
     * ISO-4271 Number for the Kenyan shilling
     *
     * @var int
     */
    public const NUMERIC_CODE_KES = 404;

    /**
     * ISO-4271 name for currency KES
     *
     * @var string
     */
    public const NAME_KES = 'Kenyan shilling';

    /**
     * The number of digits after the decimal separator for KES
     *
     * @var int
     */
    public const DIGITS_KES = 2;

    /**
     * Short name for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KES = 'Shilling';

    /**
     * Short name of minor unit for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KES = 'cent';

    /**
     * Symbol for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KES = 'KSh';

    /**
     * Symbol of minor unit for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KES = '';

    /**
     * Symbol of minor unit for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KES = 1 / 100;

    /**
     * ISO-4217 Code for the Kyrgyzstani som
     *
     * Countries:
     * - Kyrgyzstan
     *
     * @var string
     */
    public const ALPHA_3_CODE_KGS = 'KGS';

    /**
     * ISO-4271 Number for the Kyrgyzstani som
     *
     * @var int
     */
    public const NUMERIC_CODE_KGS = 417;

    /**
     * ISO-4271 name for currency KGS
     *
     * @var string
     */
    public const NAME_KGS = 'Kyrgyzstani som';

    /**
     * The number of digits after the decimal separator for KGS
     *
     * @var int
     */
    public const DIGITS_KGS = 2;

    /**
     * Short name for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KGS = 'Som';

    /**
     * Short name of minor unit for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KGS = 'tyiyn';

    /**
     * Symbol for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KGS = '⃀';

    /**
     * Symbol of minor unit for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KGS = '';

    /**
     * Symbol of minor unit for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KGS = 1 / 100;

    /**
     * ISO-4217 Code for the Cambodian riel
     *
     * Countries:
     * - Cambodia
     *
     * @var string
     */
    public const ALPHA_3_CODE_KHR = 'KHR';

    /**
     * ISO-4271 Number for the Cambodian riel
     *
     * @var int
     */
    public const NUMERIC_CODE_KHR = 116;

    /**
     * ISO-4271 name for currency KHR
     *
     * @var string
     */
    public const NAME_KHR = 'Cambodian riel';

    /**
     * The number of digits after the decimal separator for KHR
     *
     * @var int
     */
    public const DIGITS_KHR = 2;

    /**
     * Short name for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KHR = 'Riel';

    /**
     * Short name of minor unit for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KHR = 'sen';

    /**
     * Symbol for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KHR = '៛';

    /**
     * Symbol of minor unit for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KHR = '';

    /**
     * Symbol of minor unit for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KHR = 1 / 100;

    /**
     * ISO-4217 Code for the Comoro franc
     *
     * Countries:
     * - Comoros
     *
     * @var string
     */
    public const ALPHA_3_CODE_KMF = 'KMF';

    /**
     * ISO-4271 Number for the Comoro franc
     *
     * @var int
     */
    public const NUMERIC_CODE_KMF = 174;

    /**
     * ISO-4271 name for currency KMF
     *
     * @var string
     */
    public const NAME_KMF = 'Comoro franc';

    /**
     * The number of digits after the decimal separator for KMF
     *
     * @var int
     */
    public const DIGITS_KMF = 0;

    /**
     * Short name for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KMF = 'Franc';

    /**
     * Short name of minor unit for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KMF = 'centime';

    /**
     * Symbol for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KMF = 'CF';

    /**
     * Symbol of minor unit for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KMF = '';

    /**
     * Symbol of minor unit for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KMF = 1 / 100;

    /**
     * ISO-4217 Code for the North Korean won
     *
     * Countries:
     * - North Korea
     *
     * @var string
     */
    public const ALPHA_3_CODE_KPW = 'KPW';

    /**
     * ISO-4271 Number for the North Korean won
     *
     * @var int
     */
    public const NUMERIC_CODE_KPW = 408;

    /**
     * ISO-4271 name for currency KPW
     *
     * @var string
     */
    public const NAME_KPW = 'North Korean won';

    /**
     * The number of digits after the decimal separator for KPW
     *
     * @var int
     */
    public const DIGITS_KPW = 2;

    /**
     * Short name for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KPW = 'Won';

    /**
     * Short name of minor unit for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KPW = 'chon';

    /**
     * Symbol for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KPW = '₩';

    /**
     * Symbol of minor unit for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KPW = '';

    /**
     * Symbol of minor unit for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KPW = 1 / 100;

    /**
     * ISO-4217 Code for the South Korean won
     *
     * Countries:
     * - South Korea
     *
     * @var string
     */
    public const ALPHA_3_CODE_KRW = 'KRW';

    /**
     * ISO-4271 Number for the South Korean won
     *
     * @var int
     */
    public const NUMERIC_CODE_KRW = 410;

    /**
     * ISO-4271 name for currency KRW
     *
     * @var string
     */
    public const NAME_KRW = 'South Korean won';

    /**
     * The number of digits after the decimal separator for KRW
     *
     * @var int
     */
    public const DIGITS_KRW = 0;

    /**
     * Short name for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KRW = 'Won';

    /**
     * Short name of minor unit for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KRW = 'jeon';

    /**
     * Symbol for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KRW = '₩';

    /**
     * Symbol of minor unit for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KRW = '';

    /**
     * Symbol of minor unit for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KRW = 1 / 100;

    /**
     * ISO-4217 Code for the Kuwaiti dinar
     *
     * Countries:
     * - Kuwait
     *
     * @var string
     */
    public const ALPHA_3_CODE_KWD = 'KWD';

    /**
     * ISO-4271 Number for the Kuwaiti dinar
     *
     * @var int
     */
    public const NUMERIC_CODE_KWD = 414;

    /**
     * ISO-4271 name for currency KWD
     *
     * @var string
     */
    public const NAME_KWD = 'Kuwaiti dinar';

    /**
     * The number of digits after the decimal separator for KWD
     *
     * @var int
     */
    public const DIGITS_KWD = 3;

    /**
     * Short name for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KWD = 'Dinar';

    /**
     * Short name of minor unit for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KWD = 'fils';

    /**
     * Symbol for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KWD = 'د.ك';

    /**
     * Symbol of minor unit for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KWD = '';

    /**
     * Symbol of minor unit for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KWD = 1 / 1000;

    /**
     * ISO-4217 Code for the Cayman Islands dollar
     *
     * Countries:
     * - Cayman Islands
     *
     * @var string
     */
    public const ALPHA_3_CODE_KYD = 'KYD';

    /**
     * ISO-4271 Number for the Cayman Islands dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_KYD = 136;

    /**
     * ISO-4271 name for currency KYD
     *
     * @var string
     */
    public const NAME_KYD = 'Cayman Islands dollar';

    /**
     * The number of digits after the decimal separator for KYD
     *
     * @var int
     */
    public const DIGITS_KYD = 2;

    /**
     * Short name for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KYD = 'Dollar';

    /**
     * Short name of minor unit for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KYD = 'cent';

    /**
     * Symbol for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KYD = '$';

    /**
     * Symbol of minor unit for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KYD = '';

    /**
     * Symbol of minor unit for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KYD = 1 / 100;

    /**
     * ISO-4217 Code for the Kazakhstani tenge
     *
     * Countries:
     * - Kazakhstan
     *
     * @var string
     */
    public const ALPHA_3_CODE_KZT = 'KZT';

    /**
     * ISO-4271 Number for the Kazakhstani tenge
     *
     * @var int
     */
    public const NUMERIC_CODE_KZT = 398;

    /**
     * ISO-4271 name for currency KZT
     *
     * @var string
     */
    public const NAME_KZT = 'Kazakhstani tenge';

    /**
     * The number of digits after the decimal separator for KZT
     *
     * @var int
     */
    public const DIGITS_KZT = 2;

    /**
     * Short name for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_KZT = 'Tenge';

    /**
     * Short name of minor unit for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_KZT = 'tiyn';

    /**
     * Symbol for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KZT = '₸';

    /**
     * Symbol of minor unit for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KZT = '';

    /**
     * Symbol of minor unit for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KZT = 1 / 100;

    /**
     * ISO-4217 Code for the Lao kip
     *
     * Countries:
     * - Laos
     *
     * @var string
     */
    public const ALPHA_3_CODE_LAK = 'LAK';

    /**
     * ISO-4271 Number for the Lao kip
     *
     * @var int
     */
    public const NUMERIC_CODE_LAK = 418;

    /**
     * ISO-4271 name for currency LAK
     *
     * @var string
     */
    public const NAME_LAK = 'Lao kip';

    /**
     * The number of digits after the decimal separator for LAK
     *
     * @var int
     */
    public const DIGITS_LAK = 2;

    /**
     * Short name for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_LAK = 'Kip';

    /**
     * Short name of minor unit for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_LAK = 'att';

    /**
     * Symbol for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LAK = '₭';

    /**
     * Symbol of minor unit for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LAK = '';

    /**
     * Symbol of minor unit for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LAK = 1 / 100;

    /**
     * ISO-4217 Code for the Lebanese pound
     *
     * Countries:
     * - Lebanon
     *
     * @var string
     */
    public const ALPHA_3_CODE_LBP = 'LBP';

    /**
     * ISO-4271 Number for the Lebanese pound
     *
     * @var int
     */
    public const NUMERIC_CODE_LBP = 422;

    /**
     * ISO-4271 name for currency LBP
     *
     * @var string
     */
    public const NAME_LBP = 'Lebanese pound';

    /**
     * The number of digits after the decimal separator for LBP
     *
     * @var int
     */
    public const DIGITS_LBP = 2;

    /**
     * Short name for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_LBP = 'Pound';

    /**
     * Short name of minor unit for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_LBP = 'piastre';

    /**
     * Symbol for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LBP = 'ل.ل.';

    /**
     * Symbol of minor unit for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LBP = '';

    /**
     * Symbol of minor unit for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LBP = 1 / 100;

    /**
     * ISO-4217 Code for the Sri Lankan rupee
     *
     * Countries:
     * - Sri Lanka
     *
     * @var string
     */
    public const ALPHA_3_CODE_LKR = 'LKR';

    /**
     * ISO-4271 Number for the Sri Lankan rupee
     *
     * @var int
     */
    public const NUMERIC_CODE_LKR = 144;

    /**
     * ISO-4271 name for currency LKR
     *
     * @var string
     */
    public const NAME_LKR = 'Sri Lankan rupee';

    /**
     * The number of digits after the decimal separator for LKR
     *
     * @var int
     */
    public const DIGITS_LKR = 2;

    /**
     * Short name for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_LKR = 'Rupee';

    /**
     * Short name of minor unit for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_LKR = 'cent';

    /**
     * Symbol for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LKR = '₨';

    /**
     * Symbol of minor unit for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LKR = '¢';

    /**
     * Symbol of minor unit for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LKR = 1 / 100;

    /**
     * ISO-4217 Code for the Liberian dollar
     *
     * Countries:
     * - Liberia
     *
     * @var string
     */
    public const ALPHA_3_CODE_LRD = 'LRD';

    /**
     * ISO-4271 Number for the Liberian dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_LRD = 430;

    /**
     * ISO-4271 name for currency LRD
     *
     * @var string
     */
    public const NAME_LRD = 'Liberian dollar';

    /**
     * The number of digits after the decimal separator for LRD
     *
     * @var int
     */
    public const DIGITS_LRD = 2;

    /**
     * Short name for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_LRD = 'Dollar';

    /**
     * Short name of minor unit for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_LRD = 'cent';

    /**
     * Symbol for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LRD = '$';

    /**
     * Symbol of minor unit for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LRD = '¢';

    /**
     * Symbol of minor unit for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LRD = 1 / 100;

    /**
     * ISO-4217 Code for the Lesotho loti
     *
     * Countries:
     * - Lesotho
     *
     * @var string
     */
    public const ALPHA_3_CODE_LSL = 'LSL';

    /**
     * ISO-4271 Number for the Lesotho loti
     *
     * @var int
     */
    public const NUMERIC_CODE_LSL = 426;

    /**
     * ISO-4271 name for currency LSL
     *
     * @var string
     */
    public const NAME_LSL = 'Lesotho loti';

    /**
     * The number of digits after the decimal separator for LSL
     *
     * @var int
     */
    public const DIGITS_LSL = 2;

    /**
     * Short name for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_LSL = 'Loti';

    /**
     * Short name of minor unit for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_LSL = 'sente';

    /**
     * Symbol for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LSL = 'L';

    /**
     * Symbol of minor unit for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LSL = '';

    /**
     * Symbol of minor unit for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LSL = 1 / 100;

    /**
     * ISO-4217 Code for the Libyan dinar
     *
     * Countries:
     * - Libya
     *
     * @var string
     */
    public const ALPHA_3_CODE_LYD = 'LYD';

    /**
     * ISO-4271 Number for the Libyan dinar
     *
     * @var int
     */
    public const NUMERIC_CODE_LYD = 434;

    /**
     * ISO-4271 name for currency LYD
     *
     * @var string
     */
    public const NAME_LYD = 'Libyan dinar';

    /**
     * The number of digits after the decimal separator for LYD
     *
     * @var int
     */
    public const DIGITS_LYD = 3;

    /**
     * Short name for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_LYD = 'Dinar';

    /**
     * Short name of minor unit for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_LYD = 'dirham';

    /**
     * Symbol for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LYD = 'ل.';

    /**
     * Symbol of minor unit for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LYD = '';

    /**
     * Symbol of minor unit for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LYD = 1 / 1000;

    /**
     * ISO-4217 Code for the Moroccan dirham
     *
     * Countries:
     * - Morocco
     * - Western Sahara
     *
     * @var string
     */
    public const ALPHA_3_CODE_MAD = 'MAD';

    /**
     * ISO-4271 Number for the Moroccan dirham
     *
     * @var int
     */
    public const NUMERIC_CODE_MAD = 504;

    /**
     * ISO-4271 name for currency MAD
     *
     * @var string
     */
    public const NAME_MAD = 'Moroccan dirham';

    /**
     * The number of digits after the decimal separator for MAD
     *
     * @var int
     */
    public const DIGITS_MAD = 2;

    /**
     * Short name for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MAD = 'Dirham';

    /**
     * Short name of minor unit for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MAD = 'centime';

    /**
     * Symbol for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MAD = 'DH';

    /**
     * Symbol of minor unit for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MAD = '';

    /**
     * Symbol of minor unit for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MAD = 1 / 100;

    /**
     * ISO-4217 Code for the Moldovan leu
     *
     * Countries:
     * - Moldova
     *
     * @var string
     */
    public const ALPHA_3_CODE_MDL = 'MDL';

    /**
     * ISO-4271 Number for the Moldovan leu
     *
     * @var int
     */
    public const NUMERIC_CODE_MDL = 498;

    /**
     * ISO-4271 name for currency MDL
     *
     * @var string
     */
    public const NAME_MDL = 'Moldovan leu';

    /**
     * The number of digits after the decimal separator for MDL
     *
     * @var int
     */
    public const DIGITS_MDL = 2;

    /**
     * Short name for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MDL = 'Leu';

    /**
     * Short name of minor unit for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MDL = 'ban';

    /**
     * Symbol for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MDL = 'L';

    /**
     * Symbol of minor unit for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MDL = '';

    /**
     * Symbol of minor unit for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MDL = 1 / 100;

    /**
     * ISO-4217 Code for the Malagasy ariary
     *
     * Countries:
     * - Madagascar
     *
     * @var string
     */
    public const ALPHA_3_CODE_MGA = 'MGA';

    /**
     * ISO-4271 Number for the Malagasy ariary
     *
     * @var int
     */
    public const NUMERIC_CODE_MGA = 969;

    /**
     * ISO-4271 name for currency MGA
     *
     * @var string
     */
    public const NAME_MGA = 'Malagasy ariary';

    /**
     * The number of digits after the decimal separator for MGA
     *
     * @var int
     */
    public const DIGITS_MGA = 2;

    /**
     * Short name for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MGA = 'Ariary';

    /**
     * Short name of minor unit for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MGA = 'iraimbilanja';

    /**
     * Symbol for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MGA = 'Ar';

    /**
     * Symbol of minor unit for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MGA = '';

    /**
     * Symbol of minor unit for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MGA = 1 / 5;

    /**
     * ISO-4217 Code for the Macedonian denar
     *
     * Countries:
     * - North Macedonia
     *
     * @var string
     */
    public const ALPHA_3_CODE_MKD = 'MKD';

    /**
     * ISO-4271 Number for the Macedonian denar
     *
     * @var int
     */
    public const NUMERIC_CODE_MKD = 807;

    /**
     * ISO-4271 name for currency MKD
     *
     * @var string
     */
    public const NAME_MKD = 'Macedonian denar';

    /**
     * The number of digits after the decimal separator for MKD
     *
     * @var int
     */
    public const DIGITS_MKD = 2;

    /**
     * Short name for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MKD = 'Denar';

    /**
     * Short name of minor unit for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MKD = 'deni';

    /**
     * Symbol for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MKD = 'den';

    /**
     * Symbol of minor unit for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MKD = '';

    /**
     * Symbol of minor unit for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MKD = 1 / 100;

    /**
     * ISO-4217 Code for the Myanmar kyat
     *
     * Countries:
     * - Myanmar
     *
     * @var string
     */
    public const ALPHA_3_CODE_MMK = 'MMK';

    /**
     * ISO-4271 Number for the Myanmar kyat
     *
     * @var int
     */
    public const NUMERIC_CODE_MMK = 104;

    /**
     * ISO-4271 name for currency MMK
     *
     * @var string
     */
    public const NAME_MMK = 'Myanmar kyat';

    /**
     * The number of digits after the decimal separator for MMK
     *
     * @var int
     */
    public const DIGITS_MMK = 2;

    /**
     * Short name for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MMK = 'Kyat';

    /**
     * Short name of minor unit for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MMK = 'pya';

    /**
     * Symbol for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MMK = 'K';

    /**
     * Symbol of minor unit for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MMK = '';

    /**
     * Symbol of minor unit for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MMK = 1 / 100;

    /**
     * ISO-4217 Code for the Mongolian tögrög
     *
     * Countries:
     * - Mongolia
     *
     * @var string
     */
    public const ALPHA_3_CODE_MNT = 'MNT';

    /**
     * ISO-4271 Number for the Mongolian tögrög
     *
     * @var int
     */
    public const NUMERIC_CODE_MNT = 496;

    /**
     * ISO-4271 name for currency MNT
     *
     * @var string
     */
    public const NAME_MNT = 'Mongolian tögrög';

    /**
     * The number of digits after the decimal separator for MNT
     *
     * @var int
     */
    public const DIGITS_MNT = 2;

    /**
     * Short name for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MNT = 'Tögrög';

    /**
     * Short name of minor unit for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MNT = 'möngö';

    /**
     * Symbol for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MNT = '₮';

    /**
     * Symbol of minor unit for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MNT = '';

    /**
     * Symbol of minor unit for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MNT = 1 / 100;

    /**
     * ISO-4217 Code for the Macanese pataca
     *
     * Countries:
     * - Macau
     *
     * @var string
     */
    public const ALPHA_3_CODE_MOP = 'MOP';

    /**
     * ISO-4271 Number for the Macanese pataca
     *
     * @var int
     */
    public const NUMERIC_CODE_MOP = 446;

    /**
     * ISO-4271 name for currency MOP
     *
     * @var string
     */
    public const NAME_MOP = 'Macanese pataca';

    /**
     * The number of digits after the decimal separator for MOP
     *
     * @var int
     */
    public const DIGITS_MOP = 2;

    /**
     * Short name for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MOP = 'Pataca';

    /**
     * Short name of minor unit for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MOP = 'avos';

    /**
     * Symbol for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MOP = 'MOP$';

    /**
     * Symbol of minor unit for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MOP = '';

    /**
     * Symbol of minor unit for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MOP = 1 / 100;

    /**
     * ISO-4217 Code for the Mauritanian ouguiya
     *
     * Countries:
     * - Mauritania
     *
     * @var string
     */
    public const ALPHA_3_CODE_MRU = 'MRU';

    /**
     * ISO-4271 Number for the Mauritanian ouguiya
     *
     * @var int
     */
    public const NUMERIC_CODE_MRU = 929;

    /**
     * ISO-4271 name for currency MRU
     *
     * @var string
     */
    public const NAME_MRU = 'Mauritanian ouguiya';

    /**
     * The number of digits after the decimal separator for MRU
     *
     * @var int
     */
    public const DIGITS_MRU = 2;

    /**
     * Short name for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MRU = 'Ouguiya';

    /**
     * Short name of minor unit for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MRU = 'khoums';

    /**
     * Symbol for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MRU = 'UM';

    /**
     * Symbol of minor unit for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MRU = '';

    /**
     * Symbol of minor unit for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MRU = 1 / 5;

    /**
     * ISO-4217 Code for the Mauritian rupee
     *
     * Countries:
     * - Mauritius
     *
     * @var string
     */
    public const ALPHA_3_CODE_MUR = 'MUR';

    /**
     * ISO-4271 Number for the Mauritian rupee
     *
     * @var int
     */
    public const NUMERIC_CODE_MUR = 480;

    /**
     * ISO-4271 name for currency MUR
     *
     * @var string
     */
    public const NAME_MUR = 'Mauritian rupee';

    /**
     * The number of digits after the decimal separator for MUR
     *
     * @var int
     */
    public const DIGITS_MUR = 2;

    /**
     * Short name for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MUR = 'Rupee';

    /**
     * Short name of minor unit for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MUR = 'cent';

    /**
     * Symbol for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MUR = 'Rs';

    /**
     * Symbol of minor unit for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MUR = '¢';

    /**
     * Symbol of minor unit for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MUR = 1 / 100;

    /**
     * ISO-4217 Code for the Maldivian rufiyaa
     *
     * Countries:
     * - Maldives
     *
     * @var string
     */
    public const ALPHA_3_CODE_MVR = 'MVR';

    /**
     * ISO-4271 Number for the Maldivian rufiyaa
     *
     * @var int
     */
    public const NUMERIC_CODE_MVR = 462;

    /**
     * ISO-4271 name for currency MVR
     *
     * @var string
     */
    public const NAME_MVR = 'Maldivian rufiyaa';

    /**
     * The number of digits after the decimal separator for MVR
     *
     * @var int
     */
    public const DIGITS_MVR = 2;

    /**
     * Short name for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MVR = 'Rufiyaa';

    /**
     * Short name of minor unit for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MVR = 'laari';

    /**
     * Symbol for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MVR = 'Rf';

    /**
     * Symbol of minor unit for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MVR = '';

    /**
     * Symbol of minor unit for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MVR = 1 / 100;

    /**
     * ISO-4217 Code for the Malawian kwacha
     *
     * Countries:
     * - Malawi
     *
     * @var string
     */
    public const ALPHA_3_CODE_MWK = 'MWK';

    /**
     * ISO-4271 Number for the Malawian kwacha
     *
     * @var int
     */
    public const NUMERIC_CODE_MWK = 454;

    /**
     * ISO-4271 name for currency MWK
     *
     * @var string
     */
    public const NAME_MWK = 'Malawian kwacha';

    /**
     * The number of digits after the decimal separator for MWK
     *
     * @var int
     */
    public const DIGITS_MWK = 2;

    /**
     * Short name for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MWK = 'Kwacha';

    /**
     * Short name of minor unit for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MWK = 'tambala';

    /**
     * Symbol for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MWK = 'K';

    /**
     * Symbol of minor unit for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MWK = '';

    /**
     * Symbol of minor unit for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MWK = 1 / 100;

    /**
     * ISO-4217 Code for the Mexican peso
     *
     * Countries:
     * - Mexico
     *
     * @var string
     */
    public const ALPHA_3_CODE_MXN = 'MXN';

    /**
     * ISO-4271 Number for the Mexican peso
     *
     * @var int
     */
    public const NUMERIC_CODE_MXN = 484;

    /**
     * ISO-4271 name for currency MXN
     *
     * @var string
     */
    public const NAME_MXN = 'Mexican peso';

    /**
     * The number of digits after the decimal separator for MXN
     *
     * @var int
     */
    public const DIGITS_MXN = 2;

    /**
     * Short name for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MXN = '';

    /**
     * Short name of minor unit for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MXN = 'centavo';

    /**
     * Symbol for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MXN = '$';

    /**
     * Symbol of minor unit for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MXN = '¢';

    /**
     * Symbol of minor unit for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MXN = 1 / 100;

    /**
     * ISO-4217 Code for the Malaysian ringgit
     *
     * Countries:
     * - Malaysia
     *
     * @var string
     */
    public const ALPHA_3_CODE_MYR = 'MYR';

    /**
     * ISO-4271 Number for the Malaysian ringgit
     *
     * @var int
     */
    public const NUMERIC_CODE_MYR = 458;

    /**
     * ISO-4271 name for currency MYR
     *
     * @var string
     */
    public const NAME_MYR = 'Malaysian ringgit';

    /**
     * The number of digits after the decimal separator for MYR
     *
     * @var int
     */
    public const DIGITS_MYR = 2;

    /**
     * Short name for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MYR = 'Ringgit';

    /**
     * Short name of minor unit for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MYR = 'sen';

    /**
     * Symbol for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MYR = 'RM';

    /**
     * Symbol of minor unit for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MYR = '';

    /**
     * Symbol of minor unit for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MYR = 1 / 100;

    /**
     * ISO-4217 Code for the Mozambican metical
     *
     * Countries:
     * - Mozambique
     *
     * @var string
     */
    public const ALPHA_3_CODE_MZN = 'MZN';

    /**
     * ISO-4271 Number for the Mozambican metical
     *
     * @var int
     */
    public const NUMERIC_CODE_MZN = 943;

    /**
     * ISO-4271 name for currency MZN
     *
     * @var string
     */
    public const NAME_MZN = 'Mozambican metical';

    /**
     * The number of digits after the decimal separator for MZN
     *
     * @var int
     */
    public const DIGITS_MZN = 2;

    /**
     * Short name for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_MZN = 'Metical';

    /**
     * Short name of minor unit for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_MZN = 'centavo';

    /**
     * Symbol for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MZN = 'MT';

    /**
     * Symbol of minor unit for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MZN = '';

    /**
     * Symbol of minor unit for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MZN = 1 / 100;

    /**
     * ISO-4217 Code for the Namibian dollar
     *
     * Countries:
     * - Namibia
     *
     * @var string
     */
    public const ALPHA_3_CODE_NAD = 'NAD';

    /**
     * ISO-4271 Number for the Namibian dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_NAD = 516;

    /**
     * ISO-4271 name for currency NAD
     *
     * @var string
     */
    public const NAME_NAD = 'Namibian dollar';

    /**
     * The number of digits after the decimal separator for NAD
     *
     * @var int
     */
    public const DIGITS_NAD = 2;

    /**
     * Short name for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_NAD = 'Dollar';

    /**
     * Short name of minor unit for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_NAD = 'cent';

    /**
     * Symbol for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NAD = '$';

    /**
     * Symbol of minor unit for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NAD = '';

    /**
     * Symbol of minor unit for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NAD = 1 / 100;

    /**
     * ISO-4217 Code for the Nigerian naira
     *
     * Countries:
     * - Nigeria
     *
     * @var string
     */
    public const ALPHA_3_CODE_NGN = 'NGN';

    /**
     * ISO-4271 Number for the Nigerian naira
     *
     * @var int
     */
    public const NUMERIC_CODE_NGN = 566;

    /**
     * ISO-4271 name for currency NGN
     *
     * @var string
     */
    public const NAME_NGN = 'Nigerian naira';

    /**
     * The number of digits after the decimal separator for NGN
     *
     * @var int
     */
    public const DIGITS_NGN = 2;

    /**
     * Short name for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_NGN = 'Naira';

    /**
     * Short name of minor unit for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_NGN = 'kobo';

    /**
     * Symbol for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NGN = '₦';

    /**
     * Symbol of minor unit for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NGN = '';

    /**
     * Symbol of minor unit for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NGN = 1 / 100;

    /**
     * ISO-4217 Code for the Nicaraguan córdoba
     *
     * Countries:
     * - Nicaragua
     *
     * @var string
     */
    public const ALPHA_3_CODE_NIO = 'NIO';

    /**
     * ISO-4271 Number for the Nicaraguan córdoba
     *
     * @var int
     */
    public const NUMERIC_CODE_NIO = 558;

    /**
     * ISO-4271 name for currency NIO
     *
     * @var string
     */
    public const NAME_NIO = 'Nicaraguan córdoba';

    /**
     * The number of digits after the decimal separator for NIO
     *
     * @var int
     */
    public const DIGITS_NIO = 2;

    /**
     * Short name for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_NIO = 'Córdoba';

    /**
     * Short name of minor unit for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_NIO = 'centavo';

    /**
     * Symbol for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NIO = 'C$';

    /**
     * Symbol of minor unit for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NIO = '';

    /**
     * Symbol of minor unit for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NIO = 1 / 100;

    /**
     * ISO-4217 Code for the Norwegian krone
     *
     * Countries:
     * - Norway
     * - Svalbard and  Jan Mayen (SJ)
     * - Bouvet Island (BV)
     *
     * @var string
     */
    public const ALPHA_3_CODE_NOK = 'NOK';

    /**
     * ISO-4271 Number for the Norwegian krone
     *
     * @var int
     */
    public const NUMERIC_CODE_NOK = 578;

    /**
     * ISO-4271 name for currency NOK
     *
     * @var string
     */
    public const NAME_NOK = 'Norwegian krone';

    /**
     * The number of digits after the decimal separator for NOK
     *
     * @var int
     */
    public const DIGITS_NOK = 2;

    /**
     * Short name for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_NOK = 'Krone';

    /**
     * Short name of minor unit for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_NOK = 'øre';

    /**
     * Symbol for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NOK = 'kr';

    /**
     * Symbol of minor unit for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NOK = '';

    /**
     * Symbol of minor unit for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NOK = 1 / 100;

    /**
     * ISO-4217 Code for the Nepalese rupee
     *
     * Countries:
     * - Nepal
     *
     * @var string
     */
    public const ALPHA_3_CODE_NPR = 'NPR';

    /**
     * ISO-4271 Number for the Nepalese rupee
     *
     * @var int
     */
    public const NUMERIC_CODE_NPR = 524;

    /**
     * ISO-4271 name for currency NPR
     *
     * @var string
     */
    public const NAME_NPR = 'Nepalese rupee';

    /**
     * The number of digits after the decimal separator for NPR
     *
     * @var int
     */
    public const DIGITS_NPR = 2;

    /**
     * Short name for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_NPR = 'Rupee';

    /**
     * Short name of minor unit for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_NPR = 'Paisa';

    /**
     * Symbol for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NPR = 'रु';

    /**
     * Symbol of minor unit for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NPR = '';

    /**
     * Symbol of minor unit for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NPR = 1 / 100;

    /**
     * ISO-4217 Code for the New Zealand dollar
     *
     * Countries:
     * - New Zealand
     * - Cook Islands (CK)
     * - Niue (NU)
     * - Pitcairn Islands (PN; see also Pitcairn Islands dollar)
     * - Tokelau (TK)
     *
     * @var string
     */
    public const ALPHA_3_CODE_NZD = 'NZD';

    /**
     * ISO-4271 Number for the New Zealand dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_NZD = 554;

    /**
     * ISO-4271 name for currency NZD
     *
     * @var string
     */
    public const NAME_NZD = 'New Zealand dollar';

    /**
     * The number of digits after the decimal separator for NZD
     *
     * @var int
     */
    public const DIGITS_NZD = 2;

    /**
     * Short name for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_NZD = 'Dollar';

    /**
     * Short name of minor unit for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_NZD = 'cent';

    /**
     * Symbol for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NZD = '$';

    /**
     * Symbol of minor unit for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NZD = 'c';

    /**
     * Symbol of minor unit for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NZD = 1 / 100;

    /**
     * ISO-4217 Code for the Omani rial
     *
     * Countries:
     * - Oman
     *
     * @var string
     */
    public const ALPHA_3_CODE_OMR = 'OMR';

    /**
     * ISO-4271 Number for the Omani rial
     *
     * @var int
     */
    public const NUMERIC_CODE_OMR = 512;

    /**
     * ISO-4271 name for currency OMR
     *
     * @var string
     */
    public const NAME_OMR = 'Omani rial';

    /**
     * The number of digits after the decimal separator for OMR
     *
     * @var int
     */
    public const DIGITS_OMR = 3;

    /**
     * Short name for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_OMR = 'Rial';

    /**
     * Short name of minor unit for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_OMR = 'baisa';

    /**
     * Symbol for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_OMR = 'ر.ع.';

    /**
     * Symbol of minor unit for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_OMR = '';

    /**
     * Symbol of minor unit for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_OMR = 1 / 1000;

    /**
     * ISO-4217 Code for the Panamanian balboa
     *
     * Countries:
     * - Panama
     *
     * @var string
     */
    public const ALPHA_3_CODE_PAB = 'PAB';

    /**
     * ISO-4271 Number for the Panamanian balboa
     *
     * @var int
     */
    public const NUMERIC_CODE_PAB = 590;

    /**
     * ISO-4271 name for currency PAB
     *
     * @var string
     */
    public const NAME_PAB = 'Panamanian balboa';

    /**
     * The number of digits after the decimal separator for PAB
     *
     * @var int
     */
    public const DIGITS_PAB = 2;

    /**
     * Short name for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_PAB = 'Balboa';

    /**
     * Short name of minor unit for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_PAB = 'Centésimo';

    /**
     * Symbol for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PAB = 'B/.';

    /**
     * Symbol of minor unit for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PAB = '';

    /**
     * Symbol of minor unit for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PAB = 1 / 100;

    /**
     * ISO-4217 Code for the Peruvian sol
     *
     * Countries:
     * - Peru
     *
     * @var string
     */
    public const ALPHA_3_CODE_PEN = 'PEN';

    /**
     * ISO-4271 Number for the Peruvian sol
     *
     * @var int
     */
    public const NUMERIC_CODE_PEN = 604;

    /**
     * ISO-4271 name for currency PEN
     *
     * @var string
     */
    public const NAME_PEN = 'Peruvian sol';

    /**
     * The number of digits after the decimal separator for PEN
     *
     * @var int
     */
    public const DIGITS_PEN = 2;

    /**
     * Short name for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_PEN = 'Sol';

    /**
     * Short name of minor unit for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_PEN = 'céntimo';

    /**
     * Symbol for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PEN = 'S/';

    /**
     * Symbol of minor unit for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PEN = '';

    /**
     * Symbol of minor unit for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PEN = 1 / 100;

    /**
     * ISO-4217 Code for the Papua New Guinean kina
     *
     * Countries:
     * - Papua New Guinea
     *
     * @var string
     */
    public const ALPHA_3_CODE_PGK = 'PGK';

    /**
     * ISO-4271 Number for the Papua New Guinean kina
     *
     * @var int
     */
    public const NUMERIC_CODE_PGK = 598;

    /**
     * ISO-4271 name for currency PGK
     *
     * @var string
     */
    public const NAME_PGK = 'Papua New Guinean kina';

    /**
     * The number of digits after the decimal separator for PGK
     *
     * @var int
     */
    public const DIGITS_PGK = 2;

    /**
     * Short name for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_PGK = 'Kina';

    /**
     * Short name of minor unit for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_PGK = 'toea';

    /**
     * Symbol for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PGK = 'K';

    /**
     * Symbol of minor unit for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PGK = 't';

    /**
     * Symbol of minor unit for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PGK = 1 / 100;

    /**
     * ISO-4217 Code for the Philippine peso
     *
     * Countries:
     * - Philippines
     *
     * @var string
     */
    public const ALPHA_3_CODE_PHP = 'PHP';

    /**
     * ISO-4271 Number for the Philippine peso
     *
     * @var int
     */
    public const NUMERIC_CODE_PHP = 608;

    /**
     * ISO-4271 name for currency PHP
     *
     * @var string
     */
    public const NAME_PHP = 'Philippine peso';

    /**
     * The number of digits after the decimal separator for PHP
     *
     * @var int
     */
    public const DIGITS_PHP = 2;

    /**
     * Short name for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_PHP = 'Peso';

    /**
     * Short name of minor unit for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_PHP = 'Sentimo';

    /**
     * Symbol for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PHP = '₱';

    /**
     * Symbol of minor unit for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PHP = '¢';

    /**
     * Symbol of minor unit for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PHP = 1 / 100;

    /**
     * ISO-4217 Code for the Pakistani rupee
     *
     * Countries:
     * - Pakistan
     *
     * @var string
     */
    public const ALPHA_3_CODE_PKR = 'PKR';

    /**
     * ISO-4271 Number for the Pakistani rupee
     *
     * @var int
     */
    public const NUMERIC_CODE_PKR = 586;

    /**
     * ISO-4271 name for currency PKR
     *
     * @var string
     */
    public const NAME_PKR = 'Pakistani rupee';

    /**
     * The number of digits after the decimal separator for PKR
     *
     * @var int
     */
    public const DIGITS_PKR = 2;

    /**
     * Short name for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_PKR = 'Rupee';

    /**
     * Short name of minor unit for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_PKR = 'Paisa';

    /**
     * Symbol for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PKR = '₨.';

    /**
     * Symbol of minor unit for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PKR = '';

    /**
     * Symbol of minor unit for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PKR = 1 / 100;

    /**
     * ISO-4217 Code for the Polish złoty
     *
     * Countries:
     * - Poland
     *
     * @var string
     */
    public const ALPHA_3_CODE_PLN = 'PLN';

    /**
     * ISO-4271 Number for the Polish złoty
     *
     * @var int
     */
    public const NUMERIC_CODE_PLN = 985;

    /**
     * ISO-4271 name for currency PLN
     *
     * @var string
     */
    public const NAME_PLN = 'Polish złoty';

    /**
     * The number of digits after the decimal separator for PLN
     *
     * @var int
     */
    public const DIGITS_PLN = 2;

    /**
     * Short name for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_PLN = 'Złoty';

    /**
     * Short name of minor unit for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_PLN = 'grosz';

    /**
     * Symbol for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PLN = 'zł';

    /**
     * Symbol of minor unit for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PLN = 'gr';

    /**
     * Symbol of minor unit for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PLN = 1 / 100;

    /**
     * ISO-4217 Code for the Paraguayan guaraní
     *
     * Countries:
     * - Paraguay
     *
     * @var string
     */
    public const ALPHA_3_CODE_PYG = 'PYG';

    /**
     * ISO-4271 Number for the Paraguayan guaraní
     *
     * @var int
     */
    public const NUMERIC_CODE_PYG = 600;

    /**
     * ISO-4271 name for currency PYG
     *
     * @var string
     */
    public const NAME_PYG = 'Paraguayan guaraní';

    /**
     * The number of digits after the decimal separator for PYG
     *
     * @var int
     */
    public const DIGITS_PYG = 0;

    /**
     * Short name for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_PYG = 'Guaraní';

    /**
     * Short name of minor unit for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_PYG = 'céntimo';

    /**
     * Symbol for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PYG = '₲';

    /**
     * Symbol of minor unit for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PYG = '¢';

    /**
     * Symbol of minor unit for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PYG = 1 / 100;

    /**
     * ISO-4217 Code for the Qatari riyal
     *
     * Countries:
     * - Qatar
     *
     * @var string
     */
    public const ALPHA_3_CODE_QAR = 'QAR';

    /**
     * ISO-4271 Number for the Qatari riyal
     *
     * @var int
     */
    public const NUMERIC_CODE_QAR = 634;

    /**
     * ISO-4271 name for currency QAR
     *
     * @var string
     */
    public const NAME_QAR = 'Qatari riyal';

    /**
     * The number of digits after the decimal separator for QAR
     *
     * @var int
     */
    public const DIGITS_QAR = 2;

    /**
     * Short name for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_QAR = 'Riyal';

    /**
     * Short name of minor unit for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_QAR = 'dirham';

    /**
     * Symbol for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_QAR = 'ر.ق';

    /**
     * Symbol of minor unit for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_QAR = '';

    /**
     * Symbol of minor unit for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_QAR = 1 / 100;

    /**
     * ISO-4217 Code for the Romanian leu
     *
     * Countries:
     * - Romania
     *
     * @var string
     */
    public const ALPHA_3_CODE_RON = 'RON';

    /**
     * ISO-4271 Number for the Romanian leu
     *
     * @var int
     */
    public const NUMERIC_CODE_RON = 946;

    /**
     * ISO-4271 name for currency RON
     *
     * @var string
     */
    public const NAME_RON = 'Romanian leu';

    /**
     * The number of digits after the decimal separator for RON
     *
     * @var int
     */
    public const DIGITS_RON = 2;

    /**
     * Short name for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_RON = 'Leu';

    /**
     * Short name of minor unit for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_RON = 'ban';

    /**
     * Symbol for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_RON = 'L';

    /**
     * Symbol of minor unit for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_RON = '';

    /**
     * Symbol of minor unit for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_RON = 1 / 100;

    /**
     * ISO-4217 Code for the Serbian dinar
     *
     * Countries:
     * - Serbia
     *
     * @var string
     */
    public const ALPHA_3_CODE_RSD = 'RSD';

    /**
     * ISO-4271 Number for the Serbian dinar
     *
     * @var int
     */
    public const NUMERIC_CODE_RSD = 941;

    /**
     * ISO-4271 name for currency RSD
     *
     * @var string
     */
    public const NAME_RSD = 'Serbian dinar';

    /**
     * The number of digits after the decimal separator for RSD
     *
     * @var int
     */
    public const DIGITS_RSD = 2;

    /**
     * Short name for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_RSD = 'Dinar';

    /**
     * Short name of minor unit for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_RSD = 'para';

    /**
     * Symbol for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_RSD = 'din';

    /**
     * Symbol of minor unit for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_RSD = '';

    /**
     * Symbol of minor unit for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_RSD = 1 / 100;

    /**
     * ISO-4217 Code for the Russian ruble
     *
     * Countries:
     * - Russia
     *
     * @var string
     */
    public const ALPHA_3_CODE_RUB = 'RUB';

    /**
     * ISO-4271 Number for the Russian ruble
     *
     * @var int
     */
    public const NUMERIC_CODE_RUB = 643;

    /**
     * ISO-4271 name for currency RUB
     *
     * @var string
     */
    public const NAME_RUB = 'Russian ruble';

    /**
     * The number of digits after the decimal separator for RUB
     *
     * @var int
     */
    public const DIGITS_RUB = 2;

    /**
     * Short name for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_RUB = 'Ruble';

    /**
     * Short name of minor unit for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_RUB = 'kopeyka';

    /**
     * Symbol for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_RUB = '₽';

    /**
     * Symbol of minor unit for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_RUB = 'коп.';

    /**
     * Symbol of minor unit for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_RUB = 1 / 100;

    /**
     * ISO-4217 Code for the Rwandan franc
     *
     * Countries:
     * - Rwanda
     *
     * @var string
     */
    public const ALPHA_3_CODE_RWF = 'RWF';

    /**
     * ISO-4271 Number for the Rwandan franc
     *
     * @var int
     */
    public const NUMERIC_CODE_RWF = 646;

    /**
     * ISO-4271 name for currency RWF
     *
     * @var string
     */
    public const NAME_RWF = 'Rwandan franc';

    /**
     * The number of digits after the decimal separator for RWF
     *
     * @var int
     */
    public const DIGITS_RWF = 0;

    /**
     * Short name for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_RWF = 'Franc';

    /**
     * Short name of minor unit for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_RWF = 'centime';

    /**
     * Symbol for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_RWF = 'FRw';

    /**
     * Symbol of minor unit for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_RWF = '';

    /**
     * Symbol of minor unit for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_RWF = 1 / 100;

    /**
     * ISO-4217 Code for the Saudi riyal
     *
     * Countries:
     * - Saudi Arabia
     *
     * @var string
     */
    public const ALPHA_3_CODE_SAR = 'SAR';

    /**
     * ISO-4271 Number for the Saudi riyal
     *
     * @var int
     */
    public const NUMERIC_CODE_SAR = 682;

    /**
     * ISO-4271 name for currency SAR
     *
     * @var string
     */
    public const NAME_SAR = 'Saudi riyal';

    /**
     * The number of digits after the decimal separator for SAR
     *
     * @var int
     */
    public const DIGITS_SAR = 2;

    /**
     * Short name for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SAR = 'Riyal';

    /**
     * Short name of minor unit for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SAR = 'halalah';

    /**
     * Symbol for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SAR = 'ر.س';

    /**
     * Symbol of minor unit for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SAR = '';

    /**
     * Symbol of minor unit for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SAR = 1 / 100;

    /**
     * ISO-4217 Code for the Solomon Islands dollar
     *
     * Countries:
     * - Solomon Islands
     *
     * @var string
     */
    public const ALPHA_3_CODE_SBD = 'SBD';

    /**
     * ISO-4271 Number for the Solomon Islands dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_SBD = 90;

    /**
     * ISO-4271 name for currency SBD
     *
     * @var string
     */
    public const NAME_SBD = 'Solomon Islands dollar';

    /**
     * The number of digits after the decimal separator for SBD
     *
     * @var int
     */
    public const DIGITS_SBD = 2;

    /**
     * Short name for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SBD = 'Dollar';

    /**
     * Short name of minor unit for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SBD = 'cent';

    /**
     * Symbol for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SBD = '$';

    /**
     * Symbol of minor unit for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SBD = '';

    /**
     * Symbol of minor unit for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SBD = 1 / 100;

    /**
     * ISO-4217 Code for the Seychellois rupee
     *
     * Countries:
     * - Seychelles
     *
     * @var string
     */
    public const ALPHA_3_CODE_SCR = 'SCR';

    /**
     * ISO-4271 Number for the Seychellois rupee
     *
     * @var int
     */
    public const NUMERIC_CODE_SCR = 690;

    /**
     * ISO-4271 name for currency SCR
     *
     * @var string
     */
    public const NAME_SCR = 'Seychellois rupee';

    /**
     * The number of digits after the decimal separator for SCR
     *
     * @var int
     */
    public const DIGITS_SCR = 2;

    /**
     * Short name for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SCR = 'Rupee';

    /**
     * Short name of minor unit for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SCR = 'cent';

    /**
     * Symbol for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SCR = 'Rs';

    /**
     * Symbol of minor unit for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SCR = '¢';

    /**
     * Symbol of minor unit for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SCR = 1 / 100;

    /**
     * ISO-4217 Code for the Sudanese pound
     *
     * Countries:
     * - Sudan
     *
     * @var string
     */
    public const ALPHA_3_CODE_SDG = 'SDG';

    /**
     * ISO-4271 Number for the Sudanese pound
     *
     * @var int
     */
    public const NUMERIC_CODE_SDG = 938;

    /**
     * ISO-4271 name for currency SDG
     *
     * @var string
     */
    public const NAME_SDG = 'Sudanese pound';

    /**
     * The number of digits after the decimal separator for SDG
     *
     * @var int
     */
    public const DIGITS_SDG = 2;

    /**
     * Short name for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SDG = 'Pound';

    /**
     * Short name of minor unit for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SDG = 'piastre';

    /**
     * Symbol for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SDG = 'ج.س';

    /**
     * Symbol of minor unit for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SDG = '';

    /**
     * Symbol of minor unit for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SDG = 1 / 100;

    /**
     * ISO-4217 Code for the Swedish krona
     *
     * Countries:
     * - Sweden
     *
     * @var string
     */
    public const ALPHA_3_CODE_SEK = 'SEK';

    /**
     * ISO-4271 Number for the Swedish krona
     *
     * @var int
     */
    public const NUMERIC_CODE_SEK = 752;

    /**
     * ISO-4271 name for currency SEK
     *
     * @var string
     */
    public const NAME_SEK = 'Swedish krona';

    /**
     * The number of digits after the decimal separator for SEK
     *
     * @var int
     */
    public const DIGITS_SEK = 2;

    /**
     * Short name for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SEK = 'Krona';

    /**
     * Short name of minor unit for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SEK = 'öre';

    /**
     * Symbol for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SEK = 'kr';

    /**
     * Symbol of minor unit for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SEK = '';

    /**
     * Symbol of minor unit for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SEK = 1 / 100;

    /**
     * ISO-4217 Code for the Singapore dollar
     *
     * Countries:
     * - Singapore
     *
     * @var string
     */
    public const ALPHA_3_CODE_SGD = 'SGD';

    /**
     * ISO-4271 Number for the Singapore dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_SGD = 702;

    /**
     * ISO-4271 name for currency SGD
     *
     * @var string
     */
    public const NAME_SGD = 'Singapore dollar';

    /**
     * The number of digits after the decimal separator for SGD
     *
     * @var int
     */
    public const DIGITS_SGD = 2;

    /**
     * Short name for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SGD = 'Dollar';

    /**
     * Short name of minor unit for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SGD = 'cent';

    /**
     * Symbol for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SGD = '$';

    /**
     * Symbol of minor unit for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SGD = 'c';

    /**
     * Symbol of minor unit for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SGD = 1 / 100;

    /**
     * ISO-4217 Code for the Saint Helena pound
     *
     * Countries:
     * - Saint Helena (SH-SH)
     * - Ascension Island (SH-AC)
     *
     * @var string
     */
    public const ALPHA_3_CODE_SHP = 'SHP';

    /**
     * ISO-4271 Number for the Saint Helena pound
     *
     * @var int
     */
    public const NUMERIC_CODE_SHP = 654;

    /**
     * ISO-4271 name for currency SHP
     *
     * @var string
     */
    public const NAME_SHP = 'Saint Helena pound';

    /**
     * The number of digits after the decimal separator for SHP
     *
     * @var int
     */
    public const DIGITS_SHP = 2;

    /**
     * Short name for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SHP = 'Pound';

    /**
     * Short name of minor unit for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SHP = 'penny';

    /**
     * Symbol for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SHP = '£';

    /**
     * Symbol of minor unit for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SHP = '';

    /**
     * Symbol of minor unit for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SHP = 1 / 100;

    /**
     * ISO-4217 Code for the Sierra Leonean leone
     *
     * Countries:
     * - Sierra Leone
     *
     * @var string
     */
    public const ALPHA_3_CODE_SLL = 'SLL';

    /**
     * ISO-4271 Number for the Sierra Leonean leone
     *
     * @var int
     */
    public const NUMERIC_CODE_SLL = 694;

    /**
     * ISO-4271 name for currency SLL
     *
     * @var string
     */
    public const NAME_SLL = 'Sierra Leonean leone';

    /**
     * The number of digits after the decimal separator for SLL
     *
     * @var int
     */
    public const DIGITS_SLL = 2;

    /**
     * Short name for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SLL = 'Leone';

    /**
     * Short name of minor unit for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SLL = 'cent';

    /**
     * Symbol for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SLL = 'Le';

    /**
     * Symbol of minor unit for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SLL = '';

    /**
     * Symbol of minor unit for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SLL = 1 / 100;

    /**
     * ISO-4217 Code for the Somali shilling
     *
     * Countries:
     * - Somalia
     *
     * @var string
     */
    public const ALPHA_3_CODE_SOS = 'SOS';

    /**
     * ISO-4271 Number for the Somali shilling
     *
     * @var int
     */
    public const NUMERIC_CODE_SOS = 706;

    /**
     * ISO-4271 name for currency SOS
     *
     * @var string
     */
    public const NAME_SOS = 'Somali shilling';

    /**
     * The number of digits after the decimal separator for SOS
     *
     * @var int
     */
    public const DIGITS_SOS = 2;

    /**
     * Short name for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SOS = 'Shilling';

    /**
     * Short name of minor unit for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SOS = 'Senti';

    /**
     * Symbol for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SOS = 'Sh.So.';

    /**
     * Symbol of minor unit for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SOS = '';

    /**
     * Symbol of minor unit for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SOS = 1 / 100;

    /**
     * ISO-4217 Code for the Surinamese dollar
     *
     * Countries:
     * - Suriname
     *
     * @var string
     */
    public const ALPHA_3_CODE_SRD = 'SRD';

    /**
     * ISO-4271 Number for the Surinamese dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_SRD = 968;

    /**
     * ISO-4271 name for currency SRD
     *
     * @var string
     */
    public const NAME_SRD = 'Surinamese dollar';

    /**
     * The number of digits after the decimal separator for SRD
     *
     * @var int
     */
    public const DIGITS_SRD = 2;

    /**
     * Short name for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SRD = 'Dollar';

    /**
     * Short name of minor unit for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SRD = 'cent';

    /**
     * Symbol for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SRD = '$';

    /**
     * Symbol of minor unit for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SRD = '';

    /**
     * Symbol of minor unit for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SRD = 1 / 100;

    /**
     * ISO-4217 Code for the South Sudanese pound
     *
     * Countries:
     * - South Sudan
     *
     * @var string
     */
    public const ALPHA_3_CODE_SSP = 'SSP';

    /**
     * ISO-4271 Number for the South Sudanese pound
     *
     * @var int
     */
    public const NUMERIC_CODE_SSP = 728;

    /**
     * ISO-4271 name for currency SSP
     *
     * @var string
     */
    public const NAME_SSP = 'South Sudanese pound';

    /**
     * The number of digits after the decimal separator for SSP
     *
     * @var int
     */
    public const DIGITS_SSP = 2;

    /**
     * Short name for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SSP = 'Pound';

    /**
     * Short name of minor unit for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SSP = 'Piaster';

    /**
     * Symbol for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SSP = 'SS£';

    /**
     * Symbol of minor unit for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SSP = 'pt';

    /**
     * Symbol of minor unit for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SSP = 1 / 100;

    /**
     * ISO-4217 Code for the São Tomé and Príncipe dobra
     *
     * Countries:
     * - São Tomé and Príncipe
     *
     * @var string
     */
    public const ALPHA_3_CODE_STN = 'STN';

    /**
     * ISO-4271 Number for the São Tomé and Príncipe dobra
     *
     * @var int
     */
    public const NUMERIC_CODE_STN = 930;

    /**
     * ISO-4271 name for currency STN
     *
     * @var string
     */
    public const NAME_STN = 'São Tomé and Príncipe dobra';

    /**
     * The number of digits after the decimal separator for STN
     *
     * @var int
     */
    public const DIGITS_STN = 2;

    /**
     * Short name for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_STN = 'Dobra';

    /**
     * Short name of minor unit for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_STN = 'cêntimo';

    /**
     * Symbol for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_STN = 'Db';

    /**
     * Symbol of minor unit for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_STN = '';

    /**
     * Symbol of minor unit for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_STN = 1 / 100;

    /**
     * ISO-4217 Code for the Salvadoran colón
     *
     * Countries:
     * - El Salvador
     *
     * @var string
     */
    public const ALPHA_3_CODE_SVC = 'SVC';

    /**
     * ISO-4271 Number for the Salvadoran colón
     *
     * @var int
     */
    public const NUMERIC_CODE_SVC = 222;

    /**
     * ISO-4271 name for currency SVC
     *
     * @var string
     */
    public const NAME_SVC = 'Salvadoran colón';

    /**
     * The number of digits after the decimal separator for SVC
     *
     * @var int
     */
    public const DIGITS_SVC = 2;

    /**
     * Short name for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SVC = 'Colón';

    /**
     * Short name of minor unit for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SVC = 'centavo';

    /**
     * Symbol for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SVC = '₡';

    /**
     * Symbol of minor unit for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SVC = '';

    /**
     * Symbol of minor unit for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SVC = 1 / 100;

    /**
     * ISO-4217 Code for the Syrian pound
     *
     * Countries:
     * - Syria
     *
     * @var string
     */
    public const ALPHA_3_CODE_SYP = 'SYP';

    /**
     * ISO-4271 Number for the Syrian pound
     *
     * @var int
     */
    public const NUMERIC_CODE_SYP = 760;

    /**
     * ISO-4271 name for currency SYP
     *
     * @var string
     */
    public const NAME_SYP = 'Syrian pound';

    /**
     * The number of digits after the decimal separator for SYP
     *
     * @var int
     */
    public const DIGITS_SYP = 2;

    /**
     * Short name for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SYP = 'Pound';

    /**
     * Short name of minor unit for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SYP = 'piastre';

    /**
     * Symbol for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SYP = '£S';

    /**
     * Symbol of minor unit for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SYP = '';

    /**
     * Symbol of minor unit for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SYP = 1 / 100;

    /**
     * ISO-4217 Code for the Swazi lilangeni
     *
     * Countries:
     * - Eswatini
     *
     * @var string
     */
    public const ALPHA_3_CODE_SZL = 'SZL';

    /**
     * ISO-4271 Number for the Swazi lilangeni
     *
     * @var int
     */
    public const NUMERIC_CODE_SZL = 748;

    /**
     * ISO-4271 name for currency SZL
     *
     * @var string
     */
    public const NAME_SZL = 'Swazi lilangeni';

    /**
     * The number of digits after the decimal separator for SZL
     *
     * @var int
     */
    public const DIGITS_SZL = 2;

    /**
     * Short name for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_SZL = 'Lilangeni';

    /**
     * Short name of minor unit for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_SZL = 'cent';

    /**
     * Symbol for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SZL = 'L';

    /**
     * Symbol of minor unit for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SZL = '';

    /**
     * Symbol of minor unit for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SZL = 1 / 100;

    /**
     * ISO-4217 Code for the Thai baht
     *
     * Countries:
     * - Thailand
     *
     * @var string
     */
    public const ALPHA_3_CODE_THB = 'THB';

    /**
     * ISO-4271 Number for the Thai baht
     *
     * @var int
     */
    public const NUMERIC_CODE_THB = 764;

    /**
     * ISO-4271 name for currency THB
     *
     * @var string
     */
    public const NAME_THB = 'Thai baht';

    /**
     * The number of digits after the decimal separator for THB
     *
     * @var int
     */
    public const DIGITS_THB = 2;

    /**
     * Short name for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_THB = 'Baht';

    /**
     * Short name of minor unit for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_THB = 'satang';

    /**
     * Symbol for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_THB = '฿';

    /**
     * Symbol of minor unit for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_THB = '';

    /**
     * Symbol of minor unit for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_THB = 1 / 100;

    /**
     * ISO-4217 Code for the Tajikistani somoni
     *
     * Countries:
     * - Tajikistan
     *
     * @var string
     */
    public const ALPHA_3_CODE_TJS = 'TJS';

    /**
     * ISO-4271 Number for the Tajikistani somoni
     *
     * @var int
     */
    public const NUMERIC_CODE_TJS = 972;

    /**
     * ISO-4271 name for currency TJS
     *
     * @var string
     */
    public const NAME_TJS = 'Tajikistani somoni';

    /**
     * The number of digits after the decimal separator for TJS
     *
     * @var int
     */
    public const DIGITS_TJS = 2;

    /**
     * Short name for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_TJS = 'Somoni';

    /**
     * Short name of minor unit for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_TJS = 'diram';

    /**
     * Symbol for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TJS = 'SM';

    /**
     * Symbol of minor unit for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TJS = '';

    /**
     * Symbol of minor unit for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TJS = 1 / 100;

    /**
     * ISO-4217 Code for the Turkmenistan manat
     *
     * Countries:
     * - Turkmenistan
     *
     * @var string
     */
    public const ALPHA_3_CODE_TMT = 'TMT';

    /**
     * ISO-4271 Number for the Turkmenistan manat
     *
     * @var int
     */
    public const NUMERIC_CODE_TMT = 934;

    /**
     * ISO-4271 name for currency TMT
     *
     * @var string
     */
    public const NAME_TMT = 'Turkmenistan manat';

    /**
     * The number of digits after the decimal separator for TMT
     *
     * @var int
     */
    public const DIGITS_TMT = 2;

    /**
     * Short name for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_TMT = 'Manat';

    /**
     * Short name of minor unit for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_TMT = 'tenge';

    /**
     * Symbol for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TMT = 'm';

    /**
     * Symbol of minor unit for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TMT = 'T';

    /**
     * Symbol of minor unit for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TMT = 1 / 100;

    /**
     * ISO-4217 Code for the Tunisian dinar
     *
     * Countries:
     * - Tunisia
     *
     * @var string
     */
    public const ALPHA_3_CODE_TND = 'TND';

    /**
     * ISO-4271 Number for the Tunisian dinar
     *
     * @var int
     */
    public const NUMERIC_CODE_TND = 788;

    /**
     * ISO-4271 name for currency TND
     *
     * @var string
     */
    public const NAME_TND = 'Tunisian dinar';

    /**
     * The number of digits after the decimal separator for TND
     *
     * @var int
     */
    public const DIGITS_TND = 3;

    /**
     * Short name for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_TND = 'Dinar';

    /**
     * Short name of minor unit for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_TND = 'milim';

    /**
     * Symbol for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TND = 'د.ت';

    /**
     * Symbol of minor unit for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TND = '';

    /**
     * Symbol of minor unit for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TND = 1 / 1000;

    /**
     * ISO-4217 Code for the Tongan paʻanga
     *
     * Countries:
     * - Tonga
     *
     * @var string
     */
    public const ALPHA_3_CODE_TOP = 'TOP';

    /**
     * ISO-4271 Number for the Tongan paʻanga
     *
     * @var int
     */
    public const NUMERIC_CODE_TOP = 776;

    /**
     * ISO-4271 name for currency TOP
     *
     * @var string
     */
    public const NAME_TOP = 'Tongan paʻanga';

    /**
     * The number of digits after the decimal separator for TOP
     *
     * @var int
     */
    public const DIGITS_TOP = 2;

    /**
     * Short name for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_TOP = 'Paʻanga';

    /**
     * Short name of minor unit for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_TOP = 'seniti';

    /**
     * Symbol for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TOP = 'T$';

    /**
     * Symbol of minor unit for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TOP = '¢';

    /**
     * Symbol of minor unit for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TOP = 1 / 100;

    /**
     * ISO-4217 Code for the Turkish lira
     *
     * Countries:
     * - Türkiye
     *
     * @var string
     */
    public const ALPHA_3_CODE_TRY = 'TRY';

    /**
     * ISO-4271 Number for the Turkish lira
     *
     * @var int
     */
    public const NUMERIC_CODE_TRY = 949;

    /**
     * ISO-4271 name for currency TRY
     *
     * @var string
     */
    public const NAME_TRY = 'Turkish lira';

    /**
     * The number of digits after the decimal separator for TRY
     *
     * @var int
     */
    public const DIGITS_TRY = 2;

    /**
     * Short name for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_TRY = 'Lira';

    /**
     * Short name of minor unit for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_TRY = 'Kuruş';

    /**
     * Symbol for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TRY = '₺';

    /**
     * Symbol of minor unit for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TRY = 'kr';

    /**
     * Symbol of minor unit for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TRY = 1 / 100;

    /**
     * ISO-4217 Code for the Trinidad and Tobago dollar
     *
     * Countries:
     * - Trinidad and Tobago
     *
     * @var string
     */
    public const ALPHA_3_CODE_TTD = 'TTD';

    /**
     * ISO-4271 Number for the Trinidad and Tobago dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_TTD = 780;

    /**
     * ISO-4271 name for currency TTD
     *
     * @var string
     */
    public const NAME_TTD = 'Trinidad and Tobago dollar';

    /**
     * The number of digits after the decimal separator for TTD
     *
     * @var int
     */
    public const DIGITS_TTD = 2;

    /**
     * Short name for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_TTD = 'Dollar';

    /**
     * Short name of minor unit for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_TTD = 'cent';

    /**
     * Symbol for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TTD = '$';

    /**
     * Symbol of minor unit for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TTD = '¢';

    /**
     * Symbol of minor unit for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TTD = 1 / 100;

    /**
     * ISO-4217 Code for the New Taiwan dollar
     *
     * Countries:
     * - Taiwan
     *
     * @var string
     */
    public const ALPHA_3_CODE_TWD = 'TWD';

    /**
     * ISO-4271 Number for the New Taiwan dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_TWD = 901;

    /**
     * ISO-4271 name for currency TWD
     *
     * @var string
     */
    public const NAME_TWD = 'New Taiwan dollar';

    /**
     * The number of digits after the decimal separator for TWD
     *
     * @var int
     */
    public const DIGITS_TWD = 2;

    /**
     * Short name for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_TWD = 'Dollar';

    /**
     * Short name of minor unit for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_TWD = 'jiao';

    /**
     * Symbol for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TWD = '圓';

    /**
     * Symbol of minor unit for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TWD = '';

    /**
     * Symbol of minor unit for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TWD = 1 / 10;

    /**
     * ISO-4217 Code for the Tanzanian shilling
     *
     * Countries:
     * - Tanzania
     *
     * @var string
     */
    public const ALPHA_3_CODE_TZS = 'TZS';

    /**
     * ISO-4271 Number for the Tanzanian shilling
     *
     * @var int
     */
    public const NUMERIC_CODE_TZS = 834;

    /**
     * ISO-4271 name for currency TZS
     *
     * @var string
     */
    public const NAME_TZS = 'Tanzanian shilling';

    /**
     * The number of digits after the decimal separator for TZS
     *
     * @var int
     */
    public const DIGITS_TZS = 2;

    /**
     * Short name for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_TZS = 'Shilingi';

    /**
     * Short name of minor unit for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_TZS = 'senti';

    /**
     * Symbol for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TZS = 'TSh';

    /**
     * Symbol of minor unit for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TZS = '';

    /**
     * Symbol of minor unit for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TZS = 1 / 100;

    /**
     * ISO-4217 Code for the Ukrainian hryvnia
     *
     * Countries:
     * - Ukraine
     *
     * @var string
     */
    public const ALPHA_3_CODE_UAH = 'UAH';

    /**
     * ISO-4271 Number for the Ukrainian hryvnia
     *
     * @var int
     */
    public const NUMERIC_CODE_UAH = 980;

    /**
     * ISO-4271 name for currency UAH
     *
     * @var string
     */
    public const NAME_UAH = 'Ukrainian hryvnia';

    /**
     * The number of digits after the decimal separator for UAH
     *
     * @var int
     */
    public const DIGITS_UAH = 2;

    /**
     * Short name for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_UAH = 'Hryvnia';

    /**
     * Short name of minor unit for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_UAH = 'kopiyka';

    /**
     * Symbol for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_UAH = '₴';

    /**
     * Symbol of minor unit for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_UAH = '';

    /**
     * Symbol of minor unit for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_UAH = 1 / 100;

    /**
     * ISO-4217 Code for the Ugandan shilling
     *
     * Countries:
     * - Uganda
     *
     * @var string
     */
    public const ALPHA_3_CODE_UGX = 'UGX';

    /**
     * ISO-4271 Number for the Ugandan shilling
     *
     * @var int
     */
    public const NUMERIC_CODE_UGX = 800;

    /**
     * ISO-4271 name for currency UGX
     *
     * @var string
     */
    public const NAME_UGX = 'Ugandan shilling';

    /**
     * The number of digits after the decimal separator for UGX
     *
     * @var int
     */
    public const DIGITS_UGX = 0;

    /**
     * Short name for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_UGX = 'Shilling';

    /**
     * Short name of minor unit for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_UGX = '';

    /**
     * Symbol for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_UGX = '';

    /**
     * Symbol of minor unit for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_UGX = '';

    /**
     * Symbol of minor unit for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_UGX = 1.0;

    /**
     * ISO-4217 Code for the United States dollar
     *
     * Countries:
     * - United States
     * - American Samoa (AS)
     * - British Indian Ocean Territory (IO) (also uses GBP)
     * - British Virgin Islands (VG)
     * - Caribbean Netherlands (BQ – Bonaire, Sint Eustatius and Saba)
     * - Ecuador (EC)
     * - El Salvador (SV)
     * - Guam (GU)
     * - Marshall Islands (MH)
     * - Federated States of Micronesia (FM)
     * - Northern Mariana Islands (MP)
     * - Palau (PW)
     * - Panama (PA) (as well as Panamanian Balboa)
     * - Puerto Rico (PR)
     * - Timor-Leste (TL)
     * - Turks and Caicos Islands (TC)
     * - U.S. Virgin Islands (VI)
     * - United States Minor Outlying Islands (UM)
     *
     * @var string
     */
    public const ALPHA_3_CODE_USD = 'USD';

    /**
     * ISO-4271 Number for the United States dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_USD = 840;

    /**
     * ISO-4271 name for currency USD
     *
     * @var string
     */
    public const NAME_USD = 'United States dollar';

    /**
     * The number of digits after the decimal separator for USD
     *
     * @var int
     */
    public const DIGITS_USD = 2;

    /**
     * Short name for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_USD = 'Dollar';

    /**
     * Short name of minor unit for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_USD = 'cent';

    /**
     * Symbol for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_USD = '$';

    /**
     * Symbol of minor unit for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_USD = '¢';

    /**
     * Symbol of minor unit for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_USD = 1 / 100;

    /**
     * ISO-4217 Code for the Uruguayan peso
     *
     * Countries:
     * - Uruguay
     *
     * @var string
     */
    public const ALPHA_3_CODE_UYU = 'UYU';

    /**
     * ISO-4271 Number for the Uruguayan peso
     *
     * @var int
     */
    public const NUMERIC_CODE_UYU = 858;

    /**
     * ISO-4271 name for currency UYU
     *
     * @var string
     */
    public const NAME_UYU = 'Uruguayan peso';

    /**
     * The number of digits after the decimal separator for UYU
     *
     * @var int
     */
    public const DIGITS_UYU = 2;

    /**
     * Short name for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_UYU = 'Peso';

    /**
     * Short name of minor unit for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_UYU = 'centésimo';

    /**
     * Symbol for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_UYU = '$';

    /**
     * Symbol of minor unit for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_UYU = '';

    /**
     * Symbol of minor unit for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_UYU = 1 / 100;

    /**
     * ISO-4217 Code for the Uzbekistan som
     *
     * Countries:
     * - Uzbekistan
     *
     * @var string
     */
    public const ALPHA_3_CODE_UZS = 'UZS';

    /**
     * ISO-4271 Number for the Uzbekistan som
     *
     * @var int
     */
    public const NUMERIC_CODE_UZS = 860;

    /**
     * ISO-4271 name for currency UZS
     *
     * @var string
     */
    public const NAME_UZS = 'Uzbekistan som';

    /**
     * The number of digits after the decimal separator for UZS
     *
     * @var int
     */
    public const DIGITS_UZS = 2;

    /**
     * Short name for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_UZS = 'Soʻm';

    /**
     * Short name of minor unit for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_UZS = 'Tiyin';

    /**
     * Symbol for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_UZS = 'сум';

    /**
     * Symbol of minor unit for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_UZS = '';

    /**
     * Symbol of minor unit for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_UZS = 1 / 100;

    /**
     * ISO-4217 Code for the Venezuelan bolívar digital
     *
     * Countries:
     * - Venezuela
     *
     * @var string
     */
    public const ALPHA_3_CODE_VED = 'VED';

    /**
     * ISO-4271 Number for the Venezuelan bolívar digital
     *
     * @var int
     */
    public const NUMERIC_CODE_VED = 926;

    /**
     * ISO-4271 name for currency VED
     *
     * @var string
     */
    public const NAME_VED = 'Venezuelan bolívar digital';

    /**
     * The number of digits after the decimal separator for VED
     *
     * @var int
     */
    public const DIGITS_VED = 2;

    /**
     * Short name for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_VED = 'Bolívar digital';

    /**
     * Short name of minor unit for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_VED = 'céntimo';

    /**
     * Symbol for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_VED = 'Bs. D';

    /**
     * Symbol of minor unit for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_VED = '';

    /**
     * Symbol of minor unit for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_VED = 1 / 100;

    /**
     * ISO-4217 Code for the Venezuelan bolívar soberano
     *
     * Countries:
     * - Venezuela
     *
     * @var string
     */
    public const ALPHA_3_CODE_VES = 'VES';

    /**
     * ISO-4271 Number for the Venezuelan bolívar soberano
     *
     * @var int
     */
    public const NUMERIC_CODE_VES = 928;

    /**
     * ISO-4271 name for currency VES
     *
     * @var string
     */
    public const NAME_VES = 'Venezuelan bolívar soberano';

    /**
     * The number of digits after the decimal separator for VES
     *
     * @var int
     */
    public const DIGITS_VES = 2;

    /**
     * Short name for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_VES = 'Bolívar soberano';

    /**
     * Short name of minor unit for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_VES = 'céntimo';

    /**
     * Symbol for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_VES = 'Bs.';

    /**
     * Symbol of minor unit for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_VES = '';

    /**
     * Symbol of minor unit for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_VES = 1 / 100;

    /**
     * ISO-4217 Code for the Vietnamese đồng
     *
     * Countries:
     * - Vietnam
     *
     * @var string
     */
    public const ALPHA_3_CODE_VND = 'VND';

    /**
     * ISO-4271 Number for the Vietnamese đồng
     *
     * @var int
     */
    public const NUMERIC_CODE_VND = 704;

    /**
     * ISO-4271 name for currency VND
     *
     * @var string
     */
    public const NAME_VND = 'Vietnamese đồng';

    /**
     * The number of digits after the decimal separator for VND
     *
     * @var int
     */
    public const DIGITS_VND = 0;

    /**
     * Short name for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_VND = 'Đồng';

    /**
     * Short name of minor unit for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_VND = 'hào';

    /**
     * Symbol for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_VND = '₫';

    /**
     * Symbol of minor unit for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_VND = '';

    /**
     * Symbol of minor unit for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_VND = 1 / 10;

    /**
     * ISO-4217 Code for the Vanuatu vatu
     *
     * Countries:
     * - Vanuatu
     *
     * @var string
     */
    public const ALPHA_3_CODE_VUV = 'VUV';

    /**
     * ISO-4271 Number for the Vanuatu vatu
     *
     * @var int
     */
    public const NUMERIC_CODE_VUV = 548;

    /**
     * ISO-4271 name for currency VUV
     *
     * @var string
     */
    public const NAME_VUV = 'Vanuatu vatu';

    /**
     * The number of digits after the decimal separator for VUV
     *
     * @var int
     */
    public const DIGITS_VUV = 0;

    /**
     * Short name for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_VUV = 'Vatu';

    /**
     * Short name of minor unit for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_VUV = '';

    /**
     * Symbol for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_VUV = 'VT';

    /**
     * Symbol of minor unit for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_VUV = '';

    /**
     * Symbol of minor unit for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_VUV = 1.0;

    /**
     * ISO-4217 Code for the Samoan tala
     *
     * Countries:
     * - Samoa
     *
     * @var string
     */
    public const ALPHA_3_CODE_WST = 'WST';

    /**
     * ISO-4271 Number for the Samoan tala
     *
     * @var int
     */
    public const NUMERIC_CODE_WST = 882;

    /**
     * ISO-4271 name for currency WST
     *
     * @var string
     */
    public const NAME_WST = 'Samoan tala';

    /**
     * The number of digits after the decimal separator for WST
     *
     * @var int
     */
    public const DIGITS_WST = 2;

    /**
     * Short name for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_WST = 'Tālā';

    /**
     * Short name of minor unit for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_WST = 'sene';

    /**
     * Symbol for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_WST = '$';

    /**
     * Symbol of minor unit for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_WST = '';

    /**
     * Symbol of minor unit for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_WST = 1 / 100;

    /**
     * ISO-4217 Code for the CFA franc BEAC
     *
     * Countries:
     * - Cameroon (CM)
     * - Central African Republic (CF)
     * - Republic of the Congo (CG)
     * - Chad (TD)
     * - Equatorial Guinea (GQ)
     * - Gabon (GA)
     *
     * @var string
     */
    public const ALPHA_3_CODE_XAF = 'XAF';

    /**
     * ISO-4271 Number for the CFA franc BEAC
     *
     * @var int
     */
    public const NUMERIC_CODE_XAF = 950;

    /**
     * ISO-4271 name for currency XAF
     *
     * @var string
     */
    public const NAME_XAF = 'CFA franc BEAC';

    /**
     * The number of digits after the decimal separator for XAF
     *
     * @var int
     */
    public const DIGITS_XAF = 0;

    /**
     * Short name for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_XAF = 'Franc';

    /**
     * Short name of minor unit for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_XAF = 'centime';

    /**
     * Symbol for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_XAF = 'FCFA';

    /**
     * Symbol of minor unit for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_XAF = 'c';

    /**
     * Symbol of minor unit for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_XAF = 1 / 100;

    /**
     * ISO-4217 Code for the East Caribbean dollar
     *
     * Countries:
     * - Anguilla (AI)
     * - Antigua and Barbuda (AG)
     * - Dominica (DM)
     * - Grenada (GD)
     * - Montserrat (MS)
     * - Saint Kitts and Nevis (KN)
     * - Saint Lucia (LC)
     * - Saint Vincent and the Grenadines (VC)
     *
     * @var string
     */
    public const ALPHA_3_CODE_XCD = 'XCD';

    /**
     * ISO-4271 Number for the East Caribbean dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_XCD = 951;

    /**
     * ISO-4271 name for currency XCD
     *
     * @var string
     */
    public const NAME_XCD = 'East Caribbean dollar';

    /**
     * The number of digits after the decimal separator for XCD
     *
     * @var int
     */
    public const DIGITS_XCD = 2;

    /**
     * Short name for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_XCD = 'Dollar';

    /**
     * Short name of minor unit for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_XCD = 'cent';

    /**
     * Symbol for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_XCD = 'EC$';

    /**
     * Symbol of minor unit for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_XCD = '';

    /**
     * Symbol of minor unit for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_XCD = 1 / 100;

    /**
     * ISO-4217 Code for the CFA franc BCEAO
     *
     * Countries:
     * - Benin (BJ)
     * - Burkina Faso (BF)
     * - Côte d'Ivoire (CI)
     * - Guinea-Bissau (GW)
     * - Mali (ML)
     * - Niger (NE)
     * - Senegal (SN)
     * - Togo (TG)
     *
     * @var string
     */
    public const ALPHA_3_CODE_XOF = 'XOF';

    /**
     * ISO-4271 Number for the CFA franc BCEAO
     *
     * @var int
     */
    public const NUMERIC_CODE_XOF = 952;

    /**
     * ISO-4271 name for currency XOF
     *
     * @var string
     */
    public const NAME_XOF = 'CFA franc BCEAO';

    /**
     * The number of digits after the decimal separator for XOF
     *
     * @var int
     */
    public const DIGITS_XOF = 0;

    /**
     * Short name for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_XOF = 'Franc';

    /**
     * Short name of minor unit for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_XOF = 'centime';

    /**
     * Symbol for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_XOF = 'CFA';

    /**
     * Symbol of minor unit for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_XOF = 'c';

    /**
     * Symbol of minor unit for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_XOF = 1 / 100;

    /**
     * ISO-4217 Code for the CFP franc (franc Pacifique)
     *
     * Countries:
     * - French Polynesia (PF)
     * - New Caledonia (NC)
     * - Wallis and Futuna (WF)
     *
     * @var string
     */
    public const ALPHA_3_CODE_XPF = 'XPF';

    /**
     * ISO-4271 Number for the CFP franc (franc Pacifique)
     *
     * @var int
     */
    public const NUMERIC_CODE_XPF = 953;

    /**
     * ISO-4271 name for currency XPF
     *
     * @var string
     */
    public const NAME_XPF = 'CFP franc (franc Pacifique)';

    /**
     * The number of digits after the decimal separator for XPF
     *
     * @var int
     */
    public const DIGITS_XPF = 0;

    /**
     * Short name for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_XPF = 'Franc';

    /**
     * Short name of minor unit for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_XPF = '';

    /**
     * Symbol for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_XPF = '₣';

    /**
     * Symbol of minor unit for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_XPF = '';

    /**
     * Symbol of minor unit for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_XPF = 1.0;

    /**
     * ISO-4217 Code for the Yemeni rial
     *
     * Countries:
     * - Yemen
     *
     * @var string
     */
    public const ALPHA_3_CODE_YER = 'YER';

    /**
     * ISO-4271 Number for the Yemeni rial
     *
     * @var int
     */
    public const NUMERIC_CODE_YER = 886;

    /**
     * ISO-4271 name for currency YER
     *
     * @var string
     */
    public const NAME_YER = 'Yemeni rial';

    /**
     * The number of digits after the decimal separator for YER
     *
     * @var int
     */
    public const DIGITS_YER = 2;

    /**
     * Short name for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_YER = 'Rial';

    /**
     * Short name of minor unit for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_YER = 'fils';

    /**
     * Symbol for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_YER = '﷼';

    /**
     * Symbol of minor unit for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_YER = '';

    /**
     * Symbol of minor unit for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_YER = 1 / 100;

    /**
     * ISO-4217 Code for the South African rand
     *
     * Countries:
     * - Eswatini
     * - Lesotho
     * - Namibia
     * - South Africa
     *
     * @var string
     */
    public const ALPHA_3_CODE_ZAR = 'ZAR';

    /**
     * ISO-4271 Number for the South African rand
     *
     * @var int
     */
    public const NUMERIC_CODE_ZAR = 710;

    /**
     * ISO-4271 name for currency ZAR
     *
     * @var string
     */
    public const NAME_ZAR = 'South African rand';

    /**
     * The number of digits after the decimal separator for ZAR
     *
     * @var int
     */
    public const DIGITS_ZAR = 2;

    /**
     * Short name for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ZAR = 'Rand';

    /**
     * Short name of minor unit for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ZAR = 'cent';

    /**
     * Symbol for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ZAR = 'R';

    /**
     * Symbol of minor unit for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ZAR = 'c';

    /**
     * Symbol of minor unit for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ZAR = 1 / 100;

    /**
     * ISO-4217 Code for the Zambian kwacha
     *
     * Countries:
     * - Zambia
     *
     * @var string
     */
    public const ALPHA_3_CODE_ZMW = 'ZMW';

    /**
     * ISO-4271 Number for the Zambian kwacha
     *
     * @var int
     */
    public const NUMERIC_CODE_ZMW = 967;

    /**
     * ISO-4271 name for currency ZMW
     *
     * @var string
     */
    public const NAME_ZMW = 'Zambian kwacha';

    /**
     * The number of digits after the decimal separator for ZMW
     *
     * @var int
     */
    public const DIGITS_ZMW = 2;

    /**
     * Short name for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ZMW = 'Kwacha';

    /**
     * Short name of minor unit for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ZMW = 'ngwee';

    /**
     * Symbol for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ZMW = 'K';

    /**
     * Symbol of minor unit for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ZMW = '';

    /**
     * Symbol of minor unit for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ZMW = 1 / 100;

    /**
     * ISO-4217 Code for the Zimbabwean dollar
     *
     * Countries:
     * - Zimbabwe
     *
     * @var string
     */
    public const ALPHA_3_CODE_ZWL = 'ZWL';

    /**
     * ISO-4271 Number for the Zimbabwean dollar
     *
     * @var int
     */
    public const NUMERIC_CODE_ZWL = 932;

    /**
     * ISO-4271 name for currency ZWL
     *
     * @var string
     */
    public const NAME_ZWL = 'Zimbabwean dollar';

    /**
     * The number of digits after the decimal separator for ZWL
     *
     * @var int
     */
    public const DIGITS_ZWL = 2;

    /**
     * Short name for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_NAME_ZWL = 'Dollar';

    /**
     * Short name of minor unit for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_NAME_ZWL = 'cent';

    /**
     * Symbol for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     *
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ZWL = '$';

    /**
     * Symbol of minor unit for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     *
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ZWL = '';

    /**
     * Symbol of minor unit for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     *
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ZWL = 1 / 100;
}
