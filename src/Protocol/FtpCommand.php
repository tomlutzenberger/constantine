<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 */

namespace TomLutzenberger\Constantine\Protocol;

/**
 * Collection of FTP commands
 *
 * @see       https://datatracker.ietf.org/doc/html/rfc697
 * @see       https://datatracker.ietf.org/doc/html/rfc737
 * @see       https://datatracker.ietf.org/doc/html/rfc743
 * @see       https://datatracker.ietf.org/doc/html/rfc775
 * @see       https://datatracker.ietf.org/doc/html/rfc959
 * @see       https://datatracker.ietf.org/doc/html/rfc1639
 * @see       https://datatracker.ietf.org/doc/html/rfc2228
 * @see       https://datatracker.ietf.org/doc/html/rfc2389
 * @see       https://datatracker.ietf.org/doc/html/rfc2428
 * @see       https://datatracker.ietf.org/doc/html/rfc2640
 * @see       https://datatracker.ietf.org/doc/html/rfc3659
 * @see       https://datatracker.ietf.org/doc/html/rfc7151
 * @see       https://en.wikipedia.org/wiki/List_of_FTP_commands
 *
 * @package   TomLutzenberger\Constantine\Protocol
 * @copyright 2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class FtpCommand
{
    /**
     * FTP command ABOR
     *
     * Abort an active file transfer.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const ABORT = 'ABOR';


    /**
     * FTP command ACCT
     *
     * Telnet string identifying the user's account.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const ACCOUNT  = 'ACCT';


    /**
     * FTP command HOST
     *
     * Identify desired virtual host on server, by name.
     *
     * Standards: RFC7151
     *
     * @var string
     */
    public const ADDR_HOST = 'HOST';


    /**
     * FTP command LPRT
     *
     * Specifies a long address and port to which the server should connect.
     *
     * Standards: RFC1639
     *
     * @var string
     */
    public const ADDR_HOST_PORT_LONG = 'LPRT';


    /**
     * FTP command PORT
     *
     * Specifies an address and port to which the server should connect.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const ADDR_PORT = 'PORT';


    /**
     * FTP command ALLO
     *
     * Allocate sufficient disk space to receive a file.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const ALLOCATE  = 'ALLO';


    /**
     * FTP command APPE
     *
     * Append (with create)
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const APPEND  = 'APPE';


    /**
     * FTP command AUTH
     *
     * Authentication/Security Mechanism
     *
     * Standards: RFC2228
     *
     * @var string
     */
    public const AUTH = 'AUTH';


    /**
     * FTP command ADAT
     *
     * Authentication/Security Data
     *
     * Standards: RFC2228
     *
     * @var string
     */
    public const AUTH_SEC_DATA = 'ADAT';


    /**
     * FTP command PASS
     *
     * Authentication password.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const AUTH_PASS = 'PASS';


    /**
     * FTP command USER
     *
     * Authentication username.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const AUTH_USER = 'USER';


    /**
     * FTP command AVBL
     *
     * Get the available space
     *
     * Standards: Expired draft of "Streamlined FTP Command Extensions"
     *
     * @var string
     * @see https://datatracker.ietf.org/doc/draft-peterson-streamlined-ftp-command-extensions/
     */
    public const AVAILABLE = 'AVBL';


    /**
     * FTP command PBSZ
     *
     * Protection Buffer Size
     *
     * Standards: RFC2228
     *
     * @var string
     */
    public const BUFFER_SIZE = 'PBSZ';


    /**
     * FTP command CDUP
     *
     * Change to Parent Directory.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const CD_UP = 'CDUP';


    /**
     * FTP command CCC
     *
     * Clear Command Channel
     *
     * Standards: RFC2228
     *
     * @var string
     */
    public const CLEAR_CMD_CHANNEL = 'CCC';


    /**
     * FTP command CSID
     *
     * Client / Server Identification
     *
     * Standards: Expired draft of "Streamlined FTP Command Extensions"
     *
     * @var string
     * @see https://datatracker.ietf.org/doc/draft-peterson-streamlined-ftp-command-extensions/
     */
    public const CLIENT_SERVER_ID = 'CSID';


    /**
     * FTP command CWD
     *
     * Change working directory.
     *
     * Standards: RFC697
     *
     * @var string
     */
    public const CWD = 'CWD';


    /**
     * FTP command DSIZ
     *
     * Get the directory size
     *
     * Standards: Expired draft of "Streamlined FTP Command Extensions"
     *
     * @var string
     * @see https://datatracker.ietf.org/doc/draft-peterson-streamlined-ftp-command-extensions/
     */
    public const DIR_SIZE = 'DSIZ';


    /**
     * FTP command RETR
     *
     * Retrieve a copy of the file
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const FILE_COPY = 'RETR';


    /**
     * FTP command MDTM
     *
     * Return the last-modified time of a specified file.
     *
     * Standards: RFC3659
     *
     * @var string
     */
    public const FILE_MTIME = 'MDTM';


    /**
     * FTP command MFCT
     *
     * Modify the creation time of a file.
     *
     * Standards: Expired draft of "'MFMT', 'MFCT', and 'MFF' Command Extensions for FTP"
     *
     * @var string
     */
    public const FILE_MOD_CTIME = 'MFCT';


    /**
     * FTP command MFF
     *
     * Modify fact (the last modification time, creation time,
     * UNIX group/owner/mode of a file).
     *
     * Standards: Expired draft of "'MFMT', 'MFCT', and 'MFF' Command Extensions for FTP"
     *
     * @var string
     */
    public const FILE_MOD_FACT = 'MFF';


    /**
     * FTP command MFMT
     *
     * Modify the last modification time of a file.
     *
     * Standards: Expired draft of "'MFMT', 'MFCT', and 'MFF' Command Extensions for FTP"
     *
     * @var string
     */
    public const FILE_MOD_MTIME = 'MFMT';


    /**
     * FTP command SIZE
     *
     * Return the size of a file.
     *
     * Standards: RFC3659
     *
     * @var string
     */
    public const FILE_SIZE = 'SIZE';


    /**
     * FTP command STOR
     *
     * Accept the data and to store the data as a file at the server site
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const FILE_STORE = 'STOR';


    /**
     * FTP command STOU
     *
     * Store file uniquely.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const FILE_STORE_UNIQUE = 'STOU';


    /**
     * FTP command HELP
     *
     * Returns usage documentation on a command if specified, else a general help document is returned.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const HELP = 'HELP';


    /**
     * FTP command LANG
     *
     * Language Negotiation
     *
     * Standards: RFC2640
     *
     * @var string
     */
    public const LANG = 'LANG';


    /**
     * FTP command LIST
     *
     * Returns information of a file or directory if specified, else information
     * of the current working directory is returned.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const LIST = 'LIST';


    /**
     * FTP command FEAT
     *
     * Get the feature list implemented by the server.
     *
     * Standards: RFC2389
     *
     * @var string
     */
    public const LIST_FEATURE = 'FEAT';


    /**
     * FTP command NLST
     *
     * Returns a list of file names in a specified directory.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const LIST_FILE = 'NLST';


    /**
     * FTP command MKD
     *
     * Make directory.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const MAKE_DIR = 'MKD';


    /**
     * FTP command MLSD
     *
     * Lists the contents of a directory in a standardized machine-readable format.
     *
     * Standards: RFC3659
     *
     * @var string
     */
    public const MLIST_DIR = 'MLSD';


    /**
     * FTP command MLST
     *
     * Provides data about exactly the object named on its command line in a
     * standardized machine-readable format.
     *
     * Standards: RFC3659
     *
     * @var string
     */
    public const MLIST_OBJ_DATA = 'MLST';


    /**
     * FTP command MODE
     *
     * Sets the transfer mode (Stream, Block, or Compressed).
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const MODE = 'MODE';


    /**
     * FTP command PASV
     *
     * Enter passive mode.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const MODE_PASSIVE = 'PASV';


    /**
     * FTP command EPSV
     *
     * Enter extended passive mode.
     *
     * Standards: RFC2428
     *
     * @var string
     */
    public const MODE_PASSIVE_EXT = 'EPSV';


    /**
     * FTP command LPSV
     *
     * Enter long passive mode.
     *
     * Standards: RFC1639
     *
     * @var string
     */
    public const MODE_PASSIVE_LONG = 'LPSV';


    /**
     * FTP command SPSV
     *
     * Use single port passive mode (only one TCP port number for both control
     * connections and passive-mode data connections)
     *
     * Standards: FTP Extension Allowing IP Forwarding (NATs)
     *
     * @var string
     */
    public const MODE_PASSIVE_SINGLE = 'SPSV';


    /**
     * FTP command SMNT
     *
     * Mount file structure.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const MOUNT = 'SMNT';


    /**
     * FTP command NOOP
     *
     * No operation (dummy packet; used mostly on keepalives).
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const NOOP = 'NOOP';


    /**
     * FTP command OPTS
     *
     * Select options for a feature (for example OPTS UTF8 ON).
     *
     * Standards: RFC2389
     *
     * @var string
     */
    public const OPTIONS = 'OPTS';


    /**
     * FTP command CONF
     *
     * Confidentiality Protection Command
     *
     * Standards: RFC2228
     *
     * @var string
     */
    public const PROT_CONFIDENTIAL = 'CONF';


    /**
     * FTP command MIC
     *
     * Integrity Protected Command
     *
     * Standards: RFC2228
     *
     * @var string
     */
    public const PROT_INTEGRITY = 'MIC';


    /**
     * FTP command PROT
     *
     * Data Channel Protection Level.
     *
     * Standards: RFC2228
     *
     * @var string
     */
    public const PROT_LEVEL = 'PROT';


    /**
     * FTP command ENC
     *
     * Privacy Protected Channel
     *
     * Standards: RFC2228
     *
     * @var string
     */
    public const PROT_PRIVACY = 'ENC';


    /**
     * FTP command EPRT
     *
     * Specifies an extended address and port to which the server should connect.
     *
     * Standards: RFC2428
     *
     * @var string
     */
    public const PROTOCOL_EXT = 'EPRT';


    /**
     * FTP command PWD
     *
     * Print working directory. Returns the current directory of the host.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const PWD = 'PWD';


    /**
     * FTP command QUIT
     *
     * Disconnect.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const QUIT = 'QUIT';


    /**
     * FTP command REIN
     *
     * Re-initializes the connection.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const RE_INIT = 'REIN';


    /**
     * FTP command RNFR
     *
     * Rename from.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const RENAME_FROM = 'RNFR';


    /**
     * FTP command RNTO
     *
     * Rename to.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const RENAME_TO = 'RNTO';


    /**
     * FTP command REST
     *
     * Restart transfer from the specified point.
     *
     * Standards: RFC3659
     *
     * @var string
     */
    public const RESTART = 'REST';


    /**
     * FTP command RMD
     *
     * Remove a directory.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const RM_DIR = 'RMD';


    /**
     * FTP command RMDA
     *
     * Remove a directory tree
     *
     * Standards: Expired draft of "Streamlined FTP Command Extensions"
     *
     * @var string
     * @see https://datatracker.ietf.org/doc/draft-peterson-streamlined-ftp-command-extensions/
     */
    public const RM_DIR_TREE = 'RMDA';


    /**
     * FTP command DELETE
     *
     * Delete file.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const RM_FILE = 'DELE';


    /**
     * FTP command XSEN
     *
     * Send to terminal
     *
     * Standards: RFC737
     *
     * @var string
     */
    public const SEND = 'XSEN';


    /**
     * FTP command XSEM
     *
     * Send, mail if cannot
     *
     * Standards: RFC737
     *
     * @var string
     */
    public const SEND_MAIL = 'XSEM';


    /**
     * FTP command SITE
     *
     * Sends site specific commands to remote server (like SITE IDLE 60 or
     * SITE UMASK 002). Inspect SITE HELP output for complete list of supported commands.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const SITE = 'SITE';


    /**
     * FTP command STAT
     *
     * Returns information on the server status, including the status of the current connection
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const STATUS = 'STAT';


    /**
     * FTP command STRU
     *
     * Set file transfer structure.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const STRUCTURE = 'STRU';


    /**
     * FTP command SYST
     *
     * Return system type.
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const SYSTEM_TYPE = 'SYST';


    /**
     * FTP command THMB
     *
     * Get a thumbnail of a remote image file
     *
     * Standards: Expired draft of "Streamlined FTP Command Extensions"
     *
     * @var string
     * @see https://datatracker.ietf.org/doc/draft-peterson-streamlined-ftp-command-extensions/
     */
    public const THUMBNAIL = 'THMB';


    /**
     * FTP command TYPE
     *
     * Sets the transfer mode (ASCII/Binary).
     *
     * Standards: RFC959
     *
     * @var string
     */
    public const TYPE = 'TYPE';


    /**
     * FTP command XCUP
     *
     * Change to the parent of the current working directory
     *
     * Standards: RFC775
     *
     * @var string
     */
    public const X_CD_UP = 'XCUP';


    /**
     * FTP command XMKD
     *
     * Make a directory
     *
     * Standards: RFC775
     *
     * @var string
     */
    public const X_MAKE_DIR = 'XMKD';


    /**
     * FTP command XPWD
     *
     * Print the current working directory
     *
     * Standards: RFC775
     *
     * @var string
     */
    public const X_PWD = 'XPWD';


    /**
     * FTP command XRCP
     *
     * Standards: RFC743
     *
     * @var string
     */
    public const X_RECIPIENTS = 'XRCP';


    /**
     * FTP command XRMD
     *
     * Remove the directory
     *
     * Standards: RFC775
     *
     * @var string
     */
    public const X_RM_DIR = 'XRMD';


    /**
     * FTP command XRSQ
     *
     * Standards: RFC743
     *
     * @var string
     */
    public const X_SCHEME = 'XRSQ';
}
