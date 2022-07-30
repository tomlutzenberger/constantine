<?php

/**
 * @noinspection PhpUnused
 */

namespace TomLutzenberger\Constantine\Protocol;

/**
 * Collection of HTTP methods
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods
 * @see https://en.wikipedia.org/wiki/Hypertext_Transfer_Protocol#Request_methods
 *
 * @package   TomLutzenberger\Constantine\Protocol
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class HttpMethod
{
    /**
     * Method: GET
     *
     * The GET method requests a representation of the specified resource.
     * Requests using GET should only retrieve data.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/GET
     *
     * @var string
     */
    public const GET = 'GET';

    /**
     * Method: HEAD
     *
     * The HEAD method asks for a response identical to a GET request, but
     * without the response body.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/HEAD
     *
     * @var string
     */
    public const HEAD = 'HEAD';

    /**
     * Method: POST
     *
     * The POST method submits an entity to the specified resource, often
     * causing a change in state or side effects on the server.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/POST
     *
     * @var string
     */
    public const POST = 'POST';

    /**
     * Method: PUT
     *
     * The PUT method replaces all current representations of the target
     * resource with the request payload.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/PUT
     *
     * @var string
     */
    public const PUT = 'PUT';

    /**
     * Method: DELETE
     *
     * The DELETE method deletes the specified resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/DELETE
     *
     * @var string
     */
    public const DELETE = 'DELETE';

    /**
     * Method: CONNECT
     *
     * The CONNECT method establishes a tunnel to the server identified by the
     * target resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/CONNECT
     *
     * @var string
     */
    public const CONNECT = 'CONNECT';

    /**
     * Method: OPTIONS
     *
     * The OPTIONS method describes the communication options for the target
     * resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/OPTIONS
     *
     * @var string
     */
    public const OPTIONS = 'OPTIONS';

    /**
     * Method: TRACE
     *
     * The TRACE method performs a message loop-back test along the path to the
     * target resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/TRACE
     *
     * @var string
     */
    public const TRACE = 'TRACE';

    /**
     * Method: PATCH
     *
     * The PATCH method applies partial modifications to a resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods/PATCH
     *
     * @var string
     */
    public const PATCH = 'PATCH';
}
