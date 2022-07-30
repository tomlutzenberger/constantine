<?php

/**
 * @noinspection PhpUnused
 */

namespace TomLutzenberger\Constantine\File;

/**
 * Collection of official IANA message MIME types
 *
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 *
 * @package   TomLutzenberger\Constantine\File
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class MimeTypeMessage
{
    /**
     * MIME type 'CPIM'
     *
     * Standards: RFC3862
     *
     * @see https://www.iana.org/go/rfc3862
     *
     * @var string
     */
    public const CPIM = 'message/CPIM';

    /**
     * MIME type 'delivery-status'
     *
     * Standards: RFC1894
     *
     * @see https://www.iana.org/go/rfc1894
     *
     * @var string
     */
    public const DELIVERY_STATUS = 'message/delivery-status';

    /**
     * MIME type 'disposition-notification'
     *
     * Standards: RFC8098
     *
     * @see https://www.iana.org/go/rfc8098
     *
     * @var string
     */
    public const DISPOSITION_NOTIFICATION = 'message/disposition-notification';

    /**
     * MIME type 'example'
     *
     * Standards: RFC4735
     *
     * @see https://www.iana.org/go/rfc4735
     *
     * @var string
     */
    public const EXAMPLE = 'message/example';

    /**
     * MIME type 'external-body'
     *
     * Standards: RFC2045, RFC2046
     *
     * @see https://www.iana.org/go/rfc2045
     * @see https://www.iana.org/go/rfc2046
     *
     * @var string
     */
    public const EXTERNAL_BODY = '';

    /**
     * MIME type 'feedback-report'
     *
     * Standards: RFC5965
     *
     * @see https://www.iana.org/go/rfc5965
     *
     * @var string
     */
    public const FEEDBACK_REPORT = 'message/feedback-report';

    /**
     * MIME type 'global'
     *
     * Standards: RFC6532
     *
     * @see https://www.iana.org/go/rfc6532
     *
     * @var string
     */
    public const GLOBAL = 'message/global';

    /**
     * MIME type 'global-delivery-status'
     *
     * Standards: RFC6533
     *
     * @see https://www.iana.org/go/rfc6533
     *
     * @var string
     */
    public const GLOBAL_DELIVERY_STATUS = 'message/global-delivery-status';

    /**
     * MIME type 'global-disposition-notification'
     *
     * Standards: RFC6533
     *
     * @see https://www.iana.org/go/rfc6533
     *
     * @var string
     */
    public const GLOBAL_DISPOSITION_NOTIFICATION = 'message/global-disposition-notification';

    /**
     * MIME type 'global-headers'
     *
     * Standards: RFC6533
     *
     * @see https://www.iana.org/go/rfc6533
     *
     * @var string
     */
    public const GLOBAL_HEADERS = 'message/global-headers';

    /**
     * MIME type 'http'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-httpbis-messaging-19
     *
     * @var string
     */
    public const HTTP = 'message/http';

    /**
     * MIME type 'imdn+xml'
     *
     * Standards: RFC5438
     *
     * @see https://www.iana.org/go/rfc5438
     *
     * @var string
     */
    public const IMDN_XML = 'message/imdn+xml';

    /**
     * MIME type 'news'
     *
     * Standards: RFC5537
     *
     * @see https://www.iana.org/go/rfc5537
     *
     * @var string
     * @deprecated Obsoleted by RFC5537
     */
    public const NEWS = 'message/news';

    /**
     * MIME type 'partial'
     *
     * Standards: RFC2045, RFC2046
     *
     * @see https://www.iana.org/go/rfc2045
     * @see https://www.iana.org/go/rfc2046
     *
     * @var string
     */
    public const PARTIAL = 'message/partial';

    /**
     * MIME type 's-http'
     *
     * Standards: RFC2660
     *
     * @see https://www.iana.org/go/rfc2660
     * @see https://datatracker.ietf.org/doc/status-change-http-experiments-to-historic
     *
     * @var string
     * @deprecated Obsolete type
     */
    public const S_HTTP = 'message/s-http';

    /**
     * MIME type 'sip'
     *
     * Standards: RFC3261
     *
     * @see https://www.iana.org/go/rfc3261
     *
     * @var string
     */
    public const SIP = 'message/sip';

    /**
     * MIME type 'sipfrag'
     *
     * Standards: RFC3420
     *
     * @see https://www.iana.org/go/rfc3420
     *
     * @var string
     */
    public const SIPFRAG = 'message/sipfrag';

    /**
     * MIME type 'tracking-status'
     *
     * Standards: RFC3886
     *
     * @see https://www.iana.org/go/rfc3886
     *
     * @var string
     */
    public const TRACKING_STATUS = 'message/tracking-status';

    /**
     * MIME type 'vnd.si.simp'
     *
     * Standards: -
     *
     * @var string
     * @deprecated by request
     */
    public const VND_SI_SIMP = 'message/vnd.si.simp';

    /**
     * MIME type 'vnd.wfa.wsc'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_WFA_WSC = 'message/vnd.wfa.wsc';
}
