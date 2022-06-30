<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\File;

/**
 * Collection of official IANA font MIME types
 *
 * @see https://www.iana.org/assignments/media-types/media-types.xhtml
 *
 * @package   TomLutzenberger\Constantine\File
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class MimeTypeFont
{
    /**
     * MIME type 'collection'
     *
     * Standards: RFC8081
     *
     * @var string
     * @see https://www.iana.org/go/rfc8081
     */
    public const COLLECTION = 'font/collection';


    /**
     * MIME type 'otf'
     *
     * Standards: RFC8081
     *
     * @var string
     * @see https://www.iana.org/go/rfc8081
     */
    public const OTF = 'font/otf';


    /**
     * MIME type 'sfnt'
     *
     * Standards: RFC8081
     *
     * @var string
     * @see https://www.iana.org/go/rfc8081
     */
    public const SFNT = 'font/sfnt';


    /**
     * MIME type 'ttf'
     *
     * Standards: RFC8081
     *
     * @var string
     * @see https://www.iana.org/go/rfc8081
     */
    public const TTF = 'font/ttf';


    /**
     * MIME type 'woff'
     *
     * Standards: RFC8081
     *
     * @var string
     * @see https://www.iana.org/go/rfc8081
     */
    public const WOFF = 'font/woff';


    /**
     * MIME type 'woff2'
     *
     * Standards: RFC8081
     *
     * @var string
     * @see https://www.iana.org/go/rfc8081
     */
    public const WOFF2 = 'font/woff2';
}
