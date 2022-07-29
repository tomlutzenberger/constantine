<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Protocol;

/**
 * Collection of HTTP status codes
 *
 * @see https://www.iana.org/assignments/http-status-codes/http-status-codes.xhtml
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status
 * @see https://httpstatuses.com/
 *
 * @package   TomLutzenberger\Constantine\Protocol
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class HttpStatusCode
{
    /**
     * Status Code: Continue
     *
     * The initial part of a request has been received and has not yet been
     * rejected by the server. The server intends to send a final response after
     * the request has been fully received and acted upon.
     *
     * @see https://httpstatuses.com/100
     *
     * @var int
     */
    public const CONTINUE = 100;

    /**
     * Status Code: Switching Protocols
     *
     * The server understands and is willing to comply with the client's
     * request, via the Upgrade header field, for a change in the application
     * protocol being used on this connection.
     *
     * @see https://httpstatuses.com/101
     *
     * @var int
     */
    public const SWITCHING_PROTOCOLS = 101;

    /**
     * Status Code: Processing
     *
     * An interim response used to inform the client that the server has
     * accepted the complete request, but has not yet completed it.
     *
     * @see https://httpstatuses.com/102
     *
     * @var int
     */
    public const PROCESSING = 102;

    /**
     * Status Code: OK
     *
     * The request has succeeded.
     *
     * @see https://httpstatuses.com/200
     *
     * @var int
     */
    public const OK = 200;

    /**
     * Status Code: Created
     *
     * The request has been fulfilled and has resulted in one or more new
     * resources being created.
     *
     * @see https://httpstatuses.com/201
     *
     * @var int
     */
    public const CREATED = 201;

    /**
     * Status Code: Accepted
     *
     * The request has been accepted for processing, but the processing has not
     * been completed. The request might or might not eventually be acted upon,
     * as it might be disallowed when processing actually takes place.
     *
     * @see https://httpstatuses.com/202
     *
     * @var int
     */
    public const ACCEPTED = 202;

    /**
     * Status Code: Non-authoritative Information
     *
     * The request was successful but the enclosed payload has been modified
     * from that of the origin server's 200 OK response by a transforming proxy.
     *
     * @see https://httpstatuses.com/203
     *
     * @var int
     */
    public const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * Status Code: No Content
     *
     * The server has successfully fulfilled the request and that there is no
     * additional content to send in the response payload body.
     *
     * @see https://httpstatuses.com/204
     *
     * @var int
     */
    public const NO_CONTENT = 204;

    /**
     * Status Code: Reset Content
     *
     * The server has fulfilled the request and desires that the user agent
     * reset the "document view", which caused the request to be sent, to its
     * original state as received from the origin server.
     *
     * @see https://httpstatuses.com/205
     *
     * @var int
     */
    public const RESET_CONTENT = 205;

    /**
     * Status Code: Partial Content
     *
     * The server is successfully fulfilling a range request for the target
     * resource by transferring one or more parts of the selected representation
     * that correspond to the satisfiable ranges found in the request's Range
     * header field.
     *
     * @see https://httpstatuses.com/206
     *
     * @var int
     */
    public const PARTIAL_CONTENT = 206;

    /**
     * Status Code: Multi-Status
     *
     * A Multi-Status response conveys information about multiple resources in
     * situations where multiple status codes might be appropriate.
     *
     * @see https://httpstatuses.com/207
     *
     * @var int
     */
    public const MULTI_STATUS = 207;

    /**
     * Status Code: Already Reported
     *
     * Used inside a DAV: propstat response element to avoid enumerating the
     * internal members of multiple bindings to the same collection repeatedly.
     *
     * @see https://httpstatuses.com/208
     *
     * @var int
     */
    public const ALREADY_REPORTED = 208;

    /**
     * Status Code: IM Used
     *
     * The server has fulfilled a GET request for the resource, and the response
     * is a representation of the result of one or more instance-manipulations
     * applied to the current instance.
     *
     * @see https://httpstatuses.com/226
     *
     * @var int
     */
    public const IM_USED = 226;

    /**
     * Status Code: Multiple Choices
     *
     * The target resource has more than one representation, each with its own
     * more specific identifier, and information about the alternatives is being
     * provided so that the user (or user agent) can select a preferred
     * representation by redirecting its request to one or more of those
     * identifiers.
     *
     * @see https://httpstatuses.com/300
     *
     * @var int
     */
    public const MULTIPLE_CHOICES = 300;

    /**
     * Status Code: Moved Permanently
     *
     * The target resource has been assigned a new permanent URI and any future
     * references to this resource ought to use one of the enclosed URIs.
     *
     * @see https://httpstatuses.com/301
     *
     * @var int
     */
    public const MOVED_PERMANENTLY = 301;

    /**
     * Status Code: Found
     *
     * The target resource resides temporarily under a different URI. Since the
     * redirection might be altered on occasion, the client ought to continue to
     * use the effective request URI for future requests.
     *
     * @see https://httpstatuses.com/302
     *
     * @var int
     */
    public const FOUND = 302;

    /**
     * Status Code: See Other
     *
     * The server is redirecting the user agent to a different resource, as
     * indicated by a URI in the Location header field, which is intended to
     * provide an indirect response to the original request.
     *
     * @see https://httpstatuses.com/303
     *
     * @var int
     */
    public const SEE_OTHER = 303;

    /**
     * Status Code: Not Modified
     *
     * A conditional GET or HEAD request has been received and would have
     * resulted in a 200 OK response if it were not for the fact that the
     * condition evaluated to false.
     *
     * @see https://httpstatuses.com/304
     *
     * @var int
     */
    public const NOT_MODIFIED = 304;

    /**
     * Status Code: Use Proxy
     *
     * Defined in a previous version of this specification and is now
     * deprecated, due to security concerns regarding in-band configuration of a
     * proxy.
     *
     * @see https://httpstatuses.com/305
     *
     * @var int
     */
    public const USE_PROXY = 305;

    /**
     * Status Code: Temporary Redirect
     *
     * The target resource resides temporarily under a different URI and the
     * user agent MUST NOT change the request method if it performs an automatic
     * redirection to that URI.
     *
     * @see https://httpstatuses.com/307
     *
     * @var int
     */
    public const TEMPORARY_REDIRECT = 307;

    /**
     * Status Code: Permanent Redirect
     *
     * The target resource has been assigned a new permanent URI and any future
     * references to this resource ought to use one of the enclosed URIs.
     *
     * @see https://httpstatuses.com/308
     *
     * @var int
     */
    public const PERMANENT_REDIRECT = 308;

    /**
     * Status Code: Bad Request
     *
     * The server cannot or will not process the request due to something that
     * is perceived to be a client error (e.g., malformed request syntax,
     * invalid request message framing, or deceptive request routing).
     *
     * @see https://httpstatuses.com/400
     *
     * @var int
     */
    public const BAD_REQUEST = 400;

    /**
     * Status Code: Unauthorized
     *
     * The request has not been applied because it lacks valid authentication
     * credentials for the target resource.
     *
     * @see https://httpstatuses.com/401
     *
     * @var int
     */
    public const UNAUTHORIZED = 401;

    /**
     * Status Code: Payment Required
     *
     * Reserved for future use.
     *
     * @see https://httpstatuses.com/402
     *
     * @var int
     */
    public const PAYMENT_REQUIRED = 402;

    /**
     * Status Code: Forbidden
     *
     * The server understood the request but refuses to authorize it.
     *
     * @see https://httpstatuses.com/403
     *
     * @var int
     */
    public const FORBIDDEN = 403;

    /**
     * Status Code: Not Found
     *
     * The origin server did not find a current representation for the target
     * resource or is not willing to disclose that one exists.
     *
     * @see https://httpstatuses.com/404
     *
     * @var int
     */
    public const NOT_FOUND = 404;

    /**
     * Status Code: Method Not Allowed
     *
     * The method received in the request-line is known by the origin server but
     * not supported by the target resource.
     *
     * @see https://httpstatuses.com/405
     *
     * @var int
     */
    public const METHOD_NOT_ALLOWED = 405;

    /**
     * Status Code: Not Acceptable
     *
     * The target resource does not have a current representation that would be
     * acceptable to the user agent, according to the proactive negotiation
     * header fields received in the request, and the server is unwilling to
     * supply a default representation.
     *
     * @see https://httpstatuses.com/406
     *
     * @var int
     */
    public const NOT_ACCEPTABLE = 406;

    /**
     * Status Code: Proxy Authentication Required
     *
     * Similar to 401 Unauthorized, but it indicates that the client needs to
     * authenticate itself in order to use a proxy.
     *
     * @see https://httpstatuses.com/407
     *
     * @var int
     */
    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * Status Code: Request Timeout
     *
     * The server did not receive a complete request message within the time
     * that it was prepared to wait.
     *
     * @see https://httpstatuses.com/408
     *
     * @var int
     */
    public const REQUEST_TIMEOUT = 408;

    /**
     * Status Code: Conflict
     *
     * The request could not be completed due to a conflict with the current
     * state of the target resource. This code is used in situations where the
     * user might be able to resolve the conflict and resubmit the request.
     *
     * @see https://httpstatuses.com/409
     *
     * @var int
     */
    public const CONFLICT = 409;

    /**
     * Status Code: Gone
     *
     * The target resource is no longer available at the origin server and that
     * this condition is likely to be permanent.
     *
     * @see https://httpstatuses.com/410
     *
     * @var int
     */
    public const GONE = 410;

    /**
     * Status Code: Length Required
     *
     * The server refuses to accept the request without a defined
     * Content-Length.
     *
     * @see https://httpstatuses.com/411
     *
     * @var int
     */
    public const LENGTH_REQUIRED = 411;

    /**
     * Status Code: Precondition Failed
     *
     * One or more conditions given in the request header fields evaluated to
     * false when tested on the server.
     *
     * @see https://httpstatuses.com/412
     *
     * @var int
     */
    public const PRECONDITION_FAILED = 412;

    /**
     * Status Code: Payload Too Large
     *
     * The server is refusing to process a request because the request payload
     * is larger than the server is willing or able to process.
     *
     * @see https://httpstatuses.com/413
     *
     * @var int
     */
    public const PAYLOAD_TOO_LARGE = 413;

    /**
     * Status Code: Request-URI Too Long
     *
     * The server is refusing to service the request because the request-target
     * is longer than the server is willing to interpret.
     *
     * @see https://httpstatuses.com/414
     *
     * @var int
     */
    public const REQUEST_URI_TOO_LONG = 414;

    /**
     * Status Code: Unsupported Media Type
     *
     * The origin server is refusing to service the request because the payload
     * is in a format not supported by this method on the target resource.
     *
     * @see https://httpstatuses.com/415
     *
     * @var int
     */
    public const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * Status Code: Requested Range Not Satisfiable
     *
     * None of the ranges in the request's Range header field overlap the
     * current extent of the selected resource or that the set of ranges
     * requested has been rejected due to invalid ranges or an excessive request
     * of small or overlapping ranges.
     *
     * @see https://httpstatuses.com/416
     *
     * @var int
     */
    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;

    /**
     * Status Code: Expectation Failed
     *
     * The expectation given in the request's Expect header field could not be
     * met by at least one of the inbound servers.
     *
     * @see https://httpstatuses.com/417
     *
     * @var int
     */
    public const EXPECTATION_FAILED = 417;

    /**
     * Status Code: I'm a teapot
     *
     * Any attempt to brew coffee with a teapot should result in the error code
     * "418 I'm a teapot". The resulting entity body MAY be short and stout.
     *
     * @see https://httpstatuses.com/418
     *
     * @var int
     */
    public const IM_A_TEAPOT = 418;

    /**
     * Status Code: Misdirected Request
     *
     * The request was directed at a server that is not able to produce a
     * response. This can be sent by a server that is not configured to produce
     * responses for the combination of scheme and authority that are included
     * in the request URI.
     *
     * @see https://httpstatuses.com/421
     *
     * @var int
     */
    public const MISDIRECTED_REQUEST = 421;

    /**
     * Status Code: Unprocessable Entity
     *
     * The server understands the content type of the request entity (hence a
     * 415 Unsupported Media Type status code is inappropriate), and the syntax
     * of the request entity is correct (thus a 400 Bad Request status code is
     * inappropriate) but was unable to process the contained instructions.
     *
     * @see https://httpstatuses.com/422
     *
     * @var int
     */
    public const UNPROCESSABLE_ENTITY = 422;

    /**
     * Status Code: Locked
     *
     * The source or destination resource of a method is locked.
     *
     * @see https://httpstatuses.com/423
     *
     * @var int
     */
    public const LOCKED = 423;

    /**
     * Status Code: Failed Dependency
     *
     * The method could not be performed on the resource because the requested
     * action depended on another action and that action failed.
     *
     * @see https://httpstatuses.com/424
     *
     * @var int
     */
    public const FAILED_DEPENDENCY = 424;

    /**
     * Status Code: Upgrade Required
     *
     * The server refuses to perform the request using the current protocol but
     * might be willing to do so after the client upgrades to a different
     * protocol.
     *
     * @see https://httpstatuses.com/426
     *
     * @var int
     */
    public const UPGRADE_REQUIRED = 426;

    /**
     * Status Code: Precondition Required
     *
     * The origin server requires the request to be conditional.
     *
     * @see https://httpstatuses.com/428
     *
     * @var int
     */
    public const PRECONDITION_REQUIRED = 428;

    /**
     * Status Code: Too Many Requests
     *
     * The user has sent too many requests in a given amount of time ("rate
     * limiting").
     *
     * @see https://httpstatuses.com/429
     *
     * @var int
     */
    public const TOO_MANY_REQUESTS = 429;

    /**
     * Status Code: Request Header Fields Too Large
     *
     * The server is unwilling to process the request because its header fields
     * are too large. The request MAY be resubmitted after reducing the size of
     * the request header fields.
     *
     * @see https://httpstatuses.com/431
     *
     * @var int
     */
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * Status Code: Connection Closed Without Response
     *
     * A non-standard status code used to instruct nginx to close the connection
     * without sending a response to the client, most commonly used to deny
     * malicious or malformed requests.
     *
     * @see https://httpstatuses.com/444
     *
     * @var int
     */
    public const CONNECTION_CLOSED_WITHOUT_RESPONSE = 444;

    /**
     * Status Code: Unavailable For Legal Reasons
     *
     * The server is denying access to the resource as a consequence of a legal
     * demand.
     *
     * @see https://httpstatuses.com/451
     *
     * @var int
     */
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    /**
     * Status Code: Client Closed Request
     *
     * A non-standard status code introduced by nginx for the case when a client
     * closes the connection while nginx is processing the request.
     *
     * @see https://httpstatuses.com/499
     *
     * @var int
     */
    public const CLIENT_CLOSED_REQUEST = 499;

    /**
     * Status Code: Internal Server Error
     *
     * The server encountered an unexpected condition that prevented it from
     * fulfilling the request.
     *
     * @see https://httpstatuses.com/500
     *
     * @var int
     */
    public const INTERNAL_SERVER_ERROR = 500;

    /**
     * Status Code: Not Implemented
     *
     * The server does not support the functionality required to fulfill the
     * request.
     *
     * @see https://httpstatuses.com/501
     *
     * @var int
     */
    public const NOT_IMPLEMENTED = 501;

    /**
     * Status Code: Bad Gateway
     *
     * The server, while acting as a gateway or proxy, received an invalid
     * response from an inbound server it accessed while attempting to fulfill
     * the request.
     *
     * @see https://httpstatuses.com/502
     *
     * @var int
     */
    public const BAD_GATEWAY = 502;

    /**
     * Status Code: Service Unavailable
     *
     * The server is currently unable to handle the request due to a temporary
     * overload or scheduled maintenance, which will likely be alleviated after
     * some delay.
     *
     * @see https://httpstatuses.com/503
     *
     * @var int
     */
    public const SERVICE_UNAVAILABLE = 503;

    /**
     * Status Code: Gateway Timeout
     *
     * The server, while acting as a gateway or proxy, did not receive a timely
     * response from an upstream server it needed to access in order to complete
     * the request.
     *
     * @see https://httpstatuses.com/504
     *
     * @var int
     */
    public const GATEWAY_TIMEOUT = 504;

    /**
     * Status Code: HTTP Version Not Supported
     *
     * The server does not support, or refuses to support, the major version of
     * HTTP that was used in the request message.
     *
     * @see https://httpstatuses.com/505
     *
     * @var int
     */
    public const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * Status Code: Variant Also Negotiates
     *
     * The server has an internal configuration error: the chosen variant
     * resource is configured to engage in transparent content negotiation
     * itself, and is therefore not a proper end point in the negotiation
     * process.
     *
     * @see https://httpstatuses.com/506
     *
     * @var int
     */
    public const VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * Status Code: Insufficient Storage
     *
     * The method could not be performed on the resource because the server is
     * unable to store the representation needed to successfully complete the
     * request.
     *
     * @see https://httpstatuses.com/507
     *
     * @var int
     */
    public const INSUFFICIENT_STORAGE = 507;

    /**
     * Status Code: Loop Detected
     *
     * The server terminated an operation because it encountered an infinite
     * loop while processing a request with "Depth: infinity". This status
     * indicates that the entire operation failed.
     *
     * @see https://httpstatuses.com/508
     *
     * @var int
     */
    public const LOOP_DETECTED = 508;

    /**
     * Status Code: Not Extended
     *
     * The policy for accessing the resource has not been met in the request.
     * The server should send back all the information necessary for the client
     * to issue an extended request.
     *
     * @see https://httpstatuses.com/510
     *
     * @var int
     */
    public const NOT_EXTENDED = 510;

    /**
     * Status Code: Network Authentication Required
     *
     * The client needs to authenticate to gain network access.
     *
     * @see https://httpstatuses.com/511
     *
     * @var int
     */
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * Status Code: Network Connect Timeout Error
     *
     * This status code is not specified in any RFCs, but is used by some HTTP
     * proxies to signal a network connect timeout behind the proxy to a client
     * in front of the proxy.
     *
     * @see https://httpstatuses.com/599
     *
     * @var int
     */
    public const NETWORK_CONNECT_TIMEOUT_ERROR = 599;
}
