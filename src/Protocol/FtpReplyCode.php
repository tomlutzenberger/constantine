<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Protocol;

/**
 * Collection of FTP reply codes
 *
 * @see       https://datatracker.ietf.org/doc/html/rfc959
 *
 * @package   TomLutzenberger\Constantine\Protocol
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class FtpReplyCode
{
    /**
     * Reply Code: Restart marker reply
     *
     * In this case, the text is exact and not left to the particular implementation; it must read: MARK yyyy = mmmm
     * Where yyyy is User-process data stream marker, and mmmm server's equivalent marker (note the spaces between
     * markers and "=").
     *
     * @var int
     */
    public const RESTART_MARKER_REPLY = 110;

    /**
     * Reply Code: Service ready in nnn minutes.
     *
     * @var int
     */
    public const SERVICE_READY_IN_NNN_MINUTES = 120;

    /**
     * Reply Code: Data connection already open; transfer starting.
     *
     * @var int
     */
    public const DATA_CONNECTION_ALREADY_OPEN_TRANSFER_STARTING = 125;

    /**
     * Reply Code: File status okay; about to open data connection.
     *
     * @var int
     */
    public const FILE_STATUS_OK_ABOUT_TO_OPEN_DATA_CONNECTION = 150;

    /**
     * Reply Code: Command okay.
     *
     * @var int
     */
    public const COMMAND_OK = 200;

    /**
     * Reply Code: Command not implemented, superfluous at this site.
     *
     * @var int
     */
    public const COMMAND_NOT_IMPLEMENTED_SUPERFLUOUS = 202;

    /**
     * Reply Code: System status, or system help reply.
     *
     * @var int
     */
    public const SYSTEM_STATUS = 211;

    /**
     * Reply Code: Directory status.
     *
     * @var int
     */
    public const DIRECTORY_STATUS = 212;

    /**
     * Reply Code: File status.
     *
     * @var int
     */
    public const FILE_STATUS = 213;

    /**
     * Reply Code: Help message.
     *
     * On how to use the server or the meaning of a particular non-standard command.
     * This reply is useful only to the human user.
     *
     * @var int
     */
    public const HELP_MESSAGE = 214;

    /**
     * Reply Code: NAME system type.
     *
     * Where NAME is an official system name from the list in the Assigned Numbers document.
     *
     * @var int
     */
    public const NAME_SYSTEM_TYPE = 215;

    /**
     * Reply Code: Service ready for new user.
     *
     * @var int
     */
    public const SERVICE_READY_FOR_NEW_USER = 220;

    /**
     * Reply Code: Service closing control connection.
     *
     * Logged out if appropriate.
     *
     * @var int
     */
    public const SERVICE_CLOSING_CONTROL_CONNECTION = 221;

    /**
     * Reply Code: Data connection open; no transfer in progress.
     *
     * @var int
     */
    public const DATA_CONNECTION_OPEN = 225;

    /**
     * Reply Code: Closing data connection.
     *
     * Requested file action successful (for example, file transfer or file abort).
     *
     * @var int
     */
    public const CLOSING_DATA_CONNECTION = 226;

    /**
     * Reply Code: Entering Passive Mode (h1,h2,h3,h4,p1,p2).
     *
     * @var int
     */
    public const ENTERING_PASSIVE_MODE = 227;

    /**
     * Reply Code: User logged in, proceed.
     *
     * @var int
     */
    public const USER_LOGGED_IN_PROCEED = 230;

    /**
     * Reply Code: Requested file action okay, completed.
     *
     * @var int
     */
    public const REQUESTED_FILE_ACTION_OK_COMPLETED = 250;

    /**
     * Reply Code: "PATHNAME" created.
     *
     * @var int
     */
    public const PATHNAME_CREATED = 257;

    /**
     * Reply Code: User name okay, need password.
     *
     * @var int
     */
    public const USERNAME_OK_NEED_PASSWORD = 331;

    /**
     * Reply Code: Need account for login.
     *
     * @var int
     */
    public const NEED_ACCOUNT_FOR_LOGIN = 332;

    /**
     * Reply Code: Requested file action pending further information.
     *
     * @var int
     */
    public const REQUESTED_FILE_ACTION_PENDING = 350;

    /**
     * Reply Code: Service not available, closing control connection.
     *
     * This may be a reply to any command if the service knows it must shut down.
     *
     * @var int
     */
    public const SERVICE_NOT_AVAILABLE_CLOSING_CONTROL_CONNECTION = 421;

    /**
     * Reply Code: Can't open data connection.
     *
     * @var int
     */
    public const CANT_OPEN_DATA_CONNECTION = 425;

    /**
     * Reply Code: Connection closed; transfer aborted.
     *
     * @var int
     */
    public const CONNECTION_CLOSED_TRANSFER_ABORTED = 426;

    /**
     * Reply Code: Requested file action not taken.
     *
     * File unavailable (e.g., file busy).
     *
     * @var int
     */
    public const REQUESTED_FILE_ACTION_NOT_TAKEN = 450;

    /**
     * Reply Code: Requested action aborted: local error in processing.
     *
     * @var int
     */
    public const LOCAL_ERROR = 451;

    /**
     * Reply Code: Requested action not taken.
     *
     * Insufficient storage space in system.
     *
     * @var int
     */
    public const INSUFFICIENT_STORAGE = 452;

    /**
     * Reply Code: Syntax error, command unrecognized.
     *
     * This may include errors such as command line too long.
     *
     * @var int
     */
    public const SYNTAX_ERROR = 500;

    /**
     * Reply Code: Syntax error in parameters or arguments.
     *
     * @var int
     */
    public const SYNTAX_ERROR_PARAM_ARG = 501;

    /**
     * Reply Code: Command not implemented.
     *
     * @var int
     */
    public const COMMAND_NOT_IMPLEMENTED = 502;

    /**
     * Reply Code: Bad sequence of commands.
     *
     * @var int
     */
    public const BAD_SEQUENCE_OF_COMMANDS = 503;

    /**
     * Reply Code: Command not implemented for that parameter.
     *
     * @var int
     */
    public const COMMAND_NOT_IMPLEMENTED_FOR_PARAMETER = 504;

    /**
     * Reply Code: Not logged in.
     *
     * @var int
     */
    public const NOT_LOGGED_IN = 530;

    /**
     * Reply Code: Need account for storing files.
     *
     * @var int
     */
    public const NEED_ACCOUNT = 532;

    /**
     * Reply Code: Requested action not taken.
     *
     * File unavailable (e.g., file not found, no access).
     *
     * @var int
     */
    public const FILE_UNAVAILABLE = 550;

    /**
     * Reply Code: Requested action aborted
     *
     * Page type unknown.
     *
     * @var int
     */
    public const PAGE_TYPE_UNKNOWN = 551;

    /**
     * Reply Code: Requested file action aborted.
     *
     * Exceeded storage allocation (for current directory or dataset).
     *
     * @var int
     */
    public const EXCEEDED_STORAGE_ALLOCATION = 552;

    /**
     * Reply Code: Requested action not taken.
     *
     * File name not allowed.
     *
     * @var int
     */
    public const FILENAME_NOT_ALLOWED = 553;
}
