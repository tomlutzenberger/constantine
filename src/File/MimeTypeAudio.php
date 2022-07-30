<?php

/**
 * @noinspection PhpUnused
 * @noinspection PhpConstantNamingConventionInspection
 */

namespace TomLutzenberger\Constantine\File;

/**
 * Collection of official IANA audio MIME types
 *
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 *
 * @package   TomLutzenberger\Constantine\File
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class MimeTypeAudio
{
    /**
     * MIME type '1d-interleaved-parityfec'
     *
     * Standards: RFC6015
     *
     * @see https://www.iana.org/go/rfc6015
     *
     * @var string
     */
    public const X_1D_INTERLEAVED_PARITYFEC = 'audio/1d-interleaved-parityfec';

    /**
     * MIME type '32kadpcm'
     *
     * Standards: RFC3802, RFC2421
     *
     * @see https://www.iana.org/go/rfc3802
     * @see https://www.iana.org/go/rfc2421
     *
     * @var string
     */
    public const X_32KADPCM = 'audio/32kadpcm';

    /**
     * MIME type '3gpp'
     *
     * Standards: RFC3839, RFC6381
     *
     * @see https://www.iana.org/go/rfc3839
     * @see https://www.iana.org/go/rfc6381
     *
     * @var string
     */
    public const X_3GPP = 'audio/3gpp';

    /**
     * MIME type '3gpp2'
     *
     * Standards: RFC4393, RFC6381
     *
     * @see https://www.iana.org/go/rfc4393
     * @see https://www.iana.org/go/rfc6381
     *
     * @var string
     */
    public const X_3GPP2 = 'audio/3gpp2';

    /**
     * MIME type 'aac'
     *
     * Standards: -
     *
     * @var string
     */
    public const AAC = 'audio/aac';

    /**
     * MIME type 'ac3'
     *
     * Standards: RFC4184
     *
     * @see https://www.iana.org/go/rfc4184
     *
     * @var string
     */
    public const AC3 = 'audio/ac3';

    /**
     * MIME type 'AMR'
     *
     * Standards: RFC4867
     *
     * @see https://www.iana.org/go/rfc4867
     *
     * @var string
     */
    public const AMR = 'audio/AMR';

    /**
     * MIME type 'AMR-WB'
     *
     * Standards: RFC4867
     *
     * @see https://www.iana.org/go/rfc4867
     *
     * @var string
     */
    public const AMR_WB = 'audio/AMR-WB';

    /**
     * MIME type 'amr-wb+'
     *
     * Standards: RFC4352
     *
     * @see https://www.iana.org/go/rfc4352
     *
     * @var string
     */
    public const AMR_WB_PLUS = 'audio/amr-wb+';

    /**
     * MIME type 'aptx'
     *
     * Standards: RFC7310
     *
     * @see https://www.iana.org/go/rfc7310
     *
     * @var string
     */
    public const APTX = 'audio/aptx';

    /**
     * MIME type 'asc'
     *
     * Standards: RFC6295
     *
     * @see https://www.iana.org/go/rfc6295
     *
     * @var string
     */
    public const ASC = 'audio/asc';

    /**
     * MIME type 'ATRAC-ADVANCED-LOSSLESS'
     *
     * Standards: RFC5584
     *
     * @see https://www.iana.org/go/rfc5584
     *
     * @var string
     */
    public const ATRAC_ADVANCED_LOSSLESS = 'audio/ATRAC-ADVANCED-LOSSLESS';

    /**
     * MIME type 'ATRAC-X'
     *
     * Standards: RFC5584
     *
     * @see https://www.iana.org/go/rfc5584
     *
     * @var string
     */
    public const ATRAC_X = 'audio/ATRAC-X';

    /**
     * MIME type 'ATRAC3'
     *
     * Standards: RFC5584
     *
     * @see https://www.iana.org/go/rfc5584
     *
     * @var string
     */
    public const ATRAC3 = 'audio/ATRAC3';

    /**
     * MIME type 'basic'
     *
     * Standards: RFC2045, RFC2046
     *
     * @see https://www.iana.org/go/rfc2045
     * @see https://www.iana.org/go/rfc2046
     *
     * @var string
     */
    public const BASIC = 'audio/basic';

    /**
     * MIME type 'BV16'
     *
     * Standards: RFC4298
     *
     * @see https://www.iana.org/go/rfc4298
     *
     * @var string
     */
    public const BV16 = 'audio/BV16';

    /**
     * MIME type 'BV32'
     *
     * Standards: RFC4298
     *
     * @see https://www.iana.org/go/rfc4298
     *
     * @var string
     */
    public const BV32 = 'audio/BV32';

    /**
     * MIME type 'clearmode'
     *
     * Standards: RFC4040
     *
     * @see https://www.iana.org/go/rfc4040
     *
     * @var string
     */
    public const CLEARMODE = 'audio/clearmode';

    /**
     * MIME type 'CN'
     *
     * Standards: RFC3389
     *
     * @see https://www.iana.org/go/rfc3389
     *
     * @var string
     */
    public const CN = 'audio/CN';

    /**
     * MIME type 'DAT12'
     *
     * Standards: RFC3190
     *
     * @see https://www.iana.org/go/rfc3190
     *
     * @var string
     */
    public const DAT12 = 'audio/DAT12';

    /**
     * MIME type 'dls'
     *
     * Standards: RFC4613
     *
     * @see https://www.iana.org/go/rfc4613
     *
     * @var string
     */
    public const DLS = 'audio/dls';

    /**
     * MIME type 'dsr-es201108'
     *
     * Standards: RFC3557
     *
     * @see https://www.iana.org/go/rfc3557
     *
     * @var string
     */
    public const DSR_ES201108 = 'audio/dsr-es201108';

    /**
     * MIME type 'dsr-es202050'
     *
     * Standards: RFC4060
     *
     * @see https://www.iana.org/go/rfc4060
     *
     * @var string
     */
    public const DSR_ES202050 = 'audio/dsr-es202050';

    /**
     * MIME type 'dsr-es202211'
     *
     * Standards: RFC4060
     *
     * @see https://www.iana.org/go/rfc4060
     *
     * @var string
     */
    public const DSR_ES202211 = 'audio/dsr-es202211';

    /**
     * MIME type 'dsr-es202212'
     *
     * Standards: RFC4060
     *
     * @see https://www.iana.org/go/rfc4060
     *
     * @var string
     */
    public const DSR_ES202212 = 'audio/dsr-es202212';

    /**
     * MIME type 'DV'
     *
     * Standards: RFC6469
     *
     * @see https://www.iana.org/go/rfc6469
     *
     * @var string
     */
    public const DV = 'audio/DV';

    /**
     * MIME type 'DVI4'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const DVI4 = 'audio/DVI4';

    /**
     * MIME type 'eac3'
     *
     * Standards: RFC4598
     *
     * @see https://www.iana.org/go/rfc4598
     *
     * @var string
     */
    public const EAC3 = 'audio/eac3';

    /**
     * MIME type 'encaprtp'
     *
     * Standards: RFC6849
     *
     * @see https://www.iana.org/go/rfc6849
     *
     * @var string
     */
    public const ENCAPRTP = 'audio/encaprtp';

    /**
     * MIME type 'EVRC'
     *
     * Standards: RFC4788
     *
     * @see https://www.iana.org/go/rfc4788
     *
     * @var string
     */
    public const EVRC = 'audio/EVRC';

    /**
     * MIME type 'EVRC-QCP'
     *
     * Standards: RFC3625
     *
     * @see https://www.iana.org/go/rfc3625
     *
     * @var string
     */
    public const EVRC_QCP = 'audio/EVRC-QCP';

    /**
     * MIME type 'EVRC0'
     *
     * Standards: RFC4788
     *
     * @see https://www.iana.org/go/rfc4788
     *
     * @var string
     */
    public const EVRC0 = 'audio/EVRC0';

    /**
     * MIME type 'EVRC1'
     *
     * Standards: RFC4788
     *
     * @see https://www.iana.org/go/rfc4788
     *
     * @var string
     */
    public const EVRC1 = 'audio/EVRC1';

    /**
     * MIME type 'EVRCB'
     *
     * Standards: RFC5188
     *
     * @see https://www.iana.org/go/rfc5188
     *
     * @var string
     */
    public const EVRCB = 'audio/EVRCB';

    /**
     * MIME type 'EVRCB0'
     *
     * Standards: RFC5188
     *
     * @see https://www.iana.org/go/rfc5188
     *
     * @var string
     */
    public const EVRCB0 = 'audio/EVRCB0';

    /**
     * MIME type 'EVRCB1'
     *
     * Standards: RFC4788
     *
     * @see https://www.iana.org/go/rfc4788
     *
     * @var string
     */
    public const EVRCB1 = 'audio/EVRCB1';

    /**
     * MIME type 'EVRCNW'
     *
     * Standards: RFC6884
     *
     * @see https://www.iana.org/go/rfc6884
     *
     * @var string
     */
    public const EVRCNW = 'audio/EVRCNW';

    /**
     * MIME type 'EVRCNW0'
     *
     * Standards: RFC6884
     *
     * @see https://www.iana.org/go/rfc6884
     *
     * @var string
     */
    public const EVRCNW0 = 'audio/EVRCNW0';

    /**
     * MIME type 'EVRCNW1'
     *
     * Standards: RFC6884
     *
     * @see https://www.iana.org/go/rfc6884
     *
     * @var string
     */
    public const EVRCNW1 = 'audio/EVRCNW1';

    /**
     * MIME type 'EVRCWB'
     *
     * Standards: RFC5188
     *
     * @see https://www.iana.org/go/rfc5188
     *
     * @var string
     */
    public const EVRCWB = 'audio/EVRCWB';

    /**
     * MIME type 'EVRCWB0'
     *
     * Standards: RFC5188
     *
     * @see https://www.iana.org/go/rfc5188
     *
     * @var string
     */
    public const EVRCWB0 = 'audio/EVRCWB0';

    /**
     * MIME type 'EVRCWB1'
     *
     * Standards: RFC5188
     *
     * @see https://www.iana.org/go/rfc5188
     *
     * @var string
     */
    public const EVRCWB1 = 'audio/EVRCWB1';

    /**
     * MIME type 'EVS'
     *
     * Standards: -
     *
     * @var string
     */
    public const EVS = 'audio/EVS';

    /**
     * MIME type 'example'
     *
     * Standards: RFC4735
     *
     * @see https://www.iana.org/go/rfc4735
     *
     * @var string
     */
    public const EXAMPLE = 'audio/example';

    /**
     * MIME type 'flexfec'
     *
     * Standards: RFC8627
     *
     * @see https://www.iana.org/go/rfc8627
     *
     * @var string
     */
    public const FLEXFEC = 'audio/flexfec';

    /**
     * MIME type 'fwdred'
     *
     * Standards: RFC6354
     *
     * @see https://www.iana.org/go/rfc6354
     *
     * @var string
     */
    public const FWDRED = 'audio/fwdred';

    /**
     * MIME type 'G711-0'
     *
     * Standards: RFC7655
     *
     * @see https://www.iana.org/go/rfc7655
     *
     * @var string
     */
    public const G711_0 = 'audio/G711-0';

    /**
     * MIME type 'G719'
     *
     * Standards: RFC5404, RFC Errata 3245
     *
     * @see https://www.iana.org/go/rfc5404
     * @see http://www.rfc-editor.org/errata_search.php?eid=3245
     *
     * @var string
     */
    public const G719 = 'audio/G719';

    /**
     * MIME type 'G7221'
     *
     * Standards: RFC5577
     *
     * @see https://www.iana.org/go/rfc5577
     *
     * @var string
     */
    public const G7221 = 'audio/G7221';

    /**
     * MIME type 'G722'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G722 = 'audio/G722';

    /**
     * MIME type 'G723'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G723 = 'audio/G723';

    /**
     * MIME type 'G726-16'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G726_16 = 'audio/G726-16';

    /**
     * MIME type 'G726-24'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G726_24 = 'audio/G726-24';

    /**
     * MIME type 'G726-32'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G726_32 = 'audio/G726-32';

    /**
     * MIME type 'G726-40'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G726_40 = 'audio/G726-40';

    /**
     * MIME type 'G728'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G728 = 'audio/G728';

    /**
     * MIME type 'G729'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G729 = 'audio/G729';

    /**
     * MIME type 'G7291'
     *
     * Standards: RFC4749, RFC5459
     *
     * @see https://www.iana.org/go/rfc4749
     * @see https://www.iana.org/go/rfc5459
     *
     * @var string
     */
    public const G7291 = 'audio/G7291';

    /**
     * MIME type 'G729D'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G729D = 'audio/G729D';

    /**
     * MIME type 'G729E'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const G729E = 'audio/G729E';

    /**
     * MIME type 'GSM'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const GSM = 'audio/GSM';

    /**
     * MIME type 'GSM-EFR'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const GSM_EFR = 'audio/GSM-EFR';

    /**
     * MIME type 'GSM-HR-08'
     *
     * Standards: RFC5993
     *
     * @see https://www.iana.org/go/rfc5993
     *
     * @var string
     */
    public const GSM_HR_08 = 'audio/GSM-HR-08';

    /**
     * MIME type 'iLBC'
     *
     * Standards: RFC3952
     *
     * @see https://www.iana.org/go/rfc3952
     *
     * @var string
     */
    public const ILBC = 'audio/iLBC';

    /**
     * MIME type 'ip-mr_v2.5'
     *
     * Standards: RFC6262
     *
     * @see https://www.iana.org/go/rfc6262
     *
     * @var string
     */
    public const IP_MR_V2_5 = 'audio/ip-mr_v2.5';

    /**
     * MIME type 'L8'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const L8 = 'audio/L8';

    /**
     * MIME type 'L16'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const L16 = 'audio/L16';

    /**
     * MIME type 'L20'
     *
     * Standards: RFC3190
     *
     * @see https://www.iana.org/go/rfc3190
     *
     * @var string
     */
    public const L20 = 'audio/L20';

    /**
     * MIME type 'L24'
     *
     * Standards: RFC3190
     *
     * @see https://www.iana.org/go/rfc3190
     *
     * @var string
     */
    public const L24 = 'audio/L24';

    /**
     * MIME type 'LPC'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const LPC = 'audio/LPC';

    /**
     * MIME type 'MELP'
     *
     * Standards: RFC8130
     *
     * @see https://www.iana.org/go/rfc8130
     *
     * @var string
     */
    public const MELP = 'audio/MELP';

    /**
     * MIME type 'MELP600'
     *
     * Standards: RFC8130
     *
     * @see https://www.iana.org/go/rfc8130
     *
     * @var string
     */
    public const MELP600 = 'audio/MELP600';

    /**
     * MIME type 'MELP1200'
     *
     * Standards: RFC8130
     *
     * @see https://www.iana.org/go/rfc8130
     *
     * @var string
     */
    public const MELP1200 = 'audio/MELP1200';

    /**
     * MIME type 'MELP2400'
     *
     * Standards: RFC8130
     *
     * @see https://www.iana.org/go/rfc8130
     *
     * @var string
     */
    public const MELP2400 = 'audio/MELP2400';

    /**
     * MIME type 'mhas'
     *
     * Standards: -
     *
     * @var string
     */
    public const MHAS = 'audio/mhas';

    /**
     * MIME type 'mobile-xmf'
     *
     * Standards: RFC4723
     *
     * @see https://www.iana.org/go/rfc4723
     *
     * @var string
     */
    public const MOBILE_XMF = 'audio/mobile-xmf';

    /**
     * MIME type 'MPA'
     *
     * Standards: RFC3555
     *
     * @see https://www.iana.org/go/rfc3555
     *
     * @var string
     */
    public const MPA = 'audio/MPA';

    /**
     * MIME type 'mp4'
     *
     * Standards: RFC4337, RFC6381
     *
     * @see https://www.iana.org/go/rfc4337
     * @see https://www.iana.org/go/rfc6381
     *
     * @var string
     */
    public const MP4 = 'audio/mp4';

    /**
     * MIME type 'MP4A-LATM'
     *
     * Standards: RFC6416
     *
     * @see https://www.iana.org/go/rfc6416
     *
     * @var string
     */
    public const MP4A_LATM = 'audio/MP4A-LATM';

    /**
     * MIME type 'mpa-robust'
     *
     * Standards: RFC5219
     *
     * @see https://www.iana.org/go/rfc5219
     *
     * @var string
     */
    public const MPA_ROBUST = 'audio/mpa-robust';

    /**
     * MIME type 'mpeg'
     *
     * Standards: RFC3003
     *
     * @see https://www.iana.org/go/rfc3003
     *
     * @var string
     */
    public const MPEG = 'audio/mpeg';

    /**
     * MIME type 'mpeg4-generic'
     *
     * Standards: RFC3640, RFC5691, RFC6295
     *
     * @see https://www.iana.org/go/rfc3640
     * @see https://www.iana.org/go/rfc5691
     * @see https://www.iana.org/go/rfc6295
     *
     * @var string
     */
    public const MPEG4_GENERIC = 'audio/mpeg4-generic';

    /**
     * MIME type 'ogg'
     *
     * Standards: RFC5334, RFC7845
     *
     * @see https://www.iana.org/go/rfc5334
     * @see https://www.iana.org/go/rfc7845
     *
     * @var string
     */
    public const OGG = 'audio/ogg';

    /**
     * MIME type 'opus'
     *
     * Standards: RFC7587
     *
     * @see https://www.iana.org/go/rfc7587
     *
     * @var string
     */
    public const OPUS = 'audio/opus';

    /**
     * MIME type 'parityfec'
     *
     * Standards: RFC3009
     *
     * @see https://www.iana.org/go/rfc3009
     *
     * @var string
     */
    public const PARITYFEC = 'audio/parityfec';

    /**
     * MIME type 'PCMA'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const PCMA = 'audio/PCMA';

    /**
     * MIME type 'PCMA-WB'
     *
     * Standards: RFC5391
     *
     * @see https://www.iana.org/go/rfc5391
     *
     * @var string
     */
    public const PCMA_WB = 'audio/PCMA-WB';

    /**
     * MIME type 'PCMU'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const PCMU = 'audio/PCMU';

    /**
     * MIME type 'PCMU-WB'
     *
     * Standards: RFC5391
     *
     * @see https://www.iana.org/go/rfc5391
     *
     * @var string
     */
    public const PCMU_WB = 'audio/PCMU-WB';

    /**
     * MIME type 'prs.sid'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_SID = 'audio/prs.sid';

    /**
     * MIME type 'QCELP'
     *
     * Standards: RFC3555, RFC3625
     *
     * @see https://www.iana.org/go/rfc3555
     * @see https://www.iana.org/go/rfc3625
     *
     * @var string
     */
    public const QCELP = 'audio/QCELP';

    /**
     * MIME type 'raptorfec'
     *
     * Standards: RFC6682
     *
     * @see https://www.iana.org/go/rfc6682
     *
     * @var string
     */
    public const RAPTORFEC = 'audio/raptorfec';

    /**
     * MIME type 'RED'
     *
     * Standards: RFC3555
     *
     * @see https://www.iana.org/go/rfc3555
     *
     * @var string
     */
    public const RED = 'audio/RED';

    /**
     * MIME type 'rtp-enc-aescm128'
     *
     * Standards: -
     *
     * @var string
     */
    public const RTP_ENC_AESCM128 = 'audio/rtp-enc-aescm128';

    /**
     * MIME type 'rtploopback'
     *
     * Standards: RFC6849
     *
     * @see https://www.iana.org/go/rfc6849
     *
     * @var string
     */
    public const RTPLOOPBACK = 'audio/rtploopback';

    /**
     * MIME type 'rtp-midi'
     *
     * Standards: RFC6295
     *
     * @see https://www.iana.org/go/rfc6295
     *
     * @var string
     */
    public const RTP_MIDI = 'audio/rtp-midi';

    /**
     * MIME type 'rtx'
     *
     * Standards: RFC4588
     *
     * @see https://www.iana.org/go/rfc4588
     *
     * @var string
     */
    public const RTX = 'audio/rtx';

    /**
     * MIME type 'scip'
     *
     * Standards: -
     *
     * @var string
     */
    public const SCIP = 'audio/scip';

    /**
     * MIME type 'SMV'
     *
     * Standards: RFC3558
     *
     * @see https://www.iana.org/go/rfc3558
     *
     * @var string
     */
    public const SMV = 'audio/SMV';

    /**
     * MIME type 'SMV0'
     *
     * Standards: RFC3558
     *
     * @see https://www.iana.org/go/rfc3558
     *
     * @var string
     */
    public const SMV0 = 'audio/SMV0';

    /**
     * MIME type 'SMV-QCP'
     *
     * Standards: RFC3625
     *
     * @see https://www.iana.org/go/rfc3625
     *
     * @var string
     */
    public const SMV_QCP = 'audio/SMV-QCP';

    /**
     * MIME type 'sofa'
     *
     * Standards: -
     *
     * @var string
     */
    public const SOFA = 'audio/sofa';

    /**
     * MIME type 'sp-midi'
     *
     * Standards: -
     *
     * @var string
     */
    public const SP_MIDI = 'audio/sp-midi';

    /**
     * MIME type 'speex'
     *
     * Standards: RFC5574
     *
     * @see https://www.iana.org/go/rfc5574
     *
     * @var string
     */
    public const SPEEX = 'audio/speex';

    /**
     * MIME type 't140c'
     *
     * Standards: RFC4351
     *
     * @see https://www.iana.org/go/rfc4351
     *
     * @var string
     */
    public const T140C = 'audio/t140c';

    /**
     * MIME type 't38'
     *
     * Standards: RFC4612
     *
     * @see https://www.iana.org/go/rfc4612
     *
     * @var string
     */
    public const T38 = 'audio/t38';

    /**
     * MIME type 'telephone-event'
     *
     * Standards: RFC4733
     *
     * @see https://www.iana.org/go/rfc4733
     *
     * @var string
     */
    public const TELEPHONE_EVENT = 'audio/telephone-event';

    /**
     * MIME type 'TETRA_ACELP'
     *
     * Standards: -
     *
     * @var string
     */
    public const TETRA_ACELP = 'audio/TETRA_ACELP';

    /**
     * MIME type 'TETRA_ACELP_BB'
     *
     * Standards: -
     *
     * @var string
     */
    public const TETRA_ACELP_BB = 'audio/TETRA_ACELP_BB';

    /**
     * MIME type 'tone'
     *
     * Standards: RFC4733
     *
     * @see https://www.iana.org/go/rfc4733
     *
     * @var string
     */
    public const TONE = 'audio/tone';

    /**
     * MIME type 'TSVCIS'
     *
     * Standards: RFC8817
     *
     * @see https://www.iana.org/go/rfc8817
     *
     * @var string
     */
    public const TSVCIS = 'audio/TSVCIS';

    /**
     * MIME type 'UEMCLIP'
     *
     * Standards: RFC5686
     *
     * @see https://www.iana.org/go/rfc5686
     *
     * @var string
     */
    public const UEMCLIP = 'audio/UEMCLIP';

    /**
     * MIME type 'ulpfec'
     *
     * Standards: RFC5109
     *
     * @see https://www.iana.org/go/rfc5109
     *
     * @var string
     */
    public const ULPFEC = 'audio/ulpfec';

    /**
     * MIME type 'usac'
     *
     * Standards: -
     *
     * @var string
     */
    public const USAC = 'audio/usac';

    /**
     * MIME type 'VDVI'
     *
     * Standards: RFC4856
     *
     * @see https://www.iana.org/go/rfc4856
     *
     * @var string
     */
    public const VDVI = 'audio/VDVI';

    /**
     * MIME type 'VMR-WB'
     *
     * Standards: RFC4348, RFC4424
     *
     * @see https://www.iana.org/go/rfc4348
     * @see https://www.iana.org/go/rfc4424
     *
     * @var string
     */
    public const VMR_WB = 'audio/VMR-WB';

    /**
     * MIME type 'vnd.3gpp.iufp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_IUFP = 'audio/vnd.3gpp.iufp';

    /**
     * MIME type 'vnd.4SB'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_4SB = 'audio/vnd.4SB';

    /**
     * MIME type 'vnd.audiokoz'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AUDIOKOZ = 'audio/vnd.audiokoz';

    /**
     * MIME type 'vnd.CELP'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CELP = 'audio/vnd.CELP';

    /**
     * MIME type 'vnd.cisco.nse'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CISCO_NSE = 'audio/vnd.cisco.nse';

    /**
     * MIME type 'vnd.cmles.radio-events'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CMLES_RADIO_EVENTS = 'audio/vnd.cmles.radio-events';

    /**
     * MIME type 'vnd.cns.anp1'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CNS_ANP1 = 'audio/vnd.cns.anp1';

    /**
     * MIME type 'vnd.cns.inf1'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CNS_INF1 = 'audio/vnd.cns.inf1';

    /**
     * MIME type 'vnd.dece.audio'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DECE_AUDIO = 'audio/vnd.dece.audio';

    /**
     * MIME type 'vnd.digital-winds'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DIGITAL_WINDS = 'audio/vnd.digital-winds';

    /**
     * MIME type 'vnd.dlna.adts'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DLNA_ADTS = 'audio/vnd.dlna.adts';

    /**
     * MIME type 'vnd.dolby.heaac.1'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_HEAAC_1 = 'audio/vnd.dolby.heaac.1';

    /**
     * MIME type 'vnd.dolby.heaac.2'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_HEAAC_2 = 'audio/vnd.dolby.heaac.2';

    /**
     * MIME type 'vnd.dolby.mlp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_MLP = 'audio/vnd.dolby.mlp';

    /**
     * MIME type 'vnd.dolby.mps'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_MPS = 'audio/vnd.dolby.mps';

    /**
     * MIME type 'vnd.dolby.pl2'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_PL2 = 'audio/vnd.dolby.pl2';

    /**
     * MIME type 'vnd.dolby.pl2x'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_PL2X = 'audio/vnd.dolby.pl2x';

    /**
     * MIME type 'vnd.dolby.pl2z'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_PL2Z = 'audio/vnd.dolby.pl2z';

    /**
     * MIME type 'vnd.dolby.pulse.1'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_PULSE_1 = 'audio/vnd.dolby.pulse.1';

    /**
     * MIME type 'vnd.dra'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DRA = 'audio/vnd.dra';

    /**
     * MIME type 'vnd.dts'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DTS = 'audio/vnd.dts';

    /**
     * MIME type 'vnd.dts.hd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DTS_HD = 'audio/vnd.dts.hd';

    /**
     * MIME type 'vnd.dts.uhd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DTS_UHD = 'audio/vnd.dts.uhd';

    /**
     * MIME type 'vnd.dvb.file'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_FILE = 'audio/vnd.dvb.file';

    /**
     * MIME type 'vnd.everad.plj'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EVERAD_PLJ = 'audio/vnd.everad.plj';

    /**
     * MIME type 'vnd.hns.audio'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HNS_AUDIO = 'audio/vnd.hns.audio';

    /**
     * MIME type 'vnd.lucent.voice'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LUCENT_VOICE = 'audio/vnd.lucent.voice';

    /**
     * MIME type 'vnd.ms-playready.media.pya'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_PLAYREADY_MEDIA_PYA = 'audio/vnd.ms-playready.media.pya';

    /**
     * MIME type 'vnd.nokia.mobile-xmf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_MOBILE_XMF = 'audio/vnd.nokia.mobile-xmf';

    /**
     * MIME type 'vnd.nortel.vbk'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NORTEL_VBK = 'audio/vnd.nortel.vbk';

    /**
     * MIME type 'vnd.nuera.ecelp4800'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NUERA_ECELP4800 = 'audio/vnd.nuera.ecelp4800';

    /**
     * MIME type 'vnd.nuera.ecelp7470'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NUERA_ECELP7470 = 'audio/vnd.nuera.ecelp7470';

    /**
     * MIME type 'vnd.nuera.ecelp9600'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NUERA_ECELP9600 = 'audio/vnd.nuera.ecelp9600';

    /**
     * MIME type 'vnd.octel.sbc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OCTEL_SBC = 'audio/vnd.octel.sbc';

    /**
     * MIME type 'vnd.presonus.multitrack'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PRESONUS_MULTITRACK = 'audio/vnd.presonus.multitrack';

    /**
     * MIME type 'vnd.qcelp'
     *
     * Standards: RFC3625
     *
     * @see https://www.iana.org/go/rfc3625
     *
     * @var string
     */
    public const VND_QCELP = 'audio/vnd.qcelp';

    /**
     * MIME type 'vnd.rhetorex.32kadpcm'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RHETOREX_32KADPCM = 'audio/vnd.rhetorex.32kadpcm';

    /**
     * MIME type 'vnd.rip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RIP = 'audio/vnd.rip';

    /**
     * MIME type 'vnd.sealedmedia.softseal.mpeg'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALEDMEDIA_SOFTSEAL_MPEG = 'audio/vnd.sealedmedia.softseal.mpeg';

    /**
     * MIME type 'vnd.vmx.cvsd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VMX_CVSD = 'audio/vnd.vmx.cvsd';

    /**
     * MIME type 'vorbis'
     *
     * Standards: RFC5215
     *
     * @see https://www.iana.org/go/rfc5215
     *
     * @var string
     */
    public const VORBIS = 'audio/vorbis';

    /**
     * MIME type 'vorbis-config'
     *
     * Standards: RFC5215
     *
     * @see https://www.iana.org/go/rfc5215
     *
     * @var string
     */
    public const VORBIS_CONFIG = 'audio/vorbis-config';
}
