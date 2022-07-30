<?php

/**
 * @noinspection PhpUnused
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
     * Elements: <form>, <input>
     * Status: Official
     *
     * @var string
     */
    public const ACCEPT = 'accept';

    /**
     * HTML tag attribute 'accept-charset'
     *
     * List of supported charsets.
     *
     * Elements: <form>
     * Status: Official
     *
     * @var string
     */
    public const ACCEPT_CHARSET = 'accept-charset';

    /**
     * HTML tag attribute 'accesskey'
     *
     * Keyboard shortcut to activate or add focus to the element.
     *
     * Elements: global
     * Status: Official
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
     * Elements: <form>
     * Status: Official
     *
     * @var string
     */
    public const ACTION = 'action';

    /**
     * HTML tag attribute 'align'
     *
     * Specifies the horizontal alignment of the element.
     *
     * Elements: <applet>, <caption>, <col>, <colgroup>, <hr>, <iframe>, <img>, <table>, <tbody>, <td>, <tfoot> , <th>, <thead>, <tr>
     * Status: Official
     *
     * @var string
     */
    public const ALIGN = 'align';

    /**
     * HTML tag attribute 'allow'
     *
     * Specifies a feature-policy for the iframe.
     *
     * Elements: <iframe>
     * Status: Official
     *
     * @var string
     */
    public const ALLOW = 'allow';

    /**
     * HTML tag attribute 'alt'
     *
     * Alternative text in case an image can't be displayed.
     *
     * Elements: <applet>, <area>, <img>, <input>
     * Status: Official
     *
     * @var string
     */
    public const ALT = 'alt';

    /**
     * HTML tag attribute 'async'
     *
     * Executes the script asynchronously.
     *
     * Elements: <script>
     * Status: Official
     *
     * @var string
     */
    public const ASYNC = 'async';

    /**
     * HTML tag attribute 'autocapitalize'
     *
     * Sets whether input is automatically capitalized when entered by user
     *
     * Elements: global
     * Status: Official
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
     * Elements: <form>, <input>, <select>, <textarea>
     * Status: Official
     *
     * @var string
     */
    public const AUTOCOMPLETE = 'autocomplete';

    /**
     * HTML tag attribute 'autofocus'
     *
     * The element should be automatically focused after the page loaded.
     *
     * Elements: <button>, <input>, <keygen>, <select>, <textarea>
     * Status: Official
     *
     * @var string
     */
    public const AUTOFOCUS = 'autofocus';

    /**
     * HTML tag attribute 'autoplay'
     *
     * The audio or video should play as soon as possible.
     *
     * Elements: <audio>, <video>
     * Status: Official
     *
     * @var string
     */
    public const AUTOPLAY = 'autoplay';

    /**
     * HTML tag attribute 'background'
     *
     * Specifies the URL of an image file.
     *
     * Elements: <body>, <table>, <td>, <th>
     * Status: Official
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
     * Elements: <body>, <col>, <colgroup>, <marquee>, <table>, <tbody>, <tfoot>, <td>, <th>, <tr>
     * Status: Official
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
     * Elements: <img>, <object>, <table>
     * Status: Official
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
     * Elements: <audio>, <video>
     * Status: Official
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
     * Elements: <input>
     * Status: Official
     *
     * @var string
     */
    public const CAPTURE = 'capture';

    /**
     * HTML tag attribute 'challenge'
     *
     * A challenge string that is submitted along with the public key.
     *
     * Elements: <keygen>
     * Status: Official
     *
     * @var string
     */
    public const CHALLENGE = 'challenge';

    /**
     * HTML tag attribute 'charset'
     *
     * Declares the character encoding of the page or script.
     *
     * Elements: <meta>, <script>
     * Status: Official
     *
     * @var string
     */
    public const CHARSET = 'charset';

    /**
     * HTML tag attribute 'checked'
     *
     * Indicates whether the element should be checked on page load.
     *
     * Elements: <command>, <input>
     * Status: Official
     *
     * @var string
     */
    public const CHECKED = 'checked';

    /**
     * HTML tag attribute 'cite'
     *
     * Contains a URI which points to the source of the quote or change.
     *
     * Elements: <blockquote>, <del>, <ins>, <q>
     * Status: Official
     *
     * @var string
     */
    public const CITE = 'cite';

    /**
     * HTML tag attribute 'class'
     *
     * Often used with CSS to style elements with common properties.
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const CLASS_X = 'class';

    /**
     * HTML tag attribute 'code'
     *
     * Specifies the URL of the applet's class file to be loaded and executed.
     *
     * Elements: <applet>
     * Status: Official
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
     * Elements: <applet>
     * Status: Official
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
     * Elements: <basefont>, <font>, <hr>
     * Status: Official
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
     * Elements: <textarea>
     * Status: Official
     *
     * @var string
     */
    public const COLS = 'cols';

    /**
     * HTML tag attribute 'colspan'
     *
     * The colspan attribute defines the number of columns a cell should span.
     *
     * Elements: <td>, <th>
     * Status: Official
     *
     * @var string
     */
    public const COLSPAN = 'colspan';

    /**
     * HTML tag attribute 'content'
     *
     * A value associated with http-equiv or name depending on the context.
     *
     * Elements: <meta>
     * Status: Official
     *
     * @var string
     */
    public const CONTENT = 'content';

    /**
     * HTML tag attribute 'contenteditable'
     *
     * Indicates whether the element's content is editable.
     *
     * Elements: global
     * Status: Official
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
     * Elements: global
     * Status: Official
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
     * Elements: <audio>, <video>
     * Status: Official
     *
     * @var string
     */
    public const CONTROLS = 'controls';

    /**
     * HTML tag attribute 'coords'
     *
     * A set of values specifying the coordinates of the hot-spot region.
     *
     * Elements: <area>
     * Status: Official
     *
     * @var string
     */
    public const COORDS = 'coords';

    /**
     * HTML tag attribute 'crossorigin'
     *
     * How the element handles cross-origin requests
     *
     * Elements: <audio>, <img>, <link>, <script>, <video>
     * Status: Official
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
     * Elements: <iframe>
     * Status: Experimental
     *
     * @var string
     */
    public const CSP = 'csp';

    /**
     * HTML tag attribute 'data'
     *
     * Specifies the URL of the resource.
     *
     * Elements: <object>
     * Status: Official
     *
     * @var string
     */
    public const DATA = 'data';

    /**
     * HTML tag attribute 'data-*'
     *
     * Lets you attach custom attributes to an HTML element.
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const DATA_X = 'data-';

    /**
     * HTML tag attribute 'datetime'
     *
     * Indicates the date and time associated with the element.
     *
     * Elements: <del>, <ins>, <time>
     * Status: Official
     *
     * @var string
     */
    public const DATETIME = 'datetime';

    /**
     * HTML tag attribute 'decoding'
     *
     * Indicates the preferred method to decode the image.
     *
     * Elements: <img>
     * Status: Official
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
     * Elements: <track>
     * Status: Official
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
     * Elements: <script>
     * Status: Official
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
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const DIR = 'dir';

    /**
     * HTML tag attribute 'dirname'
     *
     * Elements: <input>, <textarea>
     * Status: Official
     *
     * @var string
     */
    public const DIRNAME = 'dirname';

    /**
     * HTML tag attribute 'disabled'
     *
     * Indicates whether the user can interact with the element.
     *
     * Elements: <button>, <command>, <fieldset>, <input>, <keygen>, <optgroup>, <option>, <select>, <textarea>
     * Status: Official
     *
     * @var string
     */
    public const DISABLED = 'disabled';

    /**
     * HTML tag attribute 'download'
     *
     * Indicates that the hyperlink is to be used for downloading a resource.
     *
     * Elements: <a>, <area>
     * Status: Official
     *
     * @var string
     */
    public const DOWNLOAD = 'download';

    /**
     * HTML tag attribute 'draggable'
     *
     * Defines whether the element can be dragged.
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const DRAGGABLE = 'draggable';

    /**
     * HTML tag attribute 'enctype'
     *
     * Defines the content type of the form data when the method is POST.
     *
     * Elements: <form>
     * Status: Official
     *
     * @var string
     */
    public const ENCTYPE = 'enctype';

    /**
     * HTML tag attribute 'enterkeyhint'
     *
     * The enterkeyhint specifies what action label (or icon) to present for the
     * enter key on virtual keyboards. The attribute can be used with form
     * controls (such as the value of <textarea> elements), or in elements in an
     * editing host (e.g., using contenteditable attribute).
     *
     * Elements: <textarea>, contenteditable
     * Status: Experimental
     *
     * @var string
     */
    public const ENTERKEYHINT = 'enterkeyhint';

    /**
     * HTML tag attribute 'for'
     *
     * Describes elements which belongs to this one.
     *
     * Elements: <label>, <output>
     * Status: Official
     *
     * @var string
     */
    public const FOR = 'for';

    /**
     * HTML tag attribute 'form'
     *
     * Indicates the form that is the owner of the element.
     *
     * Elements: <button>, <fieldset>, <input>, <keygen>, <label>, <meter>, <object>, <output>, <progress>, <select>, <textarea>
     * Status: Official
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
     * Elements: <input>, <button>
     * Status: Official
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
     * Elements: <button>, <input>
     * Status: Official
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
     * Elements: <button>, <input>
     * Status: Official
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
     * Elements: <button>, <input>
     * Status: Official
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
     * Elements: <button>, <input>
     * Status: Official
     *
     * @var string
     */
    public const FORMTARGET = 'formtarget';

    /**
     * HTML tag attribute 'headers'
     *
     * IDs of the <th> elements which applies to this element.
     *
     * Elements: <td>, <th>
     * Status: Official
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
     * Elements: <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
     * Status: Official
     *
     * @var string
     * @deprecated
     */
    public const HEIGHT = 'height';

    /**
     * HTML tag attribute 'hidden'
     *
     * Prevents rendering of given element, while keeping child elements, e.g.
     * <script> elements, active.
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const HIDDEN = 'hidden';

    /**
     * HTML tag attribute 'high'
     *
     * Indicates the lower bound of the upper range.
     *
     * Elements: <meter>
     * Status: Official
     *
     * @var string
     */
    public const HIGH = 'high';

    /**
     * HTML tag attribute 'href'
     *
     * The URL of a linked resource.
     *
     * Elements: <a>, <area>, <base>, <link>
     * Status: Official
     *
     * @var string
     */
    public const HREF = 'href';

    /**
     * HTML tag attribute 'hreflang'
     *
     * Specifies the language of the linked resource.
     *
     * Elements: <a>, <area>, <link>
     * Status: Official
     *
     * @var string
     */
    public const HREFLANG = 'hreflang';

    /**
     * HTML tag attribute 'http-equiv'
     *
     * Defines a pragma directive.
     *
     * Elements: <meta>
     * Status: Official
     *
     * @var string
     */
    public const HTTP_EQUIV = 'http-equiv';

    /**
     * HTML tag attribute 'icon'
     *
     * Specifies a picture which represents the command.
     *
     * Elements: <command>
     * Status: Official
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
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ID = 'id';

    /**
     * HTML tag attribute 'importance'
     *
     * Indicates the relative fetch priority for the resource.
     *
     * Elements: <iframe>, <img>, <link>, <script>
     * Status: Experimental
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
     * Elements: <link>, <script>
     * Status: Official
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
     * Elements: <img>
     * Status: Official
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
     * Elements: <textarea>, contenteditable
     * Status: Official
     *
     * @var string
     */
    public const INPUTMODE = 'inputmode';

    /**
     * HTML tag attribute 'ismap'
     *
     * Indicates that the image is part of a server-side image map.
     *
     * Elements: <img>
     * Status: Official
     *
     * @var string
     */
    public const ISMAP = 'ismap';

    /**
     * HTML tag attribute 'itemprop'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ITEMPROP = 'itemprop';

    /**
     * HTML tag attribute 'keytype'
     *
     * Specifies the type of key generated.
     *
     * Elements: <keygen>
     * Status: Official
     *
     * @var string
     */
    public const KEYTYPE = 'keytype';

    /**
     * HTML tag attribute 'kind'
     *
     * Specifies the kind of text track.
     *
     * Elements: <track>
     * Status: Official
     *
     * @var string
     */
    public const KIND = 'kind';

    /**
     * HTML tag attribute 'label'
     *
     * Specifies a user-readable title of the element.
     *
     * Elements: <optgroup>, <option>, <track>
     * Status: Official
     *
     * @var string
     */
    public const LABEL = 'label';

    /**
     * HTML tag attribute 'lang'
     *
     * Defines the language used in the element.
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const LANG = 'lang';

    /**
     * HTML tag attribute 'language'
     *
     * Defines the script language used in the element.
     *
     * Elements: <script>
     * Status: Official
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
     * Elements: <img>, <iframe>
     * Status: Experimental
     *
     * @var string
     */
    public const LOADING = 'loading';

    /**
     * HTML tag attribute 'list'
     *
     * Identifies a list of pre-defined options to suggest to the user.
     *
     * Elements: <input>
     * Status: Official
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
     * Elements: <audio>, <bgsound>, <marquee>, <video>
     * Status: Official
     *
     * @var string
     */
    public const LOOP = 'loop';

    /**
     * HTML tag attribute 'low'
     *
     * Indicates the upper bound of the lower range.
     *
     * Elements: <meter>
     * Status: Official
     *
     * @var string
     */
    public const LOW = 'low';

    /**
     * HTML tag attribute 'manifest'
     *
     * Specifies the URL of the document's cache manifest.
     *
     * Elements: <html>
     * Status: Official
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
     * Elements: <input>, <meter>, <progress>
     * Status: Official
     *
     * @var string
     */
    public const MAX = 'max';

    /**
     * HTML tag attribute 'maxlength'
     *
     * Defines the maximum number of characters allowed in the element.
     *
     * Elements: <input>, <textarea>
     * Status: Official
     *
     * @var string
     */
    public const MAXLENGTH = 'maxlength';

    /**
     * HTML tag attribute 'minlength'
     *
     * Defines the minimum number of characters allowed in the element.
     *
     * Elements: <input>, <textarea>
     * Status: Official
     *
     * @var string
     */
    public const MINLENGTH = 'minlength';

    /**
     * HTML tag attribute 'media'
     *
     * Specifies a hint of the media for which the linked resource was designed.
     *
     * Elements: <a>, <area>, <link>, <source>, <style>
     * Status: Official
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
     * Elements: <form>
     * Status: Official
     *
     * @var string
     */
    public const METHOD = 'method';

    /**
     * HTML tag attribute 'min'
     *
     * Indicates the minimum value allowed.
     *
     * Elements: <input>, <meter>
     * Status: Official
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
     * Elements: <input>, <select>
     * Status: Official
     *
     * @var string
     */
    public const MULTIPLE = 'multiple';

    /**
     * HTML tag attribute 'muted'
     *
     * Indicates whether the audio will be initially silenced on page load.
     *
     * Elements: <audio>, <video>
     * Status: Official
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
     * Elements: <button>, <form>, <fieldset>, <iframe>, <input>, <keygen>, <object>, <output>, <select>, <textarea>, <map>, <meta>, <param>
     * Status: Official
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
     * Elements: <form>
     * Status: Official
     *
     * @var string
     */
    public const NOVALIDATE = 'novalidate';

    /**
     * HTML tag attribute 'onabort'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONABORT = 'onabort';

    /**
     * HTML tag attribute 'onautocomplete'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONAUTOCOMPLETE = 'onautocomplete';

    /**
     * HTML tag attribute 'onautocompleteerror'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONAUTOCOMPLETEERROR = 'onautocompleteerror';

    /**
     * HTML tag attribute 'onblur'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONBLUR = 'onblur';

    /**
     * HTML tag attribute 'oncancel'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONCANCEL = 'oncancel';

    /**
     * HTML tag attribute 'oncanplay'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONCANPLAY = 'oncanplay';

    /**
     * HTML tag attribute 'oncanplaythrough'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONCANPLAYTHROUGH = 'oncanplaythrough';

    /**
     * HTML tag attribute 'onchange'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONCHANGE = 'onchange';

    /**
     * HTML tag attribute 'onclick'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONCLICK = 'onclick';

    /**
     * HTML tag attribute 'onclose'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONCLOSE = 'onclose';

    /**
     * HTML tag attribute 'oncontextmenu'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONCONTEXTMENU = 'oncontextmenu';

    /**
     * HTML tag attribute 'oncuechange'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONCUECHANGE = 'oncuechange';

    /**
     * HTML tag attribute 'ondblclick'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDBLCLICK = 'ondblclick';

    /**
     * HTML tag attribute 'ondrag'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDRAG = 'ondrag';

    /**
     * HTML tag attribute 'ondragend'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDRAGEND = 'ondragend';

    /**
     * HTML tag attribute 'ondragenter'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDRAGENTER = 'ondragenter';

    /**
     * HTML tag attribute 'ondragleave'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDRAGLEAVE = 'ondragleave';

    /**
     * HTML tag attribute 'ondragover'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDRAGOVER = 'ondragover';

    /**
     * HTML tag attribute 'ondragstart'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDRAGSTART = 'ondragstart';

    /**
     * HTML tag attribute 'ondrop'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDROP = 'ondrop';

    /**
     * HTML tag attribute 'ondurationchange'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONDURATIONCHANGE = 'ondurationchange';

    /**
     * HTML tag attribute 'onemptied'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONEMPTIED = 'onemptied';

    /**
     * HTML tag attribute 'onended'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONENDED = 'onended';

    /**
     * HTML tag attribute 'onerror'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONERROR = 'onerror';

    /**
     * HTML tag attribute 'onfocus'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONFOCUS = 'onfocus';

    /**
     * HTML tag attribute 'oninput'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONINPUT = 'oninput';

    /**
     * HTML tag attribute 'oninvalid'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONINVALID = 'oninvalid';

    /**
     * HTML tag attribute 'onkeydown'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONKEYDOWN = 'onkeydown';

    /**
     * HTML tag attribute 'onkeypress'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONKEYPRESS = 'onkeypress';

    /**
     * HTML tag attribute 'onkeyup'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONKEYUP = 'onkeyup';

    /**
     * HTML tag attribute 'onload'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONLOAD = 'onload';

    /**
     * HTML tag attribute 'onloadeddata'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONLOADEDDATA = 'onloadeddata';

    /**
     * HTML tag attribute 'onloadedmetadata'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONLOADEDMETADATA = 'onloadedmetadata';

    /**
     * HTML tag attribute 'onloadstart'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONLOADSTART = 'onloadstart';

    /**
     * HTML tag attribute 'onmousedown'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONMOUSEDOWN = 'onmousedown';

    /**
     * HTML tag attribute 'onmouseenter'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONMOUSEENTER = 'onmouseenter';

    /**
     * HTML tag attribute 'onmouseleave'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONMOUSELEAVE = 'onmouseleave';

    /**
     * HTML tag attribute 'onmousemove'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONMOUSEMOVE = 'onmousemove';

    /**
     * HTML tag attribute 'onmouseout'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONMOUSEOUT = 'onmouseout';

    /**
     * HTML tag attribute 'onmouseover'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONMOUSEOVER = 'onmouseover';

    /**
     * HTML tag attribute 'onmouseup'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONMOUSEUP = 'onmouseup';

    /**
     * HTML tag attribute 'onmousewheel'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONMOUSEWHEEL = 'onmousewheel';

    /**
     * HTML tag attribute 'onpause'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONPAUSE = 'onpause';

    /**
     * HTML tag attribute 'onplay'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONPLAY = 'onplay';

    /**
     * HTML tag attribute 'onplaying'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONPLAYING = 'onplaying';

    /**
     * HTML tag attribute 'onprogress'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONPROGRESS = 'onprogress';

    /**
     * HTML tag attribute 'onratechange'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONRATECHANGE = 'onratechange';

    /**
     * HTML tag attribute 'onreset'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONRESET = 'onreset';

    /**
     * HTML tag attribute 'onresize'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONRESIZE = 'onresize';

    /**
     * HTML tag attribute 'onscroll'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSCROLL = 'onscroll';

    /**
     * HTML tag attribute 'onseeked'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSEEKED = 'onseeked';

    /**
     * HTML tag attribute 'onseeking'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSEEKING = 'onseeking';

    /**
     * HTML tag attribute 'onselect'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSELECT = 'onselect';

    /**
     * HTML tag attribute 'onshow'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSHOW = 'onshow';

    /**
     * HTML tag attribute 'onsort'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSORT = 'onsort';

    /**
     * HTML tag attribute 'onstalled'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSTALLED = 'onstalled';

    /**
     * HTML tag attribute 'onsubmit'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSUBMIT = 'onsubmit';

    /**
     * HTML tag attribute 'onsuspend'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONSUSPEND = 'onsuspend';

    /**
     * HTML tag attribute 'ontimeupdate'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONTIMEUPDATE = 'ontimeupdate';

    /**
     * HTML tag attribute 'ontoggle'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONTOGGLE = 'ontoggle';

    /**
     * HTML tag attribute 'onvolumechange'
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const ONVOLUMECHANGE = 'onvolumechange';

    /**
     * HTML tag attribute 'onwaiting'
     *
     * Elements: global
     * Status: Official
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
     * Elements: <details>, <dialog>
     * Status: Official
     *
     * @var string
     */
    public const OPEN = 'open';

    /**
     * HTML tag attribute 'optimum'
     *
     * Indicates the optimal numeric value.
     *
     * Elements: <meter>
     * Status: Official
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
     * Elements: <input>
     * Status: Official
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
     * Elements: <a>, <area>
     * Status: Official
     *
     * @var string
     */
    public const PING = 'ping';

    /**
     * HTML tag attribute 'placeholder'
     *
     * Provides a hint to the user of what can be entered in the field.
     *
     * Elements: <input>, <textarea>
     * Status: Official
     *
     * @var string
     */
    public const PLACEHOLDER = 'placeholder';

    /**
     * HTML tag attribute 'poster'
     *
     * A URL indicating a poster frame to show until the user plays or seeks.
     *
     * Elements: <video>
     * Status: Official
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
     * Elements: <audio>, <video>
     * Status: Official
     *
     * @var string
     */
    public const PRELOAD = 'preload';

    /**
     * HTML tag attribute 'radiogroup'
     *
     * Elements: <command>
     * Status: Official
     *
     * @var string
     */
    public const RADIOGROUP = 'radiogroup';

    /**
     * HTML tag attribute 'readonly'
     *
     * Indicates whether the element can be edited.
     *
     * Elements: <input>, <textarea>
     * Status: Official
     *
     * @var string
     */
    public const READONLY = 'readonly';

    /**
     * HTML tag attribute 'referrerpolicy'
     *
     * Specifies which referrer is sent when fetching the resource.
     *
     * Elements: <a>, <area>, <iframe>, <img>, <link>, <script>
     * Status: Official
     *
     * @var string
     */
    public const REFERRERPOLICY = 'referrerpolicy';

    /**
     * HTML tag attribute 'rel'
     *
     * Specifies the relationship of the target object to the link object.
     *
     * Elements: <a>, <area>, <link>
     * Status: Official
     *
     * @var string
     */
    public const REL = 'rel';

    /**
     * HTML tag attribute 'required'
     *
     * Indicates whether this element is required to fill out or not.
     *
     * Elements: <input>, <select>, <textarea>
     * Status: Official
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
     * Elements: <ol>
     * Status: Official
     *
     * @var string
     */
    public const REVERSED = 'reversed';

    /**
     * HTML tag attribute 'rows'
     *
     * Defines the number of rows in a text area.
     *
     * Elements: <textarea>
     * Status: Official
     *
     * @var string
     */
    public const ROWS = 'rows';

    /**
     * HTML tag attribute 'rowspan'
     *
     * Defines the number of rows a table cell should span over.
     *
     * Elements: <td>, <th>
     * Status: Official
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
     * Elements: <iframe>
     * Status: Official
     *
     * @var string
     */
    public const SANDBOX = 'sandbox';

    /**
     * HTML tag attribute 'scope'
     *
     * Defines the cells that the header test (defined in the <th> element)
     * relates to.
     *
     * Elements: <th>
     * Status: Official
     *
     * @var string
     */
    public const SCOPE = 'scope';

    /**
     * HTML tag attribute 'scoped'
     *
     * Elements: <style>
     * Status: Non-standard
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
     * Elements: <option>
     * Status: Official
     *
     * @var string
     */
    public const SELECTED = 'selected';

    /**
     * HTML tag attribute 'shape'
     *
     * Elements: <a>, <area>
     * Status: Official
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
     * Elements: <input>, <select>
     * Status: Official
     *
     * @var string
     */
    public const SIZE = 'size';

    /**
     * HTML tag attribute 'sizes'
     *
     * Elements: <link>, <img>, <source>
     * Status: Official
     *
     * @var string
     */
    public const SIZES = 'sizes';

    /**
     * HTML tag attribute 'slot'
     *
     * Assigns a slot in a shadow DOM shadow tree to an element.
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const SLOT = 'slot';

    /**
     * HTML tag attribute 'span'
     *
     * Elements: <col>, <colgroup>
     * Status: Official
     *
     * @var string
     */
    public const SPAN = 'span';

    /**
     * HTML tag attribute 'spellcheck'
     *
     * Indicates whether spell checking is allowed for the element.
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const SPELLCHECK = 'spellcheck';

    /**
     * HTML tag attribute 'src'
     *
     * The URL of the embeddable content.
     *
     * Elements: <audio>, <embed>, <iframe>, <img>, <input>, <script>, <source>, <track>, <video>
     * Status: Official
     *
     * @var string
     */
    public const SRC = 'src';

    /**
     * HTML tag attribute 'srcdoc'
     *
     * Elements: <iframe>
     * Status: Official
     *
     * @var string
     */
    public const SRCDOC = 'srcdoc';

    /**
     * HTML tag attribute 'srclang'
     *
     * Elements: <track>
     * Status: Official
     *
     * @var string
     */
    public const SRCLANG = 'srclang';

    /**
     * HTML tag attribute 'srcset'
     *
     * One or more responsive image candidates.
     *
     * Elements: <img>, <source>
     * Status: Official
     *
     * @var string
     */
    public const SRCSET = 'srcset';

    /**
     * HTML tag attribute 'start'
     *
     * Defines the first number if other than 1.
     *
     * Elements: <ol>
     * Status: Official
     *
     * @var string
     */
    public const START = 'start';

    /**
     * HTML tag attribute 'step'
     *
     * Elements: <input>
     * Status: Official
     *
     * @var string
     */
    public const STEP = 'step';

    /**
     * HTML tag attribute 'style'
     *
     * Defines CSS styles which will override styles previously set.
     *
     * Elements: global
     * Status: Official
     *
     * @var string
     */
    public const STYLE = 'style';

    /**
     * HTML tag attribute 'summary'
     *
     * Elements: <table>
     * Status: Official
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
     * Elements: global
     * Status: Official
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
     * Elements: <a>, <area>, <base>, <form>
     * Status: Official
     *
     * @var string
     */
    public const TARGET = 'target';

    /**
     * HTML tag attribute 'title'
     *
     * Text to be displayed in a tooltip when hovering over the element.
     *
     * Elements: global
     * Status: Official
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
     * Elements: global
     * Status: Experimental
     *
     * @var string
     */
    public const TRANSLATE = 'translate';

    /**
     * HTML tag attribute 'type'
     *
     * Defines the type of the element.
     *
     * Elements: <button>, <input>, <command>, <embed>, <object>, <script>, <source>, <style>, <menu>, <link>
     * Status: Official
     *
     * @var string
     */
    public const TYPE = 'type';

    /**
     * HTML tag attribute 'usemap'
     *
     * Elements: <img>, <input>, <object>
     * Status: Official
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
     * Elements: <button>, <data>, <input>, <li>, <meter>, <option>, <progress>, <param>
     * Status: Official
     *
     * @var string
     */
    public const VALUE = 'value';

    /**
     * HTML tag attribute 'width'
     *
     * For the elements listed here, this establishes the element's width.
     *
     * Elements: <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>
     * Status: Official
     *
     * @var string
     */
    public const WIDTH = 'width';

    /**
     * HTML tag attribute 'wrap'
     *
     * Indicates whether the text should be wrapped.
     *
     * Elements: <textarea>
     * Status: Official
     *
     * @var string
     */
    public const WRAP = 'wrap';
}
