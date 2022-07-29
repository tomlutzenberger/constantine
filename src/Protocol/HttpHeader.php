<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Protocol;

/**
 * Collection of HTTP Request/Response headers
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers
 * @see https://en.wikipedia.org/wiki/List_of_HTTP_header_fields
 *
 * @package   TomLutzenberger\Constantine\Protocol
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class HttpHeader
{
    /**
     * HTTP header 'WWW-Authenticate'
     *
     * Defines the authentication method that should be used to access a
     * resource.
     *
     * Category: Authentication
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/WWW-Authenticate
     *
     * @var string
     */
    public const WWW_AUTHENTICATE = 'WWW-Authenticate';

    /**
     * HTTP header 'Authorization'
     *
     * Contains the credentials to authenticate a user-agent with a server.
     *
     * Category: Authentication
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Authorization
     *
     * @var string
     */
    public const AUTHORIZATION = 'Authorization';

    /**
     * HTTP header 'Proxy-Authenticate'
     *
     * Defines the authentication method that should be used to access a
     * resource behind a proxy server.
     *
     * Category: Authentication
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Proxy-Authenticate
     *
     * @var string
     */
    public const PROXY_AUTHENTICATE = 'Proxy-Authenticate';

    /**
     * HTTP header 'Proxy-Authorization'
     *
     * Contains the credentials to authenticate a user agent with a proxy
     * server.
     *
     * Category: Authentication
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Proxy-Authorization
     *
     * @var string
     */
    public const PROXY_AUTHORIZATION = 'Proxy-Authorization';

    /**
     * HTTP header 'Age'
     *
     * The time, in seconds, that the object has been in a proxy cache.
     *
     * Category: Caching
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Age
     *
     * @var string
     */
    public const AGE = 'Age';

    /**
     * HTTP header 'Cache-Control'
     *
     * Directives for caching mechanisms in both requests and responses.
     *
     * Category: Caching
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cache-Control
     *
     * @var string
     */
    public const CACHE_CONTROL = 'Cache-Control';

    /**
     * HTTP header 'Clear-Site-Data'
     *
     * Clears browsing data (e.g. cookies, storage, cache) associated with the
     * requesting website.
     *
     * Category: Caching
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Clear-Site-Data
     *
     * @var string
     */
    public const CLEAR_SITE_DATA = 'Clear-Site-Data';

    /**
     * HTTP header 'Expires'
     *
     * The date/time after which the response is considered stale.
     *
     * Category: Caching
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Expires
     *
     * @var string
     */
    public const EXPIRES = 'Expires';

    /**
     * HTTP header 'Pragma'
     *
     * Implementation-specific header that may have various effects anywhere
     * along the request-response chain. Used for backwards compatibility with
     * HTTP/1.0 caches where the Cache-Control header is not yet present.
     *
     * Category: Caching
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Pragma
     *
     * @var string
     */
    public const PRAGMA = 'Pragma';

    /**
     * HTTP header 'Warning'
     *
     * General warning information about possible problems.
     *
     * Category: Caching
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Warning
     *
     * @var string
     * @deprecated
     */
    public const WARNING = 'Warning';

    /**
     * HTTP header 'Accept-CH'
     *
     * Servers can advertise support for Client Hints using the Accept-CH header
     * field or an equivalent HTML <meta> element with http-equiv attribute.
     *
     * Category: Client hints
     * Standard: RFC8942
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-CH
     *
     * @var string
     */
    public const ACCEPT_CH = 'Accept-CH';

    /**
     * HTTP header 'Accept-CH-Lifetime'
     *
     * Servers can ask the client to remember the set of Client Hints that the
     * server supports for a specified period of time, to enable delivery of
     * Client Hints on subsequent requests to the server’s origin.
     *
     * Category: Client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-CH-Lifetime
     *
     * @var string
     * @deprecated
     */
    public const ACCEPT_CH_LIFETIME = 'Accept-CH-Lifetime';

    /**
     * HTTP header 'Sec-CH-UA'
     *
     * User agent's branding and version.
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA
     *
     * @var string
     */
    public const SEC_CH_UA = 'Sec-CH-UA';

    /**
     * HTTP header 'Sec-CH-UA-Arch'
     *
     * User agent's underlying platform architecture.
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA-Arch
     *
     * @var string
     */
    public const SEC_CH_UA_ARCH = 'Sec-CH-UA-Arch';

    /**
     * HTTP header 'Sec-CH-UA-Bitness'
     *
     * User agent's underlying CPU architecture bitness (for example "64" bit).
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA-Bitness
     *
     * @var string
     */
    public const SEC_CH_UA_BITNESS = 'Sec-CH-UA-Bitness';

    /**
     * HTTP header 'Sec-CH-UA-Full-Version'
     *
     * User agent's full semantic version string.
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA-Full-Version
     *
     * @var string
     * @deprecated
     */
    public const SEC_CH_UA_FULL_VERSION = 'Sec-CH-UA-Full-Version';

    /**
     * HTTP header 'Sec-CH-UA-Full-Version-List'
     *
     * Full version for each brand in the user agent's brand list.
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA-Full-Version-List
     *
     * @var string
     */
    public const SEC_CH_UA_FULL_VERSION_LIST = 'Sec-CH-UA-Full-Version-List';

    /**
     * HTTP header 'Sec-CH-UA-Mobile'
     *
     * User agent is running on a mobile device or, more generally, prefers a
     * "mobile" user experience.
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA-Mobile
     *
     * @var string
     */
    public const SEC_CH_UA_MOBILE = 'Sec-CH-UA-Mobile';

    /**
     * HTTP header 'Sec-CH-UA-Model'
     *
     * User agent's device model.
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA-Model
     *
     * @var string
     */
    public const SEC_CH_UA_MODEL = 'Sec-CH-UA-Model';

    /**
     * HTTP header 'Sec-CH-UA-Platform'
     *
     * User agent's underlying operating system/platform.
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA-Platform
     *
     * @var string
     */
    public const SEC_CH_UA_PLATFORM = 'Sec-CH-UA-Platform';

    /**
     * HTTP header 'Sec-CH-UA-Platform-Version'
     *
     * User agent's underlying operating system version.
     *
     * Category: User agent client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-CH-UA-Platform-Version
     *
     * @var string
     */
    public const SEC_CH_UA_PLATFORM_VERSION = 'Sec-CH-UA-Platform-Version';

    /**
     * HTTP header 'Content-DPR'
     *
     * Response header used to confirm the image device to pixel ratio in
     * requests where the DPR client hint was used to select an image resource.
     *
     * Category: Device client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-DPR
     *
     * @var string
     * @deprecated
     */
    public const CONTENT_DPR = 'Content-DPR';

    /**
     * HTTP header 'Device-Memory'
     *
     * Approximate amount of available client RAM memory. This is part of the
     * Device Memory API.
     *
     * Category: Device client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Device-Memory
     *
     * @var string
     * @deprecated
     */
    public const DEVICE_MEMORY = 'Device-Memory';

    /**
     * HTTP header 'DPR'
     *
     * Client device pixel ratio (DPR), which is the number of physical device
     * pixels corresponding to every CSS pixel.
     *
     * Category: Device client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/DPR
     *
     * @var string
     * @deprecated
     */
    public const DPR = 'DPR';

    /**
     * HTTP header 'Viewport-Width'
     *
     * A number that indicates the layout viewport width in CSS pixels. The
     * provided pixel value is a number rounded to the smallest following
     * integer (i.e. ceiling value).
     *
     * Category: Device client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Viewport-Width
     *
     * @var string
     * @deprecated
     */
    public const VIEWPORT_WIDTH = 'Viewport-Width';

    /**
     * HTTP header 'Width'
     *
     * A number that indicates the desired resource width in physical pixels
     * (i.e. intrinsic size of an image).
     *
     * Category: Device client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Width
     *
     * @var string
     * @deprecated
     */
    public const WIDTH = 'Width';

    /**
     * HTTP header 'Downlink'
     *
     * Approximate bandwidth of the client's connection to the server, in Mbps.
     * This is part of the Network Information API.
     *
     * Category: Network client hints
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Downlink
     *
     * @var string
     */
    public const DOWNLINK = 'Downlink';

    /**
     * HTTP header 'ECT'
     *
     * The effective connection type ("network profile") that best matches the
     * connection's latency and bandwidth. This is part of the Network
     * Information API.
     *
     * Category: Network client hints
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/ECT
     *
     * @var string
     */
    public const ECT = 'ECT';

    /**
     * HTTP header 'RTT'
     *
     * Application layer round trip time (RTT) in milliseconds, which includes
     * the server processing time. This is part of the Network Information API.
     *
     * Category: Network client hints
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/RTT
     *
     * @var string
     */
    public const RTT = 'RTT';

    /**
     * HTTP header 'Save-Data'
     *
     * A boolean that indicates the user agent's preference for reduced data
     * usage.
     *
     * Category: Network client hints
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Save-Data
     *
     * @var string
     */
    public const SAVE_DATA = 'Save-Data';

    /**
     * HTTP header 'Last-Modified'
     *
     * The last modification date of the resource, used to compare several
     * versions of the same resource. It is less accurate than ETag, but easier
     * to calculate in some environments. Conditional requests using
     * If-Modified-Since and If-Unmodified-Since use this value to change the
     * behavior of the request.
     *
     * Category: Conditionals
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Last-Modified
     *
     * @var string
     */
    public const LAST_MODIFIED = 'Last-Modified';

    /**
     * HTTP header 'ETag'
     *
     * A unique string identifying the version of the resource. Conditional
     * requests using If-Match and If-None-Match use this value to change the
     * behavior of the request.
     *
     * Category: Conditionals
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/ETag
     *
     * @var string
     */
    public const ETAG = 'ETag';

    /**
     * HTTP header 'If-Match'
     *
     * Makes the request conditional, and applies the method only if the stored
     * resource matches one of the given ETags.
     *
     * Category: Conditionals
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Match
     *
     * @var string
     */
    public const IF_MATCH = 'If-Match';

    /**
     * HTTP header 'If-None-Match'
     *
     * Makes the request conditional, and applies the method only if the stored
     * resource doesn't match any of the given ETags. This is used to update
     * caches (for safe requests), or to prevent uploading a new resource when
     * one already exists.
     *
     * Category: Conditionals
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-None-Match
     *
     * @var string
     */
    public const IF_NONE_MATCH = 'If-None-Match';

    /**
     * HTTP header 'If-Modified-Since'
     *
     * Makes the request conditional, and expects the resource to be transmitted
     * only if it has been modified after the given date. This is used to
     * transmit data only when the cache is out of date.
     *
     * Category: Conditionals
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Modified-Since
     *
     * @var string
     */
    public const IF_MODIFIED_SINCE = 'If-Modified-Since';

    /**
     * HTTP header 'If-Unmodified-Since'
     *
     * Makes the request conditional, and expects the resource to be transmitted
     * only if it has not been modified after the given date. This ensures the
     * coherence of a new fragment of a specific range with previous ones, or to
     * implement an optimistic concurrency control system when modifying
     * existing documents.
     *
     * Category: Conditionals
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Unmodified-Since
     *
     * @var string
     */
    public const IF_UNMODIFIED_SINCE = 'If-Unmodified-Since';

    /**
     * HTTP header 'Vary'
     *
     * Determines how to match request headers to decide whether a cached
     * response can be used rather than requesting a fresh one from the origin
     * server.
     *
     * Category: Conditionals
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Vary
     *
     * @var string
     */
    public const VARY = 'Vary';

    /**
     * HTTP header 'Connection'
     *
     * Controls whether the network connection stays open after the current
     * transaction finishes.
     *
     * Category: Connection management
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Connection
     *
     * @var string
     */
    public const CONNECTION = 'Connection';

    /**
     * HTTP header 'Keep-Alive'
     *
     * Controls how long a persistent connection should stay open.
     *
     * Category: Connection management
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Keep-Alive
     *
     * @var string
     */
    public const KEEP_ALIVE = 'Keep-Alive';

    /**
     * HTTP header 'Accept'
     *
     * Informs the server about the types of data that can be sent back.
     *
     * Category: Content negotiation
     * Standard: RFC2616, RFC7231
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept
     *
     * @var string
     */
    public const ACCEPT = 'Accept';

    /**
     * HTTP header 'Accept-Charset'
     *
     * The Accept-Charset request HTTP header was a header that advertised a
     * client's supported character encodings. It is no longer widely used.
     *
     * Category: Content negotiation
     * Standard: RFC2616
     * Status: Provisional
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Charset
     *
     * @var string
     */
    public const ACCEPT_CHARSET = 'Accept-Charset';

    /**
     * HTTP header 'Accept-Encoding'
     *
     * The encoding algorithm, usually a compression algorithm, that can be used
     * on the resource sent back.
     *
     * Category: Content negotiation
     * Standard: RFC2616, RFC7231
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Encoding
     *
     * @var string
     */
    public const ACCEPT_ENCODING = 'Accept-Encoding';

    /**
     * HTTP header 'Accept-Language'
     *
     * Informs the server about the human language the server is expected to
     * send back. This is a hint and is not necessarily under the full control
     * of the user: the server should always pay attention not to override an
     * explicit user choice (like selecting a language from a dropdown).
     *
     * Category: Content negotiation
     * Standard: RFC2616, RFC7231
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Language
     *
     * @var string
     */
    public const ACCEPT_LANGUAGE = 'Accept-Language';

    /**
     * HTTP header 'Expect'
     *
     * Indicates expectations that need to be fulfilled by the server to
     * properly handle the request.
     *
     * Category: Controls
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Expect
     *
     * @var string
     */
    public const EXPECT = 'Expect';

    /**
     * HTTP header 'Max-Forwards'
     *
     * TBD
     *
     * Category: Controls
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Max-Forwards
     *
     * @var string
     */
    public const MAX_FORWARDS = 'Max-Forwards';

    /**
     * HTTP header 'Cookie'
     *
     * Contains stored HTTP cookies previously sent by the server with the
     * Set-Cookie header.
     *
     * Category: Cookies
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cookie
     *
     * @var string
     */
    public const COOKIE = 'Cookie';

    /**
     * HTTP header 'Set-Cookie'
     *
     * Send cookies from the server to the user-agent.
     *
     * Category: Cookies
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie
     *
     * @var string
     */
    public const SET_COOKIE = 'Set-Cookie';

    /**
     * HTTP header 'Cookie2'
     *
     * Contains an HTTP cookie previously sent by the server with the
     * Set-Cookie2 header, but has been obsoleted. Use Cookie instead.
     *
     * Category: Cookies
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cookie2
     *
     * @var string
     * @deprecated
     */
    public const COOKIE2 = 'Cookie2';

    /**
     * HTTP header 'Set-Cookie2'
     *
     * Sends cookies from the server to the user-agent, but has been obsoleted.
     * Use Set-Cookie instead.
     *
     * Category: Cookies
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie2
     *
     * @var string
     * @deprecated
     */
    public const SET_COOKIE2 = 'Set-Cookie2';

    /**
     * HTTP header 'Access-Control-Allow-Origin'
     *
     * Indicates whether the response can be shared.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Origin
     *
     * @var string
     */
    public const ACCESS_CONTROL_ALLOW_ORIGIN = 'Access-Control-Allow-Origin';

    /**
     * HTTP header 'Access-Control-Allow-Credentials'
     *
     * Indicates whether the response to the request can be exposed when the
     * credentials flag is true.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Credentials
     *
     * @var string
     */
    public const ACCESS_CONTROL_ALLOW_CREDENTIALS = 'Access-Control-Allow-Credentials';

    /**
     * HTTP header 'Access-Control-Allow-Headers'
     *
     * Used in response to a preflight request to indicate which HTTP headers
     * can be used when making the actual request.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Headers
     *
     * @var string
     */
    public const ACCESS_CONTROL_ALLOW_HEADERS = 'Access-Control-Allow-Headers';

    /**
     * HTTP header 'Access-Control-Allow-Methods'
     *
     * Specifies the methods allowed when accessing the resource in response to
     * a preflight request.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Allow-Methods
     *
     * @var string
     */
    public const ACCESS_CONTROL_ALLOW_METHODS = 'Access-Control-Allow-Methods';

    /**
     * HTTP header 'Access-Control-Expose-Headers'
     *
     * Indicates which headers can be exposed as part of the response by listing
     * their names.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Expose-Headers
     *
     * @var string
     */
    public const ACCESS_CONTROL_EXPOSE_HEADERS = 'Access-Control-Expose-Headers';

    /**
     * HTTP header 'Access-Control-Max-Age'
     *
     * Indicates how long the results of a preflight request can be cached.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Max-Age
     *
     * @var string
     */
    public const ACCESS_CONTROL_MAX_AGE = 'Access-Control-Max-Age';

    /**
     * HTTP header 'Access-Control-Request-Headers'
     *
     * Used when issuing a preflight request to let the server know which HTTP
     * headers will be used when the actual request is made.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Request-Headers
     *
     * @var string
     */
    public const ACCESS_CONTROL_HEADERS = 'Access-Control-Request-Headers';

    /**
     * HTTP header 'Access-Control-Request-Method'
     *
     * Used when issuing a preflight request to let the server know which HTTP
     * method will be used when the actual request is made.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Access-Control-Request-Method
     *
     * @var string
     */
    public const ACCESS_CONTROL_METHOD = 'Access-Control-Request-Method';

    /**
     * HTTP header 'Origin'
     *
     * Indicates where a fetch originates from.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Origin
     *
     * @var string
     */
    public const ORIGIN = 'Origin';

    /**
     * HTTP header 'Timing-Allow-Origin'
     *
     * Specifies origins that are allowed to see values of attributes retrieved
     * via features of the Resource Timing API, which would otherwise be
     * reported as zero due to cross-origin restrictions.
     *
     * Category: CORS
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Timing-Allow-Origin
     *
     * @var string
     */
    public const TIMING_ALLOW_ORIGIN = 'Timing-Allow-Origin';

    /**
     * HTTP header 'Content-Disposition'
     *
     * Indicates if the resource transmitted should be displayed inline (default
     * behavior without the header), or if it should be handled like a download
     * and the browser should present a “Save As” dialog.
     *
     * Category: Downloads
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Disposition
     *
     * @var string
     */
    public const CONTENT_DISPOSITION = 'Content-Disposition';

    /**
     * HTTP header 'Content-Length'
     *
     * The size of the resource, in decimal number of bytes.
     *
     * Category: Message body information
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Length
     *
     * @var string
     */
    public const CONTENT_LENGTH = 'Content-Length';

    /**
     * HTTP header 'Content-Type'
     *
     * Indicates the media type of the resource.
     *
     * Category: Message body information
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Type
     *
     * @var string
     */
    public const CONTENT_TYPE = 'Content-Type';

    /**
     * HTTP header 'Content-Encoding'
     *
     * Used to specify the compression algorithm.
     *
     * Category: Message body information
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Encoding
     *
     * @var string
     */
    public const CONTENT_ENCODING = 'Content-Encoding';

    /**
     * HTTP header 'Content-Language'
     *
     * Describes the human language(s) intended for the audience, so that it
     * allows a user to differentiate according to the users' own preferred
     * language.
     *
     * Category: Message body information
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Language
     *
     * @var string
     */
    public const CONTENT_LANGUAGE = 'Content-Language';

    /**
     * HTTP header 'Content-Location'
     *
     * Indicates an alternate location for the returned data.
     *
     * Category: Message body information
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Location
     *
     * @var string
     */
    public const CONTENT_LOCATION = 'Content-Location';

    /**
     * HTTP header 'Forwarded'
     *
     * Contains information from the client-facing side of proxy servers that is
     * altered or lost when a proxy is involved in the path of the request.
     *
     * Category: Proxies
     * Standard: RFC7239
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Forwarded
     *
     * @var string
     */
    public const FORWARDED = 'Forwarded';

    /**
     * HTTP header 'X-Forwarded-For'
     *
     * Identifies the originating IP addresses of a client connecting to a web
     * server through an HTTP proxy or a load balancer.
     *
     * Category: Proxies
     * Standard: -
     * Status: Non-Standard
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Forwarded-For
     *
     * @var string
     */
    public const X_FORWARDED_FOR = 'X-Forwarded-For';

    /**
     * HTTP header 'X-Forwarded-Host'
     *
     * Identifies the original host requested that a client used to connect to
     * your proxy or load balancer.
     *
     * Category: Proxies
     * Standard: -
     * Status: Non-Standard
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Forwarded-Host
     *
     * @var string
     */
    public const X_FORWARDED_HOST = 'X-Forwarded-Host';

    /**
     * HTTP header 'X-Forwarded-Proto'
     *
     * Identifies the protocol (HTTP or HTTPS) that a client used to connect to
     * your proxy or load balancer.
     *
     * Category: Proxies
     * Standard: -
     * Status: Non-Standard
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Forwarded-Proto
     *
     * @var string
     */
    public const X_FORWARDED_PROTO = 'X-Forwarded-Proto';

    /**
     * HTTP header 'Via'
     *
     * Added by proxies, both forward and reverse proxies, and can appear in the
     * request headers and the response headers.
     *
     * Category: Proxies
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Via
     *
     * @var string
     */
    public const VIA = 'Via';

    /**
     * HTTP header 'Location'
     *
     * Indicates the URL to redirect a page to.
     *
     * Category: Redirects
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Location
     *
     * @var string
     */
    public const LOCATION = 'Location';

    /**
     * HTTP header 'From'
     *
     * Contains an Internet email address for a human user who controls the
     * requesting user agent.
     *
     * Category: Request context
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/From
     *
     * @var string
     */
    public const FROM = 'From';

    /**
     * HTTP header 'Host'
     *
     * Specifies the domain name of the server (for virtual hosting), and
     * (optionally) the TCP port number on which the server is listening.
     *
     * Category: Request context
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Host
     *
     * @var string
     */
    public const HOST = 'Host';

    /**
     * HTTP header 'Referer'
     *
     * The address of the previous web page from which a link to the currently
     * requested page was followed.
     *
     * Category: Request context
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referer
     *
     * @var string
     */
    public const REFERER = 'Referer';

    /**
     * HTTP header 'Referrer-Policy'
     *
     * Governs which referrer information sent in the Referer header should be
     * included with requests made.
     *
     * Category: Request context
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Referrer-Policy
     *
     * @var string
     */
    public const REFERRER_POLICY = 'Referrer-Policy';

    /**
     * HTTP header 'User-Agent'
     *
     * Contains a characteristic string that allows the network protocol peers
     * to identify the application type, operating system, software vendor or
     * software version of the requesting software user agent. See also the
     * Firefox user agent string reference.
     *
     * Category: Request context
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/User-Agent
     *
     * @var string
     */
    public const USER_AGENT = 'User-Agent';

    /**
     * HTTP header 'Allow'
     *
     * Lists the set of HTTP request methods supported by a resource.
     *
     * Category: Response context
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Allow
     *
     * @var string
     */
    public const ALLOW = 'Allow';

    /**
     * HTTP header 'Server'
     *
     * Contains information about the software used by the origin server to
     * handle the request.
     *
     * Category: Response context
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Server
     *
     * @var string
     */
    public const SERVER = 'Server';

    /**
     * HTTP header 'Accept-Ranges'
     *
     * Indicates if the server supports range requests, and if so in which unit
     * the range can be expressed.
     *
     * Category: Range requests
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Ranges
     *
     * @var string
     */
    public const ACCEPT_RANGES = 'Accept-Ranges';

    /**
     * HTTP header 'Range'
     *
     * Indicates the part of a document that the server should return.
     *
     * Category: Range requests
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Range
     *
     * @var string
     */
    public const RANGE = 'Range';

    /**
     * HTTP header 'If-Range'
     *
     * Creates a conditional range request that is only fulfilled if the given
     * etag or date matches the remote resource. Used to prevent downloading two
     * ranges from incompatible version of the resource.
     *
     * Category: Range requests
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/If-Range
     *
     * @var string
     */
    public const IF_RANGE = 'If-Range';

    /**
     * HTTP header 'Content-Range'
     *
     * Indicates where in a full body message a partial message belongs.
     *
     * Category: Range requests
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Range
     *
     * @var string
     */
    public const CONTENT_RANGE = 'Content-Range';

    /**
     * HTTP header 'Cross-Origin-Embedder-Policy (COEP)'
     *
     * Allows a server to declare an embedder policy for a given document.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cross-Origin-Embedder-Policy
     *
     * @var string
     */
    public const CROSS_ORIGIN_EMBEDDER_POLICY = 'Cross-Origin-Embedder-Policy';

    /**
     * HTTP header 'Cross-Origin-Opener-Policy (COOP)'
     *
     * Prevents other domains from opening/controlling a window.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cross-Origin-Opener-Policy
     *
     * @var string
     */
    public const CROSS_ORIGIN_OPENER_POLICY = 'Cross-Origin-Opener-Policy';

    /**
     * HTTP header 'Cross-Origin-Resource-Policy (CORP)'
     *
     * Prevents other domains from reading the response of the resources to
     * which this header is applied.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Cross-Origin-Resource-Policy
     *
     * @var string
     */
    public const CROSS_ORIGIN_RESOURCE_POLICY = 'Cross-Origin-Resource-Policy';

    /**
     * HTTP header 'Content-Security-Policy (CSP)'
     *
     * Controls resources the user agent is allowed to load for a given page.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy
     *
     * @var string
     */
    public const CONTENT_SECURITY_POLICY = 'Content-Security-Policy';

    /**
     * HTTP header 'Content-Security-Policy-Report-Only'
     *
     * Allows web developers to experiment with policies by monitoring, but not
     * enforcing, their effects. These violation reports consist of JSON
     * documents sent via an HTTP POST request to the specified URI.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Security-Policy-Report-Only
     *
     * @var string
     */
    public const CONTENT_SECURITY_POLICY_REPORT_ONLY = 'Content-Security-Policy-Report-Only';

    /**
     * HTTP header 'Expect-CT'
     *
     * Allows sites to opt in to reporting and/or enforcement of Certificate
     * Transparency requirements, which prevents the use of mis-issued
     * certificates for that site from going unnoticed. When a site enables the
     * Expect-CT header, they are requesting that Chrome check that any
     * certificate for that site appears in public CT logs.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Expect-CT
     *
     * @var string
     */
    public const EXPECT_CT = 'Expect-CT';

    /**
     * HTTP header 'Feature-Policy'
     *
     * Provides a mechanism to allow and deny the use of browser features in its
     * own frame, and in iframes that it embeds.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Feature-Policy
     *
     * @var string
     */
    public const FEATURE_POLICY = 'Feature-Policy';

    /**
     * HTTP header 'Origin-Isolation'
     *
     * Provides a mechanism to allow web applications to isolate their origins.
     *
     * Category: Security
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Origin-Isolation
     *
     * @var string
     */
    public const ORIGIN_ISOLATION = 'Origin-Isolation';

    /**
     * HTTP header 'Strict-Transport-Security (HSTS)'
     *
     * Force communication using HTTPS instead of HTTP.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Strict-Transport-Security
     *
     * @var string
     */
    public const STRICT_TRANSPORT_SECURITY = 'Strict-Transport-Security';

    /**
     * HTTP header 'Upgrade-Insecure-Requests'
     *
     * Sends a signal to the server expressing the client’s preference for an
     * encrypted and authenticated response, and that it can successfully handle
     * the upgrade-insecure-requests directive.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Upgrade-Insecure-Requests
     *
     * @var string
     */
    public const UPGRADE_INSECURE_REQUESTS = 'Upgrade-Insecure-Requests';

    /**
     * HTTP header 'X-Content-Type-Options'
     *
     * Disables MIME sniffing and forces browser to use the type given in
     * Content-Type.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Content-Type-Options
     *
     * @var string
     */
    public const X_CONTENT_TYPE_OPTIONS = 'X-Content-Type-Options';

    /**
     * HTTP header 'X-Download-Options'
     *
     * The X-Download-Options HTTP header indicates that the browser (Internet
     * Explorer) should not display the option to "Open" a file that has been
     * downloaded from an application, to prevent phishing attacks as the file
     * otherwise would gain access to execute in the context of the application.
     * (Note: related MS Edge bug).
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Download-Options
     *
     * @var string
     */
    public const X_DOWNLOAD_OPTIONS = 'X-Download-Options';

    /**
     * HTTP header 'X-Frame-Options (XFO)'
     *
     * Indicates whether a browser should be allowed to render a page in a
     * <frame>, <iframe>, <embed> or <object>.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Frame-Options
     *
     * @var string
     */
    public const X_FRAME_OPTIONS = 'X-Frame-Options';

    /**
     * HTTP header 'X-Permitted-Cross-Domain-Policies'
     *
     * Specifies if a cross-domain policy file (crossdomain.xml) is allowed. The
     * file may define a policy to grant clients, such as Adobe's Flash Player
     * (now obsolete), Adobe Acrobat, Microsoft Silverlight (now obsolete), or
     * Apache Flex, permission to handle data across domains that would
     * otherwise be restricted due to the Same-Origin Policy. See the
     * Cross-domain Policy File Specification for more information.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Permitted-Cross-Domain-Policies
     *
     * @var string
     */
    public const X_PERMITTED_CROSS_DOMAIN_POLICIES = 'X-Permitted-Cross-Domain-Policies';

    /**
     * HTTP header 'X-Powered-By'
     *
     * May be set by hosting environments or other frameworks and contains
     * information about them while not providing any usefulness to the
     * application or its visitors. Unset this header to avoid exposing
     * potential vulnerabilities.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Powered-By
     *
     * @var string
     */
    public const X_POWERED_BY = 'X-Powered-By';

    /**
     * HTTP header 'X-XSS-Protection'
     *
     * Enables cross-site scripting filtering.
     *
     * Category: Security
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-XSS-Protection
     *
     * @var string
     */
    public const X_XSS_PROTECTION = 'X-XSS-Protection';

    /**
     * HTTP header 'Public-Key-Pins'
     *
     * Associates a specific cryptographic public key with a certain web server
     * to decrease the risk of MITM attacks with forged certificates.
     *
     * Category: HTTP Public Key Pinning (HPKP)
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Public-Key-Pins
     *
     * @var string
     */
    public const PUBLIC_KEY_PINS = 'Public-Key-Pins';

    /**
     * HTTP header 'Public-Key-Pins-Report-Only'
     *
     * Sends reports to the report-uri specified in the header and does still
     * allow clients to connect to the server even if the pinning is violated.
     *
     * Category: HTTP Public Key Pinning (HPKP)
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Public-Key-Pins-Report-Only
     *
     * @var string
     */
    public const PUBLIC_KEY_PINS_REPORT_ONLY = 'Public-Key-Pins-Report-Only';

    /**
     * HTTP header 'Sec-Fetch-Site'
     *
     * It is a request header that indicates the relationship between a request
     * initiator's origin and its target's origin. It is a Structured Header
     * whose value is a token with possible values cross-site, same-origin,
     * same-site, and none.
     *
     * Category: Fetch metadata request headers
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-Fetch-Site
     *
     * @var string
     */
    public const SEC_FETCH_SITE = 'Sec-Fetch-Site';

    /**
     * HTTP header 'Sec-Fetch-Mode'
     *
     * It is a request header that indicates the request's mode to a server. It
     * is a Structured Header whose value is a token with possible values cors,
     * navigate, no-cors, same-origin, and websocket.
     *
     * Category: Fetch metadata request headers
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-Fetch-Mode
     *
     * @var string
     */
    public const SEC_FETCH_MODE = 'Sec-Fetch-Mode';

    /**
     * HTTP header 'Sec-Fetch-User'
     *
     * It is a request header that indicates whether a navigation request was
     * triggered by user activation. It is a Structured Header whose value is a
     * boolean so possible values are ?0 for false and ?1 for true.
     *
     * Category: Fetch metadata request headers
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-Fetch-User
     *
     * @var string
     */
    public const SEC_FETCH_USER = 'Sec-Fetch-User';

    /**
     * HTTP header 'Sec-Fetch-Dest'
     *
     * It is a request header that indicates the request's destination to a
     * server. It is a Structured Header whose value is a token with possible
     * values audio, audioworklet, document, embed, empty, font, image,
     * manifest, object, paintworklet, report, script, serviceworker,
     * sharedworker, style, track, video, worker, and xslt.
     *
     * Category: Fetch metadata request headers
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-Fetch-Dest
     *
     * @var string
     */
    public const SEC_FETCH_DEST = 'Sec-Fetch-Dest';

    /**
     * HTTP header 'Last-Event-ID'
     *
     * TBD
     *
     * Category: Server-sent events
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Last-Event-ID
     *
     * @var string
     */
    public const LAST_EVENT_ID = 'Last-Event-ID';

    /**
     * HTTP header 'NEL'
     *
     * Defines a mechanism that enables developers to declare a network error
     * reporting policy.
     *
     * Category: Server-sent events
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/NEL
     *
     * @var string
     */
    public const NEL = 'NEL';

    /**
     * HTTP header 'Ping-From'
     *
     * TBD
     *
     * Category: Server-sent events
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Ping-From
     *
     * @var string
     */
    public const PING_FROM = 'Ping-From';

    /**
     * HTTP header 'Ping-To'
     *
     * TBD
     *
     * Category: Server-sent events
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Ping-To
     *
     * @var string
     */
    public const PING_TO = 'Ping-To';

    /**
     * HTTP header 'Report-To'
     *
     * Used to specify a server endpoint for the browser to send warning and
     * error reports to.
     *
     * Category: Server-sent events
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Report-To
     *
     * @var string
     */
    public const REPORT_TO = 'Report-To';

    /**
     * HTTP header 'Transfer-Encoding'
     *
     * Specifies the form of encoding used to safely transfer the resource to
     * the user.
     *
     * Category: Transfer coding
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Transfer-Encoding
     *
     * @var string
     */
    public const TRANSFER_ENCODING = 'Transfer-Encoding';

    /**
     * HTTP header 'TE'
     *
     * Specifies the transfer encodings the user agent is willing to accept.
     *
     * Category: Transfer coding
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/TE
     *
     * @var string
     */
    public const TE = 'TE';

    /**
     * HTTP header 'Trailer'
     *
     * Allows the sender to include additional fields at the end of chunked
     * message.
     *
     * Category: Transfer coding
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Trailer
     *
     * @var string
     */
    public const TRAILER = 'Trailer';

    /**
     * HTTP header 'Sec-WebSocket-Key'
     *
     * TBD
     *
     * Category: WebSockets
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-WebSocket-Key
     *
     * @var string
     */
    public const SEC_WEBSOCKET_KEY = 'Sec-WebSocket-Key';

    /**
     * HTTP header 'Sec-WebSocket-Extensions'
     *
     * TBD
     *
     * Category: WebSockets
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-WebSocket-Extensions
     *
     * @var string
     */
    public const SEC_WEBSOCKET_EXTENSIONS = 'Sec-WebSocket-Extensions';

    /**
     * HTTP header 'Sec-WebSocket-Accept'
     *
     * TBD
     *
     * Category: WebSockets
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-WebSocket-Accept
     *
     * @var string
     */
    public const SEC_WEBSOCKET_ACCEPT = 'Sec-WebSocket-Accept';

    /**
     * HTTP header 'Sec-WebSocket-Protocol'
     *
     * TBD
     *
     * Category: WebSockets
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-WebSocket-Protocol
     *
     * @var string
     */
    public const SEC_WEBSOCKET_PROTOCOL = 'Sec-WebSocket-Protocol';

    /**
     * HTTP header 'Sec-WebSocket-Version'
     *
     * TBD
     *
     * Category: WebSockets
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Sec-WebSocket-Version
     *
     * @var string
     */
    public const SEC_WEBSOCKET_VERSION = 'Sec-WebSocket-Version';

    /**
     * HTTP header 'Accept-Push-Policy'
     *
     * A client can express the desired push policy for a request by sending an
     * Accept-Push-Policy header field in the request.
     *
     * Category: Other
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Push-Policy
     *
     * @var string
     */
    public const ACCEPT_PUSH_POLICY = 'Accept-Push-Policy';

    /**
     * HTTP header 'Accept-Signature'
     *
     * A client can send the Accept-Signature header field to indicate intention
     * to take advantage of any available signatures and to indicate what kinds
     * of signatures it supports.
     *
     * Category: Other
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Accept-Signature
     *
     * @var string
     */
    public const ACCEPT_SIGNATURE = 'Accept-Signature';

    /**
     * HTTP header 'Alt-Svc'
     *
     * Used to list alternate ways to reach this service.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Alt-Svc
     *
     * @var string
     */
    public const ALT_SVC = 'Alt-Svc';

    /**
     * HTTP header 'Date'
     *
     * Contains the date and time at which the message was originated.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Date
     *
     * @var string
     */
    public const DATE = 'Date';

    /**
     * HTTP header 'Early-Data'
     *
     * Indicates that the request has been conveyed in TLS early data.
     *
     * Category: Other
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Early-Data
     *
     * @var string
     */
    public const EARLY_DATA = 'Early-Data';

    /**
     * HTTP header 'Large-Allocation'
     *
     * Tells the browser that the page being loaded is going to want to perform
     * a large allocation.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Large-Allocation
     *
     * @var string
     */
    public const LARGE_ALLOCATION = 'Large-Allocation';

    /**
     * HTTP header 'Link'
     *
     * The Link entity-header field provides a means for serializing one or more
     * links in HTTP headers. It is semantically equivalent to the HTML <link>
     * element.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Link
     *
     * @var string
     */
    public const LINK = 'Link';

    /**
     * HTTP header 'Push-Policy'
     *
     * A Push-Policy defines the server behavior regarding push when processing
     * a request.
     *
     * Category: Other
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Push-Policy
     *
     * @var string
     */
    public const PUSH_POLICY = 'Push-Policy';

    /**
     * HTTP header 'Retry-After'
     *
     * Indicates how long the user agent should wait before making a follow-up
     * request.
     *
     * Category: Other
     * Standard: RFC2616, RFC7231
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Retry-After
     *
     * @var string
     */
    public const RETRY_AFTER = 'Retry-After';

    /**
     * HTTP header 'Signature'
     *
     * The Signature header field conveys a list of signatures for an exchange,
     * each one accompanied by information about how to determine the authority
     * of and refresh that signature.
     *
     * Category: Other
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Signature
     *
     * @var string
     */
    public const SIGNATURE = 'Signature';

    /**
     * HTTP header 'Signed-Headers'
     *
     * The Signed-Headers header field identifies an ordered list of response
     * header fields to include in a signature.
     *
     * Category: Other
     * Standard: -
     * Status: Experimental
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Signed-Headers
     *
     * @var string
     */
    public const SIGNED_HEADERS = 'Signed-Headers';

    /**
     * HTTP header 'Server-Timing'
     *
     * Communicates one or more metrics and descriptions for the given
     * request-response cycle.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Server-Timing
     *
     * @var string
     */
    public const SERVER_TIMING = 'Server-Timing';

    /**
     * HTTP header 'Service-Worker-Allowed'
     *
     * Used to remove the path restriction by including this header in the
     * response of the Service Worker script.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Service-Worker-Allowed
     *
     * @var string
     */
    public const SERVICE_WORKER_ALLOWED = 'Service-Worker-Allowed';

    /**
     * HTTP header 'SourceMap'
     *
     * Links generated code to a source map.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/SourceMap
     *
     * @var string
     */
    public const SOURCEMAP = 'SourceMap';

    /**
     * HTTP header 'Tk'
     *
     * The Tk response header indicates the tracking status that applied to the
     * corresponding request.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Tk
     *
     * @var string
     * @deprecated
     */
    public const TK = 'Tk';

    /**
     * HTTP header 'Upgrade'
     *
     * The relevant RFC document for the Upgrade header field is RFC 7230,
     * section 6.7. The standard establishes rules for upgrading or changing to
     * a different protocol on the current client, server, transport protocol
     * connection. For example, this header standard allows a client to change
     * from HTTP 1.1 to HTTP 2.0, assuming the server decides to acknowledge and
     * implement the Upgrade header field. Neither party is required to accept
     * the terms specified in the Upgrade header field. It can be used in both
     * client and server headers. If the Upgrade header field is specified, then
     * the sender MUST also send the Connection header field with the upgrade
     * option specified. For details on the Connection header field please see
     * section 6.1 of the aforementioned RFC.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Upgrade
     *
     * @var string
     */
    public const UPGRADE = 'Upgrade';

    /**
     * HTTP header 'X-DNS-Prefetch-Control'
     *
     * Controls DNS prefetching, a feature by which browsers proactively perform
     * domain name resolution on both links that the user may choose to follow
     * as well as URLs for items referenced by the document, including images,
     * CSS, JavaScript, and so forth.
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-DNS-Prefetch-Control
     *
     * @var string
     */
    public const X_DNS_PREFETCH_CONTROL = 'X-DNS-Prefetch-Control';

    /**
     * HTTP header 'X-Firefox-Spdy'
     *
     * TBD
     *
     * Category: Other
     * Standard: -
     * Status: Non-Standard
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Firefox-Spdy
     *
     * @var string
     * @deprecated
     */
    public const X_FIREFOX_SPDY = 'X-Firefox-Spdy';

    /**
     * HTTP header 'X-Pingback'
     *
     * TBD
     *
     * Category: Other
     * Standard: -
     * Status: Non-Standard
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Pingback
     *
     * @var string
     */
    public const X_PINGBACK = 'X-Pingback';

    /**
     * HTTP header 'X-Requested-With'
     *
     * TBD
     *
     * Category: Other
     * Standard: -
     * Status: Official
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Requested-With
     *
     * @var string
     */
    public const X_REQUESTED_WITH = 'X-Requested-With';

    /**
     * HTTP header 'X-Robots-Tag'
     *
     * The X-Robots-Tag HTTP header is used to indicate how a web page is to be
     * indexed within public search engine results. The header is effectively
     * equivalent to {@example <meta name="robots" content="...">}.
     *
     * Category: Other
     * Standard: -
     * Status: Non-Standard
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-Robots-Tag
     *
     * @var string
     */
    public const X_ROBOTS_TAG = 'X-Robots-Tag';

    /**
     * HTTP header 'X-UA-Compatible'
     *
     * Used by Internet Explorer to signal which document mode to use.
     *
     * Category: Other
     * Standard: -
     * Status: Non-Standard
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/X-UA-Compatible
     *
     * @var string
     */
    public const X_UA_COMPATIBLE = 'X-UA-Compatible';
}
