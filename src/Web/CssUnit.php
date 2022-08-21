<?php

/**
 * @noinspection PhpUnused
 * @noinspection PhpConstantNamingConventionInspection
 * @noinspection PhpClassNamingConventionInspection
 */

namespace TomLutzenberger\Constantine\Web;

/**
 * Collection of CSS units
 *
 * @see https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/Values_and_units#numbers_lengths_and_percentages
 *
 * @package   TomLutzenberger\Constantine\Web
 * @copyright 2021-2022 Tom Lutzenberger
 * @author    Tom Lutzenberger <lutzenbergerthomas@gmail.com>
 * @license   MIT
 * @link      https://tomlutzenberger.de
 */
class CssUnit
{
    /**
     * CSS unit 'cm'
     *
     * Centimeters, equivalent to 1cm = 37.8px = 25.2/64in
     *
     * Status: Official
     * Type: Absolute unit
     *
     * @var string
     */
    public const CM = 'cm';

    /**
     * CSS unit 'mm'
     *
     * Millimeters, equivalent to 1mm = 1/10th of 1cm
     *
     * Status: Official
     * Type: Absolute unit
     *
     * @var string
     */
    public const MM = 'mm';

    /**
     * CSS unit 'Q'
     *
     * Quarter-millimeters, equivalent to 1Q = 1/40th of 1cm
     *
     * Status: Official
     * Type: Absolute unit
     *
     * @var string
     */
    public const Q = 'Q';

    /**
     * CSS unit 'in'
     *
     * Inches, equivalent to 1in = 2.54cm = 96px
     *
     * Status: Official
     * Type: Absolute unit
     *
     * @var string
     */
    public const IN = 'in';

    /**
     * CSS unit 'pc'
     *
     * Picas, equivalent to 1pc = 1/6th of 1in
     *
     * Status: Official
     * Type: Absolute unit
     *
     * @var string
     */
    public const PC = 'pc';

    /**
     * CSS unit 'pt'
     *
     * Points, equivalent to 1pt = 1/72nd of 1in
     *
     * Status: Official
     * Type: Absolute unit
     *
     * @var string
     */
    public const PT = 'pt';

    /**
     * CSS unit 'px'
     *
     * Pixels, equivalent to 1px = 1/96th of 1in,
     *
     * Status: Official
     * Type: Absolute unit
     *
     * @var string
     */
    public const PX = 'px';

    /**
     * CSS unit '%'
     *
     * A percentage represents a fraction of some other value. For example, 50%.
     * Percentage values are always relative to another quantity. For example,
     * an element's length is relative to its parent element's length.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const PERCENT = '%';

    /**
     * CSS unit 'em'
     *
     * Font size of the parent, in the case of typographical properties like
     * font-size, and font size of the element itself, in the case of other
     * properties like width.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const EM = 'em';

    /**
     * CSS unit 'ex'
     *
     * x-height of the element's font.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const EX = 'ex';

    /**
     * CSS unit 'ch'
     *
     * The advance measure (width) of the glyph '0' of the element's font.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const CH = 'ch';

    /**
     * CSS unit 'rem'
     *
     * Font size of the root element.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const REM = 'rem';

    /**
     * CSS unit 'lh'
     *
     * Line height of the element.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const LH = 'lh';

    /**
     * CSS unit 'rlh'
     *
     * Line height of the root element. When used on the font-size or
     * line-height properties of the root element, it refers to the properties'
     * initial value.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const RLH = 'rlh';

    /**
     * CSS unit 'vw'
     *
     * 1% of the viewport's width.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const VW = 'vw';

    /**
     * CSS unit 'vh'
     *
     * 1% of the viewport's height.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const VH = 'vh';

    /**
     * CSS unit 'vmin'
     *
     * 1% of the viewport's smaller dimension.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const VMIN = 'vmin';

    /**
     * CSS unit 'vmax'
     *
     * 1% of the viewport's larger dimension.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const VMAX = 'vmax';

    /**
     * CSS unit 'vb'
     *
     * 1% of the size of the initial containing block in the direction of the
     * root element's block axis.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const VB = 'vb';

    /**
     * CSS unit 'vi'
     *
     * 1% of the size of the initial containing block in the direction of the
     * root element's inline axis.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const VI = 'vi';

    /**
     * CSS unit 'svw'
     *
     * 1% of the small viewport's width and height, respectively.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const SVW = 'svw';

    /**
     * CSS unit 'svh'
     *
     * 1% of the small viewport's width and height, respectively.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const SVH = 'svh';

    /**
     * CSS unit 'lvw'
     *
     * 1% of the large viewport's width and height, respectively.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const LVW = 'lvw';

    /**
     * CSS unit 'lvh'
     *
     * 1% of the large viewport's width and height, respectively.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const LVH = 'lvh';

    /**
     * CSS unit 'dvw'
     *
     * 1% of the dynamic viewport's width and height, respectively.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const DVW = 'dvw';

    /**
     * CSS unit 'dvh'
     *
     * 1% of the dynamic viewport's width and height, respectively.
     *
     * Status: Official
     * Type: Relative unit
     *
     * @var string
     */
    public const DVH = 'dvh';
}
