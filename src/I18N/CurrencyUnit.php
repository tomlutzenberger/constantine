<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\I18N;

/**
 * Collection of currency units for ISO 4217 currencies
 *
 * These are NOT defined in the official ISO standard
 *
 * @package   TomLutzenberger\Constantine\I18N
 * @copyright 2021 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class CurrencyUnit
{
    /**
     * Short name for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     * @var string
     */
    public const MAJOR_UNIT_NAME_AED = 'Dirham';

    /**
     * Short name of minor unit for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     * @var string
     */
    public const MINOR_UNIT_NAME_AED = 'Fils';

    /**
     * Symbol for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AED = 'د.إ';

    /**
     * Symbol of minor unit for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AED = 'فلس';

    /**
     * Symbol of minor unit for currency AED
     *
     * @see https://en.wikipedia.org/wiki/United_Arab_Emirates_dirham
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AED = 1 / 100;


    /**
     * Short name for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     * @var string
     */
    public const MAJOR_UNIT_NAME_AFN = 'Afghani';

    /**
     * Short name of minor unit for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     * @see https://en.wikipedia.org/wiki/Afghan_pul
     * @var string
     */
    public const MINOR_UNIT_NAME_AFN = 'Pul';

    /**
     * Symbol for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AFN = '؋';

    /**
     * Symbol of minor unit for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     * @see https://en.wikipedia.org/wiki/Afghan_pul
     * @var string
     * TODO: To be figured out
     */
    public const MINOR_UNIT_SYMBOL_AFN = '';

    /**
     * Symbol of minor unit for currency AFN
     *
     * @see https://en.wikipedia.org/wiki/Afghan_afghani
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AFN = 1 / 100;


    /**
     * Short name for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     * @var string
     */
    public const MAJOR_UNIT_NAME_ALL = 'lek';

    /**
     * Short name of minor unit for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     * @var string
     */
    public const MINOR_UNIT_NAME_ALL = 'qindarkë';

    /**
     * Symbol for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ALL = 'L';

    /**
     * Symbol of minor unit for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     * @var string
     * TODO
     */
    public const MINOR_UNIT_SYMBOL_ALL = '';

    /**
     * Symbol of minor unit for currency ALL
     *
     * @see https://en.wikipedia.org/wiki/Albanian_lek
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ALL = 1 / 100;


    /**
     * Short name for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     * @var string
     */
    public const MAJOR_UNIT_NAME_AMD = 'dram';

    /**
     * Short name of minor unit for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     * @var string
     */
    public const MINOR_UNIT_NAME_AMD = 'luma';

    /**
     * Symbol for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AMD = '֏';

    /**
     * Symbol of minor unit for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     * @var string
     * TODO
     */
    public const MINOR_UNIT_SYMBOL_AMD = '';

    /**
     * Symbol of minor unit for currency AMD
     *
     * @see https://en.wikipedia.org/wiki/Armenian_dram
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AMD = 1 / 100;


    /**
     * Short name for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     * @var string
     */
    public const MAJOR_UNIT_NAME_ANG = 'guilder';

    /**
     * Short name of minor unit for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     * @var string
     */
    public const MINOR_UNIT_NAME_ANG = 'cent';

    /**
     * Symbol for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ANG = 'ƒ';

    /**
     * Symbol of minor unit for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     * @var string
     * TODO
     */
    public const MINOR_UNIT_SYMBOL_ANG = '';

    /**
     * Symbol of minor unit for currency ANG
     *
     * @see https://en.wikipedia.org/wiki/Netherlands_Antillean_guilder
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ANG = 1 / 100;


    /**
     * Short name for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     * @var string
     */
    public const MAJOR_UNIT_NAME_AOA = 'kwanza';

    /**
     * Short name of minor unit for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     * @var string
     */
    public const MINOR_UNIT_NAME_AOA = 'cêntimo';

    /**
     * Symbol for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AOA = 'Kz';

    /**
     * Symbol of minor unit for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     * @var string
     * TODO
     */
    public const MINOR_UNIT_SYMBOL_AOA = '';

    /**
     * Symbol of minor unit for currency AOA
     *
     * @see https://en.wikipedia.org/wiki/Angolan_kwanza
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AOA = 1 / 100;


    /**
     * Short name for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_ARS = 'peso';

    /**
     * Short name of minor unit for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_ARS = 'centavo';

    /**
     * Symbol for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ARS = '$';

    /**
     * Symbol of minor unit for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ARS = '';

    /**
     * Symbol of minor unit for currency ARS
     *
     * @see https://en.wikipedia.org/wiki/Argentine_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ARS = 1 / 100;


    /**
     * Short name for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_AUD = 'Australian dollar';

    /**
     * Short name of minor unit for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_AUD = 'cent';

    /**
     * Symbol for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AUD = '$';

    /**
     * Symbol of minor unit for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AUD = 'c';

    /**
     * Symbol of minor unit for currency AUD
     *
     * @see https://en.wikipedia.org/wiki/Australian_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AUD = 1 / 100;


    /**
     * Short name for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     * @var string
     */
    public const MAJOR_UNIT_NAME_AWG = 'florin';

    /**
     * Short name of minor unit for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     * @var string
     */
    public const MINOR_UNIT_NAME_AWG = 'cent';

    /**
     * Symbol for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AWG = 'ƒ';

    /**
     * Symbol of minor unit for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AWG = '';

    /**
     * Symbol of minor unit for currency AWG
     *
     * @see https://en.wikipedia.org/wiki/Aruban_florin
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AWG = 1 / 100;


    /**
     * Short name for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     * @var string
     */
    public const MAJOR_UNIT_NAME_AZN = 'manat';

    /**
     * Short name of minor unit for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     * @var string
     */
    public const MINOR_UNIT_NAME_AZN = 'qəpik';

    /**
     * Symbol for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_AZN = '₼';

    /**
     * Symbol of minor unit for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_AZN = '';

    /**
     * Symbol of minor unit for currency AZN
     *
     * @see https://en.wikipedia.org/wiki/Azerbaijani_manat
     * @var float
     */
    public const MAJOR_MINOR_RATIO_AZN = 1 / 100;


    /**
     * Short name for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     * @var string
     */
    public const MAJOR_UNIT_NAME_BAM = 'mark';

    /**
     * Short name of minor unit for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     * @var string
     */
    public const MINOR_UNIT_NAME_BAM = 'pfenig';

    /**
     * Symbol for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BAM = 'KM';

    /**
     * Symbol of minor unit for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BAM = 'pf';

    /**
     * Symbol of minor unit for currency BAM
     *
     * @see https://en.wikipedia.org/wiki/Bosnia_and_Herzegovina_convertible_mark
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BAM = 1 / 100;


    /**
     * Short name for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_BBD = 'dollar';

    /**
     * Short name of minor unit for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_BBD = 'cent';

    /**
     * Symbol for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BBD = '$';

    /**
     * Symbol of minor unit for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BBD = 'c';

    /**
     * Symbol of minor unit for currency BBD
     *
     * @see https://en.wikipedia.org/wiki/Barbadian_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BBD = 1 / 100;


    /**
     * Short name for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     * @var string
     */
    public const MAJOR_UNIT_NAME_BDT = 'taka';

    /**
     * Short name of minor unit for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     * @var string
     */
    public const MINOR_UNIT_NAME_BDT = 'poysha';

    /**
     * Symbol for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BDT = '৳';

    /**
     * Symbol of minor unit for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BDT = 'p';

    /**
     * Symbol of minor unit for currency BDT
     *
     * @see https://en.wikipedia.org/wiki/Bangladeshi_taka
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BDT = 1 / 100;


    /**
     * Short name for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     * @var string
     */
    public const MAJOR_UNIT_NAME_BGN = 'lev';

    /**
     * Short name of minor unit for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     * @var string
     */
    public const MINOR_UNIT_NAME_BGN = 'stotinka';

    /**
     * Symbol for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BGN = 'лв';

    /**
     * Symbol of minor unit for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BGN = '';

    /**
     * Symbol of minor unit for currency BGN
     *
     * @see https://en.wikipedia.org/wiki/Bulgarian_lev
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BGN = 1 / 100;


    /**
     * Short name for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     * @var string
     */
    public const MAJOR_UNIT_NAME_BHD = 'dinar';

    /**
     * Short name of minor unit for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     * @var string
     */
    public const MINOR_UNIT_NAME_BHD = 'fils';

    /**
     * Symbol for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BHD = '.د.ب';

    /**
     * Symbol of minor unit for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BHD = '';

    /**
     * Symbol of minor unit for currency BHD
     *
     * @see https://en.wikipedia.org/wiki/Bahraini_dinar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BHD = 1 / 1000;


    /**
     * Short name for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_BIF = 'franc';

    /**
     * Short name of minor unit for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_BIF = 'centime';

    /**
     * Symbol for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BIF = 'FBu';

    /**
     * Symbol of minor unit for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BIF = '';

    /**
     * Symbol of minor unit for currency BIF
     *
     * @see https://en.wikipedia.org/wiki/Burundian_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BIF = 1 / 100;


    /**
     * Short name for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_BMD = 'Bermudian dollar';

    /**
     * Short name of minor unit for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_BMD = 'cent';

    /**
     * Symbol for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BMD = '$';

    /**
     * Symbol of minor unit for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BMD = 'cent';

    /**
     * Symbol of minor unit for currency BMD
     *
     * @see https://en.wikipedia.org/wiki/Bermudian_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BMD = 1 / 100;


    /**
     * Short name for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_BND = 'Brunei dollar';

    /**
     * Short name of minor unit for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_BND = 'sen';

    /**
     * Symbol for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BND = 'B$';

    /**
     * Symbol of minor unit for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BND = '';

    /**
     * Symbol of minor unit for currency BND
     *
     * @see https://en.wikipedia.org/wiki/Brunei_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BND = 1 / 100;


    /**
     * Short name for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     * @var string
     */
    public const MAJOR_UNIT_NAME_BOB = 'boliviano';

    /**
     * Short name of minor unit for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     * @var string
     */
    public const MINOR_UNIT_NAME_BOB = 'centavo';

    /**
     * Symbol for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BOB = 'Bs';

    /**
     * Symbol of minor unit for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BOB = 'c.';

    /**
     * Symbol of minor unit for currency BOB
     *
     * @see https://en.wikipedia.org/wiki/Bolivian_boliviano
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BOB = 1 / 100;


    /**
     * Short name for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     * @var string
     */
    public const MAJOR_UNIT_NAME_BRL = 'real';

    /**
     * Short name of minor unit for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     * @var string
     */
    public const MINOR_UNIT_NAME_BRL = 'centavo';

    /**
     * Symbol for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BRL = 'R$';

    /**
     * Symbol of minor unit for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BRL = '';

    /**
     * Symbol of minor unit for currency BRL
     *
     * @see https://en.wikipedia.org/wiki/Brazilian_real
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BRL = 1 / 100;


    /**
     * Short name for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_BSD = 'dollar';

    /**
     * Short name of minor unit for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_BSD = 'cent';

    /**
     * Symbol for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BSD = 'B$';

    /**
     * Symbol of minor unit for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BSD = '';

    /**
     * Symbol of minor unit for currency BSD
     *
     * @see https://en.wikipedia.org/wiki/Bahamian_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BSD = 1 / 100;


    /**
     * Short name for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     * @var string
     */
    public const MAJOR_UNIT_NAME_BTN = 'ngultrum';

    /**
     * Short name of minor unit for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     * @var string
     */
    public const MINOR_UNIT_NAME_BTN = 'chhertum';

    /**
     * Symbol for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BTN = 'Nu.';

    /**
     * Symbol of minor unit for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BTN = 'Ch.';

    /**
     * Symbol of minor unit for currency BTN
     *
     * @see https://en.wikipedia.org/wiki/Bhutanese_ngultrum
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BTN = 1 / 100;


    /**
     * Short name for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     * @var string
     */
    public const MAJOR_UNIT_NAME_BWP = 'pula';

    /**
     * Short name of minor unit for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     * @var string
     */
    public const MINOR_UNIT_NAME_BWP = 'thebe';

    /**
     * Symbol for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BWP = 'P';

    /**
     * Symbol of minor unit for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BWP = '';

    /**
     * Symbol of minor unit for currency BWP
     *
     * @see https://en.wikipedia.org/wiki/Botswana_pula
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BWP = 1 / 100;


    /**
     * Short name for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     * @var string
     */
    public const MAJOR_UNIT_NAME_BYN = 'ruble';

    /**
     * Short name of minor unit for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     * @var string
     */
    public const MINOR_UNIT_NAME_BYN = 'kapiejka';

    /**
     * Symbol for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BYN = 'Br';

    /**
     * Symbol of minor unit for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BYN = '';

    /**
     * Symbol of minor unit for currency BYN
     *
     * @see https://en.wikipedia.org/wiki/Belarusian_ruble
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BYN = 1 / 100;


    /**
     * Short name for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_BZD = 'Belize dollar';

    /**
     * Short name of minor unit for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_BZD = 'cent';

    /**
     * Symbol for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_BZD = '$';

    /**
     * Symbol of minor unit for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_BZD = '';

    /**
     * Symbol of minor unit for currency BZD
     *
     * @see https://en.wikipedia.org/wiki/Belize_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_BZD = 1 / 100;


    /**
     * Short name for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_CAD = 'Canadian dollar';

    /**
     * Short name of minor unit for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_CAD = 'Cent';

    /**
     * Symbol for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CAD = '$';

    /**
     * Symbol of minor unit for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CAD = '¢';

    /**
     * Symbol of minor unit for currency CAD
     *
     * @see https://en.wikipedia.org/wiki/Canadian_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CAD = 1 / 100;


    /**
     * Short name for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_CDF = 'Congolese franc';

    /**
     * Short name of minor unit for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_CDF = 'centime';

    /**
     * Symbol for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CDF = 'FC';

    /**
     * Symbol of minor unit for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CDF = '';

    /**
     * Symbol of minor unit for currency CDF
     *
     * @see https://en.wikipedia.org/wiki/Congolese_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CDF = 1 / 100;


    /**
     * Short name for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_CHF = 'Franken';

    /**
     * Short name of minor unit for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_CHF = 'Rappen';

    /**
     * Symbol for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CHF = 'Fr.';

    /**
     * Symbol of minor unit for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CHF = 'Rp.';

    /**
     * Symbol of minor unit for currency CHF
     *
     * @see https://en.wikipedia.org/wiki/Swiss_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CHF = 1 / 100;


    /**
     * Short name for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_CLP = 'peso';

    /**
     * Short name of minor unit for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_CLP = 'centavo';

    /**
     * Symbol for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CLP = '$';

    /**
     * Symbol of minor unit for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CLP = '';

    /**
     * Symbol of minor unit for currency CLP
     *
     * @see https://en.wikipedia.org/wiki/Chilean_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CLP = 1 / 100;


    /**
     * Short name for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     * @var string
     */
    public const MAJOR_UNIT_NAME_CNY = 'yuán';

    /**
     * Short name of minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     * @var string
     */
    public const MINOR_UNIT_NAME_CNY = 'jiǎo';

    /**
     * Short name of sub-minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     * @var string
     */
    public const SUB_MINOR_UNIT_NAME_CNY = 'fēn';

    /**
     * Symbol for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CNY = '元';

    /**
     * Symbol of minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CNY = '角';

    /**
     * Symbol of sub-minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     * @var string
     */
    public const SUB_MINOR_UNIT_SYMBOL_CNY = '分';

    /**
     * Symbol of minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CNY = 1 / 10;

    /**
     * Symbol of sub-minor unit for currency CNY
     *
     * @see https://en.wikipedia.org/wiki/Renminbi
     * @var float
     */
    public const SUB_MINOR_UNIT_RATIO_CNY = 1 / 100;


    /**
     * Short name for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_COP = 'peso';

    /**
     * Short name of minor unit for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_COP = 'centavo';

    /**
     * Symbol for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_COP = '$';

    /**
     * Symbol of minor unit for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_COP = '';

    /**
     * Symbol of minor unit for currency COP
     *
     * @see https://en.wikipedia.org/wiki/Colombian_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_COP = 1 / 100;


    /**
     * Short name for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     * @var string
     */
    public const MAJOR_UNIT_NAME_CRC = 'colón';

    /**
     * Short name of minor unit for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     * @var string
     */
    public const MINOR_UNIT_NAME_CRC = 'céntimo'; // NOSONAR - php:S1192

    /**
     * Symbol for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CRC = '₡';

    /**
     * Symbol of minor unit for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CRC = '';

    /**
     * Symbol of minor unit for currency CRC
     *
     * @see https://en.wikipedia.org/wiki/Costa_Rican_col%C3%B3n
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CRC = 1 / 100;


    /**
     * Short name for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_CUC = 'convertible peso';

    /**
     * Short name of minor unit for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_CUC = 'centavo convertible';

    /**
     * Symbol for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CUC = '$';

    /**
     * Symbol of minor unit for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CUC = '¢';

    /**
     * Symbol of minor unit for currency CUC
     *
     * @see https://en.wikipedia.org/wiki/Cuban_convertible_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CUC = 1 / 100;


    /**
     * Short name for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_CUP = 'Cuban Peso';

    /**
     * Short name of minor unit for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_CUP = 'centavo';

    /**
     * Symbol for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CUP = '₱';

    /**
     * Symbol of minor unit for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CUP = '¢';

    /**
     * Symbol of minor unit for currency CUP
     *
     * @see https://en.wikipedia.org/wiki/Cuban_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CUP = 1 / 100;


    /**
     * Short name for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     * @var string
     */
    public const MAJOR_UNIT_NAME_CVE = 'escudo';

    /**
     * Short name of minor unit for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     * @var string
     */
    public const MINOR_UNIT_NAME_CVE = 'centavo';

    /**
     * Symbol for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CVE = '$';

    /**
     * Symbol of minor unit for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CVE = '';

    /**
     * Symbol of minor unit for currency CVE
     *
     * @see https://en.wikipedia.org/wiki/Cape_Verdean_escudo
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CVE = 1 / 100;


    /**
     * Short name for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     * @var string
     */
    public const MAJOR_UNIT_NAME_CZK = 'koruna';

    /**
     * Short name of minor unit for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     * @var string
     */
    public const MINOR_UNIT_NAME_CZK = 'haléř';

    /**
     * Symbol for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_CZK = 'Kč';

    /**
     * Symbol of minor unit for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_CZK = 'h';

    /**
     * Symbol of minor unit for currency CZK
     *
     * @see https://en.wikipedia.org/wiki/Czech_koruna
     * @var float
     */
    public const MAJOR_MINOR_RATIO_CZK = 1 / 100;


    /**
     * Short name for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_DJF = 'Djiboutian franc';

    /**
     * Short name of minor unit for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_DJF = 'centime';

    /**
     * Symbol for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_DJF = 'Fdj';

    /**
     * Symbol of minor unit for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_DJF = '';

    /**
     * Symbol of minor unit for currency DJF
     *
     * @see https://en.wikipedia.org/wiki/Djiboutian_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_DJF = 1 / 100;


    /**
     * Short name for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     * @var string
     */
    public const MAJOR_UNIT_NAME_DKK = 'krone';

    /**
     * Short name of minor unit for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     * @var string
     */
    public const MINOR_UNIT_NAME_DKK = 'øre';

    /**
     * Symbol for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_DKK = 'kr.';

    /**
     * Symbol of minor unit for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_DKK = '';

    /**
     * Symbol of minor unit for currency DKK
     *
     * @see https://en.wikipedia.org/wiki/Danish_krone
     * @var float
     */
    public const MAJOR_MINOR_RATIO_DKK = 1 / 100;


    /**
     * Short name for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_DOP = 'Peso dominicano';

    /**
     * Short name of minor unit for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_DOP = 'centavo';

    /**
     * Symbol for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_DOP = '$';

    /**
     * Symbol of minor unit for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_DOP = '';

    /**
     * Symbol of minor unit for currency DOP
     *
     * @see https://en.wikipedia.org/wiki/Dominican_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_DOP = 1 / 100;


    /**
     * Short name for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     * @var string
     */
    public const MAJOR_UNIT_NAME_DZD = 'dinar';

    /**
     * Short name of minor unit for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     * @var string
     */
    public const MINOR_UNIT_NAME_DZD = 'centime';

    /**
     * Symbol for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_DZD = 'دج';

    /**
     * Symbol of minor unit for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_DZD = '';

    /**
     * Symbol of minor unit for currency DZD
     *
     * @see https://en.wikipedia.org/wiki/Algerian_dinar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_DZD = 1 / 100;


    /**
     * Short name for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     * @var string
     */
    public const MAJOR_UNIT_NAME_EGP = 'Pound';

    /**
     * Short name of minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     * @var string
     */
    public const MINOR_UNIT_NAME_EGP = 'Piastre';

    /**
     * Short name of sub-minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     * @var string
     */
    public const SUB_MINOR_UNIT_NAME_EGP = 'Millieme';

    /**
     * Symbol for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_EGP = '£';

    /**
     * Symbol of minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_EGP = 'pt.';

    /**
     * Symbol of sub-minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     * @var string
     */
    public const SUB_MINOR_UNIT_SYMBOL_EGP = '';

    /**
     * Symbol of minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     * @var float
     */
    public const MAJOR_MINOR_RATIO_EGP = 1 / 100;

    /**
     * Symbol of sub-minor unit for currency EGP
     *
     * @see https://en.wikipedia.org/wiki/Egyptian_pound
     * @var float
     */
    public const SUB_MINOR_UNIT_RATIO_EGP = 1 / 1000;


    /**
     * Short name for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     * @var string
     */
    public const MAJOR_UNIT_NAME_ERN = 'nakfa';

    /**
     * Short name of minor unit for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     * @var string
     */
    public const MINOR_UNIT_NAME_ERN = 'cent';

    /**
     * Symbol for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ERN = 'Nkf';

    /**
     * Symbol of minor unit for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ERN = '';

    /**
     * Symbol of minor unit for currency ERN
     *
     * @see https://en.wikipedia.org/wiki/Eritrean_nakfa
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ERN = 1 / 100;


    /**
     * Short name for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     * @var string
     */
    public const MAJOR_UNIT_NAME_ETB = 'birr';

    /**
     * Short name of minor unit for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     * @var string
     */
    public const MINOR_UNIT_NAME_ETB = 'santim';

    /**
     * Symbol for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ETB = 'Br';

    /**
     * Symbol of minor unit for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ETB = '';

    /**
     * Symbol of minor unit for currency ETB
     *
     * @see https://en.wikipedia.org/wiki/Ethiopian_birr
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ETB = 1 / 100;


    /**
     * Short name for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     * @var string
     */
    public const MAJOR_UNIT_NAME_EUR = 'Euro';

    /**
     * Short name of minor unit for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     * @var string
     */
    public const MINOR_UNIT_NAME_EUR = 'cent';

    /**
     * Symbol for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_EUR = '€';

    /**
     * Symbol of minor unit for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_EUR = 'c';

    /**
     * Symbol of minor unit for currency EUR
     *
     * @see https://en.wikipedia.org/wiki/Euro
     * @var float
     */
    public const MAJOR_MINOR_RATIO_EUR = 1 / 100;


    /**
     * Short name for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_FJD = 'Fijian dollar';

    /**
     * Short name of minor unit for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_FJD = 'cent';

    /**
     * Symbol for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_FJD = 'FJ$';

    /**
     * Symbol of minor unit for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_FJD = 'c';

    /**
     * Symbol of minor unit for currency FJD
     *
     * @see https://en.wikipedia.org/wiki/Fijian_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_FJD = 1 / 100;


    /**
     * Short name for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     * @var string
     */
    public const MAJOR_UNIT_NAME_FKP = 'Pound';

    /**
     * Short name of minor unit for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     * @var string
     */
    public const MINOR_UNIT_NAME_FKP = 'penny';

    /**
     * Symbol for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_FKP = '£';

    /**
     * Symbol of minor unit for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_FKP = 'p';

    /**
     * Symbol of minor unit for currency FKP
     *
     * @see https://en.wikipedia.org/wiki/Falkland_Islands_pound
     * @var float
     */
    public const MAJOR_MINOR_RATIO_FKP = 1 / 100;


    /**
     * Short name for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     * @var string
     */
    public const MAJOR_UNIT_NAME_GBP = 'Pound';

    /**
     * Short name of minor unit for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     * @var string
     */
    public const MINOR_UNIT_NAME_GBP = 'Penny';

    /**
     * Symbol for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GBP = '£';

    /**
     * Symbol of minor unit for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GBP = 'p';

    /**
     * Symbol of minor unit for currency GBP
     *
     * @see https://en.wikipedia.org/wiki/Pound_sterling
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GBP = 1 / 100;


    /**
     * Short name for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     * @var string
     */
    public const MAJOR_UNIT_NAME_GEL = 'Lari';

    /**
     * Short name of minor unit for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     * @var string
     */
    public const MINOR_UNIT_NAME_GEL = 'Tetri';

    /**
     * Symbol for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GEL = '₾';

    /**
     * Symbol of minor unit for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GEL = '';

    /**
     * Symbol of minor unit for currency GEL
     *
     * @see https://en.wikipedia.org/wiki/Georgian_lari
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GEL = 1 / 100;


    /**
     * Short name for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     * @var string
     */
    public const MAJOR_UNIT_NAME_GHS = 'Cedi';

    /**
     * Short name of minor unit for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     * @var string
     */
    public const MINOR_UNIT_NAME_GHS = 'pesewa';

    /**
     * Symbol for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GHS = 'GH₵';

    /**
     * Symbol of minor unit for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GHS = 'Gp';

    /**
     * Symbol of minor unit for currency GHS
     *
     * @see https://en.wikipedia.org/wiki/Ghanaian_cedi
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GHS = 1 / 100;


    /**
     * Short name for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     * @var string
     */
    public const MAJOR_UNIT_NAME_GIP = 'Pound';

    /**
     * Short name of minor unit for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     * @var string
     */
    public const MINOR_UNIT_NAME_GIP = 'Penny';

    /**
     * Symbol for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GIP = '£';

    /**
     * Symbol of minor unit for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GIP = 'p';

    /**
     * Symbol of minor unit for currency GIP
     *
     * @see https://en.wikipedia.org/wiki/Gibraltar_pound
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GIP = 1 / 100;


    /**
     * Short name for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     * @var string
     */
    public const MAJOR_UNIT_NAME_GMD = 'Dalasi';

    /**
     * Short name of minor unit for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     * @var string
     */
    public const MINOR_UNIT_NAME_GMD = 'butut';

    /**
     * Symbol for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GMD = 'D';

    /**
     * Symbol of minor unit for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GMD = '';

    /**
     * Symbol of minor unit for currency GMD
     *
     * @see https://en.wikipedia.org/wiki/Gambian_dalasi
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GMD = 1 / 100;


    /**
     * Short name for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_GNF = 'Franc';

    /**
     * Short name of minor unit for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_GNF = 'centime';

    /**
     * Symbol for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GNF = 'FG';

    /**
     * Symbol of minor unit for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GNF = '';

    /**
     * Symbol of minor unit for currency GNF
     *
     * @see https://en.wikipedia.org/wiki/Guinean_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GNF = 1 / 100;


    /**
     * Short name for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     * @var string
     */
    public const MAJOR_UNIT_NAME_GTQ = 'Quetzal';

    /**
     * Short name of minor unit for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     * @var string
     */
    public const MINOR_UNIT_NAME_GTQ = 'centavo';

    /**
     * Symbol for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GTQ = 'Q';

    /**
     * Symbol of minor unit for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GTQ = '';

    /**
     * Symbol of minor unit for currency GTQ
     *
     * @see https://en.wikipedia.org/wiki/Guatemalan_quetzal
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GTQ = 1 / 100;


    /**
     * Short name for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_GYD = 'Dollar';

    /**
     * Short name of minor unit for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_GYD = 'cent';

    /**
     * Symbol for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_GYD = '$';

    /**
     * Symbol of minor unit for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_GYD = '';

    /**
     * Symbol of minor unit for currency GYD
     *
     * @see https://en.wikipedia.org/wiki/Guyanese_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_GYD = 1 / 100;


    /**
     * Short name for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_HKD = 'Dollar';

    /**
     * Short name of minor unit for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_HKD = 'sīn';

    /**
     * Symbol for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HKD = '$';

    /**
     * Symbol of minor unit for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HKD = '¢';

    /**
     * Symbol of minor unit for currency HKD
     *
     * @see https://en.wikipedia.org/wiki/Hong_Kong_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HKD = 1 / 100;


    /**
     * Short name for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     * @var string
     */
    public const MAJOR_UNIT_NAME_HNL = 'Lempira';

    /**
     * Short name of minor unit for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     * @var string
     */
    public const MINOR_UNIT_NAME_HNL = 'centavo';

    /**
     * Symbol for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HNL = 'L';

    /**
     * Symbol of minor unit for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HNL = '';

    /**
     * Symbol of minor unit for currency HNL
     *
     * @see https://en.wikipedia.org/wiki/Honduran_lempira
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HNL = 1 / 100;


    /**
     * Short name for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     * @var string
     */
    public const MAJOR_UNIT_NAME_HRK = 'Kuna';

    /**
     * Short name of minor unit for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     * @var string
     */
    public const MINOR_UNIT_NAME_HRK = 'lipa';

    /**
     * Symbol for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HRK = 'kn';

    /**
     * Symbol of minor unit for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HRK = 'lp';

    /**
     * Symbol of minor unit for currency HRK
     *
     * @see https://en.wikipedia.org/wiki/Croatian_kuna
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HRK = 1 / 100;


    /**
     * Short name for currency -HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     * @var string
     */
    public const MAJOR_UNIT_NAME_HTG = 'Gourde';

    /**
     * Short name of minor unit for currency -HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     * @var string
     */
    public const MINOR_UNIT_NAME_HTG = 'santim';

    /**
     * Symbol for currency HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HTG = 'G';

    /**
     * Symbol of minor unit for currency -HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HTG = '¢';

    /**
     * Symbol of minor unit for currency -HTG
     *
     * @see https://en.wikipedia.org/wiki/Haitian_gourde
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HTG = 1 / 100;


    /**
     * Short name for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     * @var string
     */
    public const MAJOR_UNIT_NAME_HUF = 'Forint';

    /**
     * Short name of minor unit for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     * @var string
     */
    public const MINOR_UNIT_NAME_HUF = 'fillér';

    /**
     * Symbol for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_HUF = 'Ft';

    /**
     * Symbol of minor unit for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_HUF = '';

    /**
     * Symbol of minor unit for currency HUF
     *
     * @see https://en.wikipedia.org/wiki/Hungarian_forint
     * @var float
     */
    public const MAJOR_MINOR_RATIO_HUF = 1 / 100;


    /**
     * Short name for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     * @var string
     */
    public const MAJOR_UNIT_NAME_IDR = 'Rupiah';

    /**
     * Short name of minor unit for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     * @var string
     */
    public const MINOR_UNIT_NAME_IDR = 'sen';

    /**
     * Symbol for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_IDR = 'Rp';

    /**
     * Symbol of minor unit for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_IDR = '';

    /**
     * Symbol of minor unit for currency IDR
     *
     * @see https://en.wikipedia.org/wiki/Indonesian_rupiah
     * @var float
     */
    public const MAJOR_MINOR_RATIO_IDR = 1 / 100;


    /**
     * Short name for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     * @var string
     */
    public const MAJOR_UNIT_NAME_ILS = 'Israeli shekel';

    /**
     * Short name of minor unit for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     * @var string
     */
    public const MINOR_UNIT_NAME_ILS = 'agora';

    /**
     * Symbol for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ILS = '₪';

    /**
     * Symbol of minor unit for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ILS = '';

    /**
     * Symbol of minor unit for currency ILS
     *
     * @see https://en.wikipedia.org/wiki/Israeli_new_shekel
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ILS = 1 / 100;


    /**
     * Short name for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     * @var string
     */
    public const MAJOR_UNIT_NAME_INR = 'Rupee';

    /**
     * Short name of minor unit for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     * @var string
     */
    public const MINOR_UNIT_NAME_INR = 'paisa';

    /**
     * Symbol for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_INR = '₹';

    /**
     * Symbol of minor unit for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_INR = '';

    /**
     * Symbol of minor unit for currency INR
     *
     * @see https://en.wikipedia.org/wiki/Indian_rupee
     * @var float
     */
    public const MAJOR_MINOR_RATIO_INR = 1 / 100;


    /**
     * Short name for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     * @var string
     */
    public const MAJOR_UNIT_NAME_IQD = 'Dinar';

    /**
     * Short name of minor unit for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     * @var string
     */
    public const MINOR_UNIT_NAME_IQD = 'fils';

    /**
     * Symbol for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_IQD = 'د.ع';

    /**
     * Symbol of minor unit for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_IQD = '';

    /**
     * Symbol of minor unit for currency IQD
     *
     * @see https://en.wikipedia.org/wiki/Iraqi_dinar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_IQD = 1 / 1000;


    /**
     * Short name for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     * @var string
     */
    public const MAJOR_UNIT_NAME_IRR = 'Rial';

    /**
     * Short name of minor unit for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     * @var string
     */
    public const MINOR_UNIT_NAME_IRR = '';

    /**
     * Symbol for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_IRR = '﷼';

    /**
     * Symbol of minor unit for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_IRR = '';

    /**
     * Symbol of minor unit for currency IRR
     *
     * @see https://en.wikipedia.org/wiki/Iranian_rial
     * @var float
     */
    public const MAJOR_MINOR_RATIO_IRR = 1.0;


    /**
     * Short name for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     * @var string
     */
    public const MAJOR_UNIT_NAME_ISK = 'Króna';

    /**
     * Short name of minor unit for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     * @var string
     */
    public const MINOR_UNIT_NAME_ISK = 'eyrir';

    /**
     * Symbol for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ISK = 'kr';

    /**
     * Symbol of minor unit for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ISK = 'a';

    /**
     * Symbol of minor unit for currency ISK
     *
     * @see https://en.wikipedia.org/wiki/Icelandic_kr%C3%B3na
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ISK = 1 / 100;


    /**
     * Short name for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_JMD = 'Dollar';

    /**
     * Short name of minor unit for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_JMD = 'cent';

    /**
     * Symbol for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_JMD = '$';

    /**
     * Symbol of minor unit for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_JMD = '';

    /**
     * Symbol of minor unit for currency JMD
     *
     * @see https://en.wikipedia.org/wiki/Jamaican_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_JMD = 1 / 100;


    /**
     * Short name for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     * @var string
     */
    public const MAJOR_UNIT_NAME_JOD = 'Dinar';

    /**
     * Short name of minor unit for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     * @var string
     */
    public const MINOR_UNIT_NAME_JOD = 'fils';

    /**
     * Symbol for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_JOD = 'د.أ';

    /**
     * Symbol of minor unit for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_JOD = '';

    /**
     * Symbol of minor unit for currency JOD
     *
     * @see https://en.wikipedia.org/wiki/Jordanian_dinar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_JOD = 1 / 1000;


    /**
     * Short name for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     * @var string
     */
    public const MAJOR_UNIT_NAME_JPY = 'Yen';

    /**
     * Short name of minor unit for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     * @var string
     */
    public const MINOR_UNIT_NAME_JPY = '';

    /**
     * Symbol for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_JPY = '¥';

    /**
     * Symbol of minor unit for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_JPY = '';

    /**
     * Symbol of minor unit for currency JPY
     *
     * @see https://en.wikipedia.org/wiki/Japanese_yen
     * @var float
     */
    public const MAJOR_MINOR_RATIO_JPY = 1.0;


    /**
     * Short name for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     * @var string
     */
    public const MAJOR_UNIT_NAME_KES = 'Shilling';

    /**
     * Short name of minor unit for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     * @var string
     */
    public const MINOR_UNIT_NAME_KES = 'cent';

    /**
     * Symbol for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KES = 'KSh';

    /**
     * Symbol of minor unit for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KES = '';

    /**
     * Symbol of minor unit for currency KES
     *
     * @see https://en.wikipedia.org/wiki/Kenyan_shilling
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KES = 1 / 100;


    /**
     * Short name for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     * @var string
     */
    public const MAJOR_UNIT_NAME_KGS = 'Som';

    /**
     * Short name of minor unit for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     * @var string
     */
    public const MINOR_UNIT_NAME_KGS = 'tyiyn';

    /**
     * Symbol for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KGS = '⃀';

    /**
     * Symbol of minor unit for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KGS = '';

    /**
     * Symbol of minor unit for currency KGS
     *
     * @see https://en.wikipedia.org/wiki/Kyrgyzstani_som
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KGS = 1 / 100;


    /**
     * Short name for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     * @var string
     */
    public const MAJOR_UNIT_NAME_KHR = 'Riel';

    /**
     * Short name of minor unit for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     * @var string
     */
    public const MINOR_UNIT_NAME_KHR = 'sen';

    /**
     * Symbol for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KHR = '៛';

    /**
     * Symbol of minor unit for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KHR = '';

    /**
     * Symbol of minor unit for currency KHR
     *
     * @see https://en.wikipedia.org/wiki/Cambodian_riel
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KHR = 1 / 100;


    /**
     * Short name for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_KMF = 'Franc';

    /**
     * Short name of minor unit for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_KMF = 'centime';

    /**
     * Symbol for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KMF = 'CF';

    /**
     * Symbol of minor unit for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KMF = '';

    /**
     * Symbol of minor unit for currency KMF
     *
     * @see https://en.wikipedia.org/wiki/Comorian_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KMF = 1 / 100;


    /**
     * Short name for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     * @var string
     */
    public const MAJOR_UNIT_NAME_KPW = 'Won';

    /**
     * Short name of minor unit for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     * @var string
     */
    public const MINOR_UNIT_NAME_KPW = 'chon';

    /**
     * Symbol for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KPW = '₩';

    /**
     * Symbol of minor unit for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KPW = '';

    /**
     * Symbol of minor unit for currency KPW
     *
     * @see https://en.wikipedia.org/wiki/North_Korean_won
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KPW = 1 / 100;


    /**
     * Short name for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     * @var string
     */
    public const MAJOR_UNIT_NAME_KRW = 'Won';

    /**
     * Short name of minor unit for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     * @var string
     */
    public const MINOR_UNIT_NAME_KRW = 'jeon';

    /**
     * Symbol for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KRW = '₩';

    /**
     * Symbol of minor unit for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KRW = '';

    /**
     * Symbol of minor unit for currency KRW
     *
     * @see https://en.wikipedia.org/wiki/South_Korean_won
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KRW = 1 / 100;


    /**
     * Short name for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     * @var string
     */
    public const MAJOR_UNIT_NAME_KWD = 'Dinar';

    /**
     * Short name of minor unit for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     * @var string
     */
    public const MINOR_UNIT_NAME_KWD = 'fils';

    /**
     * Symbol for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KWD = 'د.ك';

    /**
     * Symbol of minor unit for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KWD = '';

    /**
     * Symbol of minor unit for currency KWD
     *
     * @see https://en.wikipedia.org/wiki/Kuwaiti_dinar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KWD = 1 / 1000;


    /**
     * Short name for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_KYD = 'Dollar';

    /**
     * Short name of minor unit for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_KYD = 'cent';

    /**
     * Symbol for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KYD = '$';

    /**
     * Symbol of minor unit for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KYD = '';

    /**
     * Symbol of minor unit for currency KYD
     *
     * @see https://en.wikipedia.org/wiki/Cayman_Islands_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KYD = 1 / 100;


    /**
     * Short name for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     * @var string
     */
    public const MAJOR_UNIT_NAME_KZT = 'Tenge';

    /**
     * Short name of minor unit for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     * @var string
     */
    public const MINOR_UNIT_NAME_KZT = 'tiyn';

    /**
     * Symbol for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_KZT = '₸';

    /**
     * Symbol of minor unit for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_KZT = '';

    /**
     * Symbol of minor unit for currency KZT
     *
     * @see https://en.wikipedia.org/wiki/Kazakhstani_tenge
     * @var float
     */
    public const MAJOR_MINOR_RATIO_KZT = 1 / 100;


    /**
     * Short name for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     * @var string
     */
    public const MAJOR_UNIT_NAME_LAK = 'Kip';

    /**
     * Short name of minor unit for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     * @var string
     */
    public const MINOR_UNIT_NAME_LAK = 'att';

    /**
     * Symbol for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LAK = '₭';

    /**
     * Symbol of minor unit for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LAK = '';

    /**
     * Symbol of minor unit for currency LAK
     *
     * @see https://en.wikipedia.org/wiki/Lao_kip
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LAK = 1 / 100;


    /**
     * Short name for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     * @var string
     */
    public const MAJOR_UNIT_NAME_LBP = 'Pound';

    /**
     * Short name of minor unit for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     * @var string
     */
    public const MINOR_UNIT_NAME_LBP = 'piastre';

    /**
     * Symbol for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LBP = 'ل.ل.';

    /**
     * Symbol of minor unit for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LBP = '';

    /**
     * Symbol of minor unit for currency LBP
     *
     * @see https://en.wikipedia.org/wiki/Lebanese_pound
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LBP = 1 / 100;


    /**
     * Short name for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     * @var string
     */
    public const MAJOR_UNIT_NAME_LKR = 'Rupee';

    /**
     * Short name of minor unit for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     * @var string
     */
    public const MINOR_UNIT_NAME_LKR = 'cent';

    /**
     * Symbol for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LKR = '₨';

    /**
     * Symbol of minor unit for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LKR = '¢';

    /**
     * Symbol of minor unit for currency LKR
     *
     * @see https://en.wikipedia.org/wiki/Sri_Lankan_rupee
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LKR = 1 / 100;


    /**
     * Short name for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_LRD = 'Dollar';

    /**
     * Short name of minor unit for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_LRD = 'cent';

    /**
     * Symbol for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LRD = '$';

    /**
     * Symbol of minor unit for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LRD = '¢';

    /**
     * Symbol of minor unit for currency LRD
     *
     * @see https://en.wikipedia.org/wiki/Liberian_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LRD = 1 / 100;


    /**
     * Short name for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     * @var string
     */
    public const MAJOR_UNIT_NAME_LSL = 'Loti';

    /**
     * Short name of minor unit for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     * @var string
     */
    public const MINOR_UNIT_NAME_LSL = 'sente';

    /**
     * Symbol for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LSL = 'L';

    /**
     * Symbol of minor unit for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LSL = '';

    /**
     * Symbol of minor unit for currency LSL
     *
     * @see https://en.wikipedia.org/wiki/Lesotho_loti
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LSL = 1 / 100;


    /**
     * Short name for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     * @var string
     */
    public const MAJOR_UNIT_NAME_LYD = 'Dinar';

    /**
     * Short name of minor unit for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     * @var string
     */
    public const MINOR_UNIT_NAME_LYD = 'dirham';

    /**
     * Symbol for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_LYD = 'ل.';

    /**
     * Symbol of minor unit for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_LYD = '';

    /**
     * Symbol of minor unit for currency LYD
     *
     * @see https://en.wikipedia.org/wiki/Libyan_dinar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_LYD = 1 / 1000;


    /**
     * Short name for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     * @var string
     */
    public const MAJOR_UNIT_NAME_MAD = 'Dirham';

    /**
     * Short name of minor unit for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     * @var string
     */
    public const MINOR_UNIT_NAME_MAD = 'centime';

    /**
     * Symbol for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MAD = 'DH';

    /**
     * Symbol of minor unit for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MAD = '';

    /**
     * Symbol of minor unit for currency MAD
     *
     * @see https://en.wikipedia.org/wiki/Moroccan_dirham
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MAD = 1 / 100;


    /**
     * Short name for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     * @var string
     */
    public const MAJOR_UNIT_NAME_MDL = 'Leu';

    /**
     * Short name of minor unit for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     * @var string
     */
    public const MINOR_UNIT_NAME_MDL = 'ban';

    /**
     * Symbol for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MDL = 'L';

    /**
     * Symbol of minor unit for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MDL = '';

    /**
     * Symbol of minor unit for currency MDL
     *
     * @see https://en.wikipedia.org/wiki/Moldovan_leu
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MDL = 1 / 100;


    /**
     * Short name for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     * @var string
     */
    public const MAJOR_UNIT_NAME_MGA = 'Ariary';

    /**
     * Short name of minor unit for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     * @var string
     */
    public const MINOR_UNIT_NAME_MGA = 'iraimbilanja';

    /**
     * Symbol for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MGA = 'Ar';

    /**
     * Symbol of minor unit for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MGA = '';

    /**
     * Symbol of minor unit for currency MGA
     *
     * @see https://en.wikipedia.org/wiki/Malagasy_ariary
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MGA = 1 / 5;


    /**
     * Short name for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     * @var string
     */
    public const MAJOR_UNIT_NAME_MKD = 'Denar';

    /**
     * Short name of minor unit for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     * @var string
     */
    public const MINOR_UNIT_NAME_MKD = 'deni';

    /**
     * Symbol for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MKD = 'den';

    /**
     * Symbol of minor unit for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MKD = '';

    /**
     * Symbol of minor unit for currency MKD
     *
     * @see https://en.wikipedia.org/wiki/Macedonian_denar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MKD = 1 / 100;


    /**
     * Short name for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     * @var string
     */
    public const MAJOR_UNIT_NAME_MMK = 'Kyat';

    /**
     * Short name of minor unit for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     * @var string
     */
    public const MINOR_UNIT_NAME_MMK = 'pya';

    /**
     * Symbol for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MMK = 'K';

    /**
     * Symbol of minor unit for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MMK = '';

    /**
     * Symbol of minor unit for currency MMK
     *
     * @see https://en.wikipedia.org/wiki/Myanmar_kyat
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MMK = 1 / 100;


    /**
     * Short name for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     * @var string
     */
    public const MAJOR_UNIT_NAME_MNT = 'Tögrög';

    /**
     * Short name of minor unit for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     * @var string
     */
    public const MINOR_UNIT_NAME_MNT = 'möngö';

    /**
     * Symbol for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MNT = '₮';

    /**
     * Symbol of minor unit for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MNT = '';

    /**
     * Symbol of minor unit for currency MNT
     *
     * @see https://en.wikipedia.org/wiki/Mongolian_t%C3%B6gr%C3%B6g
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MNT = 1 / 100;


    /**
     * Short name for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     * @var string
     */
    public const MAJOR_UNIT_NAME_MOP = 'Pataca';

    /**
     * Short name of minor unit for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     * @var string
     */
    public const MINOR_UNIT_NAME_MOP = 'avos';

    /**
     * Symbol for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MOP = 'MOP$';

    /**
     * Symbol of minor unit for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MOP = '';

    /**
     * Symbol of minor unit for currency MOP
     *
     * @see https://en.wikipedia.org/wiki/Macanese_pataca
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MOP = 1 / 100;


    /**
     * Short name for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     * @var string
     */
    public const MAJOR_UNIT_NAME_MRU = 'Ouguiya';

    /**
     * Short name of minor unit for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     * @var string
     */
    public const MINOR_UNIT_NAME_MRU = 'khoums';

    /**
     * Symbol for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MRU = 'UM';

    /**
     * Symbol of minor unit for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MRU = '';

    /**
     * Symbol of minor unit for currency MRU
     *
     * @see https://en.wikipedia.org/wiki/Mauritanian_ouguiya
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MRU = 1 / 5;


    /**
     * Short name for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     * @var string
     */
    public const MAJOR_UNIT_NAME_MUR = 'Rupee';

    /**
     * Short name of minor unit for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     * @var string
     */
    public const MINOR_UNIT_NAME_MUR = 'cent';

    /**
     * Symbol for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MUR = 'Rs';

    /**
     * Symbol of minor unit for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MUR = '¢';

    /**
     * Symbol of minor unit for currency MUR
     *
     * @see https://en.wikipedia.org/wiki/Mauritian_rupee
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MUR = 1 / 100;


    /**
     * Short name for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     * @var string
     */
    public const MAJOR_UNIT_NAME_MVR = 'Rufiyaa';

    /**
     * Short name of minor unit for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     * @var string
     */
    public const MINOR_UNIT_NAME_MVR = 'laari';

    /**
     * Symbol for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MVR = 'Rf';

    /**
     * Symbol of minor unit for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MVR = '';

    /**
     * Symbol of minor unit for currency MVR
     *
     * @see https://en.wikipedia.org/wiki/Maldivian_rufiyaa
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MVR = 1 / 100;


    /**
     * Short name for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     * @var string
     */
    public const MAJOR_UNIT_NAME_MWK = 'Kwacha';

    /**
     * Short name of minor unit for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     * @var string
     */
    public const MINOR_UNIT_NAME_MWK = 'tambala';

    /**
     * Symbol for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MWK = 'K';

    /**
     * Symbol of minor unit for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MWK = '';

    /**
     * Symbol of minor unit for currency MWK
     *
     * @see https://en.wikipedia.org/wiki/Malawian_kwacha
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MWK = 1 / 100;


    /**
     * Short name for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_MXN = '';

    /**
     * Short name of minor unit for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_MXN = 'centavo';

    /**
     * Symbol for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MXN = '$';

    /**
     * Symbol of minor unit for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MXN = '¢';

    /**
     * Symbol of minor unit for currency MXN
     *
     * @see https://en.wikipedia.org/wiki/Mexican_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MXN = 1 / 100;


    /**
     * Short name for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     * @var string
     */
    public const MAJOR_UNIT_NAME_MYR = 'Ringgit';

    /**
     * Short name of minor unit for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     * @var string
     */
    public const MINOR_UNIT_NAME_MYR = 'sen';

    /**
     * Symbol for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MYR = 'RM';

    /**
     * Symbol of minor unit for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MYR = '';

    /**
     * Symbol of minor unit for currency MYR
     *
     * @see https://en.wikipedia.org/wiki/Malaysian_ringgit
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MYR = 1 / 100;


    /**
     * Short name for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     * @var string
     */
    public const MAJOR_UNIT_NAME_MZN = 'Metical';

    /**
     * Short name of minor unit for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     * @var string
     */
    public const MINOR_UNIT_NAME_MZN = 'centavo';

    /**
     * Symbol for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_MZN = 'MT';

    /**
     * Symbol of minor unit for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_MZN = '';

    /**
     * Symbol of minor unit for currency MZN
     *
     * @see https://en.wikipedia.org/wiki/Mozambican_metical
     * @var float
     */
    public const MAJOR_MINOR_RATIO_MZN = 1 / 100;


    /**
     * Short name for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_NAD = 'Dollar';

    /**
     * Short name of minor unit for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_NAD = 'cent';

    /**
     * Symbol for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NAD = '$';

    /**
     * Symbol of minor unit for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NAD = '';

    /**
     * Symbol of minor unit for currency NAD
     *
     * @see https://en.wikipedia.org/wiki/Namibian_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NAD = 1 / 100;


    /**
     * Short name for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     * @var string
     */
    public const MAJOR_UNIT_NAME_NGN = 'Naira';

    /**
     * Short name of minor unit for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     * @var string
     */
    public const MINOR_UNIT_NAME_NGN = 'kobo';

    /**
     * Symbol for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NGN = '₦';

    /**
     * Symbol of minor unit for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NGN = '';

    /**
     * Symbol of minor unit for currency NGN
     *
     * @see https://en.wikipedia.org/wiki/Nigerian_naira
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NGN = 1 / 100;


    /**
     * Short name for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     * @var string
     */
    public const MAJOR_UNIT_NAME_NIO = 'Córdoba';

    /**
     * Short name of minor unit for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     * @var string
     */
    public const MINOR_UNIT_NAME_NIO = 'centavo';

    /**
     * Symbol for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NIO = 'C$';

    /**
     * Symbol of minor unit for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NIO = '';

    /**
     * Symbol of minor unit for currency NIO
     *
     * @see https://en.wikipedia.org/wiki/Nicaraguan_c%C3%B3rdoba
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NIO = 1 / 100;


    /**
     * Short name for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     * @var string
     */
    public const MAJOR_UNIT_NAME_NOK = 'Krone';

    /**
     * Short name of minor unit for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     * @var string
     */
    public const MINOR_UNIT_NAME_NOK = 'øre';

    /**
     * Symbol for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NOK = 'kr';

    /**
     * Symbol of minor unit for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NOK = '';

    /**
     * Symbol of minor unit for currency NOK
     *
     * @see https://en.wikipedia.org/wiki/Norwegian_krone
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NOK = 1 / 100;


    /**
     * Short name for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     * @var string
     */
    public const MAJOR_UNIT_NAME_NPR = 'Rupee';

    /**
     * Short name of minor unit for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     * @var string
     */
    public const MINOR_UNIT_NAME_NPR = 'Paisa';

    /**
     * Symbol for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NPR = 'रु';

    /**
     * Symbol of minor unit for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NPR = '';

    /**
     * Symbol of minor unit for currency NPR
     *
     * @see https://en.wikipedia.org/wiki/Nepalese_rupee
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NPR = 1 / 100;


    /**
     * Short name for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_NZD = 'Dollar';

    /**
     * Short name of minor unit for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_NZD = 'cent';

    /**
     * Symbol for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_NZD = '$';

    /**
     * Symbol of minor unit for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_NZD = 'c';

    /**
     * Symbol of minor unit for currency NZD
     *
     * @see https://en.wikipedia.org/wiki/New_Zealand_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_NZD = 1 / 100;


    /**
     * Short name for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     * @var string
     */
    public const MAJOR_UNIT_NAME_OMR = 'Rial';

    /**
     * Short name of minor unit for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     * @var string
     */
    public const MINOR_UNIT_NAME_OMR = 'baisa';

    /**
     * Symbol for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_OMR = 'ر.ع.';

    /**
     * Symbol of minor unit for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_OMR = '';

    /**
     * Symbol of minor unit for currency OMR
     *
     * @see https://en.wikipedia.org/wiki/Omani_rial
     * @var float
     */
    public const MAJOR_MINOR_RATIO_OMR = 1 / 1000;


    /**
     * Short name for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     * @var string
     */
    public const MAJOR_UNIT_NAME_PAB = 'Balboa';

    /**
     * Short name of minor unit for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     * @var string
     */
    public const MINOR_UNIT_NAME_PAB = 'Centésimo';

    /**
     * Symbol for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PAB = 'B/.';

    /**
     * Symbol of minor unit for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PAB = '';

    /**
     * Symbol of minor unit for currency PAB
     *
     * @see https://en.wikipedia.org/wiki/Panamanian_balboa
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PAB = 1 / 100;


    /**
     * Short name for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     * @var string
     */
    public const MAJOR_UNIT_NAME_PEN = 'Sol';

    /**
     * Short name of minor unit for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     * @var string
     */
    public const MINOR_UNIT_NAME_PEN = 'céntimo';

    /**
     * Symbol for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PEN = 'S/';

    /**
     * Symbol of minor unit for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PEN = '';

    /**
     * Symbol of minor unit for currency PEN
     *
     * @see https://en.wikipedia.org/wiki/Peruvian_sol
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PEN = 1 / 100;


    /**
     * Short name for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     * @var string
     */
    public const MAJOR_UNIT_NAME_PGK = 'Kina';

    /**
     * Short name of minor unit for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     * @var string
     */
    public const MINOR_UNIT_NAME_PGK = 'toea';

    /**
     * Symbol for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PGK = 'K';

    /**
     * Symbol of minor unit for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PGK = 't';

    /**
     * Symbol of minor unit for currency PGK
     *
     * @see https://en.wikipedia.org/wiki/Papua_New_Guinean_kina
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PGK = 1 / 100;


    /**
     * Short name for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_PHP = 'Peso';

    /**
     * Short name of minor unit for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_PHP = 'Sentimo';

    /**
     * Symbol for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PHP = '₱';

    /**
     * Symbol of minor unit for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PHP = '¢';

    /**
     * Symbol of minor unit for currency PHP
     *
     * @see https://en.wikipedia.org/wiki/Philippine_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PHP = 1 / 100;


    /**
     * Short name for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     * @var string
     */
    public const MAJOR_UNIT_NAME_PKR = 'Rupee';

    /**
     * Short name of minor unit for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     * @var string
     */
    public const MINOR_UNIT_NAME_PKR = 'Paisa';

    /**
     * Symbol for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PKR = '₨.';

    /**
     * Symbol of minor unit for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PKR = '';

    /**
     * Symbol of minor unit for currency PKR
     *
     * @see https://en.wikipedia.org/wiki/Pakistani_rupee
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PKR = 1 / 100;


    /**
     * Short name for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     * @var string
     */
    public const MAJOR_UNIT_NAME_PLN = 'Złoty';

    /**
     * Short name of minor unit for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     * @var string
     */
    public const MINOR_UNIT_NAME_PLN = 'grosz';

    /**
     * Symbol for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PLN = 'zł';

    /**
     * Symbol of minor unit for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PLN = 'gr';

    /**
     * Symbol of minor unit for currency PLN
     *
     * @see https://en.wikipedia.org/wiki/Polish_z%C5%82oty
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PLN = 1 / 100;


    /**
     * Short name for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     * @var string
     */
    public const MAJOR_UNIT_NAME_PYG = 'Guaraní';

    /**
     * Short name of minor unit for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     * @var string
     */
    public const MINOR_UNIT_NAME_PYG = 'céntimo';

    /**
     * Symbol for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_PYG = '₲';

    /**
     * Symbol of minor unit for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_PYG = '¢';

    /**
     * Symbol of minor unit for currency PYG
     *
     * @see https://en.wikipedia.org/wiki/Paraguayan_guaran%C3%AD
     * @var float
     */
    public const MAJOR_MINOR_RATIO_PYG = 1 / 100;


    /**
     * Short name for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     * @var string
     */
    public const MAJOR_UNIT_NAME_QAR = 'Riyal';

    /**
     * Short name of minor unit for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     * @var string
     */
    public const MINOR_UNIT_NAME_QAR = 'dirham';

    /**
     * Symbol for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_QAR = 'ر.ق';

    /**
     * Symbol of minor unit for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_QAR = '';

    /**
     * Symbol of minor unit for currency QAR
     *
     * @see https://en.wikipedia.org/wiki/Qatari_riyal
     * @var float
     */
    public const MAJOR_MINOR_RATIO_QAR = 1 / 100;


    /**
     * Short name for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     * @var string
     */
    public const MAJOR_UNIT_NAME_RON = 'Leu';

    /**
     * Short name of minor unit for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     * @var string
     */
    public const MINOR_UNIT_NAME_RON = 'ban';

    /**
     * Symbol for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_RON = 'L';

    /**
     * Symbol of minor unit for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_RON = '';

    /**
     * Symbol of minor unit for currency RON
     *
     * @see https://en.wikipedia.org/wiki/Romanian_leu
     * @var float
     */
    public const MAJOR_MINOR_RATIO_RON = 1 / 100;


    /**
     * Short name for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     * @var string
     */
    public const MAJOR_UNIT_NAME_RSD = 'Dinar';

    /**
     * Short name of minor unit for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     * @var string
     */
    public const MINOR_UNIT_NAME_RSD = 'para';

    /**
     * Symbol for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_RSD = 'din';

    /**
     * Symbol of minor unit for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_RSD = '';

    /**
     * Symbol of minor unit for currency RSD
     *
     * @see https://en.wikipedia.org/wiki/Serbian_dinar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_RSD = 1 / 100;


    /**
     * Short name for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     * @var string
     */
    public const MAJOR_UNIT_NAME_RUB = 'Ruble';

    /**
     * Short name of minor unit for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     * @var string
     */
    public const MINOR_UNIT_NAME_RUB = 'kopeyka';

    /**
     * Symbol for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_RUB = '₽';

    /**
     * Symbol of minor unit for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_RUB = 'коп.';

    /**
     * Symbol of minor unit for currency RUB
     *
     * @see https://en.wikipedia.org/wiki/Russian_ruble
     * @var float
     */
    public const MAJOR_MINOR_RATIO_RUB = 1 / 100;


    /**
     * Short name for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_RWF = 'Franc';

    /**
     * Short name of minor unit for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_RWF = 'centime';

    /**
     * Symbol for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_RWF = 'FRw';

    /**
     * Symbol of minor unit for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_RWF = '';

    /**
     * Symbol of minor unit for currency RWF
     *
     * @see https://en.wikipedia.org/wiki/Rwandan_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_RWF = 1 / 100;


    /**
     * Short name for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     * @var string
     */
    public const MAJOR_UNIT_NAME_SAR = 'Riyal';

    /**
     * Short name of minor unit for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     * @var string
     */
    public const MINOR_UNIT_NAME_SAR = 'halalah';

    /**
     * Symbol for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SAR = 'ر.س';

    /**
     * Symbol of minor unit for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SAR = '';

    /**
     * Symbol of minor unit for currency SAR
     *
     * @see https://en.wikipedia.org/wiki/Saudi_riyal
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SAR = 1 / 100;


    /**
     * Short name for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_SBD = 'Dollar';

    /**
     * Short name of minor unit for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_SBD = 'cent';

    /**
     * Symbol for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SBD = '$';

    /**
     * Symbol of minor unit for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SBD = '';

    /**
     * Symbol of minor unit for currency SBD
     *
     * @see https://en.wikipedia.org/wiki/Solomon_Islands_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SBD = 1 / 100;


    /**
     * Short name for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     * @var string
     */
    public const MAJOR_UNIT_NAME_SCR = 'Rupee';

    /**
     * Short name of minor unit for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     * @var string
     */
    public const MINOR_UNIT_NAME_SCR = 'cent';

    /**
     * Symbol for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SCR = 'Rs';

    /**
     * Symbol of minor unit for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SCR = '¢';

    /**
     * Symbol of minor unit for currency SCR
     *
     * @see https://en.wikipedia.org/wiki/Seychellois_rupee
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SCR = 1 / 100;


    /**
     * Short name for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     * @var string
     */
    public const MAJOR_UNIT_NAME_SDG = 'Pound';

    /**
     * Short name of minor unit for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     * @var string
     */
    public const MINOR_UNIT_NAME_SDG = 'piastre';

    /**
     * Symbol for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SDG = 'ج.س';

    /**
     * Symbol of minor unit for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SDG = '';

    /**
     * Symbol of minor unit for currency SDG
     *
     * @see https://en.wikipedia.org/wiki/Sudanese_pound
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SDG = 1 / 100;


    /**
     * Short name for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     * @var string
     */
    public const MAJOR_UNIT_NAME_SEK = 'Krona';

    /**
     * Short name of minor unit for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     * @var string
     */
    public const MINOR_UNIT_NAME_SEK = 'öre';

    /**
     * Symbol for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SEK = 'kr';

    /**
     * Symbol of minor unit for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SEK = '';

    /**
     * Symbol of minor unit for currency SEK
     *
     * @see https://en.wikipedia.org/wiki/Swedish_krona
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SEK = 1 / 100;


    /**
     * Short name for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_SGD = 'Dollar';

    /**
     * Short name of minor unit for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_SGD = 'cent';

    /**
     * Symbol for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SGD = '$';

    /**
     * Symbol of minor unit for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SGD = 'c';

    /**
     * Symbol of minor unit for currency SGD
     *
     * @see https://en.wikipedia.org/wiki/Singapore_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SGD = 1 / 100;


    /**
     * Short name for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     * @var string
     */
    public const MAJOR_UNIT_NAME_SHP = 'Pound';

    /**
     * Short name of minor unit for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     * @var string
     */
    public const MINOR_UNIT_NAME_SHP = 'penny';

    /**
     * Symbol for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SHP = '£';

    /**
     * Symbol of minor unit for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SHP = '';

    /**
     * Symbol of minor unit for currency SHP
     *
     * @see https://en.wikipedia.org/wiki/Saint_Helena_pound
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SHP = 1 / 100;


    /**
     * Short name for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     * @var string
     */
    public const MAJOR_UNIT_NAME_SLL = 'Leone';

    /**
     * Short name of minor unit for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     * @var string
     */
    public const MINOR_UNIT_NAME_SLL = 'cent';

    /**
     * Symbol for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SLL = 'Le';

    /**
     * Symbol of minor unit for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SLL = '';

    /**
     * Symbol of minor unit for currency SLL
     *
     * @see https://en.wikipedia.org/wiki/Sierra_Leonean_leone
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SLL = 1 / 100;


    /**
     * Short name for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     * @var string
     */
    public const MAJOR_UNIT_NAME_SOS = 'Shilling';

    /**
     * Short name of minor unit for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     * @var string
     */
    public const MINOR_UNIT_NAME_SOS = 'Senti';

    /**
     * Symbol for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SOS = 'Sh.So.';

    /**
     * Symbol of minor unit for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SOS = '';

    /**
     * Symbol of minor unit for currency SOS
     *
     * @see https://en.wikipedia.org/wiki/Somali_shilling
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SOS = 1 / 100;


    /**
     * Short name for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_SRD = 'Dollar';

    /**
     * Short name of minor unit for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_SRD = 'cent';

    /**
     * Symbol for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SRD = '$';

    /**
     * Symbol of minor unit for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SRD = '';

    /**
     * Symbol of minor unit for currency SRD
     *
     * @see https://en.wikipedia.org/wiki/Surinamese_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SRD = 1 / 100;


    /**
     * Short name for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     * @var string
     */
    public const MAJOR_UNIT_NAME_SSP = 'Pound';

    /**
     * Short name of minor unit for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     * @var string
     */
    public const MINOR_UNIT_NAME_SSP = 'Piaster';

    /**
     * Symbol for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SSP = 'SS£';

    /**
     * Symbol of minor unit for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SSP = 'pt';

    /**
     * Symbol of minor unit for currency SSP
     *
     * @see https://en.wikipedia.org/wiki/South_Sudanese_pound
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SSP = 1 / 100;


    /**
     * Short name for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     * @var string
     */
    public const MAJOR_UNIT_NAME_STN = 'Dobra';

    /**
     * Short name of minor unit for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     * @var string
     */
    public const MINOR_UNIT_NAME_STN = 'cêntimo';

    /**
     * Symbol for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_STN = 'Db';

    /**
     * Symbol of minor unit for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_STN = '';

    /**
     * Symbol of minor unit for currency STN
     *
     * @see https://en.wikipedia.org/wiki/S%C3%A3o_Tom%C3%A9_and_Pr%C3%ADncipe_dobra
     * @var float
     */
    public const MAJOR_MINOR_RATIO_STN = 1 / 100;


    /**
     * Short name for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     * @var string
     */
    public const MAJOR_UNIT_NAME_SVC = 'Colón';

    /**
     * Short name of minor unit for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     * @var string
     */
    public const MINOR_UNIT_NAME_SVC = 'centavo';

    /**
     * Symbol for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SVC = '₡';

    /**
     * Symbol of minor unit for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SVC = '';

    /**
     * Symbol of minor unit for currency SVC
     *
     * @see https://en.wikipedia.org/wiki/Salvadoran_col%C3%B3n
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SVC = 1 / 100;


    /**
     * Short name for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     * @var string
     */
    public const MAJOR_UNIT_NAME_SYP = 'Pound';

    /**
     * Short name of minor unit for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     * @var string
     */
    public const MINOR_UNIT_NAME_SYP = 'piastre';

    /**
     * Symbol for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SYP = '£S';

    /**
     * Symbol of minor unit for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SYP = '';

    /**
     * Symbol of minor unit for currency SYP
     *
     * @see https://en.wikipedia.org/wiki/Syrian_pound
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SYP = 1 / 100;


    /**
     * Short name for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     * @var string
     */
    public const MAJOR_UNIT_NAME_SZL = 'Lilangeni';

    /**
     * Short name of minor unit for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     * @var string
     */
    public const MINOR_UNIT_NAME_SZL = 'cent';

    /**
     * Symbol for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_SZL = 'L';

    /**
     * Symbol of minor unit for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_SZL = '';

    /**
     * Symbol of minor unit for currency SZL
     *
     * @see https://en.wikipedia.org/wiki/Swazi_lilangeni
     * @var float
     */
    public const MAJOR_MINOR_RATIO_SZL = 1 / 100;


    /**
     * Short name for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     * @var string
     */
    public const MAJOR_UNIT_NAME_THB = 'Baht';

    /**
     * Short name of minor unit for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     * @var string
     */
    public const MINOR_UNIT_NAME_THB = 'satang';

    /**
     * Symbol for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_THB = '฿';

    /**
     * Symbol of minor unit for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_THB = '';

    /**
     * Symbol of minor unit for currency THB
     *
     * @see https://en.wikipedia.org/wiki/Thai_baht
     * @var float
     */
    public const MAJOR_MINOR_RATIO_THB = 1 / 100;


    /**
     * Short name for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     * @var string
     */
    public const MAJOR_UNIT_NAME_TJS = 'Somoni';

    /**
     * Short name of minor unit for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     * @var string
     */
    public const MINOR_UNIT_NAME_TJS = 'diram';

    /**
     * Symbol for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TJS = 'SM';

    /**
     * Symbol of minor unit for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TJS = '';

    /**
     * Symbol of minor unit for currency TJS
     *
     * @see https://en.wikipedia.org/wiki/Tajikistani_somoni
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TJS = 1 / 100;


    /**
     * Short name for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     * @var string
     */
    public const MAJOR_UNIT_NAME_TMT = 'Manat';

    /**
     * Short name of minor unit for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     * @var string
     */
    public const MINOR_UNIT_NAME_TMT = 'tenge';

    /**
     * Symbol for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TMT = 'm';

    /**
     * Symbol of minor unit for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TMT = 'T';

    /**
     * Symbol of minor unit for currency TMT
     *
     * @see https://en.wikipedia.org/wiki/Turkmenistani_manat
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TMT = 1 / 100;


    /**
     * Short name for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     * @var string
     */
    public const MAJOR_UNIT_NAME_TND = 'Dinar';

    /**
     * Short name of minor unit for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     * @var string
     */
    public const MINOR_UNIT_NAME_TND = 'milim';

    /**
     * Symbol for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TND = 'د.ت';

    /**
     * Symbol of minor unit for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TND = '';

    /**
     * Symbol of minor unit for currency TND
     *
     * @see https://en.wikipedia.org/wiki/Tunisian_dinar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TND = 1 / 1000;


    /**
     * Short name for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     * @var string
     */
    public const MAJOR_UNIT_NAME_TOP = 'Paʻanga';

    /**
     * Short name of minor unit for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     * @var string
     */
    public const MINOR_UNIT_NAME_TOP = 'seniti';

    /**
     * Symbol for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TOP = 'T$';

    /**
     * Symbol of minor unit for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TOP = '¢';

    /**
     * Symbol of minor unit for currency TOP
     *
     * @see https://en.wikipedia.org/wiki/Tongan_pa%CA%BBanga
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TOP = 1 / 100;


    /**
     * Short name for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     * @var string
     */
    public const MAJOR_UNIT_NAME_TRY = 'Lira';

    /**
     * Short name of minor unit for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     * @var string
     */
    public const MINOR_UNIT_NAME_TRY = 'Kuruş';

    /**
     * Symbol for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TRY = '₺';

    /**
     * Symbol of minor unit for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TRY = 'kr';

    /**
     * Symbol of minor unit for currency TRY
     *
     * @see https://en.wikipedia.org/wiki/Turkish_lira
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TRY = 1 / 100;


    /**
     * Short name for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_TTD = 'Dollar';

    /**
     * Short name of minor unit for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_TTD = 'cent';

    /**
     * Symbol for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TTD = '$';

    /**
     * Symbol of minor unit for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TTD = '¢';

    /**
     * Symbol of minor unit for currency TTD
     *
     * @see https://en.wikipedia.org/wiki/Trinidad_and_Tobago_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TTD = 1 / 100;


    /**
     * Short name for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_TWD = 'Dollar';

    /**
     * Short name of minor unit for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_TWD = 'jiao';

    /**
     * Symbol for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TWD = '圓';

    /**
     * Symbol of minor unit for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TWD = '';

    /**
     * Symbol of minor unit for currency TWD
     *
     * @see https://en.wikipedia.org/wiki/New_Taiwan_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TWD = 1 / 10;


    /**
     * Short name for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     * @var string
     */
    public const MAJOR_UNIT_NAME_TZS = 'Shilingi';

    /**
     * Short name of minor unit for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     * @var string
     */
    public const MINOR_UNIT_NAME_TZS = 'senti';

    /**
     * Symbol for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_TZS = 'TSh';

    /**
     * Symbol of minor unit for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_TZS = '';

    /**
     * Symbol of minor unit for currency TZS
     *
     * @see https://en.wikipedia.org/wiki/Tanzanian_shilling
     * @var float
     */
    public const MAJOR_MINOR_RATIO_TZS = 1 / 100;


    /**
     * Short name for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     * @var string
     */
    public const MAJOR_UNIT_NAME_UAH = 'Hryvnia';

    /**
     * Short name of minor unit for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     * @var string
     */
    public const MINOR_UNIT_NAME_UAH = 'kopiyka';

    /**
     * Symbol for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_UAH = '₴';

    /**
     * Symbol of minor unit for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_UAH = '';

    /**
     * Symbol of minor unit for currency UAH
     *
     * @see https://en.wikipedia.org/wiki/Ukrainian_hryvnia
     * @var float
     */
    public const MAJOR_MINOR_RATIO_UAH = 1 / 100;


    /**
     * Short name for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     * @var string
     */
    public const MAJOR_UNIT_NAME_UGX = 'Shilling';

    /**
     * Short name of minor unit for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     * @var string
     */
    public const MINOR_UNIT_NAME_UGX = '';

    /**
     * Symbol for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_UGX = '';

    /**
     * Symbol of minor unit for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_UGX = '';

    /**
     * Symbol of minor unit for currency UGX
     *
     * @see https://en.wikipedia.org/wiki/Ugandan_shilling
     * @var float
     */
    public const MAJOR_MINOR_RATIO_UGX = 1.0;


    /**
     * Short name for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_USD = 'Dollar';

    /**
     * Short name of minor unit for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_USD = 'cent';

    /**
     * Symbol for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_USD = '$';

    /**
     * Symbol of minor unit for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_USD = '¢';

    /**
     * Symbol of minor unit for currency USD
     *
     * @see https://en.wikipedia.org/wiki/United_States_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_USD = 1 / 100;


    /**
     * Short name for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     * @var string
     */
    public const MAJOR_UNIT_NAME_UYU = 'Peso';

    /**
     * Short name of minor unit for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     * @var string
     */
    public const MINOR_UNIT_NAME_UYU = 'centésimo';

    /**
     * Symbol for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_UYU = '$';

    /**
     * Symbol of minor unit for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_UYU = '';

    /**
     * Symbol of minor unit for currency UYU
     *
     * @see https://en.wikipedia.org/wiki/Uruguayan_peso
     * @var float
     */
    public const MAJOR_MINOR_RATIO_UYU = 1 / 100;


    /**
     * Short name for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     * @var string
     */
    public const MAJOR_UNIT_NAME_UZS = 'Soʻm';

    /**
     * Short name of minor unit for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     * @var string
     */
    public const MINOR_UNIT_NAME_UZS = 'Tiyin';

    /**
     * Symbol for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_UZS = 'сум';

    /**
     * Symbol of minor unit for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_UZS = '';

    /**
     * Symbol of minor unit for currency UZS
     *
     * @see https://en.wikipedia.org/wiki/Uzbekistani_so%CA%BBm
     * @var float
     */
    public const MAJOR_MINOR_RATIO_UZS = 1 / 100;


    /**
     * Short name for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var string
     */
    public const MAJOR_UNIT_NAME_VED = 'Bolívar digital';

    /**
     * Short name of minor unit for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var string
     */
    public const MINOR_UNIT_NAME_VED = 'céntimo';

    /**
     * Symbol for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_VED = 'Bs. D';

    /**
     * Symbol of minor unit for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_VED = '';

    /**
     * Symbol of minor unit for currency VED
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_VED = 1 / 100;


    /**
     * Short name for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var string
     */
    public const MAJOR_UNIT_NAME_VES = 'Bolívar soberano';

    /**
     * Short name of minor unit for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var string
     */
    public const MINOR_UNIT_NAME_VES = 'céntimo';

    /**
     * Symbol for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_VES = 'Bs.';

    /**
     * Symbol of minor unit for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_VES = '';

    /**
     * Symbol of minor unit for currency VES
     *
     * @see https://en.wikipedia.org/wiki/Venezuelan_bol%C3%ADvar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_VES = 1 / 100;


    /**
     * Short name for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     * @var string
     */
    public const MAJOR_UNIT_NAME_VND = 'Đồng';

    /**
     * Short name of minor unit for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     * @var string
     */
    public const MINOR_UNIT_NAME_VND = 'hào';

    /**
     * Symbol for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_VND = '₫';

    /**
     * Symbol of minor unit for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_VND = '';

    /**
     * Symbol of minor unit for currency VND
     *
     * @see https://en.wikipedia.org/wiki/Vietnamese_%C4%91%E1%BB%93ng
     * @var float
     */
    public const MAJOR_MINOR_RATIO_VND = 1 / 10;


    /**
     * Short name for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     * @var string
     */
    public const MAJOR_UNIT_NAME_VUV = 'Vatu';

    /**
     * Short name of minor unit for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     * @var string
     */
    public const MINOR_UNIT_NAME_VUV = '';

    /**
     * Symbol for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_VUV = 'VT';

    /**
     * Symbol of minor unit for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_VUV = '';

    /**
     * Symbol of minor unit for currency VUV
     *
     * @see https://en.wikipedia.org/wiki/Vanuatu_vatu
     * @var float
     */
    public const MAJOR_MINOR_RATIO_VUV = 1.0;


    /**
     * Short name for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     * @var string
     */
    public const MAJOR_UNIT_NAME_WST = 'Tālā';

    /**
     * Short name of minor unit for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     * @var string
     */
    public const MINOR_UNIT_NAME_WST = 'sene';

    /**
     * Symbol for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_WST = '$';

    /**
     * Symbol of minor unit for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_WST = '';

    /**
     * Symbol of minor unit for currency WST
     *
     * @see https://en.wikipedia.org/wiki/Samoan_t%C4%81l%C4%81
     * @var float
     */
    public const MAJOR_MINOR_RATIO_WST = 1 / 100;


    /**
     * Short name for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_XAF = 'Franc';

    /**
     * Short name of minor unit for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_XAF = 'centime';

    /**
     * Symbol for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_XAF = 'FCFA';

    /**
     * Symbol of minor unit for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_XAF = 'c';

    /**
     * Symbol of minor unit for currency XAF
     *
     * @see https://en.wikipedia.org/wiki/Central_African_CFA_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_XAF = 1 / 100;


    /**
     * Short name for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_XCD = 'Dollar';

    /**
     * Short name of minor unit for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_XCD = 'cent';

    /**
     * Symbol for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_XCD = 'EC$';

    /**
     * Symbol of minor unit for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_XCD = '';

    /**
     * Symbol of minor unit for currency XCD
     *
     * @see https://en.wikipedia.org/wiki/Eastern_Caribbean_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_XCD = 1 / 100;


    /**
     * Short name for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_XOF = 'Franc';

    /**
     * Short name of minor unit for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_XOF = 'centime';

    /**
     * Symbol for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_XOF = 'CFA';

    /**
     * Symbol of minor unit for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_XOF = 'c';

    /**
     * Symbol of minor unit for currency XOF
     *
     * @see https://en.wikipedia.org/wiki/West_African_CFA_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_XOF = 1 / 100;


    /**
     * Short name for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     * @var string
     */
    public const MAJOR_UNIT_NAME_XPF = 'Franc';

    /**
     * Short name of minor unit for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     * @var string
     */
    public const MINOR_UNIT_NAME_XPF = '';

    /**
     * Symbol for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_XPF = '₣';

    /**
     * Symbol of minor unit for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_XPF = '';

    /**
     * Symbol of minor unit for currency XPF
     *
     * @see https://en.wikipedia.org/wiki/CFP_franc
     * @var float
     */
    public const MAJOR_MINOR_RATIO_XPF = 1.0;


    /**
     * Short name for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     * @var string
     */
    public const MAJOR_UNIT_NAME_YER = 'Rial';

    /**
     * Short name of minor unit for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     * @var string
     */
    public const MINOR_UNIT_NAME_YER = 'fils';

    /**
     * Symbol for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_YER = '﷼';

    /**
     * Symbol of minor unit for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_YER = '';

    /**
     * Symbol of minor unit for currency YER
     *
     * @see https://en.wikipedia.org/wiki/Yemeni_rial
     * @var float
     */
    public const MAJOR_MINOR_RATIO_YER = 1 / 100;


    /**
     * Short name for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     * @var string
     */
    public const MAJOR_UNIT_NAME_ZAR = 'Rand';

    /**
     * Short name of minor unit for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     * @var string
     */
    public const MINOR_UNIT_NAME_ZAR = 'cent';

    /**
     * Symbol for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ZAR = 'R';

    /**
     * Symbol of minor unit for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ZAR = 'c';

    /**
     * Symbol of minor unit for currency ZAR
     *
     * @see https://en.wikipedia.org/wiki/South_African_rand
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ZAR = 1 / 100;


    /**
     * Short name for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     * @var string
     */
    public const MAJOR_UNIT_NAME_ZMW = 'Kwacha';

    /**
     * Short name of minor unit for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     * @var string
     */
    public const MINOR_UNIT_NAME_ZMW = 'ngwee';

    /**
     * Symbol for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ZMW = 'K';

    /**
     * Symbol of minor unit for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ZMW = '';

    /**
     * Symbol of minor unit for currency ZMW
     *
     * @see https://en.wikipedia.org/wiki/Zambian_kwacha
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ZMW = 1 / 100;


    /**
     * Short name for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     * @var string
     */
    public const MAJOR_UNIT_NAME_ZWL = 'Dollar';

    /**
     * Short name of minor unit for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     * @var string
     */
    public const MINOR_UNIT_NAME_ZWL = 'cent';

    /**
     * Symbol for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     * @var string
     */
    public const MAJOR_UNIT_SYMBOL_ZWL = '$';

    /**
     * Symbol of minor unit for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     * @var string
     */
    public const MINOR_UNIT_SYMBOL_ZWL = '';

    /**
     * Symbol of minor unit for currency ZWL
     *
     * @see https://en.wikipedia.org/wiki/Zimbabwean_dollar
     * @var float
     */
    public const MAJOR_MINOR_RATIO_ZWL = 1 / 100;
}
