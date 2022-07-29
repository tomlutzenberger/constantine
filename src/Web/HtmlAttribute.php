<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 * @noinspection PhpConstantNamingConventionInspection
 */

namespace TomLutzenberger\Constantine\Web;

/**
 * Collection of HTML tag attributes
 *
 * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
 *
 * @package   TomLutzenberger\Constantine\Web
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class HtmlAttribute
{
    /**
     * HTML tag attribute 'accept'
     *
     * List of types the server accepts, typically a file type.
     *
     * Status: Official
     * Elements: <form>, <input>
     *
     * @var string
     */
    public const ACCEPT = 'accept';

    /**
     * HTML tag attribute 'accept-charset'
     *
     * List of supported charsets.
     *
     * Status: Official
     * Elements: <form>
     *
     * @var string
     */
    public const ACCEPT_CHARSET = 'accept-charset';

    /**
     * HTML tag attribute 'accesskey'
     *
     * Keyboard shortcut to activate or add focus to the element.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ACCESSKEY = 'accesskey';

    /**
     * HTML tag attribute 'action'
     *
     * The URI of a program that processes the information submitted via the
     * form.
     *
     * Status: Official
     * Elements: <form>
     *
     * @var string
     */
    public const ACTION = 'action';

    /**
     * HTML tag attribute 'align'
     *
     * Specifies the horizontal alignment of the element.
     *
     * Status: Official
     * Elements: <applet>, <caption>, <col>, <colgroup>, <hr>, <iframe>, <img>, <table>, <tbody>, <td>, <tfoot> , <th>, <thead>, <tr>
     *
     * @var string
     */
    public const ALIGN = 'align';

    /**
     * HTML tag attribute 'allow'
     *
     * Specifies a feature-policy for the iframe.
     *
     * Status: Official
     * Elements: <iframe>
     *
     * @var string
     */
    public const ALLOW = 'allow';

    /**
     * HTML tag attribute 'alt'
     *
     * Alternative text in case an image can't be displayed.
     *
     * Status: Official
     * Elements: <applet>, <area>, <img>, <input>
     *
     * @var string
     */
    public const ALT = 'alt';

    /**
     * HTML tag attribute 'async'
     *
     * Executes the script asynchronously.
     *
     * Status: Official
     * Elements: <script>
     *
     * @var string
     */
    public const ASYNC = 'async';

    /**
     * HTML tag attribute 'autocapitalize'
     *
     * Sets whether input is automatically capitalized when entered by user
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const AUTOCAPITALIZE = 'autocapitalize';

    /**
     * HTML tag attribute 'autocomplete'
     *
     * Indicates whether controls in this form can by default have their values
     * automatically completed by the browser.
     *
     * Status: Official
     * Elements: <form>, <input>, <select>, <textarea>
     *
     * @var string
     */
    public const AUTOCOMPLETE = 'autocomplete';

    /**
     * HTML tag attribute 'autofocus'
     *
     * The element should be automatically focused after the page loaded.
     *
     * Status: Official
     * Elements: <button>, <input>, <keygen>, <select>, <textarea>
     *
     * @var string
     */
    public const AUTOFOCUS = 'autofocus';

    /**
     * HTML tag attribute 'autoplay'
     *
     * The audio or video should play as soon as possible.
     *
     * Status: Official
     * Elements: <audio>, <video>
     *
     * @var string
     */
    public const AUTOPLAY = 'autoplay';

    /**
     * HTML tag attribute 'background'
     *
     * Specifies the URL of an image file.
     *
     * Status: Official
     * Elements: <body>, <table>, <td>, <th>
     *
     * @var string
     * @deprecated
     */
    public const BACKGROUND = 'background';

    /**
     * HTML tag attribute 'bgcolor'
     *
     * Background color of the element.
     *
     * Status: Official
     * Elements: <body>, <col>, <colgroup>, <marquee>, <table>, <tbody>, <tfoot>, <td>, <th>, <tr>
     *
     * @var string
     * @deprecated
     */
    public const BGCOLOR = 'bgcolor';

    /**
     * HTML tag attribute 'border'
     *
     * The border width.
     *
     * Status: Official
     * Elements: <img>, <object>, <table>
     *
     * @var string
     * @deprecated
     */
    public const BORDER = 'border';

    /**
     * HTML tag attribute 'buffered'
     *
     * Contains the time range of already buffered media.
     *
     * Status: Official
     * Elements: <audio>, <video>
     *
     * @var string
     */
    public const BUFFERED = 'buffered';

    /**
     * HTML tag attribute 'capture'
     *
     * From the Media Capture specification, specifies a new file can be
     * captured.
     *
     * Status: Official
     * Elements: <input>
     *
     * @var string
     */
    public const CAPTURE = 'capture';

    /**
     * HTML tag attribute 'challenge'
     *
     * A challenge string that is submitted along with the public key.
     *
     * Status: Official
     * Elements: <keygen>
     *
     * @var string
     */
    public const CHALLENGE = 'challenge';

    /**
     * HTML tag attribute 'charset'
     *
     * Declares the character encoding of the page or script.
     *
     * Status: Official
     * Elements: <meta>, <script>
     *
     * @var string
     */
    public const CHARSET = 'charset';

    /**
     * HTML tag attribute 'checked'
     *
     * Indicates whether the element should be checked on page load.
     *
     * Status: Official
     * Elements: <command>, <input>
     *
     * @var string
     */
    public const CHECKED = 'checked';

    /**
     * HTML tag attribute 'cite'
     *
     * Contains a URI which points to the source of the quote or change.
     *
     * Status: Official
     * Elements: <blockquote>, <del>, <ins>, <q>
     *
     * @var string
     */
    public const CITE = 'cite';

    /**
     * HTML tag attribute 'class'
     *
     * Often used with CSS to style elements with common properties.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const CLASS_X = 'class';

    /**
     * HTML tag attribute 'code'
     *
     * Specifies the URL of the applet's class file to be loaded and executed.
     *
     * Status: Official
     * Elements: <applet>
     *
     * @var string
     */
    public const CODE = 'code';

    /**
     * HTML tag attribute 'codebase'
     *
     * This attribute gives the absolute or relative URL of the directory where
     * applets' .class files referenced by the code attribute are stored.
     *
     * Status: Official
     * Elements: <applet>
     *
     * @var string
     */
    public const CODEBASE = 'codebase';

    /**
     * HTML tag attribute 'color'
     *
     * This attribute sets the text color using either a named color or a color
     * specified in the hexadecimal #RRGGBB format.
     *
     * Status: Official
     * Elements: <basefont>, <font>, <hr>
     *
     * @var string
     * @deprecated
     */
    public const COLOR = 'color';

    /**
     * HTML tag attribute 'cols'
     *
     * Defines the number of columns in a textarea.
     *
     * Status: Official
     * Elements: <textarea>
     *
     * @var string
     */
    public const COLS = 'cols';

    /**
     * HTML tag attribute 'colspan'
     *
     * The colspan attribute defines the number of columns a cell should span.
     *
     * Status: Official
     * Elements: <td>, <th>
     *
     * @var string
     */
    public const COLSPAN = 'colspan';

    /**
     * HTML tag attribute 'content'
     *
     * A value associated with http-equiv or name depending on the context.
     *
     * Status: Official
     * Elements: <meta>
     *
     * @var string
     */
    public const CONTENT = 'content';

    /**
     * HTML tag attribute 'contenteditable'
     *
     * Indicates whether the element's content is editable.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const CONTENTEDITABLE = 'contenteditable';

    /**
     * HTML tag attribute 'contextmenu'
     *
     * Defines the ID of a <menu> element which will serve as the element's
     * context menu.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     * @deprecated
     */
    public const CONTEXTMENU = 'contextmenu';

    /**
     * HTML tag attribute 'controls'
     *
     * Indicates whether the browser should show playback controls to the user.
     *
     * Status: Official
     * Elements: <audio>, <video>
     *
     * @var string
     */
    public const CONTROLS = 'controls';

    /**
     * HTML tag attribute 'coords'
     *
     * A set of values specifying the coordinates of the hot-spot region.
     *
     * Status: Official
     * Elements: <area>
     *
     * @var string
     */
    public const COORDS = 'coords';

    /**
     * HTML tag attribute 'crossorigin'
     *
     * How the element handles cross-origin requests
     *
     * Status: Official
     * Elements: <audio>, <img>, <link>, <script>, <video>
     *
     * @var string
     */
    public const CROSSORIGIN = 'crossorigin';

    /**
     * HTML tag attribute 'csp'
     *
     * Specifies the Content Security Policy that an embedded document must
     * agree to enforce upon itself.
     *
     * Status: Experimental
     * Elements: <iframe>
     *
     * @var string
     */
    public const CSP = 'csp';

    /**
     * HTML tag attribute 'data'
     *
     * Specifies the URL of the resource.
     *
     * Status: Official
     * Elements: <object>
     *
     * @var string
     */
    public const DATA = 'data';

    /**
     * HTML tag attribute 'data-*'
     *
     * Lets you attach custom attributes to an HTML element.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const DATA_X = 'data-';

    /**
     * HTML tag attribute 'datetime'
     *
     * Indicates the date and time associated with the element.
     *
     * Status: Official
     * Elements: <del>, <ins>, <time>
     *
     * @var string
     */
    public const DATETIME = 'datetime';

    /**
     * HTML tag attribute 'decoding'
     *
     * Indicates the preferred method to decode the image.
     *
     * Status: Official
     * Elements: <img>
     *
     * @var string
     */
    public const DECODING = 'decoding';

    /**
     * HTML tag attribute 'default'
     *
     * Indicates that the track should be enabled unless the user's preferences
     * indicate something different.
     *
     * Status: Official
     * Elements: <track>
     *
     * @var string
     */
    public const DEFAULT = 'default';

    /**
     * HTML tag attribute 'defer'
     *
     * Indicates that the script should be executed after the page has been
     * parsed.
     *
     * Status: Official
     * Elements: <script>
     *
     * @var string
     */
    public const DEFER = 'defer';

    /**
     * HTML tag attribute 'dir'
     *
     * Defines the text direction. Allowed values are ltr (Left-To-Right) or rtl
     * (Right-To-Left)
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const DIR = 'dir';

    /**
     * HTML tag attribute 'dirname'
     *
     * Status: Official
     * Elements: <input>, <textarea>
     *
     * @var string
     */
    public const DIRNAME = 'dirname';

    /**
     * HTML tag attribute 'disabled'
     *
     * Indicates whether the user can interact with the element.
     *
     * Status: Official
     * Elements: <button>, <command>, <fieldset>, <input>, <keygen>, <optgroup>, <option>, <select>, <textarea>
     *
     * @var string
     */
    public const DISABLED = 'disabled';

    /**
     * HTML tag attribute 'download'
     *
     * Indicates that the hyperlink is to be used for downloading a resource.
     *
     * Status: Official
     * Elements: <a>, <area>
     *
     * @var string
     */
    public const DOWNLOAD = 'download';

    /**
     * HTML tag attribute 'draggable'
     *
     * Defines whether the element can be dragged.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const DRAGGABLE = 'draggable';

    /**
     * HTML tag attribute 'enctype'
     *
     * Defines the content type of the form data when the method is POST.
     *
     * Status: Official
     * Elements: <form>
     *
     * @var string
     */
    public const ENCTYPE = 'enctype';

    /**
     * HTML tag attribute 'enterkeyhint'
     *
     * The enterkeyhint specifies what action label (or icon) to present for the
     * enter key on virtual keyboards. The attribute can be used with form
     * controls (such as the value of textarea elements), or in elements in an
     * editing host (e.g., using contenteditable attribute).
     *
     * Status: Experimental
     * Elements: <textarea>, contenteditable
     *
     * @var string
     */
    public const ENTERKEYHINT = 'enterkeyhint';

    /**
     * HTML tag attribute 'for'
     *
     * Describes elements which belongs to this one.
     *
     * Status: Official
     * Elements: <label>, <output>
     *
     * @var string
     */
    public const FOR = 'for';

    /**
     * HTML tag attribute 'form'
     *
     * Indicates the form that is the owner of the element.
     *
     * Status: Official
     * Elements: <button>, <fieldset>, <input>, <keygen>, <label>, <meter>, <object>, <output>, <progress>, <select>, <textarea>
     *
     * @var string
     */
    public const FORM = 'form';

    /**
     * HTML tag attribute 'formaction'
     *
     * Indicates the action of the element, overriding the action defined in the
     * <form>.
     *
     * Status: Official
     * Elements: <input>, <button>
     *
     * @var string
     */
    public const FORMACTION = 'formaction';

    /**
     * HTML tag attribute 'formenctype'
     *
     * If the button/input is a submit button (type="submit"), this attribute
     * sets the encoding type to use during form submission. If this attribute
     * is specified, it overrides the enctype attribute of the button's form
     * owner.
     *
     * Status: Official
     * Elements: <button>, <input>
     *
     * @var string
     */
    public const FORMENCTYPE = 'formenctype';

    /**
     * HTML tag attribute 'formmethod'
     *
     * If the button/input is a submit button (type="submit"), this attribute
     * sets the submission method to use during form submission (GET, POST,
     * etc.). If this attribute is specified, it overrides the method attribute
     * of the button's form owner.
     *
     * Status: Official
     * Elements: <button>, <input>
     *
     * @var string
     */
    public const FORMMETHOD = 'formmethod';

    /**
     * HTML tag attribute 'formnovalidate'
     *
     * If the button/input is a submit button (type="submit"), this boolean
     * attribute specifies that the form is not to be validated when it is
     * submitted. If this attribute is specified, it overrides the novalidate
     * attribute of the button's form owner.
     *
     * Status: Official
     * Elements: <button>, <input>
     *
     * @var string
     */
    public const FORMNOVALIDATE = 'formnovalidate';

    /**
     * HTML tag attribute 'formtarget'
     *
     * If the button/input is a submit button (type="submit"), this attribute
     * specifies the browsing context (for example, tab, window, or inline
     * frame) in which to display the response that is received after submitting
     * the form. If this attribute is specified, it overrides the target
     * attribute of the button's form owner.
     *
     * Status: Official
     * Elements: <button>, <input>
     *
     * @var string
     */
    public const FORMTARGET = 'formtarget';

    /**
     * HTML tag attribute 'headers'
     *
     * IDs of the <th> elements which applies to this element.
     *
     * Status: Official
     * Elements: <td>, <th>
     *
     * @var string
     */
    public const HEADERS = 'headers';

    /**
     * HTML tag attribute 'height'
     *
     * Specifies the height of elements listed here. For all other elements, use
     * the CSS height property.
     *
     * Status: Official
     * Elements: <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
     *
     * @var string
     * @deprecated
     */
    public const HEIGHT = 'height';

    /**
     * HTML tag attribute 'hidden'
     *
     * Prevents rendering of given element, while keeping child elements, e.g.
     * script elements, active.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const HIDDEN = 'hidden';

    /**
     * HTML tag attribute 'high'
     *
     * Indicates the lower bound of the upper range.
     *
     * Status: Official
     * Elements: <meter>
     *
     * @var string
     */
    public const HIGH = 'high';

    /**
     * HTML tag attribute 'href'
     *
     * The URL of a linked resource.
     *
     * Status: Official
     * Elements: <a>, <area>, <base>, <link>
     *
     * @var string
     */
    public const HREF = 'href';

    /**
     * HTML tag attribute 'hreflang'
     *
     * Specifies the language of the linked resource.
     *
     * Status: Official
     * Elements: <a>, <area>, <link>
     *
     * @var string
     */
    public const HREFLANG = 'hreflang';

    /**
     * HTML tag attribute 'http-equiv'
     *
     * Defines a pragma directive.
     *
     * Status: Official
     * Elements: <meta>
     *
     * @var string
     */
    public const HTTP_EQUIV = 'http-equiv';

    /**
     * HTML tag attribute 'icon'
     *
     * Specifies a picture which represents the command.
     *
     * Status: Official
     * Elements: <command>
     *
     * @var string
     */
    public const ICON = 'icon';

    /**
     * HTML tag attribute 'id'
     *
     * Often used with CSS to style a specific element. The value of this
     * attribute must be unique.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ID = 'id';

    /**
     * HTML tag attribute 'importance'
     *
     * Indicates the relative fetch priority for the resource.
     *
     * Status: Experimental
     * Elements: <iframe>, <img>, <link>, <script>
     *
     * @var string
     */
    public const IMPORTANCE = 'importance';

    /**
     * HTML tag attribute 'integrity'
     *
     * Specifies a Subresource Integrity value that allows browsers to verify
     * what they fetch.
     *
     * Status: Official
     * Elements: <link>, <script>
     *
     * @var string
     */
    public const INTEGRITY = 'integrity';

    /**
     * HTML tag attribute 'intrinsicsize'
     *
     * This attribute tells the browser to ignore the actual intrinsic size of
     * the image and pretend it's the size specified in the attribute.
     *
     * Status: Official
     * Elements: <img>
     *
     * @var string
     * @deprecated
     */
    public const INTRINSICSIZE = 'intrinsicsize';

    /**
     * HTML tag attribute 'inputmode'
     *
     * Provides a hint as to the type of data that might be entered by the user
     * while editing the element or its contents. The attribute can be used with
     * form controls (such as the value of textarea elements), or in elements in
     * an editing host (e.g., using contenteditable attribute).
     *
     * Status: Official
     * Elements: <textarea>, contenteditable
     *
     * @var string
     */
    public const INPUTMODE = 'inputmode';

    /**
     * HTML tag attribute 'ismap'
     *
     * Indicates that the image is part of a server-side image map.
     *
     * Status: Official
     * Elements: <img>
     *
     * @var string
     */
    public const ISMAP = 'ismap';

    /**
     * HTML tag attribute 'itemprop'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ITEMPROP = 'itemprop';

    /**
     * HTML tag attribute 'keytype'
     *
     * Specifies the type of key generated.
     *
     * Status: Official
     * Elements: <keygen>
     *
     * @var string
     */
    public const KEYTYPE = 'keytype';

    /**
     * HTML tag attribute 'kind'
     *
     * Specifies the kind of text track.
     *
     * Status: Official
     * Elements: <track>
     *
     * @var string
     */
    public const KIND = 'kind';

    /**
     * HTML tag attribute 'label'
     *
     * Specifies a user-readable title of the element.
     *
     * Status: Official
     * Elements: <optgroup>, <option>, <track>
     *
     * @var string
     */
    public const LABEL = 'label';

    /**
     * HTML tag attribute 'lang'
     *
     * Defines the language used in the element.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const LANG = 'lang';

    /**
     * HTML tag attribute 'language'
     *
     * Defines the script language used in the element.
     *
     * Status: Official
     * Elements: <script>
     *
     * @var string
     * @deprecated
     */
    public const LANGUAGE = 'language';

    /**
     * HTML tag attribute 'loading'
     *
     * Indicates if the element should be loaded lazily (loading="lazy") or
     * loaded immediately (loading="eager").
     *
     * Status: Experimental
     * Elements: <img>, <iframe>
     *
     * @var string
     */
    public const LOADING = 'loading';

    /**
     * HTML tag attribute 'list'
     *
     * Identifies a list of pre-defined options to suggest to the user.
     *
     * Status: Official
     * Elements: <input>
     *
     * @var string
     */
    public const LIST = 'list';

    /**
     * HTML tag attribute 'loop'
     *
     * Indicates whether the media should start playing from the start when it's
     * finished.
     *
     * Status: Official
     * Elements: <audio>, <bgsound>, <marquee>, <video>
     *
     * @var string
     */
    public const LOOP = 'loop';

    /**
     * HTML tag attribute 'low'
     *
     * Indicates the upper bound of the lower range.
     *
     * Status: Official
     * Elements: <meter>
     *
     * @var string
     */
    public const LOW = 'low';

    /**
     * HTML tag attribute 'manifest'
     *
     * Specifies the URL of the document's cache manifest.
     *
     * Status: Official
     * Elements: <html>
     *
     * @var string
     * @deprecated
     */
    public const MANIFEST = 'manifest';

    /**
     * HTML tag attribute 'max'
     *
     * Indicates the maximum value allowed.
     *
     * Status: Official
     * Elements: <input>, <meter>, <progress>
     *
     * @var string
     */
    public const MAX = 'max';

    /**
     * HTML tag attribute 'maxlength'
     *
     * Defines the maximum number of characters allowed in the element.
     *
     * Status: Official
     * Elements: <input>, <textarea>
     *
     * @var string
     */
    public const MAXLENGTH = 'maxlength';

    /**
     * HTML tag attribute 'minlength'
     *
     * Defines the minimum number of characters allowed in the element.
     *
     * Status: Official
     * Elements: <input>, <textarea>
     *
     * @var string
     */
    public const MINLENGTH = 'minlength';

    /**
     * HTML tag attribute 'media'
     *
     * Specifies a hint of the media for which the linked resource was designed.
     *
     * Status: Official
     * Elements: <a>, <area>, <link>, <source>, <style>
     *
     * @var string
     */
    public const MEDIA = 'media';

    /**
     * HTML tag attribute 'method'
     *
     * Defines which HTTP method to use when submitting the form. Can be GET
     * (default) or POST.
     *
     * Status: Official
     * Elements: <form>
     *
     * @var string
     */
    public const METHOD = 'method';

    /**
     * HTML tag attribute 'min'
     *
     * Indicates the minimum value allowed.
     *
     * Status: Official
     * Elements: <input>, <meter>
     *
     * @var string
     */
    public const MIN = 'min';

    /**
     * HTML tag attribute 'multiple'
     *
     * Indicates whether multiple values can be entered in an input of the type
     * email or file.
     *
     * Status: Official
     * Elements: <input>, <select>
     *
     * @var string
     */
    public const MULTIPLE = 'multiple';

    /**
     * HTML tag attribute 'muted'
     *
     * Indicates whether the audio will be initially silenced on page load.
     *
     * Status: Official
     * Elements: <audio>, <video>
     *
     * @var string
     */
    public const MUTED = 'muted';

    /**
     * HTML tag attribute 'name'
     *
     * Name of the element. For example used by the server to identify the
     * fields in form submits.
     *
     * Status: Official
     * Elements: <button>, <form>, <fieldset>, <iframe>, <input>, <keygen>, <object>, <output>, <select>, <textarea>, <map>, <meta>, <param>
     *
     * @var string
     */
    public const NAME = 'name';

    /**
     * HTML tag attribute 'novalidate'
     *
     * This attribute indicates that the form shouldn't be validated when
     * submitted.
     *
     * Status: Official
     * Elements: <form>
     *
     * @var string
     */
    public const NOVALIDATE = 'novalidate';

    /**
     * HTML tag attribute 'onabort'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONABORT = 'onabort';

    /**
     * HTML tag attribute 'onautocomplete'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONAUTOCOMPLETE = 'onautocomplete';

    /**
     * HTML tag attribute 'onautocompleteerror'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONAUTOCOMPLETEERROR = 'onautocompleteerror';

    /**
     * HTML tag attribute 'onblur'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONBLUR = 'onblur';

    /**
     * HTML tag attribute 'oncancel'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONCANCEL = 'oncancel';

    /**
     * HTML tag attribute 'oncanplay'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONCANPLAY = 'oncanplay';

    /**
     * HTML tag attribute 'oncanplaythrough'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONCANPLAYTHROUGH = 'oncanplaythrough';

    /**
     * HTML tag attribute 'onchange'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONCHANGE = 'onchange';

    /**
     * HTML tag attribute 'onclick'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONCLICK = 'onclick';

    /**
     * HTML tag attribute 'onclose'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONCLOSE = 'onclose';

    /**
     * HTML tag attribute 'oncontextmenu'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONCONTEXTMENU = 'oncontextmenu';

    /**
     * HTML tag attribute 'oncuechange'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONCUECHANGE = 'oncuechange';

    /**
     * HTML tag attribute 'ondblclick'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDBLCLICK = 'ondblclick';

    /**
     * HTML tag attribute 'ondrag'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDRAG = 'ondrag';

    /**
     * HTML tag attribute 'ondragend'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDRAGEND = 'ondragend';

    /**
     * HTML tag attribute 'ondragenter'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDRAGENTER = 'ondragenter';

    /**
     * HTML tag attribute 'ondragleave'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDRAGLEAVE = 'ondragleave';

    /**
     * HTML tag attribute 'ondragover'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDRAGOVER = 'ondragover';

    /**
     * HTML tag attribute 'ondragstart'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDRAGSTART = 'ondragstart';

    /**
     * HTML tag attribute 'ondrop'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDROP = 'ondrop';

    /**
     * HTML tag attribute 'ondurationchange'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONDURATIONCHANGE = 'ondurationchange';

    /**
     * HTML tag attribute 'onemptied'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONEMPTIED = 'onemptied';

    /**
     * HTML tag attribute 'onended'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONENDED = 'onended';

    /**
     * HTML tag attribute 'onerror'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONERROR = 'onerror';

    /**
     * HTML tag attribute 'onfocus'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONFOCUS = 'onfocus';

    /**
     * HTML tag attribute 'oninput'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONINPUT = 'oninput';

    /**
     * HTML tag attribute 'oninvalid'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONINVALID = 'oninvalid';

    /**
     * HTML tag attribute 'onkeydown'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONKEYDOWN = 'onkeydown';

    /**
     * HTML tag attribute 'onkeypress'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONKEYPRESS = 'onkeypress';

    /**
     * HTML tag attribute 'onkeyup'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONKEYUP = 'onkeyup';

    /**
     * HTML tag attribute 'onload'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONLOAD = 'onload';

    /**
     * HTML tag attribute 'onloadeddata'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONLOADEDDATA = 'onloadeddata';

    /**
     * HTML tag attribute 'onloadedmetadata'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONLOADEDMETADATA = 'onloadedmetadata';

    /**
     * HTML tag attribute 'onloadstart'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONLOADSTART = 'onloadstart';

    /**
     * HTML tag attribute 'onmousedown'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONMOUSEDOWN = 'onmousedown';

    /**
     * HTML tag attribute 'onmouseenter'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONMOUSEENTER = 'onmouseenter';

    /**
     * HTML tag attribute 'onmouseleave'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONMOUSELEAVE = 'onmouseleave';

    /**
     * HTML tag attribute 'onmousemove'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONMOUSEMOVE = 'onmousemove';

    /**
     * HTML tag attribute 'onmouseout'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONMOUSEOUT = 'onmouseout';

    /**
     * HTML tag attribute 'onmouseover'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONMOUSEOVER = 'onmouseover';

    /**
     * HTML tag attribute 'onmouseup'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONMOUSEUP = 'onmouseup';

    /**
     * HTML tag attribute 'onmousewheel'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONMOUSEWHEEL = 'onmousewheel';

    /**
     * HTML tag attribute 'onpause'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONPAUSE = 'onpause';

    /**
     * HTML tag attribute 'onplay'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONPLAY = 'onplay';

    /**
     * HTML tag attribute 'onplaying'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONPLAYING = 'onplaying';

    /**
     * HTML tag attribute 'onprogress'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONPROGRESS = 'onprogress';

    /**
     * HTML tag attribute 'onratechange'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONRATECHANGE = 'onratechange';

    /**
     * HTML tag attribute 'onreset'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONRESET = 'onreset';

    /**
     * HTML tag attribute 'onresize'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONRESIZE = 'onresize';

    /**
     * HTML tag attribute 'onscroll'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSCROLL = 'onscroll';

    /**
     * HTML tag attribute 'onseeked'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSEEKED = 'onseeked';

    /**
     * HTML tag attribute 'onseeking'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSEEKING = 'onseeking';

    /**
     * HTML tag attribute 'onselect'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSELECT = 'onselect';

    /**
     * HTML tag attribute 'onshow'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSHOW = 'onshow';

    /**
     * HTML tag attribute 'onsort'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSORT = 'onsort';

    /**
     * HTML tag attribute 'onstalled'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSTALLED = 'onstalled';

    /**
     * HTML tag attribute 'onsubmit'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSUBMIT = 'onsubmit';

    /**
     * HTML tag attribute 'onsuspend'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONSUSPEND = 'onsuspend';

    /**
     * HTML tag attribute 'ontimeupdate'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONTIMEUPDATE = 'ontimeupdate';

    /**
     * HTML tag attribute 'ontoggle'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONTOGGLE = 'ontoggle';

    /**
     * HTML tag attribute 'onvolumechange'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONVOLUMECHANGE = 'onvolumechange';

    /**
     * HTML tag attribute 'onwaiting'
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const ONWAITING = 'onwaiting';

    /**
     * HTML tag attribute 'open'
     *
     * Indicates whether the contents are currently visible (in the case of a
     * <details> element) or whether the dialog is active and can be interacted
     * with (in the case of a <dialog> element).
     *
     * Status: Official
     * Elements: <details>, <dialog>
     *
     * @var string
     */
    public const OPEN = 'open';

    /**
     * HTML tag attribute 'optimum'
     *
     * Indicates the optimal numeric value.
     *
     * Status: Official
     * Elements: <meter>
     *
     * @var string
     */
    public const OPTIMUM = 'optimum';

    /**
     * HTML tag attribute 'pattern'
     *
     * Defines a regular expression which the element's value will be validated
     * against.
     *
     * Status: Official
     * Elements: <input>
     *
     * @var string
     */
    public const PATTERN = 'pattern';

    /**
     * HTML tag attribute 'ping'
     *
     * The ping attribute specifies a space-separated list of URLs to be
     * notified if a user follows the hyperlink.
     *
     * Status: Official
     * Elements: <a>, <area>
     *
     * @var string
     */
    public const PING = 'ping';

    /**
     * HTML tag attribute 'placeholder'
     *
     * Provides a hint to the user of what can be entered in the field.
     *
     * Status: Official
     * Elements: <input>, <textarea>
     *
     * @var string
     */
    public const PLACEHOLDER = 'placeholder';

    /**
     * HTML tag attribute 'poster'
     *
     * A URL indicating a poster frame to show until the user plays or seeks.
     *
     * Status: Official
     * Elements: <video>
     *
     * @var string
     */
    public const POSTER = 'poster';

    /**
     * HTML tag attribute 'preload'
     *
     * Indicates whether the whole resource, parts of it or nothing should be
     * preloaded.
     *
     * Status: Official
     * Elements: <audio>, <video>
     *
     * @var string
     */
    public const PRELOAD = 'preload';

    /**
     * HTML tag attribute 'radiogroup'
     *
     * Status: Official
     * Elements: <command>
     *
     * @var string
     */
    public const RADIOGROUP = 'radiogroup';

    /**
     * HTML tag attribute 'readonly'
     *
     * Indicates whether the element can be edited.
     *
     * Status: Official
     * Elements: <input>, <textarea>
     *
     * @var string
     */
    public const READONLY = 'readonly';

    /**
     * HTML tag attribute 'referrerpolicy'
     *
     * Specifies which referrer is sent when fetching the resource.
     *
     * Status: Official
     * Elements: <a>, <area>, <iframe>, <img>, <link>, <script>
     *
     * @var string
     */
    public const REFERRERPOLICY = 'referrerpolicy';

    /**
     * HTML tag attribute 'rel'
     *
     * Specifies the relationship of the target object to the link object.
     *
     * Status: Official
     * Elements: <a>, <area>, <link>
     *
     * @var string
     */
    public const REL = 'rel';

    /**
     * HTML tag attribute 'required'
     *
     * Indicates whether this element is required to fill out or not.
     *
     * Status: Official
     * Elements: <input>, <select>, <textarea>
     *
     * @var string
     */
    public const REQUIRED = 'required';

    /**
     * HTML tag attribute 'reversed'
     *
     * Indicates whether the list should be displayed in descending order
     * instead of an ascending order.
     *
     * Status: Official
     * Elements: <ol>
     *
     * @var string
     */
    public const REVERSED = 'reversed';

    /**
     * HTML tag attribute 'rows'
     *
     * Defines the number of rows in a text area.
     *
     * Status: Official
     * Elements: <textarea>
     *
     * @var string
     */
    public const ROWS = 'rows';

    /**
     * HTML tag attribute 'rowspan'
     *
     * Defines the number of rows a table cell should span over.
     *
     * Status: Official
     * Elements: <td>, <th>
     *
     * @var string
     */
    public const ROWSPAN = 'rowspan';

    /**
     * HTML tag attribute 'sandbox'
     *
     * Stops a document loaded in an iframe from using certain features (such as
     * submitting forms or opening new windows).
     *
     * Status: Official
     * Elements: <iframe>
     *
     * @var string
     */
    public const SANDBOX = 'sandbox';

    /**
     * HTML tag attribute 'scope'
     *
     * Defines the cells that the header test (defined in the th element)
     * relates to.
     *
     * Status: Official
     * Elements: <th>
     *
     * @var string
     */
    public const SCOPE = 'scope';

    /**
     * HTML tag attribute 'scoped'
     *
     * Status: Non-standard
     * Elements: <style>
     *
     * @var string
     * @deprecated
     */
    public const SCOPED = 'scoped';

    /**
     * HTML tag attribute 'selected'
     *
     * Defines a value which will be selected on page load.
     *
     * Status: Official
     * Elements: <option>
     *
     * @var string
     */
    public const SELECTED = 'selected';

    /**
     * HTML tag attribute 'shape'
     *
     * Status: Official
     * Elements: <a>, <area>
     *
     * @var string
     */
    public const SHAPE = 'shape';

    /**
     * HTML tag attribute 'size'
     *
     * Defines the width of the element (in pixels). If the element's type
     * attribute is text or password then it's the number of characters.
     *
     * Status: Official
     * Elements: <input>, <select>
     *
     * @var string
     */
    public const SIZE = 'size';

    /**
     * HTML tag attribute 'sizes'
     *
     * Status: Official
     * Elements: <link>, <img>, <source>
     *
     * @var string
     */
    public const SIZES = 'sizes';

    /**
     * HTML tag attribute 'slot'
     *
     * Assigns a slot in a shadow DOM shadow tree to an element.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const SLOT = 'slot';

    /**
     * HTML tag attribute 'span'
     *
     * Status: Official
     * Elements: <col>, <colgroup>
     *
     * @var string
     */
    public const SPAN = 'span';

    /**
     * HTML tag attribute 'spellcheck'
     *
     * Indicates whether spell checking is allowed for the element.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const SPELLCHECK = 'spellcheck';

    /**
     * HTML tag attribute 'src'
     *
     * The URL of the embeddable content.
     *
     * Status: Official
     * Elements: <audio>, <embed>, <iframe>, <img>, <input>, <script>, <source>, <track>, <video>
     *
     * @var string
     */
    public const SRC = 'src';

    /**
     * HTML tag attribute 'srcdoc'
     *
     * Status: Official
     * Elements: <iframe>
     *
     * @var string
     */
    public const SRCDOC = 'srcdoc';

    /**
     * HTML tag attribute 'srclang'
     *
     * Status: Official
     * Elements: <track>
     *
     * @var string
     */
    public const SRCLANG = 'srclang';

    /**
     * HTML tag attribute 'srcset'
     *
     * One or more responsive image candidates.
     *
     * Status: Official
     * Elements: <img>, <source>
     *
     * @var string
     */
    public const SRCSET = 'srcset';

    /**
     * HTML tag attribute 'start'
     *
     * Defines the first number if other than 1.
     *
     * Status: Official
     * Elements: <ol>
     *
     * @var string
     */
    public const START = 'start';

    /**
     * HTML tag attribute 'step'
     *
     * Status: Official
     * Elements: <input>
     *
     * @var string
     */
    public const STEP = 'step';

    /**
     * HTML tag attribute 'style'
     *
     * Defines CSS styles which will override styles previously set.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const STYLE = 'style';

    /**
     * HTML tag attribute 'summary'
     *
     * Status: Official
     * Elements: <table>
     *
     * @var string
     * @deprecated
     */
    public const SUMMARY = 'summary';

    /**
     * HTML tag attribute 'tabindex'
     *
     * Overrides the browser's default tab order and follows the one specified
     * instead.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const TABINDEX = 'tabindex';

    /**
     * HTML tag attribute 'target'
     *
     * Specifies where to open the linked document (in the case of an <a>
     * element) or where to display the response received (in the case of a
     * <form> element)
     *
     * Status: Official
     * Elements: <a>, <area>, <base>, <form>
     *
     * @var string
     */
    public const TARGET = 'target';

    /**
     * HTML tag attribute 'title'
     *
     * Text to be displayed in a tooltip when hovering over the element.
     *
     * Status: Official
     * Elements: global
     *
     * @var string
     */
    public const TITLE = 'title';

    /**
     * HTML tag attribute 'translate'
     *
     * Specify whether an element's attribute values and the values of its Text
     * node children are to be translated when the page is localized, or whether
     * to leave them unchanged.
     *
     * Status: Experimental
     * Elements: global
     *
     * @var string
     */
    public const TRANSLATE = 'translate';

    /**
     * HTML tag attribute 'type'
     *
     * Defines the type of the element.
     *
     * Status: Official
     * Elements: <button>, <input>, <command>, <embed>, <object>, <script>, <source>, <style>, <menu>, <link>
     *
     * @var string
     */
    public const TYPE = 'type';

    /**
     * HTML tag attribute 'usemap'
     *
     * Status: Official
     * Elements: <img>, <input>, <object>
     *
     * @var string
     */
    public const USEMAP = 'usemap';

    /**
     * HTML tag attribute 'value'
     *
     * Defines a default value which will be displayed in the element on page
     * load.
     *
     * Status: Official
     * Elements: <button>, <data>, <input>, <li>, <meter>, <option>, <progress>, <param>
     *
     * @var string
     */
    public const VALUE = 'value';

    /**
     * HTML tag attribute 'width'
     *
     * For the elements listed here, this establishes the element's width.
     *
     * Status: Official
     * Elements: <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
     *
     * @var string
     */
    public const WIDTH = 'width';

    /**
     * HTML tag attribute 'wrap'
     *
     * Indicates whether the text should be wrapped.
     *
     * Status: Official
     * Elements: <textarea>
     *
     * @var string
     */
    public const WRAP = 'wrap';
}
