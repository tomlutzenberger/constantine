<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 * @noinspection PhpConstantNamingConventionInspection
 */

namespace TomLutzenberger\Constantine\File;

/**
 * Collection of official IANA application MIME types
 *
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 *
 * @phpcs:disable Generic.Files.LineLength
 *
 * @package   TomLutzenberger\Constantine\File
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class MimeTypeApplication
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
    public const X_1D_INTERLEAVED_PARITYFEC = 'application/1d-interleaved-parityfec';

    /**
     * MIME type '3gpdash-qoe-report+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const X_3GPDASH_QOE_REPORT_XML = 'application/3gpdash-qoe-report+xml';

    /**
     * MIME type '3gppHal+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const X_3GPPHAL_JSON = 'application/3gppHal+json';

    /**
     * MIME type '3gppHalForms+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const X_3GPPHALFORMS_JSON = 'application/3gppHalForms+json';

    /**
     * MIME type '3gpp-ims+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const X_3GPP_IMS_XML = 'application/3gpp-ims+xml';

    /**
     * MIME type 'A2L'
     *
     * Standards: -
     *
     * @var string
     */
    public const A2L = 'application/A2L';

    /**
     * MIME type 'ace+cbor'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-ace-oauth-authz-46
     *
     * @var string
     */
    public const ACE_CBOR = 'application/ace+cbor';

    /**
     * MIME type 'activemessage'
     *
     * Standards: -
     *
     * @var string
     */
    public const ACTIVEMESSAGE = 'application/activemessage';

    /**
     * MIME type 'activity+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const ACTIVITY_JSON = 'application/activity+json';

    /**
     * MIME type 'alto-cdni+json'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-alto-cdni-request-routing-alto-22
     *
     * @var string
     */
    public const ALTO_CDNI_JSON = 'application/alto-cdni+json';

    /**
     * MIME type 'alto-cdnifilter+json'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-alto-cdni-request-routing-alto-22
     *
     * @var string
     */
    public const ALTO_CDNIFILTER_JSON = 'application/alto-cdnifilter+json';

    /**
     * MIME type 'alto-costmap+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_COSTMAP_JSON = 'application/alto-costmap+json';

    /**
     * MIME type 'alto-costmapfilter+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_COSTMAPFILTER_JSON = 'application/alto-costmapfilter+json';

    /**
     * MIME type 'alto-directory+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_DIRECTORY_JSON = 'application/alto-directory+json';

    /**
     * MIME type 'alto-endpointprop+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_ENDPOINTPROP_JSON = 'application/alto-endpointprop+json';

    /**
     * MIME type 'alto-endpointpropparams+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_ENDPOINTPROPPARAMS_JSON = 'application/alto-endpointpropparams+json';

    /**
     * MIME type 'alto-endpointcost+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_ENDPOINTCOST_JSON = 'application/alto-endpointcost+json';

    /**
     * MIME type 'alto-endpointcostparams+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_ENDPOINTCOSTPARAMS_JSON = 'application/alto-endpointcostparams+json';

    /**
     * MIME type 'alto-error+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_ERROR_JSON = 'application/alto-error+json';

    /**
     * MIME type 'alto-networkmapfilter+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_NETWORKMAPFILTER_JSON = 'application/alto-networkmapfilter+json';

    /**
     * MIME type 'alto-networkmap+json'
     *
     * Standards: RFC7285
     *
     * @see https://www.iana.org/go/rfc7285
     *
     * @var string
     */
    public const ALTO_NETWORKMAP_JSON = 'application/alto-networkmap+json';

    /**
     * MIME type 'alto-propmap+json'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-alto-unified-props-new-24
     *
     * @var string
     */
    public const ALTO_PROPMAP_JSON = 'application/alto-propmap+json';

    /**
     * MIME type 'alto-propmapparams+json'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-alto-unified-props-new-24
     *
     * @var string
     */
    public const ALTO_PROPMAPPARAMS_JSON = 'application/alto-propmapparams+json';

    /**
     * MIME type 'alto-updatestreamcontrol+json'
     *
     * Standards: RFC8895
     *
     * @see https://www.iana.org/go/rfc8895
     *
     * @var string
     */
    public const ALTO_UPDATESTREAMCONTROL_JSON = 'application/alto-updatestreamcontrol+json';

    /**
     * MIME type 'alto-updatestreamparams+json'
     *
     * Standards: RFC8895
     *
     * @see https://www.iana.org/go/rfc8895
     *
     * @var string
     */
    public const ALTO_UPDATESTREAMPARAMS_JSON = 'application/alto-updatestreamparams+json';

    /**
     * MIME type 'AML'
     *
     * Standards: -
     *
     * @var string
     */
    public const AML = 'application/AML';

    /**
     * MIME type 'andrew-inset'
     *
     * Standards: -
     *
     * @var string
     */
    public const ANDREW_INSET = 'application/andrew-inset';

    /**
     * MIME type 'applefile'
     *
     * Standards: -
     *
     * @var string
     */
    public const APPLEFILE = 'application/applefile';

    /**
     * MIME type 'at+jwt'
     *
     * Standards: RFC9068
     *
     * @see https://www.iana.org/go/rfc9068
     *
     * @var string
     */
    public const AT_JWT = 'application/at+jwt';

    /**
     * MIME type 'ATF'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATF = 'application/ATF';

    /**
     * MIME type 'ATFX'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATFX = 'application/ATFX';

    /**
     * MIME type 'atom+xml'
     *
     * Standards: RFC4287, RFC5023
     *
     * @see https://www.iana.org/go/rfc4287
     * @see https://www.iana.org/go/rfc5023
     *
     * @var string
     */
    public const ATOM_XML = 'application/atom+xml';

    /**
     * MIME type 'atomcat+xml'
     *
     * Standards: RFC5023
     *
     * @see https://www.iana.org/go/rfc5023
     *
     * @var string
     */
    public const ATOMCAT_XML = 'application/atomcat+xml';

    /**
     * MIME type 'atomdeleted+xml'
     *
     * Standards: RFC6721
     *
     * @see https://www.iana.org/go/rfc6721
     *
     * @var string
     */
    public const ATOMDELETED_XML = 'application/atomdeleted+xml';

    /**
     * MIME type 'atomicmail'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATOMICMAIL = 'application/atomicmail';

    /**
     * MIME type 'atomsvc+xml'
     *
     * Standards: RFC5023
     *
     * @see https://www.iana.org/go/rfc5023
     *
     * @var string
     */
    public const ATOMSVC_XML = 'application/atomsvc+xml';

    /**
     * MIME type 'atsc-dwd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATSC_DWD_XML = 'application/atsc-dwd+xml';

    /**
     * MIME type 'atsc-dynamic-event-message'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATSC_DYNAMIC_EVENT_MESSAGE = 'application/atsc-dynamic-event-message';

    /**
     * MIME type 'atsc-held+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATSC_HELD_XML = 'application/atsc-held+xml';

    /**
     * MIME type 'atsc-rdt+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATSC_RDT_JSON = 'application/atsc-rdt+json';

    /**
     * MIME type 'atsc-rsat+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATSC_RSAT_XML = 'application/atsc-rsat+xml';

    /**
     * MIME type 'ATXML'
     *
     * Standards: -
     *
     * @var string
     */
    public const ATXML = 'application/ATXML';

    /**
     * MIME type 'auth-policy+xml'
     *
     * Standards: RFC4745
     *
     * @see https://www.iana.org/go/rfc4745
     *
     * @var string
     */
    public const AUTH_POLICY_XML = 'application/auth-policy+xml';

    /**
     * MIME type 'bacnet-xdd+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const BACNET_XDD_ZIP = 'application/bacnet-xdd+zip';

    /**
     * MIME type 'batch-SMTP'
     *
     * Standards: RFC2442
     *
     * @see https://www.iana.org/go/rfc2442
     *
     * @var string
     */
    public const BATCH_SMTP = 'application/batch-SMTP';

    /**
     * MIME type 'beep+xml'
     *
     * Standards: RFC3080
     *
     * @see https://www.iana.org/go/rfc3080
     *
     * @var string
     */
    public const BEEP_XML = 'application/beep+xml';

    /**
     * MIME type 'calendar+json'
     *
     * Standards: RFC7265
     *
     * @see https://www.iana.org/go/rfc7265
     *
     * @var string
     */
    public const CALENDAR_JSON = 'application/calendar+json';

    /**
     * MIME type 'calendar+xml'
     *
     * Standards: RFC6321
     *
     * @see https://www.iana.org/go/rfc6321
     *
     * @var string
     */
    public const CALENDAR_XML = 'application/calendar+xml';

    /**
     * MIME type 'call-completion'
     *
     * Standards: RFC6910
     *
     * @see https://www.iana.org/go/rfc6910
     *
     * @var string
     */
    public const CALL_COMPLETION = 'application/call-completion';

    /**
     * MIME type 'CALS-1840'
     *
     * Standards: RFC1895
     *
     * @see https://www.iana.org/go/rfc1895
     *
     * @var string
     */
    public const CALS_1840 = 'application/CALS-1840';

    /**
     * MIME type 'captive+json'
     *
     * Standards: RFC8908
     *
     * @see https://www.iana.org/go/rfc8908
     *
     * @var string
     */
    public const CAPTIVE_JSON = 'application/captive+json';

    /**
     * MIME type 'cbor'
     *
     * Standards: RFC8949
     *
     * @see https://www.iana.org/go/rfc8949
     *
     * @var string
     */
    public const CBOR = 'application/cbor';

    /**
     * MIME type 'cbor-seq'
     *
     * Standards: RFC8742
     *
     * @see https://www.iana.org/go/rfc8742
     *
     * @var string
     */
    public const CBOR_SEQ = 'application/cbor-seq';

    /**
     * MIME type 'cccex'
     *
     * Standards: -
     *
     * @var string
     */
    public const CCCEX = 'application/cccex';

    /**
     * MIME type 'ccmp+xml'
     *
     * Standards: RFC6503
     *
     * @see https://www.iana.org/go/rfc6503
     *
     * @var string
     */
    public const CCMP_XML = 'application/ccmp+xml';

    /**
     * MIME type 'ccxml+xml'
     *
     * Standards: RFC4267
     *
     * @see https://www.iana.org/go/rfc4267
     *
     * @var string
     */
    public const CCXML_XML = 'application/ccxml+xml';

    /**
     * MIME type 'CDFX+XML'
     *
     * Standards: -
     *
     * @var string
     */
    public const CDFX_XML = 'application/CDFX+XML';

    /**
     * MIME type 'cdmi-capability'
     *
     * Standards: RFC6208
     *
     * @see https://www.iana.org/go/rfc6208
     *
     * @var string
     */
    public const CDMI_CAPABILITY = 'application/cdmi-capability';

    /**
     * MIME type 'cdmi-container'
     *
     * Standards: RFC6208
     *
     * @see https://www.iana.org/go/rfc6208
     *
     * @var string
     */
    public const CDMI_CONTAINER = 'application/cdmi-container';

    /**
     * MIME type 'cdmi-domain'
     *
     * Standards: RFC6208
     *
     * @see https://www.iana.org/go/rfc6208
     *
     * @var string
     */
    public const CDMI_DOMAIN = 'application/cdmi-domain';

    /**
     * MIME type 'cdmi-object'
     *
     * Standards: RFC6208
     *
     * @see https://www.iana.org/go/rfc6208
     *
     * @var string
     */
    public const CDMI_OBJECT = 'application/cdmi-object';

    /**
     * MIME type 'cdmi-queue'
     *
     * Standards: RFC6208
     *
     * @see https://www.iana.org/go/rfc6208
     *
     * @var string
     */
    public const CDMI_QUEUE = 'application/cdmi-queue';

    /**
     * MIME type 'cdni'
     *
     * Standards: RFC7736
     *
     * @see https://www.iana.org/go/rfc7736
     *
     * @var string
     */
    public const CDNI = 'application/cdni';

    /**
     * MIME type 'CEA'
     *
     * Standards: -
     *
     * @var string
     */
    public const CEA = 'application/CEA';

    /**
     * MIME type 'cea-2018+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const CEA_2018_XML = 'application/cea-2018+xml';

    /**
     * MIME type 'cellml+xml'
     *
     * Standards: RFC4708
     *
     * @see https://www.iana.org/go/rfc4708
     *
     * @var string
     */
    public const CELLML_XML = 'application/cellml+xml';

    /**
     * MIME type 'cfw'
     *
     * Standards: RFC6230
     *
     * @see https://www.iana.org/go/rfc6230
     *
     * @var string
     */
    public const CFW = 'application/cfw';

    /**
     * MIME type 'city+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const CITY_JSON = 'application/city+json';

    /**
     * MIME type 'clr'
     *
     * Standards: -
     *
     * @var string
     */
    public const CLR = 'application/clr';

    /**
     * MIME type 'clue_info+xml'
     *
     * Standards: RFC8846
     *
     * @see https://www.iana.org/go/rfc8846
     *
     * @var string
     */
    public const CLUE_INFO_XML = 'application/clue_info+xml';

    /**
     * MIME type 'clue+xml'
     *
     * Standards: RFC8847
     *
     * @see https://www.iana.org/go/rfc8847
     *
     * @var string
     */
    public const CLUE_XML = 'application/clue+xml';

    /**
     * MIME type 'cms'
     *
     * Standards: RFC7193
     *
     * @see https://www.iana.org/go/rfc7193
     *
     * @var string
     */
    public const CMS = 'application/cms';

    /**
     * MIME type 'cnrp+xml'
     *
     * Standards: RFC3367
     *
     * @see https://www.iana.org/go/rfc3367
     *
     * @var string
     */
    public const CNRP_XML = 'application/cnrp+xml';

    /**
     * MIME type 'coap-group+json'
     *
     * Standards: RFC7390
     *
     * @see https://www.iana.org/go/rfc7390
     *
     * @var string
     */
    public const COAP_GROUP_JSON = 'application/coap-group+json';

    /**
     * MIME type 'coap-payload'
     *
     * Standards: RFC8075
     *
     * @see https://www.iana.org/go/rfc8075
     *
     * @var string
     */
    public const COAP_PAYLOAD = 'application/coap-payload';

    /**
     * MIME type 'commonground'
     *
     * Standards: -
     *
     * @var string
     */
    public const COMMONGROUND = 'application/commonground';

    /**
     * MIME type 'conference-info+xml'
     *
     * Standards: RFC4575
     *
     * @see https://www.iana.org/go/rfc4575
     *
     * @var string
     */
    public const CONFERENCE_INFO_XML = 'application/conference-info+xml';

    /**
     * MIME type 'cpl+xml'
     *
     * Standards: RFC3880
     *
     * @see https://www.iana.org/go/rfc3880
     *
     * @var string
     */
    public const CPL_XML = 'application/cpl+xml';

    /**
     * MIME type 'cose'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-cose-rfc8152bis-struct-15
     *
     * @var string
     */
    public const COSE = 'application/cose';

    /**
     * MIME type 'cose-key'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-cose-rfc8152bis-struct-15
     *
     * @var string
     */
    public const COSE_KEY = 'application/cose-key';

    /**
     * MIME type 'cose-key-set'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-cose-rfc8152bis-struct-15
     *
     * @var string
     */
    public const COSE_KEY_SET = 'application/cose-key-set';

    /**
     * MIME type 'csrattrs'
     *
     * Standards: RFC7030
     *
     * @see https://www.iana.org/go/rfc7030
     *
     * @var string
     */
    public const CSRATTRS = 'application/csrattrs';

    /**
     * MIME type 'csta+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const CSTA_XML = 'application/csta+xml';

    /**
     * MIME type 'CSTAdata+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const CSTADATA_XML = 'application/CSTAdata+xml';

    /**
     * MIME type 'csvm+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const CSVM_JSON = 'application/csvm+json';

    /**
     * MIME type 'cwt'
     *
     * Standards: RFC8392
     *
     * @see https://www.iana.org/go/rfc8392
     *
     * @var string
     */
    public const CWT = 'application/cwt';

    /**
     * MIME type 'cybercash'
     *
     * Standards: -
     *
     * @var string
     */
    public const CYBERCASH = 'application/cybercash';

    /**
     * MIME type 'dash+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const DASH_XML = 'application/dash+xml';

    /**
     * MIME type 'dash-patch+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const DASH_PATCH_XML = 'application/dash-patch+xml';

    /**
     * MIME type 'dashdelta'
     *
     * Standards: -
     *
     * @var string
     */
    public const DASHDELTA = 'application/dashdelta';

    /**
     * MIME type 'davmount+xml'
     *
     * Standards: RFC4709
     *
     * @see https://www.iana.org/go/rfc4709
     *
     * @var string
     */
    public const DAVMOUNT_XML = 'application/davmount+xml';

    /**
     * MIME type 'dca-rft'
     *
     * Standards: -
     *
     * @var string
     */
    public const DCA_RFT = 'application/dca-rft';

    /**
     * MIME type 'DCD'
     *
     * Standards: -
     *
     * @var string
     */
    public const DCD = 'application/DCD';

    /**
     * MIME type 'dec-dx'
     *
     * Standards: -
     *
     * @var string
     */
    public const DEC_DX = 'application/dec-dx';

    /**
     * MIME type 'dialog-info+xml'
     *
     * Standards: RFC4235
     *
     * @see https://www.iana.org/go/rfc4235
     *
     * @var string
     */
    public const DIALOG_INFO_XML = 'application/dialog-info+xml';

    /**
     * MIME type 'dicom'
     *
     * Standards: RFC3240
     *
     * @see https://www.iana.org/go/rfc3240
     *
     * @var string
     */
    public const DICOM = 'application/dicom';

    /**
     * MIME type 'dicom+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const DICOM_JSON = 'application/dicom+json';

    /**
     * MIME type 'dicom+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const DICOM_XML = 'application/dicom+xml';

    /**
     * MIME type 'DII'
     *
     * Standards: -
     *
     * @var string
     */
    public const DII = 'application/DII';

    /**
     * MIME type 'DIT'
     *
     * Standards: -
     *
     * @var string
     */
    public const DIT = 'application/DIT';

    /**
     * MIME type 'dns'
     *
     * Standards: RFC4027
     *
     * @see https://www.iana.org/go/rfc4027
     *
     * @var string
     */
    public const DNS = 'application/dns';

    /**
     * MIME type 'dns+json'
     *
     * Standards: RFC8427
     *
     * @see https://www.iana.org/go/rfc8427
     *
     * @var string
     */
    public const DNS_JSON = 'application/dns+json';

    /**
     * MIME type 'dns-message'
     *
     * Standards: RFC8484
     *
     * @see https://www.iana.org/go/rfc8484
     *
     * @var string
     */
    public const DNS_MESSAGE = 'application/dns-message';

    /**
     * MIME type 'dots+cbor'
     *
     * Standards: RFC9132
     *
     * @see https://www.iana.org/go/rfc9132
     *
     * @var string
     */
    public const DOTS_CBOR = 'application/dots+cbor';

    /**
     * MIME type 'dskpp+xml'
     *
     * Standards: RFC6063
     *
     * @see https://www.iana.org/go/rfc6063
     *
     * @var string
     */
    public const DSKPP_XML = 'application/dskpp+xml';

    /**
     * MIME type 'dssc+der'
     *
     * Standards: RFC5698
     *
     * @see https://www.iana.org/go/rfc5698
     *
     * @var string
     */
    public const DSSC_DER = 'application/dssc+der';

    /**
     * MIME type 'dssc+xml'
     *
     * Standards: RFC5698
     *
     * @see https://www.iana.org/go/rfc5698
     *
     * @var string
     */
    public const DSSC_XML = 'application/dssc+xml';

    /**
     * MIME type 'dvcs'
     *
     * Standards: RFC3029
     *
     * @see https://www.iana.org/go/rfc3029
     *
     * @var string
     */
    public const DVCS = 'application/dvcs';

    /**
     * MIME type 'ecmascript'
     *
     * Standards: RFC4329
     *
     * @see https://www.iana.org/go/rfc4329
     * @see https://www.iana.org/go/draft-ietf-dispatch-javascript-mjs-17
     *
     * @var string
     * @deprecated in favor of text/javascript
     */
    public const ECMASCRIPT = 'application/ecmascript';

    /**
     * MIME type 'EDI-consent'
     *
     * Standards: RFC1767
     *
     * @see https://www.iana.org/go/rfc1767
     *
     * @var string
     */
    public const EDI_CONSENT = 'application/EDI-consent';

    /**
     * MIME type 'EDIFACT'
     *
     * Standards: RFC1767
     *
     * @see https://www.iana.org/go/rfc1767
     *
     * @var string
     */
    public const EDIFACT = 'application/EDIFACT';

    /**
     * MIME type 'EDI-X12'
     *
     * Standards: RFC1767
     *
     * @see https://www.iana.org/go/rfc1767
     *
     * @var string
     */
    public const EDI_X12 = 'application/EDI-X12';

    /**
     * MIME type 'efi'
     *
     * Standards: -
     *
     * @var string
     */
    public const EFI = 'application/efi';

    /**
     * MIME type 'elm+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const ELM_JSON = 'application/elm+json';

    /**
     * MIME type 'elm+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ELM_XML = 'application/elm+xml';

    /**
     * MIME type 'EmergencyCallData.cap+xml'
     *
     * Standards: RFC8876
     *
     * @see https://www.iana.org/go/rfc8876
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_CAP_XML = 'application/EmergencyCallData.cap+xml';

    /**
     * MIME type 'EmergencyCallData.Comment+xml'
     *
     * Standards: RFC7852
     *
     * @see https://www.iana.org/go/rfc7852
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_COMMENT_XML = 'application/EmergencyCallData.Comment+xml';

    /**
     * MIME type 'EmergencyCallData.Control+xml'
     *
     * Standards: RFC8147
     *
     * @see https://www.iana.org/go/rfc8147
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_CONTROL_XML = 'application/EmergencyCallData.Control+xml';

    /**
     * MIME type 'EmergencyCallData.DeviceInfo+xml'
     *
     * Standards: RFC7852
     *
     * @see https://www.iana.org/go/rfc7852
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_DEVICEINFO_XML = 'application/EmergencyCallData.DeviceInfo+xml';

    /**
     * MIME type 'EmergencyCallData.eCall.MSD'
     *
     * Standards: RFC8147
     *
     * @see https://www.iana.org/go/rfc8147
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_ECALL_MSD = 'application/EmergencyCallData.eCall.MSD';

    /**
     * MIME type 'EmergencyCallData.ProviderInfo+xml'
     *
     * Standards: RFC7852
     *
     * @see https://www.iana.org/go/rfc7852
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_PROVIDERINFO_XML = 'application/EmergencyCallData.ProviderInfo+xml';

    /**
     * MIME type 'EmergencyCallData.ServiceInfo+xml'
     *
     * Standards: RFC7852
     *
     * @see https://www.iana.org/go/rfc7852
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_SERVICEINFO_XML = 'application/EmergencyCallData.ServiceInfo+xml';

    /**
     * MIME type 'EmergencyCallData.SubscriberInfo+xml'
     *
     * Standards: RFC7852
     *
     * @see https://www.iana.org/go/rfc7852
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_SUBSCRIBERINFO_XML = 'application/EmergencyCallData.SubscriberInfo+xml';

    /**
     * MIME type 'EmergencyCallData.VEDS+xml'
     *
     * Standards: RFC8148
     *
     * @see https://www.iana.org/go/rfc8148
     *
     * @var string
     */
    public const EMERGENCYCALLDATA_VEDS_XML = 'application/EmergencyCallData.VEDS+xml';

    /**
     * MIME type 'emma+xml'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/2007/CR-emma-20071211/#media-type-registration
     *
     * @var string
     */
    public const EMMA_XML = 'application/emma+xml';

    /**
     * MIME type 'emotionml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const EMOTIONML_XML = 'application/emotionml+xml';

    /**
     * MIME type 'encaprtp'
     *
     * Standards: RFC6849
     *
     * @see https://www.iana.org/go/rfc6849
     *
     * @var string
     */
    public const ENCAPRTP = 'application/encaprtp';

    /**
     * MIME type 'epp+xml'
     *
     * Standards: RFC5730
     *
     * @see https://www.iana.org/go/rfc5730
     *
     * @var string
     */
    public const EPP_XML = 'application/epp+xml';

    /**
     * MIME type 'epub+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const EPUB_ZIP = 'application/epub+zip';

    /**
     * MIME type 'eshop'
     *
     * Standards: -
     *
     * @var string
     */
    public const ESHOP = 'application/eshop';

    /**
     * MIME type 'example'
     *
     * Standards: RFC4735
     *
     * @see https://www.iana.org/go/rfc4735
     *
     * @var string
     */
    public const EXAMPLE = 'application/example';

    /**
     * MIME type 'exi'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/2009/CR-exi-20091208/#mediaTypeRegistration
     *
     * @var string
     */
    public const EXI = 'application/exi';

    /**
     * MIME type 'expect-ct-report+json'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-httpbis-expect-ct-08
     *
     * @var string
     */
    public const EXPECT_CT_REPORT_JSON = 'application/expect-ct-report+json';

    /**
     * MIME type 'express'
     *
     * Standards: -
     *
     * @var string
     */
    public const EXPRESS = 'application/express';

    /**
     * MIME type 'fastinfoset'
     *
     * Standards: -
     *
     * @var string
     */
    public const FASTINFOSET = 'application/fastinfoset';

    /**
     * MIME type 'fastsoap'
     *
     * Standards: -
     *
     * @var string
     */
    public const FASTSOAP = 'application/fastsoap';

    /**
     * MIME type 'fdt+xml'
     *
     * Standards: RFC6726
     *
     * @see https://www.iana.org/go/rfc6726
     *
     * @var string
     */
    public const FDT_XML = 'application/fdt+xml';

    /**
     * MIME type 'fhir+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const FHIR_JSON = 'application/fhir+json';

    /**
     * MIME type 'fhir+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const FHIR_XML = 'application/fhir+xml';

    /**
     * MIME type 'fits'
     *
     * Standards: RFC4047
     *
     * @see https://www.iana.org/go/rfc4047
     *
     * @var string
     */
    public const FITS = 'application/fits';

    /**
     * MIME type 'flexfec'
     *
     * Standards: RFC8627
     *
     * @see https://www.iana.org/go/rfc8627
     *
     * @var string
     */
    public const FLEXFEC = 'application/flexfec';

    /**
     * MIME type 'font-sfnt'
     *
     * Standards: RFC8081
     *
     * @see https://www.iana.org/go/rfc8081
     *
     * @var string
     * @deprecated in favor of font/sfnt
     */
    public const FONT_SFNT = 'application/font-sfnt';

    /**
     * MIME type 'font-tdpfr'
     *
     * Standards: RFC3073
     *
     * @see https://www.iana.org/go/rfc3073
     *
     * @var string
     */
    public const FONT_TDPFR = 'application/font-tdpfr';

    /**
     * MIME type 'font-woff'
     *
     * Standards: RFC8081
     *
     * @see https://www.iana.org/go/rfc8081
     *
     * @var string
     * @deprecated in favor of font/woff
     */
    public const FONT_WOFF = 'application/font-woff';

    /**
     * MIME type 'framework-attributes+xml'
     *
     * Standards: RFC6230
     *
     * @see https://www.iana.org/go/rfc6230
     *
     * @var string
     */
    public const FRAMEWORK_ATTRIBUTES_XML = 'application/framework-attributes+xml';

    /**
     * MIME type 'geo+json'
     *
     * Standards: RFC7946
     *
     * @see https://www.iana.org/go/rfc7946
     *
     * @var string
     */
    public const GEO_JSON = 'application/geo+json';

    /**
     * MIME type 'geo+json-seq'
     *
     * Standards: RFC8142
     *
     * @see https://www.iana.org/go/rfc8142
     *
     * @var string
     */
    public const GEO_JSON_SEQ = 'application/geo+json-seq';

    /**
     * MIME type 'geopackage+sqlite3'
     *
     * Standards: -
     *
     * @var string
     */
    public const GEOPACKAGE_SQLITE3 = 'application/geopackage+sqlite3';

    /**
     * MIME type 'geoxacml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const GEOXACML_XML = 'application/geoxacml+xml';

    /**
     * MIME type 'gltf-buffer'
     *
     * Standards: -
     *
     * @var string
     */
    public const GLTF_BUFFER = 'application/gltf-buffer';

    /**
     * MIME type 'gml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const GML_XML = 'application/gml+xml';

    /**
     * MIME type 'gzip'
     *
     * Standards: RFC6713
     *
     * @see https://www.iana.org/go/rfc6713
     *
     * @var string
     */
    public const GZIP = 'application/gzip';

    /**
     * MIME type 'H224'
     *
     * Standards: RFC4573
     *
     * @see https://www.iana.org/go/rfc4573
     *
     * @var string
     */
    public const H224 = 'application/H224';

    /**
     * MIME type 'held+xml'
     *
     * Standards: RFC5985
     *
     * @see https://www.iana.org/go/rfc5985
     *
     * @var string
     */
    public const HELD_XML = 'application/held+xml';

    /**
     * MIME type 'http'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-httpbis-messaging-19
     *
     * @var string
     */
    public const HTTP = 'application/http';

    /**
     * MIME type 'hyperstudio'
     *
     * Standards: -
     *
     * @var string
     */
    public const HYPERSTUDIO = 'application/hyperstudio';

    /**
     * MIME type 'ibe-key-request+xml'
     *
     * Standards: RFC5408
     *
     * @see https://www.iana.org/go/rfc5408
     *
     * @var string
     */
    public const IBE_KEY_REQUEST_XML = 'application/ibe-key-request+xml';

    /**
     * MIME type 'ibe-pkg-reply+xml'
     *
     * Standards: RFC5408
     *
     * @see https://www.iana.org/go/rfc5408
     *
     * @var string
     */
    public const IBE_PKG_REPLY_XML = 'application/ibe-pkg-reply+xml';

    /**
     * MIME type 'ibe-pp-data'
     *
     * Standards: RFC5408
     *
     * @see https://www.iana.org/go/rfc5408
     *
     * @var string
     */
    public const IBE_PP_DATA = 'application/ibe-pp-data';

    /**
     * MIME type 'iges'
     *
     * Standards: -
     *
     * @var string
     */
    public const IGES = 'application/iges';

    /**
     * MIME type 'im-iscomposing+xml'
     *
     * Standards: RFC3994
     *
     * @see https://www.iana.org/go/rfc3994
     *
     * @var string
     */
    public const IM_ISCOMPOSING_XML = 'application/im-iscomposing+xml';

    /**
     * MIME type 'index'
     *
     * Standards: RFC2652
     *
     * @see https://www.iana.org/go/rfc2652
     *
     * @var string
     */
    public const INDEX = 'application/index';

    /**
     * MIME type 'index.cmd'
     *
     * Standards: RFC2652
     *
     * @see https://www.iana.org/go/rfc2652
     *
     * @var string
     */
    public const INDEX_CMD = 'application/index.cmd';

    /**
     * MIME type 'index.obj'
     *
     * Standards: RFC2652
     *
     * @see https://www.iana.org/go/rfc2652
     *
     * @var string
     */
    public const INDEX_OBJ = 'application/index.obj';

    /**
     * MIME type 'index.response'
     *
     * Standards: RFC2652
     *
     * @see https://www.iana.org/go/rfc2652
     *
     * @var string
     */
    public const INDEX_RESPONSE = 'application/index.response';

    /**
     * MIME type 'index.vnd'
     *
     * Standards: RFC2652
     *
     * @see https://www.iana.org/go/rfc2652
     *
     * @var string
     */
    public const INDEX_VND = 'application/index.vnd';

    /**
     * MIME type 'inkml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const INKML_XML = 'application/inkml+xml';

    /**
     * MIME type 'IOTP'
     *
     * Standards: RFC2935
     *
     * @see https://www.iana.org/go/rfc2935
     *
     * @var string
     */
    public const IOTP = 'application/IOTP';

    /**
     * MIME type 'ipfix'
     *
     * Standards: RFC5655
     *
     * @see https://www.iana.org/go/rfc5655
     *
     * @var string
     */
    public const IPFIX = 'application/ipfix';

    /**
     * MIME type 'ipp'
     *
     * Standards: RFC8010
     *
     * @see https://www.iana.org/go/rfc8010
     *
     * @var string
     */
    public const IPP = 'application/ipp';

    /**
     * MIME type 'ISUP'
     *
     * Standards: RFC3204
     *
     * @see https://www.iana.org/go/rfc3204
     *
     * @var string
     */
    public const ISUP = 'application/ISUP';

    /**
     * MIME type 'its+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ITS_XML = 'application/its+xml';

    /**
     * MIME type 'javascript'
     *
     * Standards: RFC4329
     *
     * @see https://www.iana.org/go/rfc4329
     * @see https://www.iana.org/go/draft-ietf-dispatch-javascript-mjs-17
     *
     * @var string
     * @deprecated in favor of text/javascript
     */
    public const JAVASCRIPT = 'application/javascript';

    /**
     * MIME type 'jf2feed+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const JF2FEED_JSON = 'application/jf2feed+json';

    /**
     * MIME type 'jose'
     *
     * Standards: RFC7515
     *
     * @see https://www.iana.org/go/rfc7515
     *
     * @var string
     */
    public const JOSE = 'application/jose';

    /**
     * MIME type 'jose+json'
     *
     * Standards: RFC7515
     *
     * @see https://www.iana.org/go/rfc7515
     *
     * @var string
     */
    public const JOSE_JSON = 'application/jose+json';

    /**
     * MIME type 'jrd+json'
     *
     * Standards: RFC7033
     *
     * @see https://www.iana.org/go/rfc7033
     *
     * @var string
     */
    public const JRD_JSON = 'application/jrd+json';

    /**
     * MIME type 'jscalendar+json'
     *
     * Standards: RFC8984
     *
     * @see https://www.iana.org/go/rfc8984
     *
     * @var string
     */
    public const JSCALENDAR_JSON = 'application/jscalendar+json';

    /**
     * MIME type 'json'
     *
     * Standards: RFC8259
     *
     * @see https://www.iana.org/go/rfc8259
     *
     * @var string
     */
    public const JSON = 'application/json';

    /**
     * MIME type 'json-patch+json'
     *
     * Standards: RFC6902
     *
     * @see https://www.iana.org/go/rfc6902
     *
     * @var string
     */
    public const JSON_PATCH_JSON = 'application/json-patch+json';

    /**
     * MIME type 'json-seq'
     *
     * Standards: RFC7464
     *
     * @see https://www.iana.org/go/rfc7464
     *
     * @var string
     */
    public const JSON_SEQ = 'application/json-seq';

    /**
     * MIME type 'jwk+json'
     *
     * Standards: RFC7517
     *
     * @see https://www.iana.org/go/rfc7517
     *
     * @var string
     */
    public const JWK_JSON = 'application/jwk+json';

    /**
     * MIME type 'jwk-set+json'
     *
     * Standards: RFC7517
     *
     * @see https://www.iana.org/go/rfc7517
     *
     * @var string
     */
    public const JWK_SET_JSON = 'application/jwk-set+json';

    /**
     * MIME type 'jwt'
     *
     * Standards: RFC7519
     *
     * @see https://www.iana.org/go/rfc7519
     *
     * @var string
     */
    public const JWT = 'application/jwt';

    /**
     * MIME type 'kpml-request+xml'
     *
     * Standards: RFC4730
     *
     * @see https://www.iana.org/go/rfc4730
     *
     * @var string
     */
    public const KPML_REQUEST_XML = 'application/kpml-request+xml';

    /**
     * MIME type 'kpml-response+xml'
     *
     * Standards: RFC4730
     *
     * @see https://www.iana.org/go/rfc4730
     *
     * @var string
     */
    public const KPML_RESPONSE_XML = 'application/kpml-response+xml';

    /**
     * MIME type 'ld+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const LD_JSON = 'application/ld+json';

    /**
     * MIME type 'lgr+xml'
     *
     * Standards: RFC7940
     *
     * @see https://www.iana.org/go/rfc7940
     *
     * @var string
     */
    public const LGR_XML = 'application/lgr+xml';

    /**
     * MIME type 'link-format'
     *
     * Standards: RFC6690
     *
     * @see https://www.iana.org/go/rfc6690
     *
     * @var string
     */
    public const LINK_FORMAT = 'application/link-format';

    /**
     * MIME type 'load-control+xml'
     *
     * Standards: RFC7200
     *
     * @see https://www.iana.org/go/rfc7200
     *
     * @var string
     */
    public const LOAD_CONTROL_XML = 'application/load-control+xml';

    /**
     * MIME type 'lost+xml'
     *
     * Standards: RFC5222
     *
     * @see https://www.iana.org/go/rfc5222
     *
     * @var string
     */
    public const LOST_XML = 'application/lost+xml';

    /**
     * MIME type 'lostsync+xml'
     *
     * Standards: RFC6739
     *
     * @see https://www.iana.org/go/rfc6739
     *
     * @var string
     */
    public const LOSTSYNC_XML = 'application/lostsync+xml';

    /**
     * MIME type 'lpf+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const LPF_ZIP = 'application/lpf+zip';

    /**
     * MIME type 'LXF'
     *
     * Standards: -
     *
     * @var string
     */
    public const LXF = 'application/LXF';

    /**
     * MIME type 'mac-binhex40'
     *
     * Standards: -
     *
     * @var string
     */
    public const MAC_BINHEX40 = 'application/mac-binhex40';

    /**
     * MIME type 'macwriteii'
     *
     * Standards: -
     *
     * @var string
     */
    public const MACWRITEII = 'application/macwriteii';

    /**
     * MIME type 'mads+xml'
     *
     * Standards: RFC6207
     *
     * @see https://www.iana.org/go/rfc6207
     *
     * @var string
     */
    public const MADS_XML = 'application/mads+xml';

    /**
     * MIME type 'manifest+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const MANIFEST_JSON = 'application/manifest+json';

    /**
     * MIME type 'marc'
     *
     * Standards: RFC2220
     *
     * @see https://www.iana.org/go/rfc2220
     *
     * @var string
     */
    public const MARC = 'application/marc';

    /**
     * MIME type 'marcxml+xml'
     *
     * Standards: RFC6207
     *
     * @see https://www.iana.org/go/rfc6207
     *
     * @var string
     */
    public const MARCXML_XML = 'application/marcxml+xml';

    /**
     * MIME type 'mathematica'
     *
     * Standards: -
     *
     * @var string
     */
    public const MATHEMATICA = 'application/mathematica';

    /**
     * MIME type 'mathml+xml'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/MathML3/appendixb.html
     *
     * @var string
     */
    public const MATHML_XML = 'application/mathml+xml';

    /**
     * MIME type 'mathml-content+xml'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/MathML3/appendixb.html
     *
     * @var string
     */
    public const MATHML_CONTENT_XML = 'application/mathml-content+xml';

    /**
     * MIME type 'mathml-presentation+xml'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/MathML3/appendixb.html
     *
     * @var string
     */
    public const MATHML_PRESENTATION_XML = 'application/mathml-presentation+xml';

    /**
     * MIME type 'mbms-associated-procedure-description+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_ASSOCIATED_PROC_DESC_XML = 'application/mbms-associated-procedure-description+xml';

    /**
     * MIME type 'mbms-deregister+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_DEREGISTER_XML = 'application/mbms-deregister+xml';

    /**
     * MIME type 'mbms-envelope+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_ENVELOPE_XML = 'application/mbms-envelope+xml';

    /**
     * MIME type 'mbms-msk-response+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_MSK_RESPONSE_XML = 'application/mbms-msk-response+xml';

    /**
     * MIME type 'mbms-msk+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_MSK_XML = 'application/mbms-msk+xml';

    /**
     * MIME type 'mbms-protection-description+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_PROTECTION_DESC_XML = 'application/mbms-protection-description+xml';

    /**
     * MIME type 'mbms-reception-report+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_RECEPTION_REPORT_XML = 'application/mbms-reception-report+xml';

    /**
     * MIME type 'mbms-register-response+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_REGISTER_RESPONSE_XML = 'application/mbms-register-response+xml';

    /**
     * MIME type 'mbms-register+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_REGISTER_XML = 'application/mbms-register+xml';

    /**
     * MIME type 'mbms-schedule+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_SCHEDULE_XML = 'application/mbms-schedule+xml';

    /**
     * MIME type 'mbms-user-service-description+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MBMS_USER_SERVICE_DESC_XML = 'application/mbms-user-service-description+xml';

    /**
     * MIME type 'mbox'
     *
     * Standards: RFC4155
     *
     * @see https://www.iana.org/go/rfc4155
     *
     * @var string
     */
    public const MBOX = 'application/mbox';

    /**
     * MIME type 'media_control+xml'
     *
     * Standards: RFC5168
     *
     * @see https://www.iana.org/go/rfc5168
     *
     * @var string
     */
    public const MEDIA_CONTROL_XML = 'application/media_control+xml';

    /**
     * MIME type 'media-policy-dataset+xml'
     *
     * Standards: RFC6796
     *
     * @see https://www.iana.org/go/rfc6796
     *
     * @var string
     */
    public const MEDIA_POLICY_DATASET_XML = 'application/media-policy-dataset+xml';

    /**
     * MIME type 'mediaservercontrol+xml'
     *
     * Standards: RFC5022
     *
     * @see https://www.iana.org/go/rfc5022
     *
     * @var string
     */
    public const MEDIASERVERCONTROL_XML = 'application/mediaservercontrol+xml';

    /**
     * MIME type 'merge-patch+json'
     *
     * Standards: RFC7396
     *
     * @see https://www.iana.org/go/rfc7396
     *
     * @var string
     */
    public const MERGE_PATCH_JSON = 'application/merge-patch+json';

    /**
     * MIME type 'metalink4+xml'
     *
     * Standards: RFC5854
     *
     * @see https://www.iana.org/go/rfc5854
     *
     * @var string
     */
    public const METALINK4_XML = 'application/metalink4+xml';

    /**
     * MIME type 'mets+xml'
     *
     * Standards: RFC6207
     *
     * @see https://www.iana.org/go/rfc6207
     *
     * @var string
     */
    public const METS_XML = 'application/mets+xml';

    /**
     * MIME type 'MF4'
     *
     * Standards: -
     *
     * @var string
     */
    public const MF4 = 'application/MF4';

    /**
     * MIME type 'mikey'
     *
     * Standards: RFC3830
     *
     * @see https://www.iana.org/go/rfc3830
     *
     * @var string
     */
    public const MIKEY = 'application/mikey';

    /**
     * MIME type 'mipc'
     *
     * Standards: -
     *
     * @var string
     */
    public const MIPC = 'application/mipc';

    /**
     * MIME type 'missing-blocks+cbor-seq'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-core-new-block-14
     *
     * @var string
     */
    public const MISSING_BLOCKS_CBOR_SEQ = 'application/missing-blocks+cbor-seq';

    /**
     * MIME type 'mmt-aei+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MMT_AEI_XML = 'application/mmt-aei+xml';

    /**
     * MIME type 'mmt-usd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const MMT_USD_XML = 'application/mmt-usd+xml';

    /**
     * MIME type 'mods+xml'
     *
     * Standards: RFC6207
     *
     * @see https://www.iana.org/go/rfc6207
     *
     * @var string
     */
    public const MODS_XML = 'application/mods+xml';

    /**
     * MIME type 'moss-keys'
     *
     * Standards: RFC1848
     *
     * @see https://www.iana.org/go/rfc1848
     *
     * @var string
     */
    public const MOSS_KEYS = 'application/moss-keys';

    /**
     * MIME type 'moss-signature'
     *
     * Standards: RFC1848
     *
     * @see https://www.iana.org/go/rfc1848
     *
     * @var string
     */
    public const MOSS_SIGNATURE = 'application/moss-signature';

    /**
     * MIME type 'mosskey-data'
     *
     * Standards: RFC1848
     *
     * @see https://www.iana.org/go/rfc1848
     *
     * @var string
     */
    public const MOSSKEY_DATA = 'application/mosskey-data';

    /**
     * MIME type 'mosskey-request'
     *
     * Standards: RFC1848
     *
     * @see https://www.iana.org/go/rfc1848
     *
     * @var string
     */
    public const MOSSKEY_REQUEST = 'application/mosskey-request';

    /**
     * MIME type 'mp21'
     *
     * Standards: RFC6381
     *
     * @see https://www.iana.org/go/rfc6381
     *
     * @var string
     */
    public const MP21 = 'application/mp21';

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
    public const MP4 = 'application/mp4';

    /**
     * MIME type 'mpeg4-generic'
     *
     * Standards: RFC3640
     *
     * @see https://www.iana.org/go/rfc3640
     *
     * @var string
     */
    public const MPEG4_GENERIC = 'application/mpeg4-generic';

    /**
     * MIME type 'mpeg4-iod'
     *
     * Standards: RFC4337
     *
     * @see https://www.iana.org/go/rfc4337
     *
     * @var string
     */
    public const MPEG4_IOD = 'application/mpeg4-iod';

    /**
     * MIME type 'mpeg4-iod-xmt'
     *
     * Standards: RFC4337
     *
     * @see https://www.iana.org/go/rfc4337
     *
     * @var string
     */
    public const MPEG4_IOD_XMT = 'application/mpeg4-iod-xmt';

    /**
     * MIME type 'mrb-consumer+xml'
     *
     * Standards: RFC6917
     *
     * @see https://www.iana.org/go/rfc6917
     *
     * @var string
     */
    public const MRB_CONSUMER_XML = 'application/mrb-consumer+xml';

    /**
     * MIME type 'mrb-publish+xml'
     *
     * Standards: RFC6917
     *
     * @see https://www.iana.org/go/rfc6917
     *
     * @var string
     */
    public const MRB_PUBLISH_XML = 'application/mrb-publish+xml';

    /**
     * MIME type 'msc-ivr+xml'
     *
     * Standards: RFC6231
     *
     * @see https://www.iana.org/go/rfc6231
     *
     * @var string
     */
    public const MSC_IVR_XML = 'application/msc-ivr+xml';

    /**
     * MIME type 'msc-mixer+xml'
     *
     * Standards: RFC6505
     *
     * @see https://www.iana.org/go/rfc6505
     *
     * @var string
     */
    public const MSC_MIXER_XML = 'application/msc-mixer+xml';

    /**
     * MIME type 'msword'
     *
     * Standards: -
     *
     * @var string
     */
    public const MSWORD = 'application/msword';

    /**
     * MIME type 'mud+json'
     *
     * Standards: RFC8520
     *
     * @see https://www.iana.org/go/rfc8520
     *
     * @var string
     */
    public const MUD_JSON = 'application/mud+json';

    /**
     * MIME type 'multipart-core'
     *
     * Standards: RFC8710
     *
     * @see https://www.iana.org/go/rfc8710
     *
     * @var string
     */
    public const MULTIPART_CORE = 'application/multipart-core';

    /**
     * MIME type 'mxf'
     *
     * Standards: RFC4539
     *
     * @see https://www.iana.org/go/rfc4539
     *
     * @var string
     */
    public const MXF = 'application/mxf';

    /**
     * MIME type 'n-quads'
     *
     * Standards: -
     *
     * @var string
     */
    public const N_QUADS = 'application/n-quads';

    /**
     * MIME type 'n-triples'
     *
     * Standards: -
     *
     * @var string
     */
    public const N_TRIPLES = 'application/n-triples';

    /**
     * MIME type 'nasdata'
     *
     * Standards: RFC4707
     *
     * @see https://www.iana.org/go/rfc4707
     *
     * @var string
     */
    public const NASDATA = 'application/nasdata';

    /**
     * MIME type 'news-checkgroups'
     *
     * Standards: RFC5537
     *
     * @see https://www.iana.org/go/rfc5537
     *
     * @var string
     */
    public const NEWS_CHECKGROUPS = 'application/news-checkgroups';

    /**
     * MIME type 'news-groupinfo'
     *
     * Standards: RFC5537
     *
     * @see https://www.iana.org/go/rfc5537
     *
     * @var string
     */
    public const NEWS_GROUPINFO = 'application/news-groupinfo';

    /**
     * MIME type 'news-transmission'
     *
     * Standards: RFC5537
     *
     * @see https://www.iana.org/go/rfc5537
     *
     * @var string
     */
    public const NEWS_TRANSMISSION = 'application/news-transmission';

    /**
     * MIME type 'nlsml+xml'
     *
     * Standards: RFC6787
     *
     * @see https://www.iana.org/go/rfc6787
     *
     * @var string
     */
    public const NLSML_XML = 'application/nlsml+xml';

    /**
     * MIME type 'node'
     *
     * Standards: -
     *
     * @var string
     */
    public const NODE = 'application/node';

    /**
     * MIME type 'nss'
     *
     * Standards: -
     *
     * @var string
     */
    public const NSS = 'application/nss';

    /**
     * MIME type 'oauth-authz-req+jwt'
     *
     * Standards: RFC9101
     *
     * @see https://www.iana.org/go/rfc9101
     *
     * @var string
     */
    public const OAUTH_AUTHZ_REQ_JWT = 'application/oauth-authz-req+jwt';

    /**
     * MIME type 'oblivious-dns-message'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-pauly-dprive-oblivious-doh-11
     *
     * @var string
     */
    public const OBLIVIOUS_DNS_MESSAGE = 'application/oblivious-dns-message';

    /**
     * MIME type 'ocsp-request'
     *
     * Standards: RFC6960
     *
     * @see https://www.iana.org/go/rfc6960
     *
     * @var string
     */
    public const OCSP_REQUEST = 'application/ocsp-request';

    /**
     * MIME type 'ocsp-response'
     *
     * Standards: RFC6960
     *
     * @see https://www.iana.org/go/rfc6960
     *
     * @var string
     */
    public const OCSP_RESPONSE = 'application/ocsp-response';

    /**
     * MIME type 'octet-stream'
     *
     * Standards: RFC2045, RFC2046
     *
     * @see https://www.iana.org/go/rfc2045
     * @see https://www.iana.org/go/rfc2046
     *
     * @var string
     */
    public const OCTET_STREAM = 'application/octet-stream';

    /**
     * MIME type 'ODA'
     *
     * Standards: RFC1494
     *
     * @see https://www.iana.org/go/rfc1494
     *
     * @var string
     */
    public const ODA = 'application/ODA';

    /**
     * MIME type 'odm+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ODM_XML = 'application/odm+xml';

    /**
     * MIME type 'ODX'
     *
     * Standards: -
     *
     * @var string
     */
    public const ODX = 'application/ODX';

    /**
     * MIME type 'oebps-package+xml'
     *
     * Standards: RFC4839
     *
     * @see https://www.iana.org/go/rfc4839
     *
     * @var string
     */
    public const OEBPS_PACKAGE_XML = 'application/oebps-package+xml';

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
    public const OGG = 'application/ogg';

    /**
     * MIME type 'opc-nodeset+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const OPC_NODESET_XML = 'application/opc-nodeset+xml';

    /**
     * MIME type 'oscore'
     *
     * Standards: RFC8613
     *
     * @see https://www.iana.org/go/rfc8613
     *
     * @var string
     */
    public const OSCORE = 'application/oscore';

    /**
     * MIME type 'oxps'
     *
     * Standards: -
     *
     * @var string
     */
    public const OXPS = 'application/oxps';

    /**
     * MIME type 'p21'
     *
     * Standards: -
     *
     * @var string
     */
    public const P21 = 'application/p21';

    /**
     * MIME type 'p21+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const P21_ZIP = 'application/p21+zip';

    /**
     * MIME type 'p2p-overlay+xml'
     *
     * Standards: RFC6940
     *
     * @see https://www.iana.org/go/rfc6940
     *
     * @var string
     */
    public const P2P_OVERLAY_XML = 'application/p2p-overlay+xml';

    /**
     * MIME type 'parityfec'
     *
     * Standards: RFC3009
     *
     * @see https://www.iana.org/go/rfc3009
     *
     * @var string
     */
    public const PARITYFEC = 'application/parityfec';

    /**
     * MIME type 'passport'
     *
     * Standards: RFC8225
     *
     * @see https://www.iana.org/go/rfc8225
     *
     * @var string
     */
    public const PASSPORT = 'application/passport';

    /**
     * MIME type 'patch-ops-error+xml'
     *
     * Standards: RFC5261
     *
     * @see https://www.iana.org/go/rfc5261
     *
     * @var string
     */
    public const PATCH_OPS_ERROR_XML = 'application/patch-ops-error+xml';

    /**
     * MIME type 'pdf'
     *
     * Standards: RFC8118
     *
     * @see https://www.iana.org/go/rfc8118
     *
     * @var string
     */
    public const PDF = 'application/pdf';

    /**
     * MIME type 'PDX'
     *
     * Standards: -
     *
     * @var string
     */
    public const PDX = 'application/PDX';

    /**
     * MIME type 'pem-certificate-chain'
     *
     * Standards: RFC8555
     *
     * @see https://www.iana.org/go/rfc8555
     *
     * @var string
     */
    public const PEM_CERTIFICATE_CHAIN = 'application/pem-certificate-chain';

    /**
     * MIME type 'pgp-encrypted'
     *
     * Standards: RFC3156
     *
     * @see https://www.iana.org/go/rfc3156
     *
     * @var string
     */
    public const PGP_ENCRYPTED = 'application/pgp-encrypted';

    /**
     * MIME type 'pgp-keys'
     *
     * Standards: RFC3156
     *
     * @see https://www.iana.org/go/rfc3156
     *
     * @var string
     */
    public const PGP_KEYS = 'application/pgp-keys';

    /**
     * MIME type 'pgp-signature'
     *
     * Standards: RFC3156
     *
     * @see https://www.iana.org/go/rfc3156
     *
     * @var string
     */
    public const PGP_SIGNATURE = 'application/pgp-signature';

    /**
     * MIME type 'pidf-diff+xml'
     *
     * Standards: RFC5262
     *
     * @see https://www.iana.org/go/rfc5262
     *
     * @var string
     */
    public const PIDF_DIFF_XML = 'application/pidf-diff+xml';

    /**
     * MIME type 'pidf+xml'
     *
     * Standards: RFC3863
     *
     * @see https://www.iana.org/go/rfc3863
     *
     * @var string
     */
    public const PIDF_XML = 'application/pidf+xml';

    /**
     * MIME type 'pkcs10'
     *
     * Standards: RFC5967
     *
     * @see https://www.iana.org/go/rfc5967
     *
     * @var string
     */
    public const PKCS10 = 'application/pkcs10';

    /**
     * MIME type 'pkcs7-mime'
     *
     * Standards: RFC8551, RFC7114
     *
     * @see https://www.iana.org/go/rfc8551
     * @see https://www.iana.org/go/rfc7114
     *
     * @var string
     */
    public const PKCS7_MIME = 'application/pkcs7-mime';

    /**
     * MIME type 'pkcs7-signature'
     *
     * Standards: RFC8551
     *
     * @see https://www.iana.org/go/rfc8551
     *
     * @var string
     */
    public const PKCS7_SIGNATURE = 'application/pkcs7-signature';

    /**
     * MIME type 'pkcs8'
     *
     * Standards: RFC5958
     *
     * @see https://www.iana.org/go/rfc5958
     *
     * @var string
     */
    public const PKCS8 = 'application/pkcs8';

    /**
     * MIME type 'pkcs8-encrypted'
     *
     * Standards: RFC8351
     *
     * @see https://www.iana.org/go/rfc8351
     *
     * @var string
     */
    public const PKCS8_ENCRYPTED = 'application/pkcs8-encrypted';

    /**
     * MIME type 'pkcs12'
     *
     * Standards: -
     *
     * @var string
     */
    public const PKCS12 = 'application/pkcs12';

    /**
     * MIME type 'pkix-attr-cert'
     *
     * Standards: RFC5877
     *
     * @see https://www.iana.org/go/rfc5877
     *
     * @var string
     */
    public const PKIX_ATTR_CERT = 'application/pkix-attr-cert';

    /**
     * MIME type 'pkix-cert'
     *
     * Standards: RFC2585
     *
     * @see https://www.iana.org/go/rfc2585
     *
     * @var string
     */
    public const PKIX_CERT = 'application/pkix-cert';

    /**
     * MIME type 'pkix-crl'
     *
     * Standards: RFC2585
     *
     * @see https://www.iana.org/go/rfc2585
     *
     * @var string
     */
    public const PKIX_CRL = 'application/pkix-crl';

    /**
     * MIME type 'pkix-pkipath'
     *
     * Standards: RFC6066
     *
     * @see https://www.iana.org/go/rfc6066
     *
     * @var string
     */
    public const PKIX_PKIPATH = 'application/pkix-pkipath';

    /**
     * MIME type 'pkixcmp'
     *
     * Standards: RFC2510
     *
     * @see https://www.iana.org/go/rfc2510
     *
     * @var string
     */
    public const PKIXCMP = 'application/pkixcmp';

    /**
     * MIME type 'pls+xml'
     *
     * Standards: RFC4267
     *
     * @see https://www.iana.org/go/rfc4267
     *
     * @var string
     */
    public const PLS_XML = 'application/pls+xml';

    /**
     * MIME type 'poc-settings+xml'
     *
     * Standards: RFC4354
     *
     * @see https://www.iana.org/go/rfc4354
     *
     * @var string
     */
    public const POC_SETTINGS_XML = 'application/poc-settings+xml';

    /**
     * MIME type 'postscript'
     *
     * Standards: RFC2045, RFC2046
     *
     * @see https://www.iana.org/go/rfc2045
     * @see https://www.iana.org/go/rfc2046
     *
     * @var string
     */
    public const POSTSCRIPT = 'application/postscript';

    /**
     * MIME type 'ppsp-tracker+json'
     *
     * Standards: RFC7846
     *
     * @see https://www.iana.org/go/rfc7846
     *
     * @var string
     */
    public const PPSP_TRACKER_JSON = 'application/ppsp-tracker+json';

    /**
     * MIME type 'problem+json'
     *
     * Standards: RFC7807
     *
     * @see https://www.iana.org/go/rfc7807
     *
     * @var string
     */
    public const PROBLEM_JSON = 'application/problem+json';

    /**
     * MIME type 'problem+xml'
     *
     * Standards: RFC7807
     *
     * @see https://www.iana.org/go/rfc7807
     *
     * @var string
     */
    public const PROBLEM_XML = 'application/problem+xml';

    /**
     * MIME type 'provenance+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const PROVENANCE_XML = 'application/provenance+xml';

    /**
     * MIME type 'prs.alvestrand.titrax-sheet'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_ALVESTRAND_TITRAX_SHEET = 'application/prs.alvestrand.titrax-sheet';

    /**
     * MIME type 'prs.cww'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_CWW = 'application/prs.cww';

    /**
     * MIME type 'prs.cyn'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_CYN = 'application/prs.cyn';

    /**
     * MIME type 'prs.hpub+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_HPUB_ZIP = 'application/prs.hpub+zip';

    /**
     * MIME type 'prs.nprend'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_NPREND = 'application/prs.nprend';

    /**
     * MIME type 'prs.plucker'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_PLUCKER = 'application/prs.plucker';

    /**
     * MIME type 'prs.rdf-xml-crypt'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_RDF_XML_CRYPT = 'application/prs.rdf-xml-crypt';

    /**
     * MIME type 'prs.xsf+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const PRS_XSF_XML = 'application/prs.xsf+xml';

    /**
     * MIME type 'pskc+xml'
     *
     * Standards: RFC6030
     *
     * @see https://www.iana.org/go/rfc6030
     *
     * @var string
     */
    public const PSKC_XML = 'application/pskc+xml';

    /**
     * MIME type 'pvd+json'
     *
     * Standards: RFC8801
     *
     * @see https://www.iana.org/go/rfc8801
     *
     * @var string
     */
    public const PVD_JSON = 'application/pvd+json';

    /**
     * MIME type 'rdf+xml'
     *
     * Standards: RFC3870
     *
     * @see https://www.iana.org/go/rfc3870
     *
     * @var string
     */
    public const RDF_XML = 'application/rdf+xml';

    /**
     * MIME type 'route-apd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ROUTE_APD_XML = 'application/route-apd+xml';

    /**
     * MIME type 'route-s-tsid+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ROUTE_S_TSID_XML = 'application/route-s-tsid+xml';

    /**
     * MIME type 'route-usd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const ROUTE_USD_XML = 'application/route-usd+xml';

    /**
     * MIME type 'QSIG'
     *
     * Standards: RFC3204
     *
     * @see https://www.iana.org/go/rfc3204
     *
     * @var string
     */
    public const QSIG = 'application/QSIG';

    /**
     * MIME type 'raptorfec'
     *
     * Standards: RFC6682
     *
     * @see https://www.iana.org/go/rfc6682
     *
     * @var string
     */
    public const RAPTORFEC = 'application/raptorfec';

    /**
     * MIME type 'rdap+json'
     *
     * Standards: RFC9083
     *
     * @see https://www.iana.org/go/rfc9083
     *
     * @var string
     */
    public const RDAP_JSON = 'application/rdap+json';

    /**
     * MIME type 'reginfo+xml'
     *
     * Standards: RFC3680
     *
     * @see https://www.iana.org/go/rfc3680
     *
     * @var string
     */
    public const REGINFO_XML = 'application/reginfo+xml';

    /**
     * MIME type 'relax-ng-compact-syntax'
     *
     * Standards: -
     *
     * @see http://www.jtc1sc34.org/repository/0661.pdf
     *
     * @var string
     */
    public const RELAX_NG_COMPACT_SYNTAX = 'application/relax-ng-compact-syntax';

    /**
     * MIME type 'remote-printing'
     *
     * Standards: RFC1486
     *
     * @see https://www.iana.org/go/rfc1486
     *
     * @var string
     */
    public const REMOTE_PRINTING = 'application/remote-printing';

    /**
     * MIME type 'reputon+json'
     *
     * Standards: RFC7071
     *
     * @see https://www.iana.org/go/rfc7071
     *
     * @var string
     */
    public const REPUTON_JSON = 'application/reputon+json';

    /**
     * MIME type 'resource-lists-diff+xml'
     *
     * Standards: RFC5362
     *
     * @see https://www.iana.org/go/rfc5362
     *
     * @var string
     */
    public const RESOURCE_LISTS_DIFF_XML = 'application/resource-lists-diff+xml';

    /**
     * MIME type 'resource-lists+xml'
     *
     * Standards: RFC4826
     *
     * @see https://www.iana.org/go/rfc4826
     *
     * @var string
     */
    public const RESOURCE_LISTS_XML = 'application/resource-lists+xml';

    /**
     * MIME type 'rfc+xml'
     *
     * Standards: RFC7991
     *
     * @see https://www.iana.org/go/rfc7991
     *
     * @var string
     */
    public const RFC_XML = 'application/rfc+xml';

    /**
     * MIME type 'riscos'
     *
     * Standards: -
     *
     * @var string
     */
    public const RISCOS = 'application/riscos';

    /**
     * MIME type 'rlmi+xml'
     *
     * Standards: RFC4662
     *
     * @see https://www.iana.org/go/rfc4662
     *
     * @var string
     */
    public const RLMI_XML = 'application/rlmi+xml';

    /**
     * MIME type 'rls-services+xml'
     *
     * Standards: RFC4826
     *
     * @see https://www.iana.org/go/rfc4826
     *
     * @var string
     */
    public const RLS_SERVICES_XML = 'application/rls-services+xml';

    /**
     * MIME type 'rpki-ghostbusters'
     *
     * Standards: RFC6493
     *
     * @see https://www.iana.org/go/rfc6493
     *
     * @var string
     */
    public const RPKI_GHOSTBUSTERS = 'application/rpki-ghostbusters';

    /**
     * MIME type 'rpki-manifest'
     *
     * Standards: RFC6481
     *
     * @see https://www.iana.org/go/rfc6481
     *
     * @var string
     */
    public const RPKI_MANIFEST = 'application/rpki-manifest';

    /**
     * MIME type 'rpki-publication'
     *
     * Standards: RFC8181
     *
     * @see https://www.iana.org/go/rfc8181
     *
     * @var string
     */
    public const RPKI_PUBLICATION = 'application/rpki-publication';

    /**
     * MIME type 'rpki-roa'
     *
     * Standards: RFC6481
     *
     * @see https://www.iana.org/go/rfc6481
     *
     * @var string
     */
    public const RPKI_ROA = 'application/rpki-roa';

    /**
     * MIME type 'rpki-updown'
     *
     * Standards: RFC6492
     *
     * @see https://www.iana.org/go/rfc6492
     *
     * @var string
     */
    public const RPKI_UPDOWN = 'application/rpki-updown';

    /**
     * MIME type 'rtf'
     *
     * Standards: -
     *
     * @var string
     */
    public const RTF = 'application/rtf';

    /**
     * MIME type 'rtploopback'
     *
     * Standards: RFC6849
     *
     * @see https://www.iana.org/go/rfc6849
     *
     * @var string
     */
    public const RTPLOOPBACK = 'application/rtploopback';

    /**
     * MIME type 'rtx'
     *
     * Standards: RFC4588
     *
     * @see https://www.iana.org/go/rfc4588
     *
     * @var string
     */
    public const RTX = 'application/rtx';

    /**
     * MIME type 'samlassertion+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const SAMLASSERTION_XML = 'application/samlassertion+xml';

    /**
     * MIME type 'samlmetadata+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const SAMLMETADATA_XML = 'application/samlmetadata+xml';

    /**
     * MIME type 'sarif-external-properties+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const SARIF_EXTERNAL_PROPERTIES_JSON = 'application/sarif-external-properties+json';

    /**
     * MIME type 'sarif+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const SARIF_JSON = 'application/sarif+json';

    /**
     * MIME type 'sbe'
     *
     * Standards: -
     *
     * @var string
     */
    public const SBE = 'application/sbe';

    /**
     * MIME type 'sbml+xml'
     *
     * Standards: RFC3823
     *
     * @see https://www.iana.org/go/rfc3823
     *
     * @var string
     */
    public const SBML_XML = 'application/sbml+xml';

    /**
     * MIME type 'scaip+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const SCAIP_XML = 'application/scaip+xml';

    /**
     * MIME type 'scim+json'
     *
     * Standards: RFC7644
     *
     * @see https://www.iana.org/go/rfc7644
     *
     * @var string
     */
    public const SCIM_JSON = 'application/scim+json';

    /**
     * MIME type 'scvp-cv-request'
     *
     * Standards: RFC5055
     *
     * @see https://www.iana.org/go/rfc5055
     *
     * @var string
     */
    public const SCVP_CV_REQUEST = 'application/scvp-cv-request';

    /**
     * MIME type 'scvp-cv-response'
     *
     * Standards: RFC5055
     *
     * @see https://www.iana.org/go/rfc5055
     *
     * @var string
     */
    public const SCVP_CV_RESPONSE = 'application/scvp-cv-response';

    /**
     * MIME type 'scvp-vp-request'
     *
     * Standards: RFC5055
     *
     * @see https://www.iana.org/go/rfc5055
     *
     * @var string
     */
    public const SCVP_VP_REQUEST = 'application/scvp-vp-request';

    /**
     * MIME type 'scvp-vp-response'
     *
     * Standards: RFC5055
     *
     * @see https://www.iana.org/go/rfc5055
     *
     * @var string
     */
    public const SCVP_VP_RESPONSE = 'application/scvp-vp-response';

    /**
     * MIME type 'sdp'
     *
     * Standards: RFC8866
     *
     * @see https://www.iana.org/go/rfc8866
     *
     * @var string
     */
    public const SDP = 'application/sdp';

    /**
     * MIME type 'secevent+jwt'
     *
     * Standards: RFC8417
     *
     * @see https://www.iana.org/go/rfc8417
     *
     * @var string
     */
    public const SECEVENT_JWT = 'application/secevent+jwt';

    /**
     * MIME type 'senml-etch+cbor'
     *
     * Standards: RFC8790
     *
     * @see https://www.iana.org/go/rfc8790
     *
     * @var string
     */
    public const SENML_ETCH_CBOR = 'application/senml-etch+cbor';

    /**
     * MIME type 'senml-etch+json'
     *
     * Standards: RFC8790
     *
     * @see https://www.iana.org/go/rfc8790
     *
     * @var string
     */
    public const SENML_ETCH_JSON = 'application/senml-etch+json';

    /**
     * MIME type 'senml-exi'
     *
     * Standards: RFC8428
     *
     * @see https://www.iana.org/go/rfc8428
     *
     * @var string
     */
    public const SENML_EXI = 'application/senml-exi';

    /**
     * MIME type 'senml+cbor'
     *
     * Standards: RFC8428
     *
     * @see https://www.iana.org/go/rfc8428
     *
     * @var string
     */
    public const SENML_CBOR = 'application/senml+cbor';

    /**
     * MIME type 'senml+json'
     *
     * Standards: RFC8428
     *
     * @see https://www.iana.org/go/rfc8428
     *
     * @var string
     */
    public const SENML_JSON = 'application/senml+json';

    /**
     * MIME type 'senml+xml'
     *
     * Standards: RFC8428
     *
     * @see https://www.iana.org/go/rfc8428
     *
     * @var string
     */
    public const SENML_XML = 'application/senml+xml';

    /**
     * MIME type 'sensml-exi'
     *
     * Standards: RFC8428
     *
     * @see https://www.iana.org/go/rfc8428
     *
     * @var string
     */
    public const SENSML_EXI = 'application/sensml-exi';

    /**
     * MIME type 'sensml+cbor'
     *
     * Standards: RFC8428
     *
     * @see https://www.iana.org/go/rfc8428
     *
     * @var string
     */
    public const SENSML_CBOR = 'application/sensml+cbor';

    /**
     * MIME type 'sensml+json'
     *
     * Standards: RFC8428
     *
     * @see https://www.iana.org/go/rfc8428
     *
     * @var string
     */
    public const SENSML_JSON = 'application/sensml+json';

    /**
     * MIME type 'sensml+xml'
     *
     * Standards: RFC8428
     *
     * @see https://www.iana.org/go/rfc8428
     *
     * @var string
     */
    public const SENSML_XML = 'application/sensml+xml';

    /**
     * MIME type 'sep-exi'
     *
     * Standards: -
     *
     * @var string
     */
    public const SEP_EXI = 'application/sep-exi';

    /**
     * MIME type 'sep+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const SEP_XML = 'application/sep+xml';

    /**
     * MIME type 'session-info'
     *
     * Standards: -
     *
     * @var string
     */
    public const SESSION_INFO = 'application/session-info';

    /**
     * MIME type 'set-payment'
     *
     * Standards: -
     *
     * @var string
     */
    public const SET_PAYMENT = 'application/set-payment';

    /**
     * MIME type 'set-payment-initiation'
     *
     * Standards: -
     *
     * @var string
     */
    public const SET_PAYMENT_INITIATION = 'application/set-payment-initiation';

    /**
     * MIME type 'set-registration'
     *
     * Standards: -
     *
     * @var string
     */
    public const SET_REGISTRATION = 'application/set-registration';

    /**
     * MIME type 'set-registration-initiation'
     *
     * Standards: -
     *
     * @var string
     */
    public const SET_REGISTRATION_INITIATION = 'application/set-registration-initiation';

    /**
     * MIME type 'SGML'
     *
     * Standards: RFC1874
     *
     * @see https://www.iana.org/go/rfc1874
     *
     * @var string
     */
    public const SGML = 'application/SGML';

    /**
     * MIME type 'sgml-open-catalog'
     *
     * Standards: -
     *
     * @var string
     */
    public const SGML_OPEN_CATALOG = 'application/sgml-open-catalog';

    /**
     * MIME type 'shf+xml'
     *
     * Standards: RFC4194
     *
     * @see https://www.iana.org/go/rfc4194
     *
     * @var string
     */
    public const SHF_XML = 'application/shf+xml';

    /**
     * MIME type 'sieve'
     *
     * Standards: RFC5228
     *
     * @see https://www.iana.org/go/rfc5228
     *
     * @var string
     */
    public const SIEVE = 'application/sieve';

    /**
     * MIME type 'simple-filter+xml'
     *
     * Standards: RFC4661
     *
     * @see https://www.iana.org/go/rfc4661
     *
     * @var string
     */
    public const SIMPLE_FILTER_XML = 'application/simple-filter+xml';

    /**
     * MIME type 'simple-message-summary'
     *
     * Standards: RFC3842
     *
     * @see https://www.iana.org/go/rfc3842
     *
     * @var string
     */
    public const SIMPLE_MESSAGE_SUMMARY = 'application/simple-message-summary';

    /**
     * MIME type 'simpleSymbolContainer'
     *
     * Standards: -
     *
     * @var string
     */
    public const SIMPLESYMBOLCONTAINER = 'application/simpleSymbolContainer';

    /**
     * MIME type 'sipc'
     *
     * Standards: -
     *
     * @var string
     */
    public const SIPC = 'application/sipc';

    /**
     * MIME type 'slate'
     *
     * Standards: -
     *
     * @var string
     */
    public const SLATE = 'application/slate';

    /**
     * MIME type 'smil'
     *
     * Standards: RFC4536
     *
     * @see https://www.iana.org/go/rfc4536
     *
     * @var string
     * @deprecated in favor of application/smil+xml
     */
    public const SMIL = 'application/smil';

    /**
     * MIME type 'smil+xml'
     *
     * Standards: RFC4536
     *
     * @see https://www.iana.org/go/rfc4536
     *
     * @var string
     */
    public const SMIL_XML = 'application/smil+xml';

    /**
     * MIME type 'smpte336m'
     *
     * Standards: RFC6597
     *
     * @see https://www.iana.org/go/rfc6597
     *
     * @var string
     */
    public const SMPTE336M = 'application/smpte336m';

    /**
     * MIME type 'soap+fastinfoset'
     *
     * Standards: -
     *
     * @var string
     */
    public const SOAP_FASTINFOSET = 'application/soap+fastinfoset';

    /**
     * MIME type 'soap+xml'
     *
     * Standards: RFC3902
     *
     * @see https://www.iana.org/go/rfc3902
     *
     * @var string
     */
    public const SOAP_XML = 'application/soap+xml';

    /**
     * MIME type 'sparql-query'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/2007/CR-rdf-sparql-query-20070614/#mediaType
     *
     * @var string
     */
    public const SPARQL_QUERY = 'application/sparql-query';

    /**
     * MIME type 'spdx+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const SPDX_JSON = 'application/spdx+json';

    /**
     * MIME type 'sparql-results+xml'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/2007/CR-rdf-sparql-XMLres-20070925/#mime
     *
     * @var string
     */
    public const SPARQL_RESULTS_XML = 'application/sparql-results+xml';

    /**
     * MIME type 'spirits-event+xml'
     *
     * Standards: RFC3910
     *
     * @see https://www.iana.org/go/rfc3910
     *
     * @var string
     */
    public const SPIRITS_EVENT_XML = 'application/spirits-event+xml';

    /**
     * MIME type 'sql'
     *
     * Standards: RFC6922
     *
     * @see https://www.iana.org/go/rfc6922
     *
     * @var string
     */
    public const SQL = 'application/sql';

    /**
     * MIME type 'srgs'
     *
     * Standards: RFC4267
     *
     * @see https://www.iana.org/go/rfc4267
     *
     * @var string
     */
    public const SRGS = 'application/srgs';

    /**
     * MIME type 'srgs+xml'
     *
     * Standards: RFC4267
     *
     * @see https://www.iana.org/go/rfc4267
     *
     * @var string
     */
    public const SRGS_XML = 'application/srgs+xml';

    /**
     * MIME type 'sru+xml'
     *
     * Standards: RFC6207
     *
     * @see https://www.iana.org/go/rfc6207
     *
     * @var string
     */
    public const SRU_XML = 'application/sru+xml';

    /**
     * MIME type 'ssml+xml'
     *
     * Standards: RFC4267
     *
     * @see https://www.iana.org/go/rfc4267
     *
     * @var string
     */
    public const SSML_XML = 'application/ssml+xml';

    /**
     * MIME type 'stix+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const STIX_JSON = 'application/stix+json';

    /**
     * MIME type 'swid+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const SWID_XML = 'application/swid+xml';

    /**
     * MIME type 'tamp-apex-update'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_APEX_UPDATE = 'application/tamp-apex-update';

    /**
     * MIME type 'tamp-apex-update-confirm'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_APEX_UPDATE_CONFIRM = 'application/tamp-apex-update-confirm';

    /**
     * MIME type 'tamp-community-update'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_COMMUNITY_UPDATE = 'application/tamp-community-update';

    /**
     * MIME type 'tamp-community-update-confirm'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_COMMUNITY_UPDATE_CONFIRM = 'application/tamp-community-update-confirm';

    /**
     * MIME type 'tamp-error'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_ERROR = 'application/tamp-error';

    /**
     * MIME type 'tamp-sequence-adjust'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_SEQUENCE_ADJUST = 'application/tamp-sequence-adjust';

    /**
     * MIME type 'tamp-sequence-adjust-confirm'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_SEQUENCE_ADJUST_CONFIRM = 'application/tamp-sequence-adjust-confirm';

    /**
     * MIME type 'tamp-status-query'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_STATUS_QUERY = 'application/tamp-status-query';

    /**
     * MIME type 'tamp-status-response'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_STATUS_RESPONSE = 'application/tamp-status-response';

    /**
     * MIME type 'tamp-update'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_UPDATE = 'application/tamp-update';

    /**
     * MIME type 'tamp-update-confirm'
     *
     * Standards: RFC5934
     *
     * @see https://www.iana.org/go/rfc5934
     *
     * @var string
     */
    public const TAMP_UPDATE_CONFIRM = 'application/tamp-update-confirm';

    /**
     * MIME type 'taxii+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const TAXII_JSON = 'application/taxii+json';

    /**
     * MIME type 'td+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const TD_JSON = 'application/td+json';

    /**
     * MIME type 'tei+xml'
     *
     * Standards: RFC6129
     *
     * @see https://www.iana.org/go/rfc6129
     *
     * @var string
     */
    public const TEI_XML = 'application/tei+xml';

    /**
     * MIME type 'TETRA_ISI'
     *
     * Standards: -
     *
     * @var string
     */
    public const TETRA_ISI = 'application/TETRA_ISI';

    /**
     * MIME type 'thraud+xml'
     *
     * Standards: RFC5941
     *
     * @see https://www.iana.org/go/rfc5941
     *
     * @var string
     */
    public const THRAUD_XML = 'application/thraud+xml';

    /**
     * MIME type 'timestamp-query'
     *
     * Standards: RFC3161
     *
     * @see https://www.iana.org/go/rfc3161
     *
     * @var string
     */
    public const TIMESTAMP_QUERY = 'application/timestamp-query';

    /**
     * MIME type 'timestamp-reply'
     *
     * Standards: RFC3161
     *
     * @see https://www.iana.org/go/rfc3161
     *
     * @var string
     */
    public const TIMESTAMP_REPLY = 'application/timestamp-reply';

    /**
     * MIME type 'timestamped-data'
     *
     * Standards: RFC5955
     *
     * @see https://www.iana.org/go/rfc5955
     *
     * @var string
     */
    public const TIMESTAMPED_DATA = 'application/timestamped-data';

    /**
     * MIME type 'tlsrpt+gzip'
     *
     * Standards: RFC8460
     *
     * @see https://www.iana.org/go/rfc8460
     *
     * @var string
     */
    public const TLSRPT_GZIP = 'application/tlsrpt+gzip';

    /**
     * MIME type 'tlsrpt+json'
     *
     * Standards: RFC8460
     *
     * @see https://www.iana.org/go/rfc8460
     *
     * @var string
     */
    public const TLSRPT_JSON = 'application/tlsrpt+json';

    /**
     * MIME type 'tnauthlist'
     *
     * Standards: RFC8226
     *
     * @see https://www.iana.org/go/rfc8226
     *
     * @var string
     */
    public const TNAUTHLIST = 'application/tnauthlist';

    /**
     * MIME type 'token-introspection+jwt'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-oauth-jwt-introspection-response-12
     *
     * @var string
     */
    public const TOKEN_INTROSPECTION_JWT = 'application/token-introspection+jwt';

    /**
     * MIME type 'trickle-ice-sdpfrag'
     *
     * Standards: RFC8840
     *
     * @see https://www.iana.org/go/rfc8840
     *
     * @var string
     */
    public const TRICKLE_ICE_SDPFRAG = 'application/trickle-ice-sdpfrag';

    /**
     * MIME type 'trig'
     *
     * Standards: -
     *
     * @var string
     */
    public const TRIG = 'application/trig';

    /**
     * MIME type 'ttml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const TTML_XML = 'application/ttml+xml';

    /**
     * MIME type 'tve-trigger'
     *
     * Standards: -
     *
     * @var string
     */
    public const TVE_TRIGGER = 'application/tve-trigger';

    /**
     * MIME type 'tzif'
     *
     * Standards: RFC8536
     *
     * @see https://www.iana.org/go/rfc8536
     *
     * @var string
     */
    public const TZIF = 'application/tzif';

    /**
     * MIME type 'tzif-leap'
     *
     * Standards: RFC8536
     *
     * @see https://www.iana.org/go/rfc8536
     *
     * @var string
     */
    public const TZIF_LEAP = 'application/tzif-leap';

    /**
     * MIME type 'ulpfec'
     *
     * Standards: RFC5109
     *
     * @see https://www.iana.org/go/rfc5109
     *
     * @var string
     */
    public const ULPFEC = 'application/ulpfec';

    /**
     * MIME type 'urc-grpsheet+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const URC_GRPSHEET_XML = 'application/urc-grpsheet+xml';

    /**
     * MIME type 'urc-ressheet+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const URC_RESSHEET_XML = 'application/urc-ressheet+xml';

    /**
     * MIME type 'urc-targetdesc+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const URC_TARGETDESC_XML = 'application/urc-targetdesc+xml';

    /**
     * MIME type 'urc-uisocketdesc+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const URC_UISOCKETDESC_XML = 'application/urc-uisocketdesc+xml';

    /**
     * MIME type 'vcard+json'
     *
     * Standards: RFC7095
     *
     * @see https://www.iana.org/go/rfc7095
     *
     * @var string
     */
    public const VCARD_JSON = 'application/vcard+json';

    /**
     * MIME type 'vcard+xml'
     *
     * Standards: RFC6351
     *
     * @see https://www.iana.org/go/rfc6351
     *
     * @var string
     */
    public const VCARD_XML = 'application/vcard+xml';

    /**
     * MIME type 'vemmi'
     *
     * Standards: RFC2122
     *
     * @see https://www.iana.org/go/rfc2122
     *
     * @var string
     */
    public const VEMMI = 'application/vemmi';

    /**
     * MIME type 'vnd.1000minds.decision-model+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_1000MINDS_DECISION_MODEL_XML = 'application/vnd.1000minds.decision-model+xml';

    /**
     * MIME type 'vnd.3gpp.5gnas'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_5GNAS = 'application/vnd.3gpp.5gnas';

    /**
     * MIME type 'vnd.3gpp.access-transfer-events+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_ACCESS_TRANSFER_EVENTS_XML = 'application/vnd.3gpp.access-transfer-events+xml';

    /**
     * MIME type 'vnd.3gpp.bsf+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_BSF_XML = 'application/vnd.3gpp.bsf+xml';

    /**
     * MIME type 'vnd.3gpp.GMOP+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_GMOP_XML = 'application/vnd.3gpp.GMOP+xml';

    /**
     * MIME type 'vnd.3gpp.gtpc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_GTPC = 'application/vnd.3gpp.gtpc';

    /**
     * MIME type 'vnd.3gpp.interworking-data'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_INTERWORKING_DATA = 'application/vnd.3gpp.interworking-data';

    /**
     * MIME type 'vnd.3gpp.lpp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_LPP = 'application/vnd.3gpp.lpp';

    /**
     * MIME type 'vnd.3gpp.mc-signalling-ear'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MC_SIGNALLING_EAR = 'application/vnd.3gpp.mc-signalling-ear';

    /**
     * MIME type 'vnd.3gpp.mcdata-affiliation-command+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCDATA_AFFILIATION_CMD_XML = 'application/vnd.3gpp.mcdata-affiliation-command+xml';

    /**
     * MIME type 'vnd.3gpp.mcdata-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCDATA_INFO_XML = 'application/vnd.3gpp.mcdata-info+xml';

    /**
     * MIME type 'vnd.3gpp.mcdata-payload'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCDATA_PAYLOAD = 'application/vnd.3gpp.mcdata-payload';

    /**
     * MIME type 'vnd.3gpp.mcdata-service-config+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCDATA_SERVICE_CONFIG_XML = 'application/vnd.3gpp.mcdata-service-config+xml';

    /**
     * MIME type 'vnd.3gpp.mcdata-signalling'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCDATA_SIGNALLING = 'application/vnd.3gpp.mcdata-signalling';

    /**
     * MIME type 'vnd.3gpp.mcdata-ue-config+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCDATA_UE_CONFIG_XML = 'application/vnd.3gpp.mcdata-ue-config+xml';

    /**
     * MIME type 'vnd.3gpp.mcdata-user-profile+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCDATA_USER_PROFILE_XML = 'application/vnd.3gpp.mcdata-user-profile+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-affiliation-command+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_AFFILIATION_CMD_XML = 'application/vnd.3gpp.mcptt-affiliation-command+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-floor-request+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_FLOOR_REQUEST_XML = 'application/vnd.3gpp.mcptt-floor-request+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_INFO_XML = 'application/vnd.3gpp.mcptt-info+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-location-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_LOCATION_INFO_XML = 'application/vnd.3gpp.mcptt-location-info+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-mbms-usage-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_MBMS_USAGE_INFO_XML = 'application/vnd.3gpp.mcptt-mbms-usage-info+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-service-config+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_SERVICE_CONFIG_XML = 'application/vnd.3gpp.mcptt-service-config+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-signed+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_SIGNED_XML = 'application/vnd.3gpp.mcptt-signed+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-ue-config+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_UE_CONFIG_XML = 'application/vnd.3gpp.mcptt-ue-config+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-ue-init-config+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_UE_INIT_CONFIG_XML = 'application/vnd.3gpp.mcptt-ue-init-config+xml';

    /**
     * MIME type 'vnd.3gpp.mcptt-user-profile+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCPTT_USER_PROFILE_XML = 'application/vnd.3gpp.mcptt-user-profile+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-affiliation-command+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCVIDEO_AFFILIATION_CMD_XML = 'application/vnd.3gpp.mcvideo-affiliation-command+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-affiliation-info+xml'
     *
     * Standards: -
     *
     * @var string
     * @deprecated in favor of application/vnd.3gpp.mcvideo-info+xml
     */
    public const VND_3GPP_MCVIDEO_AFFILIATION_INFO_XML = 'application/vnd.3gpp.mcvideo-affiliation-info+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCVIDEO_INFO_XML = 'application/vnd.3gpp.mcvideo-info+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-location-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCVIDEO_LOCATION_INFO_XML = 'application/vnd.3gpp.mcvideo-location-info+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-mbms-usage-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCVIDEO_MBMS_USAGE_INFO_XML = 'application/vnd.3gpp.mcvideo-mbms-usage-info+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-service-config+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCVIDEO_SERVICE_CONFIG_XML = 'application/vnd.3gpp.mcvideo-service-config+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-transmission-request+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCVIDEO_TRANSMISSION_REQUEST_XML = 'application/vnd.3gpp.mcvideo-transmission-request+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-ue-config+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCVIDEO_UE_CONFIG_XML = 'application/vnd.3gpp.mcvideo-ue-config+xml';

    /**
     * MIME type 'vnd.3gpp.mcvideo-user-profile+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MCVIDEO_USER_PROFILE_XML = 'application/vnd.3gpp.mcvideo-user-profile+xml';

    /**
     * MIME type 'vnd.3gpp.mid-call+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_MID_CALL_XML = 'application/vnd.3gpp.mid-call+xml';

    /**
     * MIME type 'vnd.3gpp.ngap'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_NGAP = 'application/vnd.3gpp.ngap';

    /**
     * MIME type 'vnd.3gpp.pfcp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_PFCP = 'application/vnd.3gpp.pfcp';

    /**
     * MIME type 'vnd.3gpp.pic-bw-large'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_PIC_BW_LARGE = 'application/vnd.3gpp.pic-bw-large';

    /**
     * MIME type 'vnd.3gpp.pic-bw-small'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_PIC_BW_SMALL = 'application/vnd.3gpp.pic-bw-small';

    /**
     * MIME type 'vnd.3gpp.pic-bw-var'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_PIC_BW_VAR = 'application/vnd.3gpp.pic-bw-var';

    /**
     * MIME type 'vnd.3gpp-prose-pc3ch+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_PROSE_PC3CH_XML = 'application/vnd.3gpp-prose-pc3ch+xml';

    /**
     * MIME type 'vnd.3gpp-prose+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_PROSE_XML = 'application/vnd.3gpp-prose+xml';

    /**
     * MIME type 'vnd.3gpp.s1ap'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_S1AP = 'application/vnd.3gpp.s1ap';

    /**
     * MIME type 'vnd.3gpp.sms'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_SMS = 'application/vnd.3gpp.sms';

    /**
     * MIME type 'vnd.3gpp.sms+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_SMS_XML = 'application/vnd.3gpp.sms+xml';

    /**
     * MIME type 'vnd.3gpp.srvcc-ext+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_SRVCC_EXT_XML = 'application/vnd.3gpp.srvcc-ext+xml';

    /**
     * MIME type 'vnd.3gpp.SRVCC-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_SRVCC_INFO_XML = 'application/vnd.3gpp.SRVCC-info+xml';

    /**
     * MIME type 'vnd.3gpp.state-and-event-info+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_STATE_EVENT_INFO_XML = 'application/vnd.3gpp.state-and-event-info+xml';

    /**
     * MIME type 'vnd.3gpp.ussd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_USSD_XML = 'application/vnd.3gpp.ussd+xml';

    /**
     * MIME type 'vnd.3gpp-v2x-local-service-information'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP_V2X_LOCAL_SERVICE_INFO = 'application/vnd.3gpp-v2x-local-service-information';

    /**
     * MIME type 'vnd.3gpp2.bcmcsinfo+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP2_BCMCSINFO_XML = 'application/vnd.3gpp2.bcmcsinfo+xml';

    /**
     * MIME type 'vnd.3gpp2.sms'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP2_SMS = 'application/vnd.3gpp2.sms';

    /**
     * MIME type 'vnd.3gpp2.tcap'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3GPP2_TCAP = 'application/vnd.3gpp2.tcap';

    /**
     * MIME type 'vnd.3lightssoftware.imagescal'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3LIGHTSSOFTWARE_IMAGESCAL = 'application/vnd.3lightssoftware.imagescal';

    /**
     * MIME type 'vnd.3M.Post-it-Notes'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_3M_POST_IT_NOTES = 'application/vnd.3M.Post-it-Notes';

    /**
     * MIME type 'vnd.accpac.simply.aso'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ACCPAC_SIMPLY_ASO = 'application/vnd.accpac.simply.aso';

    /**
     * MIME type 'vnd.accpac.simply.imp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ACCPAC_SIMPLY_IMP = 'application/vnd.accpac.simply.imp';

    /**
     * MIME type 'vnd.acucobol'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ACUCOBOL = 'application/vnd.acucobol';

    /**
     * MIME type 'vnd.acucorp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ACUCORP = 'application/vnd.acucorp';

    /**
     * MIME type 'vnd.adobe.flash.movie'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ADOBE_FLASH_MOVIE = 'application/vnd.adobe.flash.movie';

    /**
     * MIME type 'vnd.adobe.formscentral.fcdt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ADOBE_FORMSCENTRAL_FCDT = 'application/vnd.adobe.formscentral.fcdt';

    /**
     * MIME type 'vnd.adobe.fxp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ADOBE_FXP = 'application/vnd.adobe.fxp';

    /**
     * MIME type 'vnd.adobe.partial-upload'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ADOBE_PARTIAL_UPLOAD = 'application/vnd.adobe.partial-upload';

    /**
     * MIME type 'vnd.adobe.xdp+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ADOBE_XDP_XML = 'application/vnd.adobe.xdp+xml';

    /**
     * MIME type 'vnd.adobe.xfdf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ADOBE_XFDF = 'application/vnd.adobe.xfdf';

    /**
     * MIME type 'vnd.aether.imp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AETHER_IMP = 'application/vnd.aether.imp';

    /**
     * MIME type 'vnd.afpc.afplinedata'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_AFPLINEDATA = 'application/vnd.afpc.afplinedata';

    /**
     * MIME type 'vnd.afpc.afplinedata-pagedef'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_AFPLINEDATA_PAGEDEF = 'application/vnd.afpc.afplinedata-pagedef';

    /**
     * MIME type 'vnd.afpc.cmoca-cmresource'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_CMOCA_CMRESOURCE = 'application/vnd.afpc.cmoca-cmresource';

    /**
     * MIME type 'vnd.afpc.foca-charset'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_FOCA_CHARSET = 'application/vnd.afpc.foca-charset';

    /**
     * MIME type 'vnd.afpc.foca-codedfont'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_FOCA_CODEDFONT = 'application/vnd.afpc.foca-codedfont';

    /**
     * MIME type 'vnd.afpc.foca-codepage'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_FOCA_CODEPAGE = 'application/vnd.afpc.foca-codepage';

    /**
     * MIME type 'vnd.afpc.modca'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_MODCA = 'application/vnd.afpc.modca';

    /**
     * MIME type 'vnd.afpc.modca-cmtable'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_MODCA_CMTABLE = 'application/vnd.afpc.modca-cmtable';

    /**
     * MIME type 'vnd.afpc.modca-formdef'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_MODCA_FORMDEF = 'application/vnd.afpc.modca-formdef';

    /**
     * MIME type 'vnd.afpc.modca-mediummap'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_MODCA_MEDIUMMAP = 'application/vnd.afpc.modca-mediummap';

    /**
     * MIME type 'vnd.afpc.modca-objectcontainer'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_MODCA_OBJCONTAINER = 'application/vnd.afpc.modca-objectcontainer';

    /**
     * MIME type 'vnd.afpc.modca-overlay'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_MODCA_OVERLAY = 'application/vnd.afpc.modca-overlay';

    /**
     * MIME type 'vnd.afpc.modca-pagesegment'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AFPC_MODCA_PAGESEGMENT = 'application/vnd.afpc.modca-pagesegment';

    /**
     * MIME type 'vnd.age'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AGE = 'application/vnd.age';

    /**
     * MIME type 'vnd.ah-barcode'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AH_BARCODE = 'application/vnd.ah-barcode';

    /**
     * MIME type 'vnd.ahead.space'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AHEAD_SPACE = 'application/vnd.ahead.space';

    /**
     * MIME type 'vnd.airzip.filesecure.azf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AIRZIP_FILESECURE_AZF = 'application/vnd.airzip.filesecure.azf';

    /**
     * MIME type 'vnd.airzip.filesecure.azs'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AIRZIP_FILESECURE_AZS = 'application/vnd.airzip.filesecure.azs';

    /**
     * MIME type 'vnd.amadeus+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AMADEUS_JSON = 'application/vnd.amadeus+json';

    /**
     * MIME type 'vnd.amazon.mobi8-ebook'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AMAZON_MOBI8_EBOOK = 'application/vnd.amazon.mobi8-ebook';

    /**
     * MIME type 'vnd.americandynamics.acc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AMERICANDYNAMICS_ACC = 'application/vnd.americandynamics.acc';

    /**
     * MIME type 'vnd.amiga.ami'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AMIGA_AMI = 'application/vnd.amiga.ami';

    /**
     * MIME type 'vnd.amundsen.maze+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AMUNDSEN_MAZE_XML = 'application/vnd.amundsen.maze+xml';

    /**
     * MIME type 'vnd.android.ota'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ANDROID_OTA = 'application/vnd.android.ota';

    /**
     * MIME type 'vnd.anki'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ANKI = 'application/vnd.anki';

    /**
     * MIME type 'vnd.anser-web-certificate-issue-initiation'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ANSER_WEB_CERT_ISSUE_INIT = 'application/vnd.anser-web-certificate-issue-initiation';

    /**
     * MIME type 'vnd.antix.game-component'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ANTIX_GAME_COMPONENT = 'application/vnd.antix.game-component';

    /**
     * MIME type 'vnd.apache.arrow.file'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APACHE_ARROW_FILE = 'application/vnd.apache.arrow.file';

    /**
     * MIME type 'vnd.apache.arrow.stream'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APACHE_ARROW_STREAM = 'application/vnd.apache.arrow.stream';

    /**
     * MIME type 'vnd.apache.thrift.binary'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APACHE_THRIFT_BIN = 'application/vnd.apache.thrift.binary';

    /**
     * MIME type 'vnd.apache.thrift.compact'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APACHE_THRIFT_COMPACT = 'application/vnd.apache.thrift.compact';

    /**
     * MIME type 'vnd.apache.thrift.json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APACHE_THRIFT_JSON = 'application/vnd.apache.thrift.json';

    /**
     * MIME type 'vnd.api+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_API_JSON = 'application/vnd.api+json';

    /**
     * MIME type 'vnd.aplextor.warrp+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APLEXTOR_WARRP_JSON = 'application/vnd.aplextor.warrp+json';

    /**
     * MIME type 'vnd.apothekende.reservation+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APOTHEKENDE_RESERVATION_JSON = 'application/vnd.apothekende.reservation+json';

    /**
     * MIME type 'vnd.apple.installer+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APPLE_INSTALLER_XML = 'application/vnd.apple.installer+xml';

    /**
     * MIME type 'vnd.apple.keynote'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APPLE_KEYNOTE = 'application/vnd.apple.keynote';

    /**
     * MIME type 'vnd.apple.mpegurl'
     *
     * Standards: RFC8216
     *
     * @see https://www.iana.org/go/rfc8216
     *
     * @var string
     */
    public const VND_APPLE_MPEGURL = 'application/vnd.apple.mpegurl';

    /**
     * MIME type 'vnd.apple.numbers'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APPLE_NUMBERS = 'application/vnd.apple.numbers';

    /**
     * MIME type 'vnd.apple.pages'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_APPLE_PAGES = 'application/vnd.apple.pages';

    /**
     * MIME type 'vnd.arastra.swi'
     *
     * Standards: -
     *
     * @var string
     * @deprecated in favor of application/vnd.aristanetworks.swi
     */
    public const VND_ARASTRA_SWI = 'application/vnd.arastra.swi';

    /**
     * MIME type 'vnd.aristanetworks.swi'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ARISTANETWORKS_SWI = 'application/vnd.aristanetworks.swi';

    /**
     * MIME type 'vnd.artisan+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ARTISAN_JSON = 'application/vnd.artisan+json';

    /**
     * MIME type 'vnd.artsquare'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ARTSQUARE = 'application/vnd.artsquare';

    /**
     * MIME type 'vnd.astraea-software.iota'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ASTRAEA_SOFTWARE_IOTA = 'application/vnd.astraea-software.iota';

    /**
     * MIME type 'vnd.audiograph'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AUDIOGRAPH = 'application/vnd.audiograph';

    /**
     * MIME type 'vnd.autopackage'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AUTOPACKAGE = 'application/vnd.autopackage';

    /**
     * MIME type 'vnd.avalon+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AVALON_JSON = 'application/vnd.avalon+json';

    /**
     * MIME type 'vnd.avistar+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_AVISTAR_XML = 'application/vnd.avistar+xml';

    /**
     * MIME type 'vnd.balsamiq.bmml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BALSAMIQ_BMML_XML = 'application/vnd.balsamiq.bmml+xml';

    /**
     * MIME type 'vnd.banana-accounting'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BANANA_ACCOUNTING = 'application/vnd.banana-accounting';

    /**
     * MIME type 'vnd.bbf.usp.error'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BBF_USP_ERROR = 'application/vnd.bbf.usp.error';

    /**
     * MIME type 'vnd.bbf.usp.msg'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BBF_USP_MSG = 'application/vnd.bbf.usp.msg';

    /**
     * MIME type 'vnd.bbf.usp.msg+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BBF_USP_MSG_JSON = 'application/vnd.bbf.usp.msg+json';

    /**
     * MIME type 'vnd.balsamiq.bmpr'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BALSAMIQ_BMPR = 'application/vnd.balsamiq.bmpr';

    /**
     * MIME type 'vnd.bekitzur-stech+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BEKITZUR_STECH_JSON = 'application/vnd.bekitzur-stech+json';

    /**
     * MIME type 'vnd.bint.med-content'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BINT_MED_CONTENT = 'application/vnd.bint.med-content';

    /**
     * MIME type 'vnd.biopax.rdf+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BIOPAX_RDF_XML = 'application/vnd.biopax.rdf+xml';

    /**
     * MIME type 'vnd.blink-idb-value-wrapper'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BLINK_IDB_VALUE_WRAPPER = 'application/vnd.blink-idb-value-wrapper';

    /**
     * MIME type 'vnd.blueice.multipass'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BLUEICE_MULTIPASS = 'application/vnd.blueice.multipass';

    /**
     * MIME type 'vnd.bluetooth.ep.oob'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BLUETOOTH_EP_OOB = 'application/vnd.bluetooth.ep.oob';

    /**
     * MIME type 'vnd.bluetooth.le.oob'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BLUETOOTH_LE_OOB = 'application/vnd.bluetooth.le.oob';

    /**
     * MIME type 'vnd.bmi'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BMI = 'application/vnd.bmi';

    /**
     * MIME type 'vnd.bpf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BPF = 'application/vnd.bpf';

    /**
     * MIME type 'vnd.bpf3'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BPF3 = 'application/vnd.bpf3';

    /**
     * MIME type 'vnd.businessobjects'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BUSINESSOBJECTS = 'application/vnd.businessobjects';

    /**
     * MIME type 'vnd.byu.uapi+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BYU_UAPI_JSON = 'application/vnd.byu.uapi+json';

    /**
     * MIME type 'vnd.cab-jscript'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CAB_JSCRIPT = 'application/vnd.cab-jscript';

    /**
     * MIME type 'vnd.canon-cpdl'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CANON_CPDL = 'application/vnd.canon-cpdl';

    /**
     * MIME type 'vnd.canon-lips'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CANON_LIPS = 'application/vnd.canon-lips';

    /**
     * MIME type 'vnd.capasystems-pg+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CAPASYSTEMS_PG_JSON = 'application/vnd.capasystems-pg+json';

    /**
     * MIME type 'vnd.cendio.thinlinc.clientconf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CENDIO_THINLINC_CLIENTCONF = 'application/vnd.cendio.thinlinc.clientconf';

    /**
     * MIME type 'vnd.century-systems.tcp_stream'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CENTURY_SYSTEMS_TCP_STREAM = 'application/vnd.century-systems.tcp_stream';

    /**
     * MIME type 'vnd.chemdraw+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CHEMDRAW_XML = 'application/vnd.chemdraw+xml';

    /**
     * MIME type 'vnd.chess-pgn'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CHESS_PGN = 'application/vnd.chess-pgn';

    /**
     * MIME type 'vnd.chipnuts.karaoke-mmd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CHIPNUTS_KARAOKE_MMD = 'application/vnd.chipnuts.karaoke-mmd';

    /**
     * MIME type 'vnd.ciedi'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CIEDI = 'application/vnd.ciedi';

    /**
     * MIME type 'vnd.cinderella'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CINDERELLA = 'application/vnd.cinderella';

    /**
     * MIME type 'vnd.cirpack.isdn-ext'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CIRPACK_ISDN_EXT = 'application/vnd.cirpack.isdn-ext';

    /**
     * MIME type 'vnd.citationstyles.style+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CITATIONSTYLES_STYLE_XML = 'application/vnd.citationstyles.style+xml';

    /**
     * MIME type 'vnd.claymore'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CLAYMORE = 'application/vnd.claymore';

    /**
     * MIME type 'vnd.cloanto.rp9'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CLOANTO_RP9 = 'application/vnd.cloanto.rp9';

    /**
     * MIME type 'vnd.clonk.c4group'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CLONK_C4GROUP = 'application/vnd.clonk.c4group';

    /**
     * MIME type 'vnd.cluetrust.cartomobile-config'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CLUETRUST_CARTOMOBILE_CONFIG = 'application/vnd.cluetrust.cartomobile-config';

    /**
     * MIME type 'vnd.cluetrust.cartomobile-config-pkg'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CLUETRUST_CARTOMOBILE_CONFIG_PKG = 'application/vnd.cluetrust.cartomobile-config-pkg';

    /**
     * MIME type 'vnd.coffeescript'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COFFEESCRIPT = 'application/vnd.coffeescript';

    /**
     * MIME type 'vnd.collabio.xodocuments.document'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLABIO_XODOCS_DOC = 'application/vnd.collabio.xodocuments.document';

    /**
     * MIME type 'vnd.collabio.xodocuments.document-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLABIO_XODOCS_DOC_TPL = 'application/vnd.collabio.xodocuments.document-template';

    /**
     * MIME type 'vnd.collabio.xodocuments.presentation'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLABIO_XODOCS_PRESENTATION = 'application/vnd.collabio.xodocuments.presentation';

    /**
     * MIME type 'vnd.collabio.xodocuments.presentation-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLABIO_XODOCS_PRESENTATION_TPL = 'application/vnd.collabio.xodocuments.presentation-template';

    /**
     * MIME type 'vnd.collabio.xodocuments.spreadsheet'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLABIO_XODOCS_SPREADSHEET = 'application/vnd.collabio.xodocuments.spreadsheet';

    /**
     * MIME type 'vnd.collabio.xodocuments.spreadsheet-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLABIO_XODOCS_SPREADSHEET_TPL = 'application/vnd.collabio.xodocuments.spreadsheet-template';

    /**
     * MIME type 'vnd.collection.doc+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLECTION_DOC_JSON = 'application/vnd.collection.doc+json';

    /**
     * MIME type 'vnd.collection+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLECTION_JSON = 'application/vnd.collection+json';

    /**
     * MIME type 'vnd.collection.next+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COLLECTION_NEXT_JSON = 'application/vnd.collection.next+json';

    /**
     * MIME type 'vnd.comicbook-rar'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COMICBOOK_RAR = 'application/vnd.comicbook-rar';

    /**
     * MIME type 'vnd.comicbook+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COMICBOOK_ZIP = 'application/vnd.comicbook+zip';

    /**
     * MIME type 'vnd.commerce-battelle'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COMMERCE_BATTELLE = 'application/vnd.commerce-battelle';

    /**
     * MIME type 'vnd.commonspace'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COMMONSPACE = 'application/vnd.commonspace';

    /**
     * MIME type 'vnd.coreos.ignition+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COREOS_IGNITION_JSON = 'application/vnd.coreos.ignition+json';

    /**
     * MIME type 'vnd.cosmocaller'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_COSMOCALLER = 'application/vnd.cosmocaller';

    /**
     * MIME type 'vnd.contact.cmsg'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CONTACT_CMSG = 'application/vnd.contact.cmsg';

    /**
     * MIME type 'vnd.crick.clicker'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRICK_CLICKER = 'application/vnd.crick.clicker';

    /**
     * MIME type 'vnd.crick.clicker.keyboard'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRICK_CLICKER_KEYBOARD = 'application/vnd.crick.clicker.keyboard';

    /**
     * MIME type 'vnd.crick.clicker.palette'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRICK_CLICKER_PALETTE = 'application/vnd.crick.clicker.palette';

    /**
     * MIME type 'vnd.crick.clicker.template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRICK_CLICKER_TPL = 'application/vnd.crick.clicker.template';

    /**
     * MIME type 'vnd.crick.clicker.wordbank'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRICK_CLICKER_WORDBANK = 'application/vnd.crick.clicker.wordbank';

    /**
     * MIME type 'vnd.criticaltools.wbs+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRITICALTOOLS_WBS_XML = 'application/vnd.criticaltools.wbs+xml';

    /**
     * MIME type 'vnd.cryptii.pipe+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRYPTII_PIPE_JSON = 'application/vnd.cryptii.pipe+json';

    /**
     * MIME type 'vnd.crypto-shade-file'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRYPTO_SHADE_FILE = 'application/vnd.crypto-shade-file';

    /**
     * MIME type 'vnd.cryptomator.encrypted'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRYPTOMATOR_ENCRYPTED = 'application/vnd.cryptomator.encrypted';

    /**
     * MIME type 'vnd.cryptomator.vault'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CRYPTOMATOR_VAULT = 'application/vnd.cryptomator.vault';

    /**
     * MIME type 'vnd.ctc-posml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CTC_POSML = 'application/vnd.ctc-posml';

    /**
     * MIME type 'vnd.ctct.ws+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CTCT_WS_XML = 'application/vnd.ctct.ws+xml';

    /**
     * MIME type 'vnd.cups-pdf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CUPS_PDF = 'application/vnd.cups-pdf';

    /**
     * MIME type 'vnd.cups-postscript'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CUPS_POSTSCRIPT = 'application/vnd.cups-postscript';

    /**
     * MIME type 'vnd.cups-ppd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CUPS_PPD = 'application/vnd.cups-ppd';

    /**
     * MIME type 'vnd.cups-raster'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CUPS_RASTER = 'application/vnd.cups-raster';

    /**
     * MIME type 'vnd.cups-raw'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CUPS_RAW = 'application/vnd.cups-raw';

    /**
     * MIME type 'vnd.curl'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CURL = 'application/vnd.curl';

    /**
     * MIME type 'vnd.cyan.dean.root+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CYAN_DEAN_ROOT_XML = 'application/vnd.cyan.dean.root+xml';

    /**
     * MIME type 'vnd.cybank'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CYBANK = 'application/vnd.cybank';

    /**
     * MIME type 'vnd.cyclonedx+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CYCLONEDX_JSON = 'application/vnd.cyclonedx+json';

    /**
     * MIME type 'vnd.cyclonedx+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_CYCLONEDX_XML = 'application/vnd.cyclonedx+xml';

    /**
     * MIME type 'vnd.d2l.coursepackage1p0+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_D2L_COURSEPACKAGE1P0_ZIP = 'application/vnd.d2l.coursepackage1p0+zip';

    /**
     * MIME type 'vnd.d3m-dataset'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_D3M_DATASET = 'application/vnd.d3m-dataset';

    /**
     * MIME type 'vnd.d3m-problem'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_D3M_PROBLEM = 'application/vnd.d3m-problem';

    /**
     * MIME type 'vnd.dart'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DART = 'application/vnd.dart';

    /**
     * MIME type 'vnd.data-vision.rdz'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DATA_VISION_RDZ = 'application/vnd.data-vision.rdz';

    /**
     * MIME type 'vnd.datapackage+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DATAPACKAGE_JSON = 'application/vnd.datapackage+json';

    /**
     * MIME type 'vnd.dataresource+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DATARESOURCE_JSON = 'application/vnd.dataresource+json';

    /**
     * MIME type 'vnd.dbf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DBF = 'application/vnd.dbf';

    /**
     * MIME type 'vnd.debian.binary-package'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DEBIAN_BIN_PACKAGE = 'application/vnd.debian.binary-package';

    /**
     * MIME type 'vnd.dece.data'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DECE_DATA = 'application/vnd.dece.data';

    /**
     * MIME type 'vnd.dece.ttml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DECE_TTML_XML = 'application/vnd.dece.ttml+xml';

    /**
     * MIME type 'vnd.dece.unspecified'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DECE_UNSPECIFIED = 'application/vnd.dece.unspecified';

    /**
     * MIME type 'vnd.dece.zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DECE_ZIP = 'application/vnd.dece.zip';

    /**
     * MIME type 'vnd.denovo.fcselayout-link'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DENOVO_FCSELAYOUT_LINK = 'application/vnd.denovo.fcselayout-link';

    /**
     * MIME type 'vnd.desmume.movie'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DESMUME_MOVIE = 'application/vnd.desmume.movie';

    /**
     * MIME type 'vnd.dir-bi.plate-dl-nosuffix'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DIR_BI_PLATE_DL_NOSUFFIX = 'application/vnd.dir-bi.plate-dl-nosuffix';

    /**
     * MIME type 'vnd.dm.delegation+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DM_DELEGATION_XML = 'application/vnd.dm.delegation+xml';

    /**
     * MIME type 'vnd.dna'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DNA = 'application/vnd.dna';

    /**
     * MIME type 'vnd.document+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOC_JSON = 'application/vnd.document+json';

    /**
     * MIME type 'vnd.dolby.mobile.1'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_MOBILE_1 = 'application/vnd.dolby.mobile.1';

    /**
     * MIME type 'vnd.dolby.mobile.2'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOLBY_MOBILE_2 = 'application/vnd.dolby.mobile.2';

    /**
     * MIME type 'vnd.doremir.scorecloud-binary-document'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DOREMIR_SCORECLOUD_BIN_DOC = 'application/vnd.doremir.scorecloud-binary-document';

    /**
     * MIME type 'vnd.dpgraph'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DPGRAPH = 'application/vnd.dpgraph';

    /**
     * MIME type 'vnd.dreamfactory'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DREAMFACTORY = 'application/vnd.dreamfactory';

    /**
     * MIME type 'vnd.drive+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DRIVE_JSON = 'application/vnd.drive+json';

    /**
     * MIME type 'vnd.dtg.local'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DTG_LOCAL = 'application/vnd.dtg.local';

    /**
     * MIME type 'vnd.dtg.local.flash'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DTG_LOCAL_FLASH = 'application/vnd.dtg.local.flash';

    /**
     * MIME type 'vnd.dtg.local.html'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DTG_LOCAL_HTML = 'application/vnd.dtg.local.html';

    /**
     * MIME type 'vnd.dvb.ait'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_AIT = 'application/vnd.dvb.ait';

    /**
     * MIME type 'vnd.dvb.dvbisl+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_DVBISL_XML = 'application/vnd.dvb.dvbisl+xml';

    /**
     * MIME type 'vnd.dvb.dvbj'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_DVBJ = 'application/vnd.dvb.dvbj';

    /**
     * MIME type 'vnd.dvb.esgcontainer'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_ESGCONTAINER = 'application/vnd.dvb.esgcontainer';

    /**
     * MIME type 'vnd.dvb.ipdcdftnotifaccess'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_IPDCDFTNOTIFACCESS = 'application/vnd.dvb.ipdcdftnotifaccess';

    /**
     * MIME type 'vnd.dvb.ipdcesgaccess'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_IPDCESGACCESS = 'application/vnd.dvb.ipdcesgaccess';

    /**
     * MIME type 'vnd.dvb.ipdcesgaccess2'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_IPDCESGACCESS2 = 'application/vnd.dvb.ipdcesgaccess2';

    /**
     * MIME type 'vnd.dvb.ipdcesgpdd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_IPDCESGPDD = 'application/vnd.dvb.ipdcesgpdd';

    /**
     * MIME type 'vnd.dvb.ipdcroaming'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_IPDCROAMING = 'application/vnd.dvb.ipdcroaming';

    /**
     * MIME type 'vnd.dvb.iptv.alfec-base'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_IPTV_ALFEC_BASE = 'application/vnd.dvb.iptv.alfec-base';

    /**
     * MIME type 'vnd.dvb.iptv.alfec-enhancement'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_IPTV_ALFEC_ENHANCEMENT = 'application/vnd.dvb.iptv.alfec-enhancement';

    /**
     * MIME type 'vnd.dvb.notif-aggregate-root+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_NOTIF_AGGREGATE_ROOT_XML = 'application/vnd.dvb.notif-aggregate-root+xml';

    /**
     * MIME type 'vnd.dvb.notif-container+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_NOTIF_CONTAINER_XML = 'application/vnd.dvb.notif-container+xml';

    /**
     * MIME type 'vnd.dvb.notif-generic+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_NOTIF_GENERIC_XML = 'application/vnd.dvb.notif-generic+xml';

    /**
     * MIME type 'vnd.dvb.notif-ia-msglist+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_NOTIF_IA_MSGLIST_XML = 'application/vnd.dvb.notif-ia-msglist+xml';

    /**
     * MIME type 'vnd.dvb.notif-ia-registration-request+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_NOTIF_IA_REGISTRATION_REQUEST_XML = 'application/vnd.dvb.notif-ia-registration-request+xml';

    /**
     * MIME type 'vnd.dvb.notif-ia-registration-response+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_NOTIF_IA_REGISTRATION_RESPONSE_XML = 'application/vnd.dvb.notif-ia-registration-response+xml';

    /**
     * MIME type 'vnd.dvb.notif-init+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_NOTIF_INIT_XML = 'application/vnd.dvb.notif-init+xml';

    /**
     * MIME type 'vnd.dvb.pfr'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_PFR = 'application/vnd.dvb.pfr';

    /**
     * MIME type 'vnd.dvb.service'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DVB_SERVICE = 'application/vnd.dvb.service';

    /**
     * MIME type 'vnd.dxr'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DXR = 'application/vnd.dxr';

    /**
     * MIME type 'vnd.dynageo'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DYNAGEO = 'application/vnd.dynageo';

    /**
     * MIME type 'vnd.dzr'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_DZR = 'application/vnd.dzr';

    /**
     * MIME type 'vnd.easykaraoke.cdgdownload'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EASYKARAOKE_CDGDOWNLOAD = 'application/vnd.easykaraoke.cdgdownload';

    /**
     * MIME type 'vnd.ecip.rlp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECIP_RLP = 'application/vnd.ecip.rlp';

    /**
     * MIME type 'vnd.ecdis-update'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECDIS_UPDATE = 'application/vnd.ecdis-update';

    /**
     * MIME type 'vnd.eclipse.ditto+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECLIPSE_DITTO_JSON = 'application/vnd.eclipse.ditto+json';

    /**
     * MIME type 'vnd.ecowin.chart'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECOWIN_CHART = 'application/vnd.ecowin.chart';

    /**
     * MIME type 'vnd.ecowin.filerequest'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECOWIN_FILEREQUEST = 'application/vnd.ecowin.filerequest';

    /**
     * MIME type 'vnd.ecowin.fileupdate'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECOWIN_FILEUPDATE = 'application/vnd.ecowin.fileupdate';

    /**
     * MIME type 'vnd.ecowin.series'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECOWIN_SERIES = 'application/vnd.ecowin.series';

    /**
     * MIME type 'vnd.ecowin.seriesrequest'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECOWIN_SERIESREQUEST = 'application/vnd.ecowin.seriesrequest';

    /**
     * MIME type 'vnd.ecowin.seriesupdate'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ECOWIN_SERIESUPDATE = 'application/vnd.ecowin.seriesupdate';

    /**
     * MIME type 'vnd.efi.img'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EFI_IMG = 'application/vnd.efi.img';

    /**
     * MIME type 'vnd.efi.iso'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EFI_ISO = 'application/vnd.efi.iso';

    /**
     * MIME type 'vnd.emclient.accessrequest+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EMCLIENT_ACCESSREQUEST_XML = 'application/vnd.emclient.accessrequest+xml';

    /**
     * MIME type 'vnd.enliven'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ENLIVEN = 'application/vnd.enliven';

    /**
     * MIME type 'vnd.enphase.envoy'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ENPHASE_ENVOY = 'application/vnd.enphase.envoy';

    /**
     * MIME type 'vnd.eprints.data+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EPRINTS_DATA_XML = 'application/vnd.eprints.data+xml';

    /**
     * MIME type 'vnd.epson.esf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EPSON_ESF = 'application/vnd.epson.esf';

    /**
     * MIME type 'vnd.epson.msf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EPSON_MSF = 'application/vnd.epson.msf';

    /**
     * MIME type 'vnd.epson.quickanime'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EPSON_QUICKANIME = 'application/vnd.epson.quickanime';

    /**
     * MIME type 'vnd.epson.salt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EPSON_SALT = 'application/vnd.epson.salt';

    /**
     * MIME type 'vnd.epson.ssf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EPSON_SSF = 'application/vnd.epson.ssf';

    /**
     * MIME type 'vnd.ericsson.quickcall'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ERICSSON_QUICKCALL = 'application/vnd.ericsson.quickcall';

    /**
     * MIME type 'vnd.espass-espass+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ESPASS_ESPASS_ZIP = 'application/vnd.espass-espass+zip';

    /**
     * MIME type 'vnd.eszigno3+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ESZIGNO3_XML = 'application/vnd.eszigno3+xml';

    /**
     * MIME type 'vnd.etsi.aoc+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_AOC_XML = 'application/vnd.etsi.aoc+xml';

    /**
     * MIME type 'vnd.etsi.asic-s+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_ASIC_S_ZIP = 'application/vnd.etsi.asic-s+zip';

    /**
     * MIME type 'vnd.etsi.asic-e+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_ASIC_E_ZIP = 'application/vnd.etsi.asic-e+zip';

    /**
     * MIME type 'vnd.etsi.cug+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_CUG_XML = 'application/vnd.etsi.cug+xml';

    /**
     * MIME type 'vnd.etsi.iptvcommand+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVCMD_XML = 'application/vnd.etsi.iptvcommand+xml';

    /**
     * MIME type 'vnd.etsi.iptvdiscovery+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVDISCOVERY_XML = 'application/vnd.etsi.iptvdiscovery+xml';

    /**
     * MIME type 'vnd.etsi.iptvprofile+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVPROFILE_XML = 'application/vnd.etsi.iptvprofile+xml';

    /**
     * MIME type 'vnd.etsi.iptvsad-bc+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVSAD_BC_XML = 'application/vnd.etsi.iptvsad-bc+xml';

    /**
     * MIME type 'vnd.etsi.iptvsad-cod+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVSAD_COD_XML = 'application/vnd.etsi.iptvsad-cod+xml';

    /**
     * MIME type 'vnd.etsi.iptvsad-npvr+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVSAD_NPVR_XML = 'application/vnd.etsi.iptvsad-npvr+xml';

    /**
     * MIME type 'vnd.etsi.iptvservice+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVSERVICE_XML = 'application/vnd.etsi.iptvservice+xml';

    /**
     * MIME type 'vnd.etsi.iptvsync+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVSYNC_XML = 'application/vnd.etsi.iptvsync+xml';

    /**
     * MIME type 'vnd.etsi.iptvueprofile+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_IPTVUEPROFILE_XML = 'application/vnd.etsi.iptvueprofile+xml';

    /**
     * MIME type 'vnd.etsi.mcid+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_MCID_XML = 'application/vnd.etsi.mcid+xml';

    /**
     * MIME type 'vnd.etsi.mheg5'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_MHEG5 = 'application/vnd.etsi.mheg5';

    /**
     * MIME type 'vnd.etsi.overload-control-policy-dataset+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_OVERLOAD_CONTROL_POLICY_DATASET_XML = 'application/vnd.etsi.overload-control-policy-dataset+xml';

    /**
     * MIME type 'vnd.etsi.pstn+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_PSTN_XML = 'application/vnd.etsi.pstn+xml';

    /**
     * MIME type 'vnd.etsi.sci+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_SCI_XML = 'application/vnd.etsi.sci+xml';

    /**
     * MIME type 'vnd.etsi.simservs+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_SIMSERVS_XML = 'application/vnd.etsi.simservs+xml';

    /**
     * MIME type 'vnd.etsi.timestamp-token'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_TIMESTAMP_TOKEN = 'application/vnd.etsi.timestamp-token';

    /**
     * MIME type 'vnd.etsi.tsl+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_TSL_XML = 'application/vnd.etsi.tsl+xml';

    /**
     * MIME type 'vnd.etsi.tsl.der'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ETSI_TSL_DER = 'application/vnd.etsi.tsl.der';

    /**
     * MIME type 'vnd.eu.kasparian.car+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EU_KASPARIAN_CAR_JSON = 'application/vnd.eu.kasparian.car+json';

    /**
     * MIME type 'vnd.eudora.data'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EUDORA_DATA = 'application/vnd.eudora.data';

    /**
     * MIME type 'vnd.evolv.ecig.profile'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EVOLV_ECIG_PROFILE = 'application/vnd.evolv.ecig.profile';

    /**
     * MIME type 'vnd.evolv.ecig.settings'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EVOLV_ECIG_SETTINGS = 'application/vnd.evolv.ecig.settings';

    /**
     * MIME type 'vnd.evolv.ecig.theme'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EVOLV_ECIG_THEME = 'application/vnd.evolv.ecig.theme';

    /**
     * MIME type 'vnd.exstream-empower+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EXSTREAM_EMPOWER_ZIP = 'application/vnd.exstream-empower+zip';

    /**
     * MIME type 'vnd.exstream-package'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EXSTREAM_PACKAGE = 'application/vnd.exstream-package';

    /**
     * MIME type 'vnd.ezpix-album'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EZPIX_ALBUM = 'application/vnd.ezpix-album';

    /**
     * MIME type 'vnd.ezpix-package'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_EZPIX_PACKAGE = 'application/vnd.ezpix-package';

    /**
     * MIME type 'vnd.f-secure.mobile'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_F_SECURE_MOBILE = 'application/vnd.f-secure.mobile';

    /**
     * MIME type 'vnd.fastcopy-disk-image'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FASTCOPY_DISK_IMG = 'application/vnd.fastcopy-disk-image';

    /**
     * MIME type 'vnd.familysearch.gedcom+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FAMILYSEARCH_GEDCOM_ZIP = 'application/vnd.familysearch.gedcom+zip';

    /**
     * MIME type 'vnd.fdf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FDF = 'application/vnd.fdf';

    /**
     * MIME type 'vnd.fdsn.mseed'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FDSN_MSEED = 'application/vnd.fdsn.mseed';

    /**
     * MIME type 'vnd.fdsn.seed'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FDSN_SEED = 'application/vnd.fdsn.seed';

    /**
     * MIME type 'vnd.ffsns'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FFSNS = 'application/vnd.ffsns';

    /**
     * MIME type 'vnd.ficlab.flb+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FICLAB_FLB_ZIP = 'application/vnd.ficlab.flb+zip';

    /**
     * MIME type 'vnd.filmit.zfc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FILMIT_ZFC = 'application/vnd.filmit.zfc';

    /**
     * MIME type 'vnd.fints'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FINTS = 'application/vnd.fints';

    /**
     * MIME type 'vnd.firemonkeys.cloudcell'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FIREMONKEYS_CLOUDCELL = 'application/vnd.firemonkeys.cloudcell';

    /**
     * MIME type 'vnd.FloGraphIt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FLOGRAPHIT = 'application/vnd.FloGraphIt';

    /**
     * MIME type 'vnd.fluxtime.clip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FLUXTIME_CLIP = 'application/vnd.fluxtime.clip';

    /**
     * MIME type 'vnd.font-fontforge-sfd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FONT_FONTFORGE_SFD = 'application/vnd.font-fontforge-sfd';

    /**
     * MIME type 'vnd.framemaker'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FRAMEMAKER = 'application/vnd.framemaker';

    /**
     * MIME type 'vnd.frogans.fnc'
     *
     * Standards: -
     *
     * @var string
     * @deprecated Obsolete type
     */
    public const VND_FROGANS_FNC = 'application/vnd.frogans.fnc';

    /**
     * MIME type 'vnd.frogans.ltf'
     *
     * Standards: -
     *
     * @var string
     * @deprecated Obsolete type
     */
    public const VND_FROGANS_LTF = 'application/vnd.frogans.ltf';

    /**
     * MIME type 'vnd.fsc.weblaunch'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FSC_WEBLAUNCH = 'application/vnd.fsc.weblaunch';

    /**
     * MIME type 'vnd.fujifilm.fb.docuworks'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIFILM_FB_DOCUWORKS = 'application/vnd.fujifilm.fb.docuworks';

    /**
     * MIME type 'vnd.fujifilm.fb.docuworks.binder'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIFILM_FB_DOCUWORKS_BINDER = 'application/vnd.fujifilm.fb.docuworks.binder';

    /**
     * MIME type 'vnd.fujifilm.fb.docuworks.container'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIFILM_FB_DOCUWORKS_CONTAINER = 'application/vnd.fujifilm.fb.docuworks.container';

    /**
     * MIME type 'vnd.fujifilm.fb.jfi+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIFILM_FB_JFI_XML = 'application/vnd.fujifilm.fb.jfi+xml';

    /**
     * MIME type 'vnd.fujitsu.oasys'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJITSU_OASYS = 'application/vnd.fujitsu.oasys';

    /**
     * MIME type 'vnd.fujitsu.oasys2'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJITSU_OASYS2 = 'application/vnd.fujitsu.oasys2';

    /**
     * MIME type 'vnd.fujitsu.oasys3'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJITSU_OASYS3 = 'application/vnd.fujitsu.oasys3';

    /**
     * MIME type 'vnd.fujitsu.oasysgp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJITSU_OASYSGP = 'application/vnd.fujitsu.oasysgp';

    /**
     * MIME type 'vnd.fujitsu.oasysprs'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJITSU_OASYSPRS = 'application/vnd.fujitsu.oasysprs';

    /**
     * MIME type 'vnd.fujixerox.ART4'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIXEROX_ART4 = 'application/vnd.fujixerox.ART4';

    /**
     * MIME type 'vnd.fujixerox.ART-EX'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIXEROX_ART_EX = 'application/vnd.fujixerox.ART-EX';

    /**
     * MIME type 'vnd.fujixerox.ddd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIXEROX_DDD = 'application/vnd.fujixerox.ddd';

    /**
     * MIME type 'vnd.fujixerox.docuworks'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIXEROX_DOCUWORKS = 'application/vnd.fujixerox.docuworks';

    /**
     * MIME type 'vnd.fujixerox.docuworks.binder'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIXEROX_DOCUWORKS_BINDER = 'application/vnd.fujixerox.docuworks.binder';

    /**
     * MIME type 'vnd.fujixerox.docuworks.container'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIXEROX_DOCUWORKS_CONTAINER = 'application/vnd.fujixerox.docuworks.container';

    /**
     * MIME type 'vnd.fujixerox.HBPL'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUJIXEROX_HBPL = 'application/vnd.fujixerox.HBPL';

    /**
     * MIME type 'vnd.fut-misnet'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUT_MISNET = 'application/vnd.fut-misnet';

    /**
     * MIME type 'vnd.futoin+cbor'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUTOIN_CBOR = 'application/vnd.futoin+cbor';

    /**
     * MIME type 'vnd.futoin+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUTOIN_JSON = 'application/vnd.futoin+json';

    /**
     * MIME type 'vnd.fuzzysheet'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_FUZZYSHEET = 'application/vnd.fuzzysheet';

    /**
     * MIME type 'vnd.genomatix.tuxedo'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GENOMATIX_TUXEDO = 'application/vnd.genomatix.tuxedo';

    /**
     * MIME type 'vnd.gentics.grd+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GENTICS_GRD_JSON = 'application/vnd.gentics.grd+json';

    /**
     * MIME type 'vnd.geo+json'
     *
     * Standards: -
     *
     * @var string
     * @deprecated by [RFC7946] in favor of application/geo+json
     */
    public const VND_GEO_JSON = 'application/vnd.geo+json';

    /**
     * MIME type 'vnd.geocube+xml'
     *
     * Standards: -
     *
     * @var string
     * @deprecated by request
     */
    public const VND_GEOCUBE_XML = 'application/vnd.geocube+xml';

    /**
     * MIME type 'vnd.geogebra.file'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GEOGEBRA_FILE = 'application/vnd.geogebra.file';

    /**
     * MIME type 'vnd.geogebra.slides'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GEOGEBRA_SLIDES = 'application/vnd.geogebra.slides';

    /**
     * MIME type 'vnd.geogebra.tool'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GEOGEBRA_TOOL = 'application/vnd.geogebra.tool';

    /**
     * MIME type 'vnd.geometry-explorer'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GEOMETRY_EXPLORER = 'application/vnd.geometry-explorer';

    /**
     * MIME type 'vnd.geonext'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GEONEXT = 'application/vnd.geonext';

    /**
     * MIME type 'vnd.geoplan'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GEOPLAN = 'application/vnd.geoplan';

    /**
     * MIME type 'vnd.geospace'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GEOSPACE = 'application/vnd.geospace';

    /**
     * MIME type 'vnd.gerber'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GERBER = 'application/vnd.gerber';

    /**
     * MIME type 'vnd.globalplatform.card-content-mgt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GLOBALPLATFORM_CARD_CONTENT_MGT = 'application/vnd.globalplatform.card-content-mgt';

    /**
     * MIME type 'vnd.globalplatform.card-content-mgt-response'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GLOBALPLATFORM_CARD_CONTENT_MGT_RESPONSE = 'application/vnd.globalplatform.card-content-mgt-response';

    /**
     * MIME type 'vnd.gmx'
     *
     * Deprecated
     *
     * Standards: -
     *
     * @var string
     * @deprecated
     */
    public const VND_GMX = 'application/vnd.gmx';

    /**
     * MIME type 'vnd.gnu.taler.exchange+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GNU_TALER_EXCHANGE_JSON = 'application/vnd.gnu.taler.exchange+json';

    /**
     * MIME type 'vnd.gnu.taler.merchant+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GNU_TALER_MERCHANT_JSON = 'application/vnd.gnu.taler.merchant+json';

    /**
     * MIME type 'vnd.google-earth.kml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GOOGLE_EARTH_KML_XML = 'application/vnd.google-earth.kml+xml';

    /**
     * MIME type 'vnd.google-earth.kmz'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GOOGLE_EARTH_KMZ = 'application/vnd.google-earth.kmz';

    /**
     * MIME type 'vnd.gov.sk.e-form+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GOV_SK_E_FORM_XML = 'application/vnd.gov.sk.e-form+xml';

    /**
     * MIME type 'vnd.gov.sk.e-form+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GOV_SK_E_FORM_ZIP = 'application/vnd.gov.sk.e-form+zip';

    /**
     * MIME type 'vnd.gov.sk.xmldatacontainer+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GOV_SK_XMLDATACONTAINER_XML = 'application/vnd.gov.sk.xmldatacontainer+xml';

    /**
     * MIME type 'vnd.grafeq'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GRAFEQ = 'application/vnd.grafeq';

    /**
     * MIME type 'vnd.gridmp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GRIDMP = 'application/vnd.gridmp';

    /**
     * MIME type 'vnd.groove-account'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GROOVE_ACCOUNT = 'application/vnd.groove-account';

    /**
     * MIME type 'vnd.groove-help'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GROOVE_HELP = 'application/vnd.groove-help';

    /**
     * MIME type 'vnd.groove-identity-message'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GROOVE_IDENTITY_MESSAGE = 'application/vnd.groove-identity-message';

    /**
     * MIME type 'vnd.groove-injector'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GROOVE_INJECTOR = 'application/vnd.groove-injector';

    /**
     * MIME type 'vnd.groove-tool-message'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GROOVE_TOOL_MESSAGE = 'application/vnd.groove-tool-message';

    /**
     * MIME type 'vnd.groove-tool-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GROOVE_TOOL_TPL = 'application/vnd.groove-tool-template';

    /**
     * MIME type 'vnd.groove-vcard'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_GROOVE_VCARD = 'application/vnd.groove-vcard';

    /**
     * MIME type 'vnd.hal+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HAL_JSON = 'application/vnd.hal+json';

    /**
     * MIME type 'vnd.hal+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HAL_XML = 'application/vnd.hal+xml';

    /**
     * MIME type 'vnd.HandHeld-Entertainment+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HANDHELD_ENTERTAINMENT_XML = 'application/vnd.HandHeld-Entertainment+xml';

    /**
     * MIME type 'vnd.hbci'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HBCI = 'application/vnd.hbci';

    /**
     * MIME type 'vnd.hc+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HC_JSON = 'application/vnd.hc+json';

    /**
     * MIME type 'vnd.hcl-bireports'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HCL_BIREPORTS = 'application/vnd.hcl-bireports';

    /**
     * MIME type 'vnd.hdt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HDT = 'application/vnd.hdt';

    /**
     * MIME type 'vnd.heroku+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HEROKU_JSON = 'application/vnd.heroku+json';

    /**
     * MIME type 'vnd.hhe.lesson-player'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HHE_LESSON_PLAYER = 'application/vnd.hhe.lesson-player';

    /**
     * MIME type 'vnd.hl7cda+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HL7CDA_XML = 'application/vnd.hl7cda+xml';

    /**
     * MIME type 'vnd.hl7v2+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HL7V2_XML = 'application/vnd.hl7v2+xml';

    /**
     * MIME type 'vnd.hp-HPGL'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HP_HPGL = 'application/vnd.hp-HPGL';

    /**
     * MIME type 'vnd.hp-hpid'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HP_HPID = 'application/vnd.hp-hpid';

    /**
     * MIME type 'vnd.hp-hps'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HP_HPS = 'application/vnd.hp-hps';

    /**
     * MIME type 'vnd.hp-jlyt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HP_JLYT = 'application/vnd.hp-jlyt';

    /**
     * MIME type 'vnd.hp-PCL'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HP_PCL = 'application/vnd.hp-PCL';

    /**
     * MIME type 'vnd.hp-PCLXL'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HP_PCLXL = 'application/vnd.hp-PCLXL';

    /**
     * MIME type 'vnd.httphone'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HTTPHONE = 'application/vnd.httphone';

    /**
     * MIME type 'vnd.hydrostatix.sof-data'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HYDROSTATIX_SOF_DATA = 'application/vnd.hydrostatix.sof-data';

    /**
     * MIME type 'vnd.hyper-item+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HYPER_ITEM_JSON = 'application/vnd.hyper-item+json';

    /**
     * MIME type 'vnd.hyper+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HYPER_JSON = 'application/vnd.hyper+json';

    /**
     * MIME type 'vnd.hyperdrive+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HYPERDRIVE_JSON = 'application/vnd.hyperdrive+json';

    /**
     * MIME type 'vnd.hzn-3d-crossword'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_HZN_3D_CROSSWORD = 'application/vnd.hzn-3d-crossword';

    /**
     * MIME type 'vnd.ibm.afplinedata'
     *
     * Standards: -
     *
     * @var string
     * @deprecated in favor of vnd.afpc.afplinedata
     */
    public const VND_IBM_AFPLINEDATA = 'application/vnd.ibm.afplinedata';

    /**
     * MIME type 'vnd.ibm.electronic-media'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IBM_ELECTRONIC_MEDIA = 'application/vnd.ibm.electronic-media';

    /**
     * MIME type 'vnd.ibm.MiniPay'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IBM_MINIPAY = 'application/vnd.ibm.MiniPay';

    /**
     * MIME type 'vnd.ibm.modcap'
     *
     * Standards: -
     *
     * @var string
     * @deprecated in favor of application/vnd.afpc.modca
     */
    public const VND_IBM_MODCAP = 'application/vnd.ibm.modcap';

    /**
     * MIME type 'vnd.ibm.rights-management'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IBM_RIGHTS_MANAGEMENT = 'application/vnd.ibm.rights-management';

    /**
     * MIME type 'vnd.ibm.secure-container'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IBM_SECURE_CONTAINER = 'application/vnd.ibm.secure-container';

    /**
     * MIME type 'vnd.iccprofile'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ICCPROFILE = 'application/vnd.iccprofile';

    /**
     * MIME type 'vnd.ieee.1905'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IEEE_1905 = 'application/vnd.ieee.1905';

    /**
     * MIME type 'vnd.igloader'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IGLOADER = 'application/vnd.igloader';

    /**
     * MIME type 'vnd.imagemeter.folder+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMAGEMETER_FOLDER_ZIP = 'application/vnd.imagemeter.folder+zip';

    /**
     * MIME type 'vnd.imagemeter.image+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMAGEMETER_IMG_ZIP = 'application/vnd.imagemeter.image+zip';

    /**
     * MIME type 'vnd.immervision-ivp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMMERVISION_IVP = 'application/vnd.immervision-ivp';

    /**
     * MIME type 'vnd.immervision-ivu'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMMERVISION_IVU = 'application/vnd.immervision-ivu';

    /**
     * MIME type 'vnd.ims.imsccv1p1'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_IMSCCV1P1 = 'application/vnd.ims.imsccv1p1';

    /**
     * MIME type 'vnd.ims.imsccv1p2'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_IMSCCV1P2 = 'application/vnd.ims.imsccv1p2';

    /**
     * MIME type 'vnd.ims.imsccv1p3'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_IMSCCV1P3 = 'application/vnd.ims.imsccv1p3';

    /**
     * MIME type 'vnd.ims.lis.v2.result+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_LIS_V2_RESULT_JSON = 'application/vnd.ims.lis.v2.result+json';

    /**
     * MIME type 'vnd.ims.lti.v2.toolconsumerprofile+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_LTI_V2_TOOLCONSUMERPROFILE_JSON = 'application/vnd.ims.lti.v2.toolconsumerprofile+json';

    /**
     * MIME type 'vnd.ims.lti.v2.toolproxy.id+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_LTI_V2_TOOLPROXY_ID_JSON = 'application/vnd.ims.lti.v2.toolproxy.id+json';

    /**
     * MIME type 'vnd.ims.lti.v2.toolproxy+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_LTI_V2_TOOLPROXY_JSON = 'application/vnd.ims.lti.v2.toolproxy+json';

    /**
     * MIME type 'vnd.ims.lti.v2.toolsettings+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_LTI_V2_TOOLSETTINGS_JSON = 'application/vnd.ims.lti.v2.toolsettings+json';

    /**
     * MIME type 'vnd.ims.lti.v2.toolsettings.simple+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IMS_LTI_V2_TOOLSETTINGS_SIMPLE_JSON = 'application/vnd.ims.lti.v2.toolsettings.simple+json';

    /**
     * MIME type 'vnd.informedcontrol.rms+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INFORMEDCONTROL_RMS_XML = 'application/vnd.informedcontrol.rms+xml';

    /**
     * MIME type 'vnd.infotech.project'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INFOTECH_PROJECT = 'application/vnd.infotech.project';

    /**
     * MIME type 'vnd.infotech.project+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INFOTECH_PROJECT_XML = 'application/vnd.infotech.project+xml';

    /**
     * MIME type 'vnd.informix-visionary'
     *
     * Standards: -
     *
     * @var string
     * @deprecated in favor of application/vnd.visionary
     */
    public const VND_INFORMIX_VISIONARY = 'application/vnd.informix-visionary';

    /**
     * MIME type 'vnd.innopath.wamp.notification'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INNOPATH_WAMP_NOTIFICATION = 'application/vnd.innopath.wamp.notification';

    /**
     * MIME type 'vnd.insors.igm'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INSORS_IGM = 'application/vnd.insors.igm';

    /**
     * MIME type 'vnd.intercon.formnet'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INTERCON_FORMNET = 'application/vnd.intercon.formnet';

    /**
     * MIME type 'vnd.intergeo'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INTERGEO = 'application/vnd.intergeo';

    /**
     * MIME type 'vnd.intertrust.digibox'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INTERTRUST_DIGIBOX = 'application/vnd.intertrust.digibox';

    /**
     * MIME type 'vnd.intertrust.nncp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INTERTRUST_NNCP = 'application/vnd.intertrust.nncp';

    /**
     * MIME type 'vnd.intu.qbo'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INTU_QBO = 'application/vnd.intu.qbo';

    /**
     * MIME type 'vnd.intu.qfx'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_INTU_QFX = 'application/vnd.intu.qfx';

    /**
     * MIME type 'vnd.iptc.g2.catalogitem+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_G2_CATALOGITEM_XML = 'application/vnd.iptc.g2.catalogitem+xml';

    /**
     * MIME type 'vnd.iptc.g2.conceptitem+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_G2_CONCEPTITEM_XML = 'application/vnd.iptc.g2.conceptitem+xml';

    /**
     * MIME type 'vnd.iptc.g2.knowledgeitem+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_G2_KNOWLEDGEITEM_XML = 'application/vnd.iptc.g2.knowledgeitem+xml';

    /**
     * MIME type 'vnd.iptc.g2.newsitem+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_G2_NEWSITEM_XML = 'application/vnd.iptc.g2.newsitem+xml';

    /**
     * MIME type 'vnd.iptc.g2.newsmessage+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_G2_NEWSMESSAGE_XML = 'application/vnd.iptc.g2.newsmessage+xml';

    /**
     * MIME type 'vnd.iptc.g2.packageitem+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_G2_PACKAGEITEM_XML = 'application/vnd.iptc.g2.packageitem+xml';

    /**
     * MIME type 'vnd.iptc.g2.planningitem+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPTC_G2_PLANNINGITEM_XML = 'application/vnd.iptc.g2.planningitem+xml';

    /**
     * MIME type 'vnd.ipunplugged.rcprofile'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IPUNPLUGGED_RCPROFILE = 'application/vnd.ipunplugged.rcprofile';

    /**
     * MIME type 'vnd.irepository.package+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IREPOSITORY_PACKAGE_XML = 'application/vnd.irepository.package+xml';

    /**
     * MIME type 'vnd.is-xpr'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_IS_XPR = 'application/vnd.is-xpr';

    /**
     * MIME type 'vnd.isac.fcs'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ISAC_FCS = 'application/vnd.isac.fcs';

    /**
     * MIME type 'vnd.jam'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAM = 'application/vnd.jam';

    /**
     * MIME type 'vnd.iso11783-10+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ISO11783_10_ZIP = 'application/vnd.iso11783-10+zip';

    /**
     * MIME type 'vnd.japannet-directory-service'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAPANNET_DIRECTORY_SERVICE = 'application/vnd.japannet-directory-service';

    /**
     * MIME type 'vnd.japannet-jpnstore-wakeup'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAPANNET_JPNSTORE_WAKEUP = 'application/vnd.japannet-jpnstore-wakeup';

    /**
     * MIME type 'vnd.japannet-payment-wakeup'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAPANNET_PAYMENT_WAKEUP = 'application/vnd.japannet-payment-wakeup';

    /**
     * MIME type 'vnd.japannet-registration'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAPANNET_REGISTRATION = 'application/vnd.japannet-registration';

    /**
     * MIME type 'vnd.japannet-registration-wakeup'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAPANNET_REGISTRATION_WAKEUP = 'application/vnd.japannet-registration-wakeup';

    /**
     * MIME type 'vnd.japannet-setstore-wakeup'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAPANNET_SETSTORE_WAKEUP = 'application/vnd.japannet-setstore-wakeup';

    /**
     * MIME type 'vnd.japannet-verification'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAPANNET_VERIFICATION = 'application/vnd.japannet-verification';

    /**
     * MIME type 'vnd.japannet-verification-wakeup'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JAPANNET_VERIFICATION_WAKEUP = 'application/vnd.japannet-verification-wakeup';

    /**
     * MIME type 'vnd.jcp.javame.midlet-rms'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JCP_JAVAME_MIDLET_RMS = 'application/vnd.jcp.javame.midlet-rms';

    /**
     * MIME type 'vnd.jisp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JISP = 'application/vnd.jisp';

    /**
     * MIME type 'vnd.joost.joda-archive'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JOOST_JODA_ARCHIVE = 'application/vnd.joost.joda-archive';

    /**
     * MIME type 'vnd.jsk.isdn-ngn'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_JSK_ISDN_NGN = 'application/vnd.jsk.isdn-ngn';

    /**
     * MIME type 'vnd.kahootz'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KAHOOTZ = 'application/vnd.kahootz';

    /**
     * MIME type 'vnd.kde.karbon'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KDE_KARBON = 'application/vnd.kde.karbon';

    /**
     * MIME type 'vnd.kde.kchart'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KDE_KCHART = 'application/vnd.kde.kchart';

    /**
     * MIME type 'vnd.kde.kformula'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KDE_KFORMULA = 'application/vnd.kde.kformula';

    /**
     * MIME type 'vnd.kde.kivio'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KDE_KIVIO = 'application/vnd.kde.kivio';

    /**
     * MIME type 'vnd.kde.kontour'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KDE_KONTOUR = 'application/vnd.kde.kontour';

    /**
     * MIME type 'vnd.kde.kpresenter'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KDE_KPRESENTER = 'application/vnd.kde.kpresenter';

    /**
     * MIME type 'vnd.kde.kspread'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KDE_KSPREAD = 'application/vnd.kde.kspread';

    /**
     * MIME type 'vnd.kde.kword'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KDE_KWORD = 'application/vnd.kde.kword';

    /**
     * MIME type 'vnd.kenameaapp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KENAMEAAPP = 'application/vnd.kenameaapp';

    /**
     * MIME type 'vnd.kidspiration'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KIDSPIRATION = 'application/vnd.kidspiration';

    /**
     * MIME type 'vnd.Kinar'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KINAR = 'application/vnd.Kinar';

    /**
     * MIME type 'vnd.koan'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KOAN = 'application/vnd.koan';

    /**
     * MIME type 'vnd.kodak-descriptor'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_KODAK_DESCRIPTOR = 'application/vnd.kodak-descriptor';

    /**
     * MIME type 'vnd.las'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LAS = 'application/vnd.las';

    /**
     * MIME type 'vnd.las.las+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LAS_LAS_JSON = 'application/vnd.las.las+json';

    /**
     * MIME type 'vnd.las.las+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LAS_LAS_XML = 'application/vnd.las.las+xml';

    /**
     * MIME type 'vnd.laszip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LASZIP = 'application/vnd.laszip';

    /**
     * MIME type 'vnd.leap+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LEAP_JSON = 'application/vnd.leap+json';

    /**
     * MIME type 'vnd.liberty-request+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LIBERTY_REQUEST_XML = 'application/vnd.liberty-request+xml';

    /**
     * MIME type 'vnd.llamagraphics.life-balance.desktop'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LLAMAGRAPHICS_LIFE_BALANCE_DESKTOP = 'application/vnd.llamagraphics.life-balance.desktop';

    /**
     * MIME type 'vnd.llamagraphics.life-balance.exchange+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LLAMAGRAPHICS_LIFE_BALANCE_EXCHANGE_XML = 'application/vnd.llamagraphics.life-balance.exchange+xml';

    /**
     * MIME type 'vnd.logipipe.circuit+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOGIPIPE_CIRCUIT_ZIP = 'application/vnd.logipipe.circuit+zip';

    /**
     * MIME type 'vnd.loom'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOOM = 'application/vnd.loom';

    /**
     * MIME type 'vnd.lotus-1-2-3'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOTUS_1_2_3 = 'application/vnd.lotus-1-2-3';

    /**
     * MIME type 'vnd.lotus-approach'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOTUS_APPROACH = 'application/vnd.lotus-approach';

    /**
     * MIME type 'vnd.lotus-freelance'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOTUS_FREELANCE = 'application/vnd.lotus-freelance';

    /**
     * MIME type 'vnd.lotus-notes'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOTUS_NOTES = 'application/vnd.lotus-notes';

    /**
     * MIME type 'vnd.lotus-organizer'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOTUS_ORGANIZER = 'application/vnd.lotus-organizer';

    /**
     * MIME type 'vnd.lotus-screencam'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOTUS_SCREENCAM = 'application/vnd.lotus-screencam';

    /**
     * MIME type 'vnd.lotus-wordpro'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_LOTUS_WORDPRO = 'application/vnd.lotus-wordpro';

    /**
     * MIME type 'vnd.macports.portpkg'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MACPORTS_PORTPKG = 'application/vnd.macports.portpkg';

    /**
     * MIME type 'vnd.mapbox-vector-tile'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MAPBOX_VECTOR_TILE = 'application/vnd.mapbox-vector-tile';

    /**
     * MIME type 'vnd.marlin.drm.actiontoken+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MARLIN_DRM_ACTIONTOKEN_XML = 'application/vnd.marlin.drm.actiontoken+xml';

    /**
     * MIME type 'vnd.marlin.drm.conftoken+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MARLIN_DRM_CONFTOKEN_XML = 'application/vnd.marlin.drm.conftoken+xml';

    /**
     * MIME type 'vnd.marlin.drm.license+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MARLIN_DRM_LICENSE_XML = 'application/vnd.marlin.drm.license+xml';

    /**
     * MIME type 'vnd.marlin.drm.mdcf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MARLIN_DRM_MDCF = 'application/vnd.marlin.drm.mdcf';

    /**
     * MIME type 'vnd.mason+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MASON_JSON = 'application/vnd.mason+json';

    /**
     * MIME type 'vnd.maxar.archive.3tz+zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MAXAR_ARCHIVE_3TZ_ZIP = 'application/vnd.maxar.archive.3tz+zip';

    /**
     * MIME type 'vnd.maxmind.maxmind-db'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MAXMIND_MAXMIND_DB = 'application/vnd.maxmind.maxmind-db';

    /**
     * MIME type 'vnd.mcd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MCD = 'application/vnd.mcd';

    /**
     * MIME type 'vnd.medcalcdata'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MEDCALCDATA = 'application/vnd.medcalcdata';

    /**
     * MIME type 'vnd.mediastation.cdkey'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MEDIASTATION_CDKEY = 'application/vnd.mediastation.cdkey';

    /**
     * MIME type 'vnd.meridian-slingshot'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MERIDIAN_SLINGSHOT = 'application/vnd.meridian-slingshot';

    /**
     * MIME type 'vnd.MFER'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MFER = 'application/vnd.MFER';

    /**
     * MIME type 'vnd.mfmp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MFMP = 'application/vnd.mfmp';

    /**
     * MIME type 'vnd.micro+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MICRO_JSON = 'application/vnd.micro+json';

    /**
     * MIME type 'vnd.micrografx.flo'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MICROGRAFX_FLO = 'application/vnd.micrografx.flo';

    /**
     * MIME type 'vnd.micrografx.igx'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MICROGRAFX_IGX = 'application/vnd.micrografx.igx';

    /**
     * MIME type 'vnd.microsoft.portable-executable'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_PORTABLE_EXE = 'application/vnd.microsoft.portable-executable';

    /**
     * MIME type 'vnd.microsoft.windows.thumbnail-cache'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WINDOWS_THUMBNAIL_CACHE = 'application/vnd.microsoft.windows.thumbnail-cache';

    /**
     * MIME type 'vnd.miele+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MIELE_JSON = 'application/vnd.miele+json';

    /**
     * MIME type 'vnd.mif'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MIF = 'application/vnd.mif';

    /**
     * MIME type 'vnd.minisoft-hp3000-save'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MINISOFT_HP3000_SAVE = 'application/vnd.minisoft-hp3000-save';

    /**
     * MIME type 'vnd.mitsubishi.misty-guard.trustweb'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MITSUBISHI_MISTY_GUARD_TRUSTWEB = 'application/vnd.mitsubishi.misty-guard.trustweb';

    /**
     * MIME type 'vnd.Mobius.DAF'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOBIUS_DAF = 'application/vnd.Mobius.DAF';

    /**
     * MIME type 'vnd.Mobius.DIS'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOBIUS_DIS = 'application/vnd.Mobius.DIS';

    /**
     * MIME type 'vnd.Mobius.MBK'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOBIUS_MBK = 'application/vnd.Mobius.MBK';

    /**
     * MIME type 'vnd.Mobius.MQY'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOBIUS_MQY = 'application/vnd.Mobius.MQY';

    /**
     * MIME type 'vnd.Mobius.MSL'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOBIUS_MSL = 'application/vnd.Mobius.MSL';

    /**
     * MIME type 'vnd.Mobius.PLC'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOBIUS_PLC = 'application/vnd.Mobius.PLC';

    /**
     * MIME type 'vnd.Mobius.TXF'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOBIUS_TXF = 'application/vnd.Mobius.TXF';

    /**
     * MIME type 'vnd.mophun.application'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOPHUN_APPLICATION = 'application/vnd.mophun.application';

    /**
     * MIME type 'vnd.mophun.certificate'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOPHUN_CERTIFICATE = 'application/vnd.mophun.certificate';

    /**
     * MIME type 'vnd.motorola.flexsuite'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_FLEXSUITE = 'application/vnd.motorola.flexsuite';

    /**
     * MIME type 'vnd.motorola.flexsuite.adsi'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_FLEXSUITE_ADSI = 'application/vnd.motorola.flexsuite.adsi';

    /**
     * MIME type 'vnd.motorola.flexsuite.fis'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_FLEXSUITE_FIS = 'application/vnd.motorola.flexsuite.fis';

    /**
     * MIME type 'vnd.motorola.flexsuite.gotap'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_FLEXSUITE_GOTAP = 'application/vnd.motorola.flexsuite.gotap';

    /**
     * MIME type 'vnd.motorola.flexsuite.kmr'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_FLEXSUITE_KMR = 'application/vnd.motorola.flexsuite.kmr';

    /**
     * MIME type 'vnd.motorola.flexsuite.ttc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_FLEXSUITE_TTC = 'application/vnd.motorola.flexsuite.ttc';

    /**
     * MIME type 'vnd.motorola.flexsuite.wem'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_FLEXSUITE_WEM = 'application/vnd.motorola.flexsuite.wem';

    /**
     * MIME type 'vnd.motorola.iprm'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOTOROLA_IPRM = 'application/vnd.motorola.iprm';

    /**
     * MIME type 'vnd.mozilla.xul+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MOZILLA_XUL_XML = 'application/vnd.mozilla.xul+xml';

    /**
     * MIME type 'vnd.ms-artgalry'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_ARTGALRY = 'application/vnd.ms-artgalry';

    /**
     * MIME type 'vnd.ms-asf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_ASF = 'application/vnd.ms-asf';

    /**
     * MIME type 'vnd.ms-cab-compressed'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_CAB_COMPRESSED = 'application/vnd.ms-cab-compressed';

    /**
     * MIME type 'vnd.ms-3mfdocument'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_3MFDOC = 'application/vnd.ms-3mfdocument';

    /**
     * MIME type 'vnd.ms-excel'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_EXCEL = 'application/vnd.ms-excel';

    /**
     * MIME type 'vnd.ms-excel.addin.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_EXCEL_ADDIN_MACRO_12 = 'application/vnd.ms-excel.addin.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-excel.sheet.binary.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_EXCEL_SHEET_BIN_MACRO_12 = 'application/vnd.ms-excel.sheet.binary.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-excel.sheet.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_EXCEL_SHEET_MACRO_12 = 'application/vnd.ms-excel.sheet.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-excel.template.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_EXCEL_TPL_MACRO_12 = 'application/vnd.ms-excel.template.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-fontobject'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_FONTOBJECT = 'application/vnd.ms-fontobject';

    /**
     * MIME type 'vnd.ms-htmlhelp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_HTMLHELP = 'application/vnd.ms-htmlhelp';

    /**
     * MIME type 'vnd.ms-ims'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_IMS = 'application/vnd.ms-ims';

    /**
     * MIME type 'vnd.ms-lrm'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_LRM = 'application/vnd.ms-lrm';

    /**
     * MIME type 'vnd.ms-office.activeX+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_OFFICE_ACTIVEX_XML = 'application/vnd.ms-office.activeX+xml';

    /**
     * MIME type 'vnd.ms-officetheme'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_OFFICETHEME = 'application/vnd.ms-officetheme';

    /**
     * MIME type 'vnd.ms-playready.initiator+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_PLAYREADY_INITIATOR_XML = 'application/vnd.ms-playready.initiator+xml';

    /**
     * MIME type 'vnd.ms-powerpoint'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_POWERPOINT = 'application/vnd.ms-powerpoint';

    /**
     * MIME type 'vnd.ms-powerpoint.addin.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_POWERPOINT_ADDIN_MACRO_12 = 'application/vnd.ms-powerpoint.addin.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-powerpoint.presentation.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_POWERPOINT_PRESENTATION_MACRO_12 = 'application/vnd.ms-powerpoint.presentation.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-powerpoint.slide.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_POWERPOINT_SLIDE_MACRO_12 = 'application/vnd.ms-powerpoint.slide.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-powerpoint.slideshow.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_POWERPOINT_SLIDESHOW_MACRO_12 = 'application/vnd.ms-powerpoint.slideshow.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-powerpoint.template.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_POWERPOINT_TPL_MACRO_12 = 'application/vnd.ms-powerpoint.template.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-PrintDeviceCapabilities+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_PRINTDEVICECAPABILITIES_XML = 'application/vnd.ms-PrintDeviceCapabilities+xml';

    /**
     * MIME type 'vnd.ms-PrintSchemaTicket+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_PRINTSCHEMATICKET_XML = 'application/vnd.ms-PrintSchemaTicket+xml';

    /**
     * MIME type 'vnd.ms-project'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_PROJECT = 'application/vnd.ms-project';

    /**
     * MIME type 'vnd.ms-tnef'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_TNEF = 'application/vnd.ms-tnef';

    /**
     * MIME type 'vnd.ms-windows.devicepairing'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WINDOWS_DEVICEPAIRING = 'application/vnd.ms-windows.devicepairing';

    /**
     * MIME type 'vnd.ms-windows.nwprinting.oob'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WINDOWS_NWPRINTING_OOB = 'application/vnd.ms-windows.nwprinting.oob';

    /**
     * MIME type 'vnd.ms-windows.printerpairing'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WINDOWS_PRINTERPAIRING = 'application/vnd.ms-windows.printerpairing';

    /**
     * MIME type 'vnd.ms-windows.wsd.oob'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WINDOWS_WSD_OOB = 'application/vnd.ms-windows.wsd.oob';

    /**
     * MIME type 'vnd.ms-wmdrm.lic-chlg-req'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WMDRM_LIC_CHLG_REQ = 'application/vnd.ms-wmdrm.lic-chlg-req';

    /**
     * MIME type 'vnd.ms-wmdrm.lic-resp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WMDRM_LIC_RESP = 'application/vnd.ms-wmdrm.lic-resp';

    /**
     * MIME type 'vnd.ms-wmdrm.meter-chlg-req'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WMDRM_METER_CHLG_REQ = 'application/vnd.ms-wmdrm.meter-chlg-req';

    /**
     * MIME type 'vnd.ms-wmdrm.meter-resp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WMDRM_METER_RESP = 'application/vnd.ms-wmdrm.meter-resp';

    /**
     * MIME type 'vnd.ms-word.document.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WORD_DOC_MACRO_12 = 'application/vnd.ms-word.document.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-word.template.macroEnabled.12'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WORD_TPL_MACRO_12 = 'application/vnd.ms-word.template.macroEnabled.12';

    /**
     * MIME type 'vnd.ms-works'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WORKS = 'application/vnd.ms-works';

    /**
     * MIME type 'vnd.ms-wpl'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_WPL = 'application/vnd.ms-wpl';

    /**
     * MIME type 'vnd.ms-xpsdocument'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MS_XPSDOC = 'application/vnd.ms-xpsdocument';

    /**
     * MIME type 'vnd.msa-disk-image'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MSA_DISK_IMG = 'application/vnd.msa-disk-image';

    /**
     * MIME type 'vnd.mseq'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MSEQ = 'application/vnd.mseq';

    /**
     * MIME type 'vnd.msign'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MSIGN = 'application/vnd.msign';

    /**
     * MIME type 'vnd.multiad.creator'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MULTIAD_CREATOR = 'application/vnd.multiad.creator';

    /**
     * MIME type 'vnd.multiad.creator.cif'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MULTIAD_CREATOR_CIF = 'application/vnd.multiad.creator.cif';

    /**
     * MIME type 'vnd.musician'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MUSICIAN = 'application/vnd.musician';

    /**
     * MIME type 'vnd.music-niff'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MUSIC_NIFF = 'application/vnd.music-niff';

    /**
     * MIME type 'vnd.muvee.style'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MUVEE_STYLE = 'application/vnd.muvee.style';

    /**
     * MIME type 'vnd.mynfc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_MYNFC = 'application/vnd.mynfc';

    /**
     * MIME type 'vnd.nacamar.ybrid+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NACAMAR_YBRID_JSON = 'application/vnd.nacamar.ybrid+json';

    /**
     * MIME type 'vnd.ncd.control'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NCD_CONTROL = 'application/vnd.ncd.control';

    /**
     * MIME type 'vnd.ncd.reference'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NCD_REFERENCE = 'application/vnd.ncd.reference';

    /**
     * MIME type 'vnd.nearst.inv+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NEARST_INV_JSON = 'application/vnd.nearst.inv+json';

    /**
     * MIME type 'vnd.nebumind.line'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NEBUMIND_LINE = 'application/vnd.nebumind.line';

    /**
     * MIME type 'vnd.nervana'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NERVANA = 'application/vnd.nervana';

    /**
     * MIME type 'vnd.netfpx'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NETFPX = 'application/vnd.netfpx';

    /**
     * MIME type 'vnd.neurolanguage.nlu'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NEUROLANGUAGE_NLU = 'application/vnd.neurolanguage.nlu';

    /**
     * MIME type 'vnd.nimn'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NIMN = 'application/vnd.nimn';

    /**
     * MIME type 'vnd.nintendo.snes.rom'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NINTENDO_SNES_ROM = 'application/vnd.nintendo.snes.rom';

    /**
     * MIME type 'vnd.nintendo.nitro.rom'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NINTENDO_NITRO_ROM = 'application/vnd.nintendo.nitro.rom';

    /**
     * MIME type 'vnd.nitf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NITF = 'application/vnd.nitf';

    /**
     * MIME type 'vnd.noblenet-directory'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOBLENET_DIRECTORY = 'application/vnd.noblenet-directory';

    /**
     * MIME type 'vnd.noblenet-sealer'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOBLENET_SEALER = 'application/vnd.noblenet-sealer';

    /**
     * MIME type 'vnd.noblenet-web'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOBLENET_WEB = 'application/vnd.noblenet-web';

    /**
     * MIME type 'vnd.nokia.catalogs'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_CATALOGS = 'application/vnd.nokia.catalogs';

    /**
     * MIME type 'vnd.nokia.conml+wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_CONML_WBXML = 'application/vnd.nokia.conml+wbxml';

    /**
     * MIME type 'vnd.nokia.conml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_CONML_XML = 'application/vnd.nokia.conml+xml';

    /**
     * MIME type 'vnd.nokia.iptv.config+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_IPTV_CONFIG_XML = 'application/vnd.nokia.iptv.config+xml';

    /**
     * MIME type 'vnd.nokia.iSDS-radio-presets'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_ISDS_RADIO_PRESETS = 'application/vnd.nokia.iSDS-radio-presets';

    /**
     * MIME type 'vnd.nokia.landmark+wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_LANDMARK_WBXML = 'application/vnd.nokia.landmark+wbxml';

    /**
     * MIME type 'vnd.nokia.landmark+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_LANDMARK_XML = 'application/vnd.nokia.landmark+xml';

    /**
     * MIME type 'vnd.nokia.landmarkcollection+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_LANDMARKCOLLECTION_XML = 'application/vnd.nokia.landmarkcollection+xml';

    /**
     * MIME type 'vnd.nokia.ncd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_NCD = 'application/vnd.nokia.ncd';

    /**
     * MIME type 'vnd.nokia.n-gage.ac+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_N_GAGE_AC_XML = 'application/vnd.nokia.n-gage.ac+xml';

    /**
     * MIME type 'vnd.nokia.n-gage.data'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_N_GAGE_DATA = 'application/vnd.nokia.n-gage.data';

    /**
     * MIME type 'vnd.nokia.n-gage.symbian.install'
     *
     * Standards: -
     *
     * @var string
     * @deprecated no replacement given
     */
    public const VND_NOKIA_N_GAGE_SYMBIAN_INSTALL = 'application/vnd.nokia.n-gage.symbian.install';

    /**
     * MIME type 'vnd.nokia.pcd+wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_PCD_WBXML = 'application/vnd.nokia.pcd+wbxml';

    /**
     * MIME type 'vnd.nokia.pcd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_PCD_XML = 'application/vnd.nokia.pcd+xml';

    /**
     * MIME type 'vnd.nokia.radio-preset'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_RADIO_PRESET = 'application/vnd.nokia.radio-preset';

    /**
     * MIME type 'vnd.nokia.radio-presets'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOKIA_RADIO_PRESETS = 'application/vnd.nokia.radio-presets';

    /**
     * MIME type 'vnd.novadigm.EDM'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOVADIGM_EDM = 'application/vnd.novadigm.EDM';

    /**
     * MIME type 'vnd.novadigm.EDX'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOVADIGM_EDX = 'application/vnd.novadigm.EDX';

    /**
     * MIME type 'vnd.novadigm.EXT'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NOVADIGM_EXT = 'application/vnd.novadigm.EXT';

    /**
     * MIME type 'vnd.ntt-local.content-share'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NTT_LOCAL_CONTENT_SHARE = 'application/vnd.ntt-local.content-share';

    /**
     * MIME type 'vnd.ntt-local.file-transfer'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NTT_LOCAL_FILE_TRANSFER = 'application/vnd.ntt-local.file-transfer';

    /**
     * MIME type 'vnd.ntt-local.ogw_remote-access'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NTT_LOCAL_OGW_REMOTE_ACCESS = 'application/vnd.ntt-local.ogw_remote-access';

    /**
     * MIME type 'vnd.ntt-local.sip-ta_remote'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NTT_LOCAL_SIP_TA_REMOTE = 'application/vnd.ntt-local.sip-ta_remote';

    /**
     * MIME type 'vnd.ntt-local.sip-ta_tcp_stream'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_NTT_LOCAL_SIP_TA_TCP_STREAM = 'application/vnd.ntt-local.sip-ta_tcp_stream';

    /**
     * MIME type 'vnd.oasis.opendocument.chart'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_CHART = 'application/vnd.oasis.opendocument.chart';

    /**
     * MIME type 'vnd.oasis.opendocument.chart-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_CHART_TPL = 'application/vnd.oasis.opendocument.chart-template';

    /**
     * MIME type 'vnd.oasis.opendocument.database'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_DATABASE = 'application/vnd.oasis.opendocument.database';

    /**
     * MIME type 'vnd.oasis.opendocument.formula'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_FORMULA = 'application/vnd.oasis.opendocument.formula';

    /**
     * MIME type 'vnd.oasis.opendocument.formula-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_FORMULA_TPL = 'application/vnd.oasis.opendocument.formula-template';

    /**
     * MIME type 'vnd.oasis.opendocument.graphics'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_GRAPHICS = 'application/vnd.oasis.opendocument.graphics';

    /**
     * MIME type 'vnd.oasis.opendocument.graphics-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_GRAPHICS_TPL = 'application/vnd.oasis.opendocument.graphics-template';

    /**
     * MIME type 'vnd.oasis.opendocument.image'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_IMG = 'application/vnd.oasis.opendocument.image';

    /**
     * MIME type 'vnd.oasis.opendocument.image-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_IMG_TPL = 'application/vnd.oasis.opendocument.image-template';

    /**
     * MIME type 'vnd.oasis.opendocument.presentation'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_PRESENTATION = 'application/vnd.oasis.opendocument.presentation';

    /**
     * MIME type 'vnd.oasis.opendocument.presentation-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_PRESENTATION_TPL = 'application/vnd.oasis.opendocument.presentation-template';

    /**
     * MIME type 'vnd.oasis.opendocument.spreadsheet'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_SPREADSHEET = 'application/vnd.oasis.opendocument.spreadsheet';

    /**
     * MIME type 'vnd.oasis.opendocument.spreadsheet-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_SPREADSHEET_TPL = 'application/vnd.oasis.opendocument.spreadsheet-template';

    /**
     * MIME type 'vnd.oasis.opendocument.text'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_TXT = 'application/vnd.oasis.opendocument.text';

    /**
     * MIME type 'vnd.oasis.opendocument.text-master'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_TXT_MASTER = 'application/vnd.oasis.opendocument.text-master';

    /**
     * MIME type 'vnd.oasis.opendocument.text-template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_TXT_TPL = 'application/vnd.oasis.opendocument.text-template';

    /**
     * MIME type 'vnd.oasis.opendocument.text-web'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OASIS_OPENDOC_TXT_WEB = 'application/vnd.oasis.opendocument.text-web';

    /**
     * MIME type 'vnd.obn'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OBN = 'application/vnd.obn';

    /**
     * MIME type 'vnd.ocf+cbor'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OCF_CBOR = 'application/vnd.ocf+cbor';

    /**
     * MIME type 'vnd.oci.image.manifest.v1+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OCI_IMG_MANIFEST_V1_JSON = 'application/vnd.oci.image.manifest.v1+json';

    /**
     * MIME type 'vnd.oftn.l10n+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OFTN_L10N_JSON = 'application/vnd.oftn.l10n+json';

    /**
     * MIME type 'vnd.oipf.contentaccessdownload+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_CONTENTACCESSDOWNLOAD_XML = 'application/vnd.oipf.contentaccessdownload+xml';

    /**
     * MIME type 'vnd.oipf.contentaccessstreaming+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_CONTENTACCESSSTREAMING_XML = 'application/vnd.oipf.contentaccessstreaming+xml';

    /**
     * MIME type 'vnd.oipf.cspg-hexbinary'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_CSPG_HEXBIN = 'application/vnd.oipf.cspg-hexbinary';

    /**
     * MIME type 'vnd.oipf.dae.svg+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_DAE_SVG_XML = 'application/vnd.oipf.dae.svg+xml';

    /**
     * MIME type 'vnd.oipf.dae.xhtml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_DAE_XHTML_XML = 'application/vnd.oipf.dae.xhtml+xml';

    /**
     * MIME type 'vnd.oipf.mippvcontrolmessage+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_MIPPVCONTROLMESSAGE_XML = 'application/vnd.oipf.mippvcontrolmessage+xml';

    /**
     * MIME type 'vnd.oipf.pae.gem'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_PAE_GEM = 'application/vnd.oipf.pae.gem';

    /**
     * MIME type 'vnd.oipf.spdiscovery+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_SPDISCOVERY_XML = 'application/vnd.oipf.spdiscovery+xml';

    /**
     * MIME type 'vnd.oipf.spdlist+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_SPDLIST_XML = 'application/vnd.oipf.spdlist+xml';

    /**
     * MIME type 'vnd.oipf.ueprofile+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_UEPROFILE_XML = 'application/vnd.oipf.ueprofile+xml';

    /**
     * MIME type 'vnd.oipf.userprofile+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OIPF_USERPROFILE_XML = 'application/vnd.oipf.userprofile+xml';

    /**
     * MIME type 'vnd.olpc-sugar'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OLPC_SUGAR = 'application/vnd.olpc-sugar';

    /**
     * MIME type 'vnd.oma.bcast.associated-procedure-parameter+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_ASSOCIATED_PROC_PARAM_XML = 'application/vnd.oma.bcast.associated-procedure-parameter+xml';

    /**
     * MIME type 'vnd.oma.bcast.drm-trigger+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_DRM_TRIGGER_XML = 'application/vnd.oma.bcast.drm-trigger+xml';

    /**
     * MIME type 'vnd.oma.bcast.imd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_IMD_XML = 'application/vnd.oma.bcast.imd+xml';

    /**
     * MIME type 'vnd.oma.bcast.ltkm'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_LTKM = 'application/vnd.oma.bcast.ltkm';

    /**
     * MIME type 'vnd.oma.bcast.notification+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_NOTIFICATION_XML = 'application/vnd.oma.bcast.notification+xml';

    /**
     * MIME type 'vnd.oma.bcast.provisioningtrigger'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_PROVISIONINGTRIGGER = 'application/vnd.oma.bcast.provisioningtrigger';

    /**
     * MIME type 'vnd.oma.bcast.sgboot'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_SGBOOT = 'application/vnd.oma.bcast.sgboot';

    /**
     * MIME type 'vnd.oma.bcast.sgdd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_SGDD_XML = 'application/vnd.oma.bcast.sgdd+xml';

    /**
     * MIME type 'vnd.oma.bcast.sgdu'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_SGDU = 'application/vnd.oma.bcast.sgdu';

    /**
     * MIME type 'vnd.oma.bcast.simple-symbol-container'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_SIMPLE_SYMBOL_CONTAINER = 'application/vnd.oma.bcast.simple-symbol-container';

    /**
     * MIME type 'vnd.oma.bcast.smartcard-trigger+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_SMARTCARD_TRIGGER_XML = 'application/vnd.oma.bcast.smartcard-trigger+xml';

    /**
     * MIME type 'vnd.oma.bcast.sprov+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_SPROV_XML = 'application/vnd.oma.bcast.sprov+xml';

    /**
     * MIME type 'vnd.oma.bcast.stkm'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_BCAST_STKM = 'application/vnd.oma.bcast.stkm';

    /**
     * MIME type 'vnd.oma.cab-address-book+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_CAB_ADDRESS_BOOK_XML = 'application/vnd.oma.cab-address-book+xml';

    /**
     * MIME type 'vnd.oma.cab-feature-handler+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_CAB_FEATURE_HANDLER_XML = 'application/vnd.oma.cab-feature-handler+xml';

    /**
     * MIME type 'vnd.oma.cab-pcc+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_CAB_PCC_XML = 'application/vnd.oma.cab-pcc+xml';

    /**
     * MIME type 'vnd.oma.cab-subs-invite+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_CAB_SUBS_INVITE_XML = 'application/vnd.oma.cab-subs-invite+xml';

    /**
     * MIME type 'vnd.oma.cab-user-prefs+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_CAB_USER_PREFS_XML = 'application/vnd.oma.cab-user-prefs+xml';

    /**
     * MIME type 'vnd.oma.dcd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_DCD = 'application/vnd.oma.dcd';

    /**
     * MIME type 'vnd.oma.dcdc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_DCDC = 'application/vnd.oma.dcdc';

    /**
     * MIME type 'vnd.oma.dd2+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_DD2_XML = 'application/vnd.oma.dd2+xml';

    /**
     * MIME type 'vnd.oma.drm.risd+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_DRM_RISD_XML = 'application/vnd.oma.drm.risd+xml';

    /**
     * MIME type 'vnd.oma.group-usage-list+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_GROUP_USAGE_LIST_XML = 'application/vnd.oma.group-usage-list+xml';

    /**
     * MIME type 'vnd.oma.lwm2m+cbor'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_LWM2M_CBOR = 'application/vnd.oma.lwm2m+cbor';

    /**
     * MIME type 'vnd.oma.lwm2m+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_LWM2M_JSON = 'application/vnd.oma.lwm2m+json';

    /**
     * MIME type 'vnd.oma.lwm2m+tlv'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_LWM2M_TLV = 'application/vnd.oma.lwm2m+tlv';

    /**
     * MIME type 'vnd.oma.pal+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_PAL_XML = 'application/vnd.oma.pal+xml';

    /**
     * MIME type 'vnd.oma.poc.detailed-progress-report+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_POC_DETAILED_PROGRESS_REPORT_XML = 'application/vnd.oma.poc.detailed-progress-report+xml';

    /**
     * MIME type 'vnd.oma.poc.final-report+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_POC_FINAL_REPORT_XML = 'application/vnd.oma.poc.final-report+xml';

    /**
     * MIME type 'vnd.oma.poc.groups+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_POC_GROUPS_XML = 'application/vnd.oma.poc.groups+xml';

    /**
     * MIME type 'vnd.oma.poc.invocation-descriptor+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_POC_INVOCATION_DESCRIPTOR_XML = 'application/vnd.oma.poc.invocation-descriptor+xml';

    /**
     * MIME type 'vnd.oma.poc.optimized-progress-report+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_POC_OPTIMIZED_PROGRESS_REPORT_XML = 'application/vnd.oma.poc.optimized-progress-report+xml';

    /**
     * MIME type 'vnd.oma.push'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_PUSH = 'application/vnd.oma.push';

    /**
     * MIME type 'vnd.oma.scidm.messages+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_SCIDM_MESSAGES_XML = 'application/vnd.oma.scidm.messages+xml';

    /**
     * MIME type 'vnd.oma.xcap-directory+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_XCAP_DIRECTORY_XML = 'application/vnd.oma.xcap-directory+xml';

    /**
     * MIME type 'vnd.omads-email+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMADS_EMAIL_XML = 'application/vnd.omads-email+xml';

    /**
     * MIME type 'vnd.omads-file+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMADS_FILE_XML = 'application/vnd.omads-file+xml';

    /**
     * MIME type 'vnd.omads-folder+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMADS_FOLDER_XML = 'application/vnd.omads-folder+xml';

    /**
     * MIME type 'vnd.omaloc-supl-init'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMALOC_SUPL_INIT = 'application/vnd.omaloc-supl-init';

    /**
     * MIME type 'vnd.oma-scws-config'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_SCWS_CONFIG = 'application/vnd.oma-scws-config';

    /**
     * MIME type 'vnd.oma-scws-http-request'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_SCWS_HTTP_REQUEST = 'application/vnd.oma-scws-http-request';

    /**
     * MIME type 'vnd.oma-scws-http-response'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OMA_SCWS_HTTP_RESPONSE = 'application/vnd.oma-scws-http-response';

    /**
     * MIME type 'vnd.onepager'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ONEPAGER = 'application/vnd.onepager';

    /**
     * MIME type 'vnd.onepagertamp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ONEPAGERTAMP = 'application/vnd.onepagertamp';

    /**
     * MIME type 'vnd.onepagertamx'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ONEPAGERTAMX = 'application/vnd.onepagertamx';

    /**
     * MIME type 'vnd.onepagertat'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ONEPAGERTAT = 'application/vnd.onepagertat';

    /**
     * MIME type 'vnd.onepagertatp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ONEPAGERTATP = 'application/vnd.onepagertatp';

    /**
     * MIME type 'vnd.onepagertatx'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ONEPAGERTATX = 'application/vnd.onepagertatx';

    /**
     * MIME type 'vnd.openblox.game-binary'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENBLOX_GAME_BIN = 'application/vnd.openblox.game-binary';

    /**
     * MIME type 'vnd.openblox.game+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENBLOX_GAME_XML = 'application/vnd.openblox.game+xml';

    /**
     * MIME type 'vnd.openeye.oeb'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENEYE_OEB = 'application/vnd.openeye.oeb';

    /**
     * MIME type 'vnd.openstreetmap.data+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENSTREETMAP_DATA_XML = 'application/vnd.openstreetmap.data+xml';

    /**
     * MIME type 'vnd.opentimestamps.ots'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENTIMESTAMPS_OTS = 'application/vnd.opentimestamps.ots';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.custom-properties+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_CUSTOM_PROPERTIES_XML = 'application/vnd.openxmlformats-officedocument.custom-properties+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.customXmlProperties+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_CUSTOMXMLPROPERTIES_XML = 'application/vnd.openxmlformats-officedocument.customXmlProperties+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.drawing+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_DRAWING_XML = 'application/vnd.openxmlformats-officedocument.drawing+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.drawingml.chart+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_DRAWINGML_CHART_XML = 'application/vnd.openxmlformats-officedocument.drawingml.chart+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.drawingml.chartshapes+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_DRAWINGML_CHARTSHAPES_XML = 'application/vnd.openxmlformats-officedocument.drawingml.chartshapes+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.drawingml.diagramColors+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_DRAWINGML_DIAGRAMCOLORS_XML = 'application/vnd.openxmlformats-officedocument.drawingml.diagramColors+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.drawingml.diagramData+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_DRAWINGML_DIAGRAMDATA_XML = 'application/vnd.openxmlformats-officedocument.drawingml.diagramData+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.drawingml.diagramLayout+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_DRAWINGML_DIAGRAMLAYOUT_XML = 'application/vnd.openxmlformats-officedocument.drawingml.diagramLayout+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.drawingml.diagramStyle+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_DRAWINGML_DIAGRAMSTYLE_XML = 'application/vnd.openxmlformats-officedocument.drawingml.diagramStyle+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.extended-properties+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_EXTENDED_PROPERTIES_XML = 'application/vnd.openxmlformats-officedocument.extended-properties+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.commentAuthors+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_COMMENTAUTHORS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.commentAuthors+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.comments+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_COMMENTS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.comments+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.handoutMaster+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_HANDOUTMASTER_XML = 'application/vnd.openxmlformats-officedocument.presentationml.handoutMaster+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.notesMaster+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_NOTESMASTER_XML = 'application/vnd.openxmlformats-officedocument.presentationml.notesMaster+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.notesSlide+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_NOTESSLIDE_XML = 'application/vnd.openxmlformats-officedocument.presentationml.notesSlide+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.presentation'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_PRESENTATION = 'application/vnd.openxmlformats-officedocument.presentationml.presentation'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.presentation.main+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_PRESENTATION_MAIN_XML = 'application/vnd.openxmlformats-officedocument.presentationml.presentation.main+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.presProps+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_PRESPROPS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.presProps+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.slide'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_SLIDE = 'application/vnd.openxmlformats-officedocument.presentationml.slide';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.slide+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_SLIDE_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slide+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.slideLayout+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_SLIDELAYOUT_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slideLayout+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.slideMaster+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_SLIDEMASTER_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slideMaster+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.slideshow'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_SLIDESHOW = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.slideshow.main+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_SLIDESHOW_MAIN_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slideshow.main+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.slideUpdateInfo+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_SLIDEUPDATEINFO_XML = 'application/vnd.openxmlformats-officedocument.presentationml.slideUpdateInfo+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.tableStyles+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_TABLESTYLES_XML = 'application/vnd.openxmlformats-officedocument.presentationml.tableStyles+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.tags+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_TAGS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.tags+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_TPL = 'application/vnd.openxmlformats-officedocument.presentationml.template';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.template.main+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_TPL_MAIN_XML = 'application/vnd.openxmlformats-officedocument.presentationml.template.main+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.presentationml.viewProps+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_PRESENTATIONML_VIEWPROPS_XML = 'application/vnd.openxmlformats-officedocument.presentationml.viewProps+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.calcChain+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_CALCCHAIN_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.calcChain+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.chartsheet+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_CHARTSHEET_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.chartsheet+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.comments+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_COMMENTS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.comments+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.connections+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_CONNECTIONS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.connections+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.dialogsheet+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_DIALOGSHEET_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.dialogsheet+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.externalLink+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_EXTERNALLINK_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.externalLink+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheDefinition+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_PIVOTCACHEDEFINITION_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheDefinition+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheRecords+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_PIVOTCACHERECORDS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotCacheRecords+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.pivotTable+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_PIVOTTABLE_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.pivotTable+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.queryTable+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_QUERYTABLE_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.queryTable+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.revisionHeaders+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_REVISIONHEADERS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.revisionHeaders+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.revisionLog+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_REVISIONLOG_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.revisionLog+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.sharedStrings+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_SHAREDSTRINGS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sharedStrings+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.sheet'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_SHEET = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_SHEET_MAIN_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet.main+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.sheetMetadata+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_SHEETMETADATA_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheetMetadata+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.styles+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_STYLES_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.styles+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.table+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_TABLE_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.table+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.tableSingleCells+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_TABLESINGLECELLS_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.tableSingleCells+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_TPL = 'application/vnd.openxmlformats-officedocument.spreadsheetml.template';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.template.main+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_TPL_MAIN_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.template.main+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.userNames+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_USERNAMES_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.userNames+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.volatileDependencies+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_VOLATILEDEPENDENCIES_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.volatileDependencies+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_SPREADSHEETML_WORKSHEET_XML = 'application/vnd.openxmlformats-officedocument.spreadsheetml.worksheet+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.theme+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_THEME_XML = 'application/vnd.openxmlformats-officedocument.theme+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.themeOverride+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_THEMEOVERRIDE_XML = 'application/vnd.openxmlformats-officedocument.themeOverride+xml';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.vmlDrawing'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_VMLDRAWING = 'application/vnd.openxmlformats-officedocument.vmlDrawing';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.comments+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_COMMENTS_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.comments+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.document'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_DOC = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.document.glossary+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_DOC_GLOSSARY_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document.glossary+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.document.main+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_DOC_MAIN_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.document.main+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.endnotes+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_ENDNOTES_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.endnotes+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.fontTable+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_FONTTABLE_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.fontTable+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.footer+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_FOOTER_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.footer+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.footnotes+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_FOOTNOTES_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.footnotes+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.numbering+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_NUMBERING_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.numbering+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.settings+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_SETTINGS_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.settings+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.styles+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_STYLES_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.styles+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.template'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_TPL = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template';

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.template.main+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_TPL_MAIN_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.template.main+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-officedocument.wordprocessingml.webSettings+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_OFFICEDOC_WORDPROCESSINGML_WEBSETTINGS_XML = 'application/vnd.openxmlformats-officedocument.wordprocessingml.webSettings+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-package.core-properties+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_PACKAGE_CORE_PROPERTIES_XML = 'application/vnd.openxmlformats-package.core-properties+xml';

    /**
     * MIME type 'vnd.openxmlformats-package.digital-signature-xmlsignature+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_PACKAGE_DIGITAL_SIGNATURE_XMLSIGNATURE_XML = 'application/vnd.openxmlformats-package.digital-signature-xmlsignature+xml'; // NOSONAR - php:S103

    /**
     * MIME type 'vnd.openxmlformats-package.relationships+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OPENXML_PACKAGE_RELATIONSHIPS_XML = 'application/vnd.openxmlformats-package.relationships+xml';

    /**
     * MIME type 'vnd.oracle.resource+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ORACLE_RESOURCE_JSON = 'application/vnd.oracle.resource+json';

    /**
     * MIME type 'vnd.orange.indata'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ORANGE_INDATA = 'application/vnd.orange.indata';

    /**
     * MIME type 'vnd.osa.netdeploy'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OSA_NETDEPLOY = 'application/vnd.osa.netdeploy';

    /**
     * MIME type 'vnd.osgeo.mapguide.package'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OSGEO_MAPGUIDE_PACKAGE = 'application/vnd.osgeo.mapguide.package';

    /**
     * MIME type 'vnd.osgi.bundle'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OSGI_BUNDLE = 'application/vnd.osgi.bundle';

    /**
     * MIME type 'vnd.osgi.dp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OSGI_DP = 'application/vnd.osgi.dp';

    /**
     * MIME type 'vnd.osgi.subsystem'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OSGI_SUBSYSTEM = 'application/vnd.osgi.subsystem';

    /**
     * MIME type 'vnd.otps.ct-kip+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OTPS_CT_KIP_XML = 'application/vnd.otps.ct-kip+xml';

    /**
     * MIME type 'vnd.oxli.countgraph'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_OXLI_COUNTGRAPH = 'application/vnd.oxli.countgraph';

    /**
     * MIME type 'vnd.pagerduty+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PAGERDUTY_JSON = 'application/vnd.pagerduty+json';

    /**
     * MIME type 'vnd.palm'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PALM = 'application/vnd.palm';

    /**
     * MIME type 'vnd.panoply'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PANOPLY = 'application/vnd.panoply';

    /**
     * MIME type 'vnd.paos.xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PAOS_XML = 'application/vnd.paos.xml';

    /**
     * MIME type 'vnd.patentdive'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PATENTDIVE = 'application/vnd.patentdive';

    /**
     * MIME type 'vnd.patientecommsdoc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PATIENTECOMMSDOC = 'application/vnd.patientecommsdoc';

    /**
     * MIME type 'vnd.pawaafile'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PAWAAFILE = 'application/vnd.pawaafile';

    /**
     * MIME type 'vnd.pcos'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PCOS = 'application/vnd.pcos';

    /**
     * MIME type 'vnd.pg.format'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PG_FORMAT = 'application/vnd.pg.format';

    /**
     * MIME type 'vnd.pg.osasli'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PG_OSASLI = 'application/vnd.pg.osasli';

    /**
     * MIME type 'vnd.piaccess.application-licence'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PIACCESS_APPLICATION_LICENCE = 'application/vnd.piaccess.application-licence';

    /**
     * MIME type 'vnd.picsel'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PICSEL = 'application/vnd.picsel';

    /**
     * MIME type 'vnd.pmi.widget'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PMI_WIDGET = 'application/vnd.pmi.widget';

    /**
     * MIME type 'vnd.poc.group-advertisement+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_POC_GROUP_ADVERTISEMENT_XML = 'application/vnd.poc.group-advertisement+xml';

    /**
     * MIME type 'vnd.pocketlearn'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_POCKETLEARN = 'application/vnd.pocketlearn';

    /**
     * MIME type 'vnd.powerbuilder6'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_POWERBUILDER6 = 'application/vnd.powerbuilder6';

    /**
     * MIME type 'vnd.powerbuilder6-s'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_POWERBUILDER6_S = 'application/vnd.powerbuilder6-s';

    /**
     * MIME type 'vnd.powerbuilder7'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_POWERBUILDER7 = 'application/vnd.powerbuilder7';

    /**
     * MIME type 'vnd.powerbuilder75'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_POWERBUILDER75 = 'application/vnd.powerbuilder75';

    /**
     * MIME type 'vnd.powerbuilder75-s'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_POWERBUILDER75_S = 'application/vnd.powerbuilder75-s';

    /**
     * MIME type 'vnd.powerbuilder7-s'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_POWERBUILDER7_S = 'application/vnd.powerbuilder7-s';

    /**
     * MIME type 'vnd.preminet'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PREMINET = 'application/vnd.preminet';

    /**
     * MIME type 'vnd.previewsystems.box'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PREVIEWSYSTEMS_BOX = 'application/vnd.previewsystems.box';

    /**
     * MIME type 'vnd.proteus.magazine'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PROTEUS_MAGAZINE = 'application/vnd.proteus.magazine';

    /**
     * MIME type 'vnd.psfs'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PSFS = 'application/vnd.psfs';

    /**
     * MIME type 'vnd.publishare-delta-tree'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PUBLISHARE_DELTA_TREE = 'application/vnd.publishare-delta-tree';

    /**
     * MIME type 'vnd.pvi.ptid1'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PVI_PTID1 = 'application/vnd.pvi.ptid1';

    /**
     * MIME type 'vnd.pwg-multiplexed'
     *
     * Standards: RFC3391
     *
     * @see https://www.iana.org/go/rfc3391
     *
     * @var string
     */
    public const VND_PWG_MULTIPLEXED = 'application/vnd.pwg-multiplexed';

    /**
     * MIME type 'vnd.pwg-xhtml-print+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_PWG_XHTML_PRINT_XML = 'application/vnd.pwg-xhtml-print+xml';

    /**
     * MIME type 'vnd.qualcomm.brew-app-res'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_QUALCOMM_BREW_APP_RES = 'application/vnd.qualcomm.brew-app-res';

    /**
     * MIME type 'vnd.quarantainenet'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_QUARANTAINENET = 'application/vnd.quarantainenet';

    /**
     * MIME type 'vnd.Quark.QuarkXPress'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_QUARK_QUARKXPRESS = 'application/vnd.Quark.QuarkXPress';

    /**
     * MIME type 'vnd.quobject-quoxdocument'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_QUOBJECT_QUOXDOC = 'application/vnd.quobject-quoxdocument';

    /**
     * MIME type 'vnd.radisys.moml+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MOML_XML = 'application/vnd.radisys.moml+xml';

    /**
     * MIME type 'vnd.radisys.msml-audit-conf+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_AUDIT_CONF_XML = 'application/vnd.radisys.msml-audit-conf+xml';

    /**
     * MIME type 'vnd.radisys.msml-audit-conn+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_AUDIT_CONN_XML = 'application/vnd.radisys.msml-audit-conn+xml';

    /**
     * MIME type 'vnd.radisys.msml-audit-dialog+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_AUDIT_DIALOG_XML = 'application/vnd.radisys.msml-audit-dialog+xml';

    /**
     * MIME type 'vnd.radisys.msml-audit-stream+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_AUDIT_STREAM_XML = 'application/vnd.radisys.msml-audit-stream+xml';

    /**
     * MIME type 'vnd.radisys.msml-audit+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_AUDIT_XML = 'application/vnd.radisys.msml-audit+xml';

    /**
     * MIME type 'vnd.radisys.msml-conf+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_CONF_XML = 'application/vnd.radisys.msml-conf+xml';

    /**
     * MIME type 'vnd.radisys.msml-dialog-base+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_DIALOG_BASE_XML = 'application/vnd.radisys.msml-dialog-base+xml';

    /**
     * MIME type 'vnd.radisys.msml-dialog-fax-detect+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_DIALOG_FAX_DETECT_XML = 'application/vnd.radisys.msml-dialog-fax-detect+xml';

    /**
     * MIME type 'vnd.radisys.msml-dialog-fax-sendrecv+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_DIALOG_FAX_SENDRECV_XML = 'application/vnd.radisys.msml-dialog-fax-sendrecv+xml';

    /**
     * MIME type 'vnd.radisys.msml-dialog-group+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_DIALOG_GROUP_XML = 'application/vnd.radisys.msml-dialog-group+xml';

    /**
     * MIME type 'vnd.radisys.msml-dialog-speech+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_DIALOG_SPEECH_XML = 'application/vnd.radisys.msml-dialog-speech+xml';

    /**
     * MIME type 'vnd.radisys.msml-dialog-transform+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_DIALOG_TRANSFORM_XML = 'application/vnd.radisys.msml-dialog-transform+xml';

    /**
     * MIME type 'vnd.radisys.msml-dialog+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_DIALOG_XML = 'application/vnd.radisys.msml-dialog+xml';

    /**
     * MIME type 'vnd.radisys.msml+xml'
     *
     * Standards: RFC5707
     *
     * @see https://www.iana.org/go/rfc5707
     *
     * @var string
     */
    public const VND_RADISYS_MSML_XML = 'application/vnd.radisys.msml+xml';

    /**
     * MIME type 'vnd.rainstor.data'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RAINSTOR_DATA = 'application/vnd.rainstor.data';

    /**
     * MIME type 'vnd.rapid'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RAPID = 'application/vnd.rapid';

    /**
     * MIME type 'vnd.rar'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RAR = 'application/vnd.rar';

    /**
     * MIME type 'vnd.realvnc.bed'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_REALVNC_BED = 'application/vnd.realvnc.bed';

    /**
     * MIME type 'vnd.recordare.musicxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RECORDARE_MUSICXML = 'application/vnd.recordare.musicxml';

    /**
     * MIME type 'vnd.recordare.musicxml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RECORDARE_MUSICXML_XML = 'application/vnd.recordare.musicxml+xml';

    /**
     * MIME type 'vnd.RenLearn.rlprint'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RENLEARN_RLPRINT = 'application/vnd.RenLearn.rlprint';

    /**
     * MIME type 'vnd.resilient.logic'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RESILIENT_LOGIC = 'application/vnd.resilient.logic';

    /**
     * MIME type 'vnd.restful+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RESTFUL_JSON = 'application/vnd.restful+json';

    /**
     * MIME type 'vnd.rig.cryptonote'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RIG_CRYPTONOTE = 'application/vnd.rig.cryptonote';

    /**
     * MIME type 'vnd.route66.link66+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ROUTE66_LINK66_XML = 'application/vnd.route66.link66+xml';

    /**
     * MIME type 'vnd.rs-274x'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RS_274X = 'application/vnd.rs-274x';

    /**
     * MIME type 'vnd.ruckus.download'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_RUCKUS_DOWNLOAD = 'application/vnd.ruckus.download';

    /**
     * MIME type 'vnd.s3sms'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_S3SMS = 'application/vnd.s3sms';

    /**
     * MIME type 'vnd.sailingtracker.track'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SAILINGTRACKER_TRACK = 'application/vnd.sailingtracker.track';

    /**
     * MIME type 'vnd.sar'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SAR = 'application/vnd.sar';

    /**
     * MIME type 'vnd.sbm.cid'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SBM_CID = 'application/vnd.sbm.cid';

    /**
     * MIME type 'vnd.sbm.mid2'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SBM_MID2 = 'application/vnd.sbm.mid2';

    /**
     * MIME type 'vnd.scribus'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SCRIBUS = 'application/vnd.scribus';

    /**
     * MIME type 'vnd.sealed.3df'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_3DF = 'application/vnd.sealed.3df';

    /**
     * MIME type 'vnd.sealed.csf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_CSF = 'application/vnd.sealed.csf';

    /**
     * MIME type 'vnd.sealed.doc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_DOC = 'application/vnd.sealed.doc';

    /**
     * MIME type 'vnd.sealed.eml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_EML = 'application/vnd.sealed.eml';

    /**
     * MIME type 'vnd.sealed.mht'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_MHT = 'application/vnd.sealed.mht';

    /**
     * MIME type 'vnd.sealed.net'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_NET = 'application/vnd.sealed.net';

    /**
     * MIME type 'vnd.sealed.ppt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_PPT = 'application/vnd.sealed.ppt';

    /**
     * MIME type 'vnd.sealed.tiff'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_TIFF = 'application/vnd.sealed.tiff';

    /**
     * MIME type 'vnd.sealed.xls'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALED_XLS = 'application/vnd.sealed.xls';

    /**
     * MIME type 'vnd.sealedmedia.softseal.html'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALEDMEDIA_SOFTSEAL_HTML = 'application/vnd.sealedmedia.softseal.html';

    /**
     * MIME type 'vnd.sealedmedia.softseal.pdf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEALEDMEDIA_SOFTSEAL_PDF = 'application/vnd.sealedmedia.softseal.pdf';

    /**
     * MIME type 'vnd.seemail'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEEMAIL = 'application/vnd.seemail';

    /**
     * MIME type 'vnd.seis+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEIS_JSON = 'application/vnd.seis+json';

    /**
     * MIME type 'vnd.sema'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEMA = 'application/vnd.sema';

    /**
     * MIME type 'vnd.semd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEMD = 'application/vnd.semd';

    /**
     * MIME type 'vnd.semf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SEMF = 'application/vnd.semf';

    /**
     * MIME type 'vnd.shade-save-file'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHADE_SAVE_FILE = 'application/vnd.shade-save-file';

    /**
     * MIME type 'vnd.shana.informed.formdata'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHANA_INFORMED_FORMDATA = 'application/vnd.shana.informed.formdata';

    /**
     * MIME type 'vnd.shana.informed.formtemplate'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHANA_INFORMED_FORMTEMPLATE = 'application/vnd.shana.informed.formtemplate';

    /**
     * MIME type 'vnd.shana.informed.interchange'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHANA_INFORMED_INTERCHANGE = 'application/vnd.shana.informed.interchange';

    /**
     * MIME type 'vnd.shana.informed.package'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHANA_INFORMED_PACKAGE = 'application/vnd.shana.informed.package';

    /**
     * MIME type 'vnd.shootproof+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHOOTPROOF_JSON = 'application/vnd.shootproof+json';

    /**
     * MIME type 'vnd.shopkick+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHOPKICK_JSON = 'application/vnd.shopkick+json';

    /**
     * MIME type 'vnd.shp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHP = 'application/vnd.shp';

    /**
     * MIME type 'vnd.shx'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SHX = 'application/vnd.shx';

    /**
     * MIME type 'vnd.sigrok.session'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SIGROK_SESSION = 'application/vnd.sigrok.session';

    /**
     * MIME type 'vnd.SimTech-MindMapper'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SIMTECH_MINDMAPPER = 'application/vnd.SimTech-MindMapper';

    /**
     * MIME type 'vnd.siren+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SIREN_JSON = 'application/vnd.siren+json';

    /**
     * MIME type 'vnd.smaf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SMAF = 'application/vnd.smaf';

    /**
     * MIME type 'vnd.smart.notebook'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SMART_NOTEBOOK = 'application/vnd.smart.notebook';

    /**
     * MIME type 'vnd.smart.teacher'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SMART_TEACHER = 'application/vnd.smart.teacher';

    /**
     * MIME type 'vnd.snesdev-page-table'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SNESDEV_PAGE_TABLE = 'application/vnd.snesdev-page-table';

    /**
     * MIME type 'vnd.software602.filler.form+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SOFTWARE602_FILLER_FORM_XML = 'application/vnd.software602.filler.form+xml';

    /**
     * MIME type 'vnd.software602.filler.form-xml-zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SOFTWARE602_FILLER_FORM_XML_ZIP = 'application/vnd.software602.filler.form-xml-zip';

    /**
     * MIME type 'vnd.solent.sdkm+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SOLENT_SDKM_XML = 'application/vnd.solent.sdkm+xml';

    /**
     * MIME type 'vnd.spotfire.dxp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SPOTFIRE_DXP = 'application/vnd.spotfire.dxp';

    /**
     * MIME type 'vnd.spotfire.sfs'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SPOTFIRE_SFS = 'application/vnd.spotfire.sfs';

    /**
     * MIME type 'vnd.sqlite3'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SQLITE3 = 'application/vnd.sqlite3';

    /**
     * MIME type 'vnd.sss-cod'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SSS_COD = 'application/vnd.sss-cod';

    /**
     * MIME type 'vnd.sss-dtf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SSS_DTF = 'application/vnd.sss-dtf';

    /**
     * MIME type 'vnd.sss-ntf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SSS_NTF = 'application/vnd.sss-ntf';

    /**
     * MIME type 'vnd.stepmania.package'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_STEPMANIA_PACKAGE = 'application/vnd.stepmania.package';

    /**
     * MIME type 'vnd.stepmania.stepchart'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_STEPMANIA_STEPCHART = 'application/vnd.stepmania.stepchart';

    /**
     * MIME type 'vnd.street-stream'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_STREET_STREAM = 'application/vnd.street-stream';

    /**
     * MIME type 'vnd.sun.wadl+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SUN_WADL_XML = 'application/vnd.sun.wadl+xml';

    /**
     * MIME type 'vnd.sus-calendar'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SUS_CALENDAR = 'application/vnd.sus-calendar';

    /**
     * MIME type 'vnd.svd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SVD = 'application/vnd.svd';

    /**
     * MIME type 'vnd.swiftview-ics'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SWIFTVIEW_ICS = 'application/vnd.swiftview-ics';

    /**
     * MIME type 'vnd.sycle+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYCLE_XML = 'application/vnd.sycle+xml';

    /**
     * MIME type 'vnd.syft+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYFT_JSON = 'application/vnd.syft+json';

    /**
     * MIME type 'vnd.syncml.dm.notification'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_DM_NOTIFICATION = 'application/vnd.syncml.dm.notification';

    /**
     * MIME type 'vnd.syncml.dmddf+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_DMDDF_XML = 'application/vnd.syncml.dmddf+xml';

    /**
     * MIME type 'vnd.syncml.dmtnds+wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_DMTNDS_WBXML = 'application/vnd.syncml.dmtnds+wbxml';

    /**
     * MIME type 'vnd.syncml.dmtnds+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_DMTNDS_XML = 'application/vnd.syncml.dmtnds+xml';

    /**
     * MIME type 'vnd.syncml.dmddf+wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_DMDDF_WBXML = 'application/vnd.syncml.dmddf+wbxml';

    /**
     * MIME type 'vnd.syncml.dm+wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_DM_WBXML = 'application/vnd.syncml.dm+wbxml';

    /**
     * MIME type 'vnd.syncml.dm+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_DM_XML = 'application/vnd.syncml.dm+xml';

    /**
     * MIME type 'vnd.syncml.ds.notification'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_DS_NOTIFICATION = 'application/vnd.syncml.ds.notification';

    /**
     * MIME type 'vnd.syncml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_SYNCML_XML = 'application/vnd.syncml+xml';

    /**
     * MIME type 'vnd.tableschema+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TABLESCHEMA_JSON = 'application/vnd.tableschema+json';

    /**
     * MIME type 'vnd.tao.intent-module-archive'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TAO_INTENT_MODULE_ARCHIVE = 'application/vnd.tao.intent-module-archive';

    /**
     * MIME type 'vnd.tcpdump.pcap'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TCPDUMP_PCAP = 'application/vnd.tcpdump.pcap';

    /**
     * MIME type 'vnd.think-cell.ppttc+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_THINK_CELL_PPTTC_JSON = 'application/vnd.think-cell.ppttc+json';

    /**
     * MIME type 'vnd.tml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TML = 'application/vnd.tml';

    /**
     * MIME type 'vnd.tmd.mediaflex.api+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TMD_MEDIAFLEX_API_XML = 'application/vnd.tmd.mediaflex.api+xml';

    /**
     * MIME type 'vnd.tmobile-livetv'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TMOBILE_LIVETV = 'application/vnd.tmobile-livetv';

    /**
     * MIME type 'vnd.tri.onesource'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TRI_ONESOURCE = 'application/vnd.tri.onesource';

    /**
     * MIME type 'vnd.trid.tpt'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TRID_TPT = 'application/vnd.trid.tpt';

    /**
     * MIME type 'vnd.triscape.mxs'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TRISCAPE_MXS = 'application/vnd.triscape.mxs';

    /**
     * MIME type 'vnd.trueapp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TRUEAPP = 'application/vnd.trueapp';

    /**
     * MIME type 'vnd.truedoc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_TRUEDOC = 'application/vnd.truedoc';

    /**
     * MIME type 'vnd.ubisoft.webplayer'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UBISOFT_WEBPLAYER = 'application/vnd.ubisoft.webplayer';

    /**
     * MIME type 'vnd.ufdl'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UFDL = 'application/vnd.ufdl';

    /**
     * MIME type 'vnd.uiq.theme'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UIQ_THEME = 'application/vnd.uiq.theme';

    /**
     * MIME type 'vnd.umajin'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UMAJIN = 'application/vnd.umajin';

    /**
     * MIME type 'vnd.unity'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UNITY = 'application/vnd.unity';

    /**
     * MIME type 'vnd.uoml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UOML_XML = 'application/vnd.uoml+xml';

    /**
     * MIME type 'vnd.uplanet.alert'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_ALERT = 'application/vnd.uplanet.alert';

    /**
     * MIME type 'vnd.uplanet.alert-wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_ALERT_WBXML = 'application/vnd.uplanet.alert-wbxml';

    /**
     * MIME type 'vnd.uplanet.bearer-choice'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_BEARER_CHOICE = 'application/vnd.uplanet.bearer-choice';

    /**
     * MIME type 'vnd.uplanet.bearer-choice-wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_BEARER_CHOICE_WBXML = 'application/vnd.uplanet.bearer-choice-wbxml';

    /**
     * MIME type 'vnd.uplanet.cacheop'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_CACHEOP = 'application/vnd.uplanet.cacheop';

    /**
     * MIME type 'vnd.uplanet.cacheop-wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_CACHEOP_WBXML = 'application/vnd.uplanet.cacheop-wbxml';

    /**
     * MIME type 'vnd.uplanet.channel'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_CHANNEL = 'application/vnd.uplanet.channel';

    /**
     * MIME type 'vnd.uplanet.channel-wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_CHANNEL_WBXML = 'application/vnd.uplanet.channel-wbxml';

    /**
     * MIME type 'vnd.uplanet.list'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_LIST = 'application/vnd.uplanet.list';

    /**
     * MIME type 'vnd.uplanet.listcmd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_LISTCMD = 'application/vnd.uplanet.listcmd';

    /**
     * MIME type 'vnd.uplanet.listcmd-wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_LISTCMD_WBXML = 'application/vnd.uplanet.listcmd-wbxml';

    /**
     * MIME type 'vnd.uplanet.list-wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_LIST_WBXML = 'application/vnd.uplanet.list-wbxml';

    /**
     * MIME type 'vnd.uri-map'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_URI_MAP = 'application/vnd.uri-map';

    /**
     * MIME type 'vnd.uplanet.signal'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_UPLANET_SIGNAL = 'application/vnd.uplanet.signal';

    /**
     * MIME type 'vnd.valve.source.material'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VALVE_SOURCE_MATERIAL = 'application/vnd.valve.source.material';

    /**
     * MIME type 'vnd.vcx'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VCX = 'application/vnd.vcx';

    /**
     * MIME type 'vnd.vd-study'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VD_STUDY = 'application/vnd.vd-study';

    /**
     * MIME type 'vnd.vectorworks'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VECTORWORKS = 'application/vnd.vectorworks';

    /**
     * MIME type 'vnd.vel+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VEL_JSON = 'application/vnd.vel+json';

    /**
     * MIME type 'vnd.verimatrix.vcas'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VERIMATRIX_VCAS = 'application/vnd.verimatrix.vcas';

    /**
     * MIME type 'vnd.veritone.aion+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VERITONE_AION_JSON = 'application/vnd.veritone.aion+json';

    /**
     * MIME type 'vnd.veryant.thin'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VERYANT_THIN = 'application/vnd.veryant.thin';

    /**
     * MIME type 'vnd.ves.encrypted'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VES_ENCRYPTED = 'application/vnd.ves.encrypted';

    /**
     * MIME type 'vnd.vidsoft.vidconference'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VIDSOFT_VIDCONFERENCE = 'application/vnd.vidsoft.vidconference';

    /**
     * MIME type 'vnd.visio'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VISIO = 'application/vnd.visio';

    /**
     * MIME type 'vnd.visionary'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VISIONARY = 'application/vnd.visionary';

    /**
     * MIME type 'vnd.vividence.scriptfile'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VIVIDENCE_SCRIPTFILE = 'application/vnd.vividence.scriptfile';

    /**
     * MIME type 'vnd.vsf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_VSF = 'application/vnd.vsf';

    /**
     * MIME type 'vnd.wap.sic'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_SIC = 'application/vnd.wap.sic';

    /**
     * MIME type 'vnd.wap.slc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_SLC = 'application/vnd.wap.slc';

    /**
     * MIME type 'vnd.wap.wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_WBXML = 'application/vnd.wap.wbxml';

    /**
     * MIME type 'vnd.wap.wmlc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_WMLC = 'application/vnd.wap.wmlc';

    /**
     * MIME type 'vnd.wap.wmlscriptc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WAP_WMLSCRIPTC = 'application/vnd.wap.wmlscriptc';

    /**
     * MIME type 'vnd.webturbo'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WEBTURBO = 'application/vnd.webturbo';

    /**
     * MIME type 'vnd.wfa.dpp'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WFA_DPP = 'application/vnd.wfa.dpp';

    /**
     * MIME type 'vnd.wfa.p2p'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WFA_P2P = 'application/vnd.wfa.p2p';

    /**
     * MIME type 'vnd.wfa.wsc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WFA_WSC = 'application/vnd.wfa.wsc';

    /**
     * MIME type 'vnd.windows.devicepairing'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WINDOWS_DEVICEPAIRING = 'application/vnd.windows.devicepairing';

    /**
     * MIME type 'vnd.wmc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WMC = 'application/vnd.wmc';

    /**
     * MIME type 'vnd.wmf.bootstrap'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WMF_BOOTSTRAP = 'application/vnd.wmf.bootstrap';

    /**
     * MIME type 'vnd.wolfram.mathematica'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WOLFRAM_MATHEMATICA = 'application/vnd.wolfram.mathematica';

    /**
     * MIME type 'vnd.wolfram.mathematica.package'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WOLFRAM_MATHEMATICA_PACKAGE = 'application/vnd.wolfram.mathematica.package';

    /**
     * MIME type 'vnd.wolfram.player'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WOLFRAM_PLAYER = 'application/vnd.wolfram.player';

    /**
     * MIME type 'vnd.wordperfect'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WORDPERFECT = 'application/vnd.wordperfect';

    /**
     * MIME type 'vnd.wqd'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WQD = 'application/vnd.wqd';

    /**
     * MIME type 'vnd.wrq-hp3000-labelled'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WRQ_HP3000_LABELLED = 'application/vnd.wrq-hp3000-labelled';

    /**
     * MIME type 'vnd.wt.stf'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WT_STF = 'application/vnd.wt.stf';

    /**
     * MIME type 'vnd.wv.csp+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WV_CSP_XML = 'application/vnd.wv.csp+xml';

    /**
     * MIME type 'vnd.wv.csp+wbxml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WV_CSP_WBXML = 'application/vnd.wv.csp+wbxml';

    /**
     * MIME type 'vnd.wv.ssp+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WV_SSP_XML = 'application/vnd.wv.ssp+xml';

    /**
     * MIME type 'vnd.xacml+json'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XACML_JSON = 'application/vnd.xacml+json';

    /**
     * MIME type 'vnd.xara'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XARA = 'application/vnd.xara';

    /**
     * MIME type 'vnd.xfdl'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XFDL = 'application/vnd.xfdl';

    /**
     * MIME type 'vnd.xfdl.webform'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XFDL_WEBFORM = 'application/vnd.xfdl.webform';

    /**
     * MIME type 'vnd.xmi+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XMI_XML = 'application/vnd.xmi+xml';

    /**
     * MIME type 'vnd.xmpie.cpkg'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XMPIE_CPKG = 'application/vnd.xmpie.cpkg';

    /**
     * MIME type 'vnd.xmpie.dpkg'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XMPIE_DPKG = 'application/vnd.xmpie.dpkg';

    /**
     * MIME type 'vnd.xmpie.plan'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XMPIE_PLAN = 'application/vnd.xmpie.plan';

    /**
     * MIME type 'vnd.xmpie.ppkg'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XMPIE_PPKG = 'application/vnd.xmpie.ppkg';

    /**
     * MIME type 'vnd.xmpie.xlim'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_XMPIE_XLIM = 'application/vnd.xmpie.xlim';

    /**
     * MIME type 'vnd.yamaha.hv-dic'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_HV_DIC = 'application/vnd.yamaha.hv-dic';

    /**
     * MIME type 'vnd.yamaha.hv-script'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_HV_SCRIPT = 'application/vnd.yamaha.hv-script';

    /**
     * MIME type 'vnd.yamaha.hv-voice'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_HV_VOICE = 'application/vnd.yamaha.hv-voice';

    /**
     * MIME type 'vnd.yamaha.openscoreformat.osfpvg+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_OPENSCOREFORMAT_OSFPVG_XML = 'application/vnd.yamaha.openscoreformat.osfpvg+xml';

    /**
     * MIME type 'vnd.yamaha.openscoreformat'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_OPENSCOREFORMAT = 'application/vnd.yamaha.openscoreformat';

    /**
     * MIME type 'vnd.yamaha.remote-setup'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_REMOTE_SETUP = 'application/vnd.yamaha.remote-setup';

    /**
     * MIME type 'vnd.yamaha.smaf-audio'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_SMAF_AUDIO = 'application/vnd.yamaha.smaf-audio';

    /**
     * MIME type 'vnd.yamaha.smaf-phrase'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_SMAF_PHRASE = 'application/vnd.yamaha.smaf-phrase';

    /**
     * MIME type 'vnd.yamaha.through-ngn'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_THROUGH_NGN = 'application/vnd.yamaha.through-ngn';

    /**
     * MIME type 'vnd.yamaha.tunnel-udpencap'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAMAHA_TUNNEL_UDPENCAP = 'application/vnd.yamaha.tunnel-udpencap';

    /**
     * MIME type 'vnd.yaoweme'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YAOWEME = 'application/vnd.yaoweme';

    /**
     * MIME type 'vnd.yellowriver-custom-menu'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_YELLOWRIVER_CUSTOM_MENU = 'application/vnd.yellowriver-custom-menu';

    /**
     * MIME type 'vnd.youtube.yt'
     *
     * Standards: -
     *
     * @var string
     * @deprecated in favor of video/vnd.youtube.yt
     */
    public const VND_YOUTUBE_YT = 'application/vnd.youtube.yt';

    /**
     * MIME type 'vnd.zul'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ZUL = 'application/vnd.zul';

    /**
     * MIME type 'vnd.zzazz.deck+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_ZZAZZ_DECK_XML = 'application/vnd.zzazz.deck+xml';

    /**
     * MIME type 'voicexml+xml'
     *
     * Standards: RFC4267
     *
     * @see https://www.iana.org/go/rfc4267
     *
     * @var string
     */
    public const VOICEXML_XML = 'application/voicexml+xml';

    /**
     * MIME type 'voucher-cms+json'
     *
     * Standards: RFC8366
     *
     * @see https://www.iana.org/go/rfc8366
     *
     * @var string
     */
    public const VOUCHER_CMS_JSON = 'application/voucher-cms+json';

    /**
     * MIME type 'vq-rtcpxr'
     *
     * Standards: RFC6035
     *
     * @see https://www.iana.org/go/rfc6035
     *
     * @var string
     */
    public const VQ_RTCPXR = 'application/vq-rtcpxr';

    /**
     * MIME type 'wasm'
     *
     * Standards: -
     *
     * @var string
     */
    public const WASM = 'application/wasm';

    /**
     * MIME type 'watcherinfo+xml'
     *
     * Standards: RFC3858
     *
     * @see https://www.iana.org/go/rfc3858
     *
     * @var string
     */
    public const WATCHERINFO_XML = 'application/watcherinfo+xml';

    /**
     * MIME type 'webpush-options+json'
     *
     * Standards: RFC8292
     *
     * @see https://www.iana.org/go/rfc8292
     *
     * @var string
     */
    public const WEBPUSH_OPTIONS_JSON = 'application/webpush-options+json';

    /**
     * MIME type 'whoispp-query'
     *
     * Standards: RFC2957
     *
     * @see https://www.iana.org/go/rfc2957
     *
     * @var string
     */
    public const WHOISPP_QUERY = 'application/whoispp-query';

    /**
     * MIME type 'whoispp-response'
     *
     * Standards: RFC2958
     *
     * @see https://www.iana.org/go/rfc2958
     *
     * @var string
     */
    public const WHOISPP_RESPONSE = 'application/whoispp-response';

    /**
     * MIME type 'widget'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/widgets/#media-type-registration-for-application/widget
     *
     * @var string
     */
    public const WIDGET = 'application/widget';

    /**
     * MIME type 'wita'
     *
     * Standards: -
     *
     * @var string
     */
    public const WITA = 'application/wita';

    /**
     * MIME type 'wordperfect5.1'
     *
     * Standards: -
     *
     * @var string
     */
    public const WORDPERFECT5_1 = 'application/wordperfect5.1';

    /**
     * MIME type 'wsdl+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const WSDL_XML = 'application/wsdl+xml';

    /**
     * MIME type 'wspolicy+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const WSPOLICY_XML = 'application/wspolicy+xml';

    /**
     * MIME type 'x-pki-message'
     *
     * Standards: RFC8894
     *
     * @see https://www.iana.org/go/rfc8894
     *
     * @var string
     */
    public const X_PKI_MESSAGE = 'application/x-pki-message';

    /**
     * MIME type 'x-www-form-urlencoded'
     *
     * Standards: -
     *
     * @var string
     */
    public const X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';

    /**
     * MIME type 'x-x509-ca-cert'
     *
     * Standards: RFC8894
     *
     * @see https://www.iana.org/go/rfc8894
     *
     * @var string
     */
    public const X_X509_CA_CERT = 'application/x-x509-ca-cert';

    /**
     * MIME type 'x-x509-ca-ra-cert'
     *
     * Standards: RFC8894
     *
     * @see https://www.iana.org/go/rfc8894
     *
     * @var string
     */
    public const X_X509_CA_RA_CERT = 'application/x-x509-ca-ra-cert';

    /**
     * MIME type 'x-x509-next-ca-cert'
     *
     * Standards: RFC8894
     *
     * @see https://www.iana.org/go/rfc8894
     *
     * @var string
     */
    public const X_X509_NEXT_CA_CERT = 'application/x-x509-next-ca-cert';

    /**
     * MIME type 'x400-bp'
     *
     * Standards: RFC1494
     *
     * @see https://www.iana.org/go/rfc1494
     *
     * @var string
     */
    public const X400_BP = 'application/x400-bp';

    /**
     * MIME type 'xacml+xml'
     *
     * Standards: RFC7061
     *
     * @see https://www.iana.org/go/rfc7061
     *
     * @var string
     */
    public const XACML_XML = 'application/xacml+xml';

    /**
     * MIME type 'xcap-att+xml'
     *
     * Standards: RFC4825
     *
     * @see https://www.iana.org/go/rfc4825
     *
     * @var string
     */
    public const XCAP_ATT_XML = 'application/xcap-att+xml';

    /**
     * MIME type 'xcap-caps+xml'
     *
     * Standards: RFC4825
     *
     * @see https://www.iana.org/go/rfc4825
     *
     * @var string
     */
    public const XCAP_CAPS_XML = 'application/xcap-caps+xml';

    /**
     * MIME type 'xcap-diff+xml'
     *
     * Standards: RFC5874
     *
     * @see https://www.iana.org/go/rfc5874
     *
     * @var string
     */
    public const XCAP_DIFF_XML = 'application/xcap-diff+xml';

    /**
     * MIME type 'xcap-el+xml'
     *
     * Standards: RFC4825
     *
     * @see https://www.iana.org/go/rfc4825
     *
     * @var string
     */
    public const XCAP_EL_XML = 'application/xcap-el+xml';

    /**
     * MIME type 'xcap-error+xml'
     *
     * Standards: RFC4825
     *
     * @see https://www.iana.org/go/rfc4825
     *
     * @var string
     */
    public const XCAP_ERROR_XML = 'application/xcap-error+xml';

    /**
     * MIME type 'xcap-ns+xml'
     *
     * Standards: RFC4825
     *
     * @see https://www.iana.org/go/rfc4825
     *
     * @var string
     */
    public const XCAP_NS_XML = 'application/xcap-ns+xml';

    /**
     * MIME type 'xcon-conference-info-diff+xml'
     *
     * Standards: RFC6502
     *
     * @see https://www.iana.org/go/rfc6502
     *
     * @var string
     */
    public const XCON_CONFERENCE_INFO_DIFF_XML = 'application/xcon-conference-info-diff+xml';

    /**
     * MIME type 'xcon-conference-info+xml'
     *
     * Standards: RFC6502
     *
     * @see https://www.iana.org/go/rfc6502
     *
     * @var string
     */
    public const XCON_CONFERENCE_INFO_XML = 'application/xcon-conference-info+xml';

    /**
     * MIME type 'xenc+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const XENC_XML = 'application/xenc+xml';

    /**
     * MIME type 'xhtml+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const XHTML_XML = 'application/xhtml+xml';

    /**
     * MIME type 'xliff+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const XLIFF_XML = 'application/xliff+xml';

    /**
     * MIME type 'xml'
     *
     * Standards: RFC7303
     *
     * @see https://www.iana.org/go/rfc7303
     *
     * @var string
     */
    public const XML = 'application/xml';

    /**
     * MIME type 'xml-dtd'
     *
     * Standards: RFC7303
     *
     * @see https://www.iana.org/go/rfc7303
     *
     * @var string
     */
    public const XML_DTD = 'application/xml-dtd';

    /**
     * MIME type 'xml-external-parsed-entity'
     *
     * Standards: RFC7303
     *
     * @see https://www.iana.org/go/rfc7303
     *
     * @var string
     */
    public const XML_EXTERNAL_PARSED_ENTITY = 'application/xml-external-parsed-entity';

    /**
     * MIME type 'xml-patch+xml'
     *
     * Standards: RFC7351
     *
     * @see https://www.iana.org/go/rfc7351
     *
     * @var string
     */
    public const XML_PATCH_XML = 'application/xml-patch+xml';

    /**
     * MIME type 'xmpp+xml'
     *
     * Standards: RFC3923
     *
     * @see https://www.iana.org/go/rfc3923
     *
     * @var string
     */
    public const XMPP_XML = 'application/xmpp+xml';

    /**
     * MIME type 'xop+xml'
     *
     * Standards: -
     *
     * @var string
     */
    public const XOP_XML = 'application/xop+xml';

    /**
     * MIME type 'xslt+xml'
     *
     * Standards: -
     *
     * @see http://www.w3.org/TR/2007/REC-xslt20-20070123/#media-type-registration
     *
     * @var string
     */
    public const XSLT_XML = 'application/xslt+xml';

    /**
     * MIME type 'xv+xml'
     *
     * Standards: RFC4374
     *
     * @see https://www.iana.org/go/rfc4374
     *
     * @var string
     */
    public const XV_XML = 'application/xv+xml';

    /**
     * MIME type 'yang'
     *
     * Standards: RFC6020
     *
     * @see https://www.iana.org/go/rfc6020
     *
     * @var string
     */
    public const YANG = 'application/yang';

    /**
     * MIME type 'yang-data+json'
     *
     * Standards: RFC8040
     *
     * @see https://www.iana.org/go/rfc8040
     *
     * @var string
     */
    public const YANG_DATA_JSON = 'application/yang-data+json';

    /**
     * MIME type 'yang-data+xml'
     *
     * Standards: RFC8040
     *
     * @see https://www.iana.org/go/rfc8040
     *
     * @var string
     */
    public const YANG_DATA_XML = 'application/yang-data+xml';

    /**
     * MIME type 'yang-patch+json'
     *
     * Standards: RFC8072
     *
     * @see https://www.iana.org/go/rfc8072
     *
     * @var string
     */
    public const YANG_PATCH_JSON = 'application/yang-patch+json';

    /**
     * MIME type 'yang-patch+xml'
     *
     * Standards: RFC8072
     *
     * @see https://www.iana.org/go/rfc8072
     *
     * @var string
     */
    public const YANG_PATCH_XML = 'application/yang-patch+xml';

    /**
     * MIME type 'yin+xml'
     *
     * Standards: RFC6020
     *
     * @see https://www.iana.org/go/rfc6020
     *
     * @var string
     */
    public const YIN_XML = 'application/yin+xml';

    /**
     * MIME type 'zip'
     *
     * Standards: -
     *
     * @var string
     */
    public const ZIP = 'application/zip';

    /**
     * MIME type 'zlib'
     *
     * Standards: RFC6713
     *
     * @see https://www.iana.org/go/rfc6713
     *
     * @var string
     */
    public const ZLIB = 'application/zlib';

    /**
     * MIME type 'zstd'
     *
     * Standards: RFC8878
     *
     * @see https://www.iana.org/go/rfc8878
     *
     * @var string
     */
    public const ZSTD = 'application/zstd';
}
