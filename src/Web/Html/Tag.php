<?php

/**
 * @noinspection PhpUnused
 * @noinspection UnknownInspectionInspection
 * @noinspection PhpConstantNamingConventionInspection
 * @noinspection PhpClassNamingConventionInspection
 */

namespace TomLutzenberger\Constantine\Web\Html;

/**
 * Collection of HTML tags
 *
 * @see       https://developer.mozilla.org/en-US/docs/Web/HTML/Element
 *
 * @package   TomLutzenberger\Constantine\Web\Html
 * @copyright 2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class Tag
{
    /**
     * HTML Tag <html>
     * Represents the root (top-level element) of an HTML document. All other
     * elements must be descendants of this element.
     *
     * Category: Main root
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/html
     * @var string
     */
    public const HTML = 'html';


    /**
     * HTML Tag <base>
     * Specifies the base URL to use for all relative URLs in a document.
     * There can be only one <base> element in a document.
     *
     * Category: Document metadata
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/base
     * @var string
     */
    public const BASE = 'base';


    /**
     * HTML Tag <head>
     * Contains machine-readable information (metadata) about the document.
     *
     * Category: Document metadata
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/head
     * @var string
     */
    public const HEAD = 'head';


    /**
     * HTML Tag <link>
     * Specifies relationships between the current document and an
     * external resource.
     *
     * Category: Document metadata
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/link
     * @var string
     */
    public const LINK = 'link';


    /**
     * HTML Tag <meta>
     * Represents Metadata that cannot be represented by other
     * HTML meta-related elements.
     *
     * Category: Document metadata
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meta
     * @var string
     */
    public const META = 'meta';


    /**
     * HTML Tag <style>
     * Contains style information for a document, or part of a document.
     *
     * Category: Document metadata
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/style
     * @var string
     */
    public const STYLE = 'style';


    /**
     * HTML Tag <title>
     * Defines the document's title that is shown in a Browser's title bar
     * or a page's tab.
     *
     * Category: Document metadata
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/title
     * @var string
     */
    public const TITLE = 'title';


    /**
     * HTML Tag <body>
     * Represents the content of an HTML document.
     *
     * Category: Sectioning root
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/body
     * @var string
     */
    public const BODY = 'body';


    /**
     * HTML Tag <address>
     * Indicates that the enclosed HTML provides contact information for a
     * person or people, or for an organization.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/address
     * @var string
     */
    public const ADDRESS = 'address';


    /**
     * HTML Tag <article>
     * Represents a self-contained composition in a document, page,
     * application, or site.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/article
     * @var string
     */
    public const ARTICLE = 'article';


    /**
     * HTML Tag <aside>
     * Represents a portion of a document whose content is only indirectly
     * related to the document's main content.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/aside
     * @var string
     */
    public const ASIDE = 'aside';


    /**
     * HTML Tag <footer>
     * Represents a footer for its nearest sectioning content or sectioning root element.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/footer
     * @var string
     */
    public const FOOTER = 'footer';


    /**
     * HTML Tag <header>
     * Represents introductory content, typically a group of introductory or
     * navigational aids.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/header
     * @var string
     */
    public const HEADER = 'header';


    /**
     * HTML Tag <h1>
     * The <h1> to <h6> HTML elements represent six levels of section headings.
     * <h1> is the highest section level and <h6> is the lowest.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1
     * @var string
     */
    public const H1 = 'h1';


    /**
     * HTML Tag <h2>
     * The <h1> to <h6> HTML elements represent six levels of section headings.
     * <h1> is the highest section level and <h6> is the lowest.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1
     * @var string
     */
    public const H2 = 'h2';


    /**
     * HTML Tag <h3>
     * The <h1> to <h6> HTML elements represent six levels of section headings.
     * <h1> is the highest section level and <h6> is the lowest.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1
     * @var string
     */
    public const H3 = 'h3';


    /**
     * HTML Tag <h4>
     * The <h1> to <h6> HTML elements represent six levels of section headings.
     * <h1> is the highest section level and <h6> is the lowest.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1
     * @var string
     */
    public const H4 = 'h4';


    /**
     * HTML Tag <h5>
     * The <h1> to <h6> HTML elements represent six levels of section headings.
     * <h1> is the highest section level and <h6> is the lowest.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1
     * @var string
     */
    public const H5 = 'h5';


    /**
     * HTML Tag <h6>
     * The <h1> to <h6> HTML elements represent six levels of section headings.
     * <h1> is the highest section level and <h6> is the lowest.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/h1
     * @var string
     */
    public const H6 = 'h6';


    /**
     * HTML Tag <main>
     * Represents the dominant content of the body of a document.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/main
     * @var string
     */
    public const MAIN = 'main';


    /**
     * HTML Tag <nav>
     * Represents a section of a page whose purpose is to provide navigation
     * links, either within the current document or to other documents.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nav
     * @var string
     */
    public const NAV = 'nav';


    /**
     * HTML Tag <section>
     * Represents a generic standalone section of a document, which doesn't
     * have a more specific semantic element to represent it.
     *
     * Category: Content sectioning
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/section
     * @var string
     */
    public const SECTION = 'section';


    /**
     * HTML Tag <blockquote>
     * Indicates that the enclosed text is an extended quotation.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blockquote
     * @var string
     */
    public const BLOCKQUOTE = 'blockquote';


    /**
     * HTML Tag <dd>
     * Provides the description, definition, or value for the preceding
     * term (dt) in a description list (dl).
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dd
     * @var string
     */
    public const DD = 'dd';


    /**
     * HTML Tag <div>
     * The generic container for flow content.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/div
     * @var string
     */
    public const DIV = 'div';


    /**
     * HTML Tag <dl>
     * Represents a description list. The element encloses a list of groups of
     * terms (specified using the dt element) and descriptions (provided by dd elements).
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dl
     * @var string
     */
    public const DL = 'dl';


    /**
     * HTML Tag <dt>
     * Specifies a term in a description or definition list, and as such must
     * be used inside a dl element.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dt
     * @var string
     */
    public const DT = 'dt';


    /**
     * HTML Tag <figcaption>
     * Represents a caption or legend describing the rest of the contents of
     * its parent figure element.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figcaption
     * @var string
     */
    public const FIGCAPTION = 'figcaption';


    /**
     * HTML Tag <figure>
     * Represents self-contained content, potentially with an optional caption,
     * which is specified using the figcaption element.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/figure
     * @var string
     */
    public const FIGURE = 'figure';


    /**
     * HTML Tag <hr>
     * Represents a thematic break between paragraph-level elements.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hr
     * @var string
     */
    public const HR = 'hr';


    /**
     * HTML Tag <li>
     * Used to represent an item in a list. It must be contained in a
     * parent element: an ordered list (ol), an unordered list (ul), or a menu (menu).
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/li
     * @var string
     */
    public const LI = 'li';


    /**
     * HTML Tag <menu>
     * Semantic alternative to ul.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/menu
     * @var string
     */
    public const MENU = 'menu';


    /**
     * HTML Tag <ol>
     * Represents an ordered list of items — typically rendered as a numbered list.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ol
     * @var string
     */
    public const OL = 'ol';


    /**
     * HTML Tag <p>
     * Represents a paragraph.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/p
     * @var string
     */
    public const P = 'p';


    /**
     * HTML Tag <pre>
     * Represents preformatted text which is to be presented exactly as written
     * in the HTML file.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/pre
     * @var string
     */
    public const PRE = 'pre';


    /**
     * HTML Tag <ul>
     * Represents an unordered list of items, typically rendered as a bulleted list.
     *
     * Category: Text content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ul
     * @var string
     */
    public const UL = 'ul';


    /**
     * HTML Tag <a>
     * Creates a hyperlink to web pages, files, email addresses, locations in
     * the same page, or anything else a URL can address.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a
     * @var string
     */
    public const A = 'a';


    /**
     * HTML Tag <abbr>
     * Represents an abbreviation or acronym.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/abbr
     * @var string
     */
    public const ABBR = 'abbr';


    /**
     * HTML Tag <b>
     * Used to draw the reader's attention to the element's contents, which are
     * not otherwise granted special importance.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/b
     * @var string
     */
    public const B = 'b';


    /**
     * HTML Tag <bdi>
     * Tells the browser's bidirectional algorithm to treat the text it contains
     * in isolation from its surrounding text.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdi
     * @var string
     */
    public const BDI = 'bdi';


    /**
     * HTML Tag <bdo>
     * Overrides the current directionality of text, so that the text within is
     * rendered in a different direction.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bdo
     * @var string
     */
    public const BDO = 'bdo';


    /**
     * HTML Tag <br>
     * Produces a line break in text.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/br
     * @var string
     */
    public const BR = 'br';


    /**
     * HTML Tag <cite>
     * Used to describe a reference to a cited creative work, and must include
     * the title of that work.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite
     * @var string
     */
    public const CITE = 'cite';


    /**
     * HTML Tag <code>
     * Displays its contents styled in a fashion intended to indicate that the
     * text is a short fragment of computer code.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/code
     * @var string
     */
    public const CODE = 'code';


    /**
     * HTML Tag <data>
     * Links a given piece of content with a machine-readable translation.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/data
     * @var string
     */
    public const DATA = 'data';


    /**
     * HTML Tag <dfn>
     * Used to indicate the term being defined within the context of a
     * definition phrase or sentence.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dfn
     * @var string
     */
    public const DFN = 'dfn';


    /**
     * HTML Tag <em>
     * Marks text that has stress emphasis.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/em
     * @var string
     */
    public const EM = 'em';


    /**
     * HTML Tag <i>
     * Represents a range of text that is set off from the normal text for some
     * reason, such as idiomatic text, technical terms, taxonomical designations, among others.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/i
     * @var string
     */
    public const I = 'i';


    /**
     * HTML Tag <kbd>
     * Represents a span of inline text denoting textual user input from a
     * keyboard, voice input, or any other text entry device.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/kbd
     * @var string
     */
    public const KBD = 'kbd';


    /**
     * HTML Tag <mark>
     * Represents text which is marked or highlighted for reference or
     * notation purposes.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/mark
     * @var string
     */
    public const MARK = 'mark';


    /**
     * HTML Tag <q>
     * Indicates that the enclosed text is a short inline quotation.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/q
     * @var string
     */
    public const Q = 'q';


    /**
     * HTML Tag <rp>
     * Used to provide fall-back parentheses for browsers that do not support
     * display of ruby annotations using the ruby element.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rp
     * @var string
     */
    public const RP = 'rp';


    /**
     * HTML Tag <rt>
     * Specifies the ruby text component of a ruby annotation, which is used to
     * provide pronunciation, translation, or transliteration information for
     * East Asian typography.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rt
     * @var string
     */
    public const RT = 'rt';


    /**
     * HTML Tag <ruby>
     * Represents small annotations that are rendered above, below, or next to
     * base text, usually used for showing the pronunciation of East Asian characters.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ruby
     * @var string
     */
    public const RUBY = 'ruby';


    /**
     * HTML Tag <s>
     * Renders text with a strikethrough, or a line through it.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/s
     * @var string
     */
    public const S = 's';


    /**
     * HTML Tag <samp>
     * Used to enclose inline text which represents sample (or quoted) output
     * from a computer program.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/samp
     * @var string
     */
    public const SAMP = 'samp';


    /**
     * HTML Tag <small>
     * Represents side-comments and small print, like copyright and legal text,
     * independent of its styled presentation.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/small
     * @var string
     */
    public const SMALL = 'small';


    /**
     * HTML Tag <span>
     * Generic inline container for phrasing content, which does not inherently
     * represent anything.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/span
     * @var string
     */
    public const SPAN = 'span';


    /**
     * HTML Tag <strong>
     * Indicates that its contents have strong importance, seriousness, or urgency.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strong
     * @var string
     */
    public const STRONG = 'strong';


    /**
     * HTML Tag <sub>
     * Specifies inline text which should be displayed as subscript for solely
     * typographical reasons.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/sub
     * @var string
     */
    public const SUB = 'sub';


    /**
     * HTML Tag <sup>
     * Specifies inline text which is to be displayed as superscript for solely
     * typographical reasons.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/sup
     * @var string
     */
    public const SUP = 'sup';


    /**
     * HTML Tag <time>
     * Represents a specific period in time.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/time
     * @var string
     */
    public const TIME = 'time';


    /**
     * HTML Tag <u>
     * Represents a span of inline text which should be rendered in a way that
     * indicates that it has a non-textual annotation.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/u
     * @var string
     */
    public const U = 'u';


    /**
     * HTML Tag <var>
     * Represents the name of a variable in a mathematical expression or a
     * programming context.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/var
     * @var string
     */
    public const VAR = 'var';


    /**
     * HTML Tag <wbr>
     * Represents a word break opportunity - a position within text where the
     * browser may optionally break a line, though its line-breaking rules would
     * not otherwise create a break at that location.
     *
     * Category: Inline text semantics
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/wbr
     * @var string
     */
    public const WBR = 'wbr';


    /**
     * HTML Tag <area>
     * Defines an area inside an image map that has predefined clickable areas.
     *
     * Category: Multimedia
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/area
     * @var string
     */
    public const AREA = 'area';


    /**
     * HTML Tag <audio>
     * Used to embed sound content in documents.
     *
     * Category: Multimedia
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/audio
     * @var string
     */
    public const AUDIO = 'audio';


    /**
     * HTML Tag <img>
     * Embeds an image into the document.
     *
     * Category: Multimedia
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/img
     * @var string
     */
    public const IMG = 'img';


    /**
     * HTML Tag <map>
     * Used with area elements to define an image map (a clickable link area).
     *
     * Category: Multimedia
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/map
     * @var string
     */
    public const MAP = 'map';


    /**
     * HTML Tag <track>
     * Used as a child of the media elements, audio and video.
     *
     * Category: Multimedia
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/track
     * @var string
     */
    public const TRACK = 'track';


    /**
     * HTML Tag <video>
     * Embeds a media player which supports video playback into the document.
     *
     * Category: Multimedia
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video
     * @var string
     */
    public const VIDEO = 'video';


    /**
     * HTML Tag <embed>
     * Embeds external content at the specified point in the document.
     *
     * Category: Embedded content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/embed
     * @var string
     */
    public const EMBED = 'embed';


    /**
     * HTML Tag <iframe>
     * Represents a nested browsing context, embedding another HTML page into the current one.
     *
     * Category: Embedded content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/iframe
     * @var string
     */
    public const IFRAME = 'iframe';


    /**
     * HTML Tag <object>
     * Represents an external resource, which can be treated as an image, a
     * nested browsing context, or a resource to be handled by a plugin.
     *
     * Category: Embedded content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/object
     * @var string
     */
    public const OBJECT = 'object';


    /**
     * HTML Tag <param>
     * Defines parameters for an object element.
     *
     * Category: Embedded content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/param
     * @var string
     */
    public const PARAM = 'param';


    /**
     * HTML Tag <picture>
     * Contains zero or more source elements and one img element to offer
     * alternative versions of an image for different display/device scenarios.
     *
     * Category: Embedded content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture
     * @var string
     */
    public const PICTURE = 'picture';


    /**
     * HTML Tag <portal>
     * Enables the embedding of another HTML page into the current one for the
     * purposes of allowing smoother navigation into new pages.
     *
     * Category: Embedded content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/portal
     * @var string
     */
    public const PORTAL = 'portal';


    /**
     * HTML Tag <source>
     * Specifies multiple media resources for the picture, the audio element,
     * or the video element.
     *
     * Category: Embedded content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/source
     * @var string
     */
    public const SOURCE = 'source';


    /**
     * HTML Tag <svg>
     * The svg element is a container that defines a new coordinate system and viewport.
     *
     * Category: SVG and MathML
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/svg
     * @var string
     */
    public const SVG = 'svg';


    /**
     * HTML Tag <math>
     * The top-level element in MathML.
     *
     * Category: SVG and MathML
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/math
     * @var string
     */
    public const MATH = 'math';


    /**
     * HTML Tag <canvas>
     * Used to draw graphics and animations with either the canvas scripting API
     * or the WebGL API.
     *
     * Category: Scripting
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas
     * @var string
     */
    public const CANVAS = 'canvas';


    /**
     * HTML Tag <noscript>
     * Defines a section of HTML to be inserted if a script type on the page is
     * unsupported or if scripting is currently turned off in the browser.
     *
     * Category: Scripting
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noscript
     * @var string
     */
    public const NOSCRIPT = 'noscript';


    /**
     * HTML Tag <script>
     * Used to embed executable code or data; this is typically used to embed or
     * refer to JavaScript code.
     *
     * Category: Scripting
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/script
     * @var string
     */
    public const SCRIPT = 'script';


    /**
     * HTML Tag <del>
     * Represents a range of text that has been deleted from a document.
     *
     * Category: Demarcating edits
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/del
     * @var string
     */
    public const DEL = 'del';


    /**
     * HTML Tag <ins>
     * Represents a range of text that has been added to a document.
     *
     * Category: Demarcating edits
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/ins
     * @var string
     */
    public const INS = 'ins';


    /**
     * HTML Tag <caption>
     * Specifies the caption (or title) of a table.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/caption
     * @var string
     */
    public const CAPTION = 'caption';


    /**
     * HTML Tag <col>
     * Defines a column within a table and is used for defining common semantics
     * on all common cells.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/col
     * @var string
     */
    public const COL = 'col';


    /**
     * HTML Tag <colgroup>
     * Defines a group of columns within a table.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/colgroup
     * @var string
     */
    public const COLGROUP = 'colgroup';


    /**
     * HTML Tag <table>
     * Represents tabular data — that is, information presented in a two-dimensional
     * table comprised of rows and columns of cells containing data.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/table
     * @var string
     */
    public const TABLE = 'table';


    /**
     * HTML Tag <tbody>
     * Encapsulates a set of table rows (tr elements), indicating that they
     * comprise the body of the table (table).
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tbody
     * @var string
     */
    public const TBODY = 'tbody';


    /**
     * HTML Tag <td>
     * Defines a cell of a table that contains data. It participates in the table model.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/td
     * @var string
     */
    public const TD = 'td';


    /**
     * HTML Tag <tfoot>
     * Defines a set of rows summarizing the columns of the table.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tfoot
     * @var string
     */
    public const TFOOT = 'tfoot';


    /**
     * HTML Tag <th>
     * Defines a cell as header of a group of table cells.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/th
     * @var string
     */
    public const TH = 'th';


    /**
     * HTML Tag <thead>
     * Defines a set of rows defining the head of the columns of the table.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/thead
     * @var string
     */
    public const THEAD = 'thead';


    /**
     * HTML Tag <tr>
     * Defines a row of cells in a table.
     *
     * Category: Table content
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tr
     * @var string
     */
    public const TR = 'tr';


    /**
     * HTML Tag <button>
     * An interactive element activated by a user with a mouse, keyboard, finger,
     * voice command, or other assistive technology.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/button
     * @var string
     */
    public const BUTTON = 'button';


    /**
     * HTML Tag <datalist>
     * Contains a set of option elements that represent the permissible or
     * recommended options available to choose from within other controls.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist
     * @var string
     */
    public const DATALIST = 'datalist';


    /**
     * HTML Tag <fieldset>
     * Used to group several controls as well as labels (label) within a web form.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/fieldset
     * @var string
     */
    public const FIELDSET = 'fieldset';


    /**
     * HTML Tag <form>
     * Represents a document section containing interactive controls for submitting information.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/form
     * @var string
     */
    public const FORM = 'form';


    /**
     * HTML Tag <input>
     * Used to create interactive controls for web-based forms in order to
     * accept data from the user.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/input
     * @var string
     */
    public const INPUT = 'input';


    /**
     * HTML Tag <label>
     * Represents a caption for an item in a user interface.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/label
     * @var string
     */
    public const LABEL = 'label';


    /**
     * HTML Tag <legend>
     * Represents a caption for the content of its parent fieldset.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/legend
     * @var string
     */
    public const LEGEND = 'legend';


    /**
     * HTML Tag <meter>
     * Represents either a scalar value within a known range or a fractional value.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/meter
     * @var string
     */
    public const METER = 'meter';


    /**
     * HTML Tag <optgroup>
     * Creates a grouping of options within a select element.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/optgroup
     * @var string
     */
    public const OPTGROUP = 'optgroup';


    /**
     * HTML Tag <option>
     * Used to define an item contained in a select, an optgroup, or a
     * datalist element.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/option
     * @var string
     */
    public const OPTION = 'option';


    /**
     * HTML Tag <output>
     * Container element into which a site or app can inject the results of a
     * calculation or the outcome of a user action.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/output
     * @var string
     */
    public const OUTPUT = 'output';


    /**
     * HTML Tag <progress>
     * Displays an indicator showing the completion progress of a task,
     * typically displayed as a progress bar.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/progress
     * @var string
     */
    public const PROGRESS = 'progress';


    /**
     * HTML Tag <select>
     * Represents a control that provides a menu of options.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/select
     * @var string
     */
    public const SELECT = 'select';


    /**
     * HTML Tag <textarea>
     * Represents a multi-line plain-text editing control, useful when you want
     * to allow users to enter a sizeable amount of free-form text.
     *
     * Category: Forms
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/textarea
     * @var string
     */
    public const TEXTAREA = 'textarea';


    /**
     * HTML Tag <details>
     * Creates a disclosure widget in which information is visible only when the
     * widget is toggled into an "open" state.
     *
     * Category: Interactive elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/details
     * @var string
     */
    public const DETAILS = 'details';


    /**
     * HTML Tag <dialog>
     * Represents a dialog box or other interactive component, such as a
     * dismissible alert, inspector, or sub-window.
     *
     * Category: Interactive elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dialog
     * @var string
     */
    public const DIALOG = 'dialog';


    /**
     * HTML Tag <summary>
     * Specifies a summary, caption, or legend for a details element's disclosure box.
     *
     * Category: Interactive elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/summary
     * @var string
     */
    public const SUMMARY = 'summary';


    /**
     * HTML Tag <slot>
     * The <slot> HTML element—part of the Web Components technology suite—is a
     * placeholder inside a web component that you can fill with your own markup.
     *
     * Category: Web Components
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/slot
     * @var string
     */
    public const SLOT = 'slot';


    /**
     * HTML Tag <template>
     * Mechanism for holding HTML that is not to be rendered immediately when a
     * page is loaded but may be instantiated subsequently during runtime using JavaScript.
     *
     * Category: Web Components
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/template
     * @var string
     */
    public const TEMPLATE = 'template';


    /**
     * HTML Tag <acronym>
     * Allows authors to clearly indicate a sequence of characters that compose
     * an acronym or abbreviation for a word.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/acronym
     * @var string
     * @deprecated
     */
    public const ACRONYM = 'acronym';


    /**
     * HTML Tag <applet>
     * The obsolete HTML Applet Element (<applet>) embeds a Java applet into the document.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/applet
     * @var string
     * @deprecated
     */
    public const APPLET = 'applet';


    /**
     * HTML Tag <basefont>
     * Sets a default font face, size, and color for the other elements which
     * are descended from its parent element.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/basefont
     * @var string
     * @deprecated
     */
    public const BASEFONT = 'basefont';


    /**
     * HTML Tag <bgsound>
     * Sets up a sound file to play in the background while the page is used.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/bgsound
     * @var string
     * @deprecated
     */
    public const BGSOUND = 'bgsound';


    /**
     * HTML Tag <big>
     * Renders the enclosed text at a font size one level larger than the
     * surrounding text (medium becomes large, for example).
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/big
     * @var string
     * @deprecated
     */
    public const BIG = 'big';


    /**
     * HTML Tag <blink>
     * Non-standard element which causes the enclosed text to flash slowly.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/blink
     * @var string
     * @deprecated
     */
    public const BLINK = 'blink';


    /**
     * HTML Tag <center>
     * Displays its block-level or inline contents centered horizontally within
     * its containing element.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/center
     * @var string
     * @deprecated
     */
    public const CENTER = 'center';


    /**
     * HTML Tag <content>
     * Used inside of Shadow DOM as an insertion point, and wasn't meant to be
     * used in ordinary HTML.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/content
     * @var string
     * @deprecated
     */
    public const CONTENT = 'content';


    /**
     * HTML Tag <dir>
     * Used as a container for a directory of files and/or folders, potentially
     * with styles and icons applied by the user agent.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/dir
     * @var string
     * @deprecated
     */
    public const DIR = 'dir';


    /**
     * HTML Tag <font>
     * Defines the font size, color and face for its content.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/font
     * @var string
     * @deprecated
     */
    public const FONT = 'font';


    /**
     * HTML Tag <frame>
     * Defines a particular area in which another HTML document can be displayed.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/frame
     * @var string
     * @deprecated
     */
    public const FRAME = 'frame';


    /**
     * HTML Tag <frameset>
     * Used to contain frame elements.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/frameset
     * @var string
     * @deprecated
     */
    public const FRAMESET = 'frameset';


    /**
     * HTML Tag <hgroup>
     * Represents a multi-level heading for a section of a document.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/hgroup
     * @var string
     * @deprecated
     */
    public const HGROUP = 'hgroup';


    /**
     * HTML Tag <image>
     * Ancient and poorly supported precursor to the img element.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/image
     * @var string
     * @deprecated
     */
    public const IMAGE = 'image';


    /**
     * HTML Tag <keygen>
     * Exists to facilitate generation of key material, and submission of the
     * public key as part of an HTML form.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/keygen
     * @var string
     * @deprecated
     */
    public const KEYGEN = 'keygen';


    /**
     * HTML Tag <marquee>
     * Used to insert a scrolling area of text.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/marquee
     * @var string
     * @deprecated
     */
    public const MARQUEE = 'marquee';


    /**
     * HTML Tag <menuitem>
     * Represents a command that a user is able to invoke through a popup menu.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/menuitem
     * @var string
     * @deprecated
     */
    public const MENUITEM = 'menuitem';


    /**
     * HTML Tag <nobr>
     * Prevents the text it contains from automatically wrapping across
     * multiple lines, potentially resulting in the user having to scroll
     * horizontally to see the entire width of the text.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/nobr
     * @var string
     * @deprecated
     */
    public const NOBR = 'nobr';


    /**
     * HTML Tag <noembed>
     * Non-standard way to provide alternative, or "fallback", content for
     * browsers that do not support the embed element or do not support the type
     * of embedded content an author wishes to use.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noembed
     * @var string
     * @deprecated
     */
    public const NOEMBED = 'noembed';


    /**
     * HTML Tag <noframes>
     * Provides content to be presented in browsers that don't support (or have
     * disabled support for) the frame element.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/noframes
     * @var string
     * @deprecated
     */
    public const NOFRAMES = 'noframes';


    /**
     * HTML Tag <plaintext>
     * Renders everything following the start tag as raw text, ignoring any
     * following HTML.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/plaintext
     * @var string
     * @deprecated
     */
    public const PLAINTEXT = 'plaintext';


    /**
     * HTML Tag <rb>
     * Used to delimit the base text component of a ruby annotation, i.e. the
     * text that is being annotated.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rb
     * @var string
     * @deprecated
     */
    public const RB = 'rb';


    /**
     * HTML Tag <rtc>
     * Embraces semantic annotations of characters presented in a ruby of rb
     * elements used inside of ruby element.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/rtc
     * @var string
     * @deprecated
     */
    public const RTC = 'rtc';


    /**
     * HTML Tag <shadow>
     * Intended to be used as a shadow DOM insertion point.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/shadow
     * @var string
     * @deprecated
     */
    public const SHADOW = 'shadow';


    /**
     * HTML Tag <spacer>
     * Allows insertion of empty spaces on pages.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/spacer
     * @var string
     * @deprecated
     */
    public const SPACER = 'spacer';


    /**
     * HTML Tag <strike>
     * Places a strikethrough (horizontal line) over text.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/strike
     * @var string
     * @deprecated
     */
    public const STRIKE = 'strike';


    /**
     * HTML Tag <tt>
     * Creates inline text which is presented using the user agent default
     * monospace font face.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/tt
     * @var string
     * @deprecated
     */
    public const TT = 'tt';


    /**
     * HTML Tag <xmp>
     * Renders text between the start and end tags without interpreting the HTML
     * in between and using a monospaced font.
     *
     * Category: Obsolete elements
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTML/Element/xmp
     * @var string
     * @deprecated
     */
    public const XMP = 'xmp';
}
