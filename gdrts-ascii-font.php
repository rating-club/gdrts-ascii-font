<?php

/*
Plugin Name:       GD Rating System Pro: ASCII Font Demo
Plugin URI:        https://rating.dev4press.com/
Description:       This is a demo plugin showing how to add ASCII character icons for use with GD Rating System Pro plugin.
Author:            Milan Petrovic
Author URI:        https://www.dev4press.com/
Text Domain:       gdrts-ascii-font
Version:           1.1
Requires at least: 5.0
Tested up to:      5.6
Requires PHP:      7.0
License:           GPLv3 or later
License URI:       https://www.gnu.org/licenses/gpl-3.0.html

== Copyright ==
Copyright 2008 - 2020 Milan Petrovic (email: milan@gdragon.info)

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>
*/

class gdrts_ascii_font {
    public function __construct() {
        /* register font icon set */
        add_action('gdrts_register_icons_fonts', array($this, 'register'));
    }

    public function register() {
        /* full url to custom font PHP object file */
        $path = dirname(__FILE__).'/font.ascii.php';

        /* load the font PHP object */
        require_once($path);

        /* register new font PHP object */
        gdrts_register_font('ascii', new gdrts_font_ascii());
    }
}

$__gdrts_ascii_font = new gdrts_ascii_font();
