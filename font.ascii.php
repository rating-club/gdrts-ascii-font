<?php

if (!defined('ABSPATH')) exit;

class gdrts_font_ascii extends gdrts_font {
    /* whenever you make changes, modify the version number */
    public $version = '1.1.0';

    /* name of the font, it has to match name of the CSS classes 
     * this is used for name of the font class: gdrts-fonticon-ascii */
    public $name = 'ascii';

    /* list of the rating methods this font supports.
     * if you only include icons for stars, leave only rating methods
     * that are supported. */
    public $active = array(
        'stars-rating', 
        'stars-review', 
        'thumbs-rating', 
        'like-this'
    );

    public function __construct() {
        parent::__construct();

        /* label of the font for display purpose */
        $this->label = __("ASCII Font Icon", "gdrts-ascii-font");

        /* Characters can be plain characters or decimal/hexadecimal encoded
         * HTML entities. To get values for all supported unicode character,
         * use this website: http://www.fileformat.info/info/unicode/index.htm
         * for characters with decimal value over 65535, you must copy/paste
         * actual character, JavaScript doesn't support converting HTML
         * entities with value over 65535. For HTML enity values don't
         * include semi colon character at the end.
         * Most standard fonts support all unicode characters. And some 
         * characters are not properly vertically aligned.
         *
         * In some cases, characters may be interpreted as emojis, making the
         * use for rating purposes impossible. Make sure to test that ASCII
         * characters you want are not emojis.
         */

        $this->icons = array(
            'star' => array('char' => '&#x2605;', 'label' => __("Star", "gdrts-ascii-font")),
            'star-circle' => array('char' => '&#9055;', 'label' => __("Circle Star", "gdrts-ascii-font")),
            'star-glowing' => array('char' => '&#x272d;', 'label' => __("Glowing Star", "gdrts-ascii-font")),
            'skull' => array('char' => '🕱', 'label' => __("Skull", "gdrts-ascii-font")),
            'snowflake' => array('char' => '&#10054;', 'label' => __("Snowflake", "gdrts-ascii-font")),
            'radioactive' => array('char' => '&#x2622;', 'label' => __("Radioactive", "gdrts-ascii-font"))
        );

        $this->thumbs = array(
            'hands' => array('up' => '👍', 'down' => '👎', 'label' => __("Hands", "gdrts-ascii-font")),
            'arrows' => array('up' => '▲', 'down' => '▼', 'label' => __("Arrows", "gdrts-ascii-font"))
        );

        $this->likes = array(
            'hands' => array('like' => '&#x1f44d;', 'liked' => '&#10004;', 'clear' => '🗙', 'label' => __("Hands", "gdrts-ascii-font")),
            'smiley' => array('like' => '&#9787;', 'liked' => '&#10004;', 'clear' => '🗙', 'label' => __("Smiley", "gdrts-ascii-font")),
        );
    }
}
