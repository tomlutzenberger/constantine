<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 * @noinspection PhpConstantNamingConventionInspection
 */

namespace TomLutzenberger\Constantine\File;

/**
 * Collection of official IANA text MIME types
 *
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 *
 * @package   TomLutzenberger\Constantine\File
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class MimeTypeText
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
    public const X_1D_INTERLEAVED_PARITYFEC = 'text/1d-interleaved-parityfec';

    /**
     * MIME type 'cache-manifest'
     *
     * Standards: -
     *
     * @var string
     */
    public const CACHE_MANIFEST = 'text/cache-manifest';

    /**
     * MIME type 'calendar'
     *
     * Standards: RFC5545
     *
     * @see https://www.iana.org/go/rfc5545
     *
     * @var string
     */
    public const CALENDAR = 'text/calendar';

    /**
     * MIME type 'cql'
     *
     * Standards: -
     *
     * @var string
     */
    public const CQL = 'text/cql';

    /**
     * MIME type 'cql-expression'
     *
     * Standards: -
     *
     * @var string
     */
    public const CQL_EXPRESSION = 'text/cql-expression';

    /**
     * MIME type 'cql-identifier'
     *
     * Standards: -
     *
     * @var string
     */
    public const CQL_IDENTIFIER = 'text/cql-identifier';

    /**
     * MIME type 'css'
     *
     * Standards: RFC2318
     *
     * @see https://www.iana.org/go/rfc2318
     *
     * @var string
     */
    public const CSS = 'text/css';

    /**
     * MIME type 'csv'
     *
     * Standards: RFC4180, RFC7111
     *
     * @see https://www.iana.org/go/rfc4180
     * @see https://www.iana.org/go/rfc7111
     *
     * @var string
     */
    public const CSV = 'text/csv';

    /**
     * MIME type 'csv-schema'
     *
     * Standards: -
     *
     * @var string
     */
    public const CSV_SCHEMA = 'text/csv-schema';

    /**
     * MIME type 'directory'
     *
     * Standards: RFC2425, RFC6350
     *
     * @see https://www.iana.org/go/rfc2425
     * @see https://www.iana.org/go/rfc6350
     *
     * @var string
     * @deprecated by RFC6350
     */
    public const DIRECTORY = 'text/directory';

    /**
     * MIME type 'dns'
     *
     * Standards: RFC4027
     *
     * @see https://www.iana.org/go/rfc4027
     *
     * @var string
     */
    public const DNS = 'text/dns';

    /**
     * MIME type 'ecmascript'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-dispatch-javascript-mjs-17
     *
     * @var string
     * @deprecated in favor of text/javascript
     */
    public const ECMASCRIPT = 'text/ecmascript';

    /**
     * MIME type 'encaprtp'
     *
     * Standards: RFC6849
     *
     * @see https://www.iana.org/go/rfc6849
     *
     * @var string
     */
    public const ENCAPRTP = 'text/encaprtp';

    /**
     * MIME type 'enriched'
     *
     * Standards: RFC1896
     *
     * @see https://www.iana.org/go/rfc1896
     *
     * @var string
     */
    public const ENRICHED = 'text/enriched';

    /**
     * MIME type 'example'
     *
     * Standards: RFC4735
     *
     * @see https://www.iana.org/go/rfc4735
     *
     * @var string
     */
    public const EXAMPLE = 'text/example';

    /**
     * MIME type 'fhirpath'
     *
     * Standards: -
     *
     * @var string
     */
    public const FHIRPATH = 'text/fhirpath';

    /**
     * MIME type 'flexfec'
     *
     * Standards: RFC8627
     *
     * @see https://www.iana.org/go/rfc8627
     *
     * @var string
     */
    public const FLEXFEC = 'text/flexfec';

    /**
     * MIME type 'fwdred'
     *
     * Standards: RFC6354
     *
     * @see https://www.iana.org/go/rfc6354
     *
     * @var string
     */
    public const FWDRED = 'text/fwdred';

    /**
     * MIME type 'gff3'
     *
     * Standards: -
     *
     * @var string
     */
    public const GFF3 = 'text/gff3';

    /**
     * MIME type 'grammar-ref-list'
     *
     * Standards: RFC6787
     *
     * @see https://www.iana.org/go/rfc6787
     *
     * @var string
     */
    public const GRAMMAR_REF_LIST = 'text/grammar-ref-list';

    /**
     * MIME type 'html'
     *
     * Standards: -
     *
     * @var string
     */
    public const HTML = 'text/html';

    /**
     * MIME type 'javascript'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-dispatch-javascript-mjs-17
     *
     * @var string
     */
    public const JAVASCRIPT = 'text/javascript';

    /**
     * MIME type 'jcr-cnd'
     *
     * Standards: -
     *
     * @var string
     */
    public const JCR_CND = 'text/jcr-cnd';

    /**
     * MIME type 'markdown'
     *
     * Standards: RFC7763
     *
     * @see https://www.iana.org/go/rfc7763
     *
     * @var string
     */
    public const MARKDOWN = 'text/markdown';

    /**
     * MIME type 'mizar'
     *
     * Standards: -
     *
     * @var string
     */
    public const MIZAR = 'text/mizar';

    /**
     * MIME type 'n3'
     *
     * Standards: -
     *
     * @var string
     */
    public const N3 = 'text/n3';

    /**
     * MIME type 'parameters'
     *
     * Standards: RFC7826
     *
     * @see https://www.iana.org/go/rfc7826
     *
     * @var string
     */
    public const PARAMETERS = 'text/parameters';

    /**
     * MIME type 'parityfec'
     *
     * Standards: RFC3009
     *
     * @see https://www.iana.org/go/rfc3009
     *
     * @var string
     */
    public const PARITYFEC = 'text/parityfec';

    /**
     * MIME type 'plain'
     *
     * Standards: RFC2046, RFC3676, RFC5147
     *
     * @see https://www.iana.org/go/rfc2046
     * @see https://www.iana.org/go/rfc3676
     * @see https://www.iana.org/go/rfc5147
     *
     * @var string
     */
    public const PLAIN = 'text/plain';

    /**
     * MIME type 'provenance-notation'
     *
     * Standards: -
     *
     * @var string
     */
    public const PROVENANCE_NOTATION = 'text/provenance-notation';

    /**
     * MIME type 'prs.fallenstein.rst'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_FALLENSTEIN_RST = 'text/prs.fallenstein.rst';

    /**
     * MIME type 'prs.lines.tag'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_LINES_TAG = 'text/prs.lines.tag';

    /**
     * MIME type 'prs.prop.logic'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_PROP_LOGIC = 'text/prs.prop.logic';

    /**
     * MIME type 'raptorfec'
     *
     * Standards: RFC6682
     *
     * @see https://www.iana.org/go/rfc6682
     *
     * @var string
     */
    public const RAPTORFEC = 'text/raptorfec';

    /**
     * MIME type 'RED'
     *
     * Standards: RFC4102
     *
     * @see https://www.iana.org/go/rfc4102
     *
     * @var string
     */
    public const RED = 'text/RED';

    /**
     * MIME type 'rfc822-headers'
     *
     * Standards: RFC6522
     *
     * @see https://www.iana.org/go/rfc6522
     *
     * @var string
     */
    public const RFC822_HEADERS = 'text/rfc822-headers';

    /**
     * MIME type 'richtext'
     *
     * Standards: RFC2045, RFC2046
     *
     * @see https://www.iana.org/go/rfc2045
     * @see https://www.iana.org/go/rfc2046
     *
     * @var string
     */
    public const RICHTEXT = 'text/richtext';

    /**
     * MIME type 'rtf'
     *
     * Standards: -
     *
     * @var string
     */
    public const RTF = 'text/rtf';

    /**
     * MIME type 'rtp-enc-aescm128'
     *
     * Standards: -
     *
     * @var string
     */
    public const RTP_ENC_AESCM128 = 'text/rtp-enc-aescm128';

    /**
     * MIME type 'rtploopback'
     *
     * Standards: RFC6849
     *
     * @see https://www.iana.org/go/rfc6849
     *
     * @var string
     */
    public const RTPLOOPBACK = 'text/rtploopback';

    /**
     * MIME type 'rtx'
     *
     * Standards: RFC4588
     *
     * @see https://www.iana.org/go/rfc4588
     *
     * @var string
     */
    public const RTX = 'text/rtx';

    /**
     * MIME type 'SGML'
     *
     * Standards: RFC1874
     *
     * @see https://www.iana.org/go/rfc1874
     *
     * @var string
     */
    public const SGML = 'text/SGML';

    /**
     * MIME type 'shaclc'
     *
     * Standards: -
     *
     * @var string
     */
    public const SHACLC = 'text/shaclc';

    /**
     * MIME type 'shex'
     *
     * Standards: -
     *
     * @var string
     */
    public const SHEX = 'text/shex';

    /**
     * MIME type 'spdx'
     *
     * Standards: -
     *
     * @var string
     */
    public const SPDX = 'text/spdx';

    /**
     * MIME type 'strings'
     *
     * Standards: -
     *
     * @var string
     */
    public const STRINGS = 'text/strings';

    /**
     * MIME type 't140'
     *
     * Standards: RFC4103
     *
     * @see https://www.iana.org/go/rfc4103
     *
     * @var string
     */
    public const T140 = 'text/t140';

    /**
     * MIME type 'tab-separated-values'
     *
     * Standards: -
     *
     * @var string
     */
    public const TAB_SEPARATED_VALUES = 'text/tab-separated-values';

    /**
     * MIME type 'troff'
     *
     * Standards: RFC4263
     *
     * @see https://www.iana.org/go/rfc4263
     *
     * @var string
     */
    public const TROFF = 'text/troff';

    /**
     * MIME type 'turtle'
     *
     * Standards: -
     *
     * @var string
     */
    public const TURTLE = 'text/turtle';

    /**
     * MIME type 'ulpfec'
     *
     * Standards: RFC5109
     *
     * @see https://www.iana.org/go/rfc5109
     *
     * @var string
     */
    public const ULPFEC = 'text/ulpfec';

    /**
     * MIME type 'uri-list'
     *
     * Standards: RFC2483
     *
     * @see https://www.iana.org/go/rfc2483
     *
     * @var string
     */
    public const URI_LIST = 'text/uri-list';

    /**
     * MIME type 'vcard'
     *
     * Standards: RFC6350
     *
     * @see https://www.iana.org/go/rfc6350
     *
     * @var string
     */
    public const VCARD = 'text/vcard';

    /**
     * MIME type 'vnd.a'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_A = 'text/vnd.a';

    /**
     * MIME type 'vnd.abc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ABC = 'text/vnd.abc';

    /**
     * MIME type 'vnd.ascii-art'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ASCII_ART = 'text/vnd.ascii-art';

    /**
     * MIME type 'vnd.curl'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CURL = 'text/vnd.curl';

    /**
     * MIME type 'vnd.debian.copyright'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DEBIAN_COPYRIGHT = 'text/vnd.debian.copyright';

    /**
     * MIME type 'vnd.DMClientScript'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DMCLIENTSCRIPT = 'text/vnd.DMClientScript';

    /**
     * MIME type 'vnd.dvb.subtitle'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_SUBTITLE = 'text/vnd.dvb.subtitle';

    /**
     * MIME type 'vnd.esmertec.theme-descriptor'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ESMERTEC_THEME_DESCRIPTOR = 'text/vnd.esmertec.theme-descriptor';

    /**
     * MIME type 'vnd.familysearch.gedcom'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FAMILYSEARCH_GEDCOM = 'text/vnd.familysearch.gedcom';

    /**
     * MIME type 'vnd.ficlab.flt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FICLAB_FLT = 'text/vnd.ficlab.flt';

    /**
     * MIME type 'vnd.fly'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FLY = 'text/vnd.fly';

    /**
     * MIME type 'vnd.fmi.flexstor'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FMI_FLEXSTOR = 'text/vnd.fmi.flexstor';

    /**
     * MIME type 'vnd.gml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GML = 'text/vnd.gml';

    /**
     * MIME type 'vnd.graphviz'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GRAPHVIZ = 'text/vnd.graphviz';

    /**
     * MIME type 'vnd.hans'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HANS = 'text/vnd.hans';

    /**
     * MIME type 'vnd.hgl'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HGL = 'text/vnd.hgl';

    /**
     * MIME type 'vnd.in3d.3dml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IN3D_3DML = 'text/vnd.in3d.3dml';

    /**
     * MIME type 'vnd.in3d.spot'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IN3D_SPOT = 'text/vnd.in3d.spot';

    /**
     * MIME type 'vnd.IPTC.NewsML'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_NEWSML = 'text/vnd.IPTC.NewsML';

    /**
     * MIME type 'vnd.IPTC.NITF'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_NITF = 'text/vnd.IPTC.NITF';

    /**
     * MIME type 'vnd.latex-z'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LATEX_Z = 'text/vnd.latex-z';

    /**
     * MIME type 'vnd.motorola.reflex'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_REFLEX = 'text/vnd.motorola.reflex';

    /**
     * MIME type 'vnd.ms-mediapackage'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_MEDIAPACKAGE = 'text/vnd.ms-mediapackage';

    /**
     * MIME type 'vnd.net2phone.commcenter.command'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NET2PHONE_COMMCENTER_CMD = 'text/vnd.net2phone.commcenter.command';

    /**
     * MIME type 'vnd.radisys.msml-basic-layout'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_BASIC_LAYOUT = 'text/vnd.radisys.msml-basic-layout';

    /**
     * MIME type 'vnd.senx.warpscript'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SENX_WARPSCRIPT = 'text/vnd.senx.warpscript';

    /**
     * MIME type 'vnd.si.uricatalogue'
     *
     * Standards: -
     *
     * @var string
     * @deprecated by request
     */
    public const VND_SI_URICATALOGUE = 'text/vnd.si.uricatalogue';

    /**
     * MIME type 'vnd.sun.j2me.app-descriptor'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SUN_J2ME_APP_DESCRIPTOR = 'text/vnd.sun.j2me.app-descriptor';

    /**
     * MIME type 'vnd.sosi'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SOSI = 'text/vnd.sosi';

    /**
     * MIME type 'vnd.trolltech.linguist'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TROLLTECH_LINGUIST = 'text/vnd.trolltech.linguist';

    /**
     * MIME type 'vnd.wap.si'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_SI = 'text/vnd.wap.si';

    /**
     * MIME type 'vnd.wap.sl'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_SL = 'text/vnd.wap.sl';

    /**
     * MIME type 'vnd.wap.wml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_WML = 'text/vnd.wap.wml';

    /**
     * MIME type 'vnd.wap.wmlscript'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_WMLSCRIPT = 'text/vnd.wap.wmlscript';

    /**
     * MIME type 'vtt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VTT = 'text/vtt';

    /**
     * MIME type 'xml'
     *
     * Standards: RFC7303
     *
     * @see https://www.iana.org/go/rfc7303
     *
     * @var string
     */
    public const XML = 'text/xml';

    /**
     * MIME type 'xml-external-parsed-entity'
     *
     * Standards: RFC7303
     *
     * @see https://www.iana.org/go/rfc7303
     *
     * @var string
     */
    public const XML_EXTERNAL_PARSED_ENTITY = 'text/xml-external-parsed-entity';
}
