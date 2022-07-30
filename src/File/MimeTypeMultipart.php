<?php

/**
 * @noinspection PhpUnused
 */

namespace TomLutzenberger\Constantine\File;

/**
 * Collection of official IANA multipart MIME types
 *
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 *
 * @package   TomLutzenberger\Constantine\File
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class MimeTypeMultipart
{
    /**
     * MIME type 'alternative'
     *
     * Standards: RFC2046, RFC2045
     *
     * @see https://www.iana.org/go/rfc2046
     * @see https://www.iana.org/go/rfc2045
     *
     * @var string
     */
    public const ALTERNATIVE = 'multipart/alternative';

    /**
     * MIME type 'appledouble'
     *
     * Standards: -
     *
     * @var string
     */
    public const APPLEDOUBLE = 'multipart/appledouble';

    /**
     * MIME type 'byteranges'
     *
     * Standards: -
     *
     * @see https://www.iana.org/go/draft-ietf-httpbis-semantics-19
     *
     * @var string
     */
    public const BYTERANGES = 'multipart/byteranges';

    /**
     * MIME type 'digest'
     *
     * Standards: RFC2046, RFC2045
     *
     * @see https://www.iana.org/go/rfc2046
     * @see https://www.iana.org/go/rfc2045
     *
     * @var string
     */
    public const DIGEST = 'multipart/alternative';

    /**
     * MIME type 'encrypted'
     *
     * Standards: RFC1847
     *
     * @see https://www.iana.org/go/rfc1847
     *
     * @var string
     */
    public const ENCRYPTED = 'multipart/encrypted';

    /**
     * MIME type 'example'
     *
     * Standards: RFC4735
     *
     * @see https://www.iana.org/go/rfc4735
     *
     * @var string
     */
    public const EXAMPLE = 'multipart/example';

    /**
     * MIME type 'form-data'
     *
     * Standards: RFC7578
     *
     * @see https://www.iana.org/go/rfc7578
     *
     * @var string
     */
    public const FORM_DATA = 'multipart/form-data';

    /**
     * MIME type 'header-set'
     *
     * Standards: -
     *
     * @var string
     */
    public const HEADER_SET = 'multipart/header-set';

    /**
     * MIME type 'mixed'
     *
     * Standards: RFC2046, RFC2045
     *
     * @see https://www.iana.org/go/rfc2046
     * @see https://www.iana.org/go/rfc2045
     *
     * @var string
     */
    public const MIXED = 'multipart/mixed';

    /**
     * MIME type 'multilingual'
     *
     * Standards: RFC8255
     *
     * @see https://www.iana.org/go/rfc8255
     *
     * @var string
     */
    public const MULTILINGUAL = 'multipart/multilingual';

    /**
     * MIME type 'parallel'
     *
     * Standards: RFC2046, RFC2045
     *
     * @see https://www.iana.org/go/rfc2046
     * @see https://www.iana.org/go/rfc2045
     *
     * @var string
     */
    public const PARALLEL = 'multipart/parallel';

    /**
     * MIME type 'related'
     *
     * Standards: RFC2387
     *
     * @see https://www.iana.org/go/rfc2387
     *
     * @var string
     */
    public const RELATED = 'multipart/related';

    /**
     * MIME type 'report'
     *
     * Standards: RFC6522
     *
     * @see https://www.iana.org/go/rfc6522
     *
     * @var string
     */
    public const REPORT = 'multipart/report';

    /**
     * MIME type 'signed'
     *
     * Standards: RFC1847
     *
     * @see https://www.iana.org/go/rfc1847
     *
     * @var string
     */
    public const SIGNED = 'multipart/signed';

    /**
     * MIME type 'vnd.bint.med-plus'
     *
     * Standards: -
     *
     * @var string
     */
    public const VND_BINT_MED_PLUS = 'multipart/vnd.bint.med-plus';

    /**
     * MIME type 'voice-message'
     *
     * Standards: RFC3801
     *
     * @see https://www.iana.org/go/rfc3801
     *
     * @var string
     */
    public const VOICE_MESSAGE = 'multipart/voice-message';

    /**
     * MIME type 'x-mixed-replace'
     *
     * Standards: -
     *
     * @var string
     */
    public const X_MIXED_REPLACE = 'multipart/x-mixed-replace';
}
