<?php

/**
 * WordPress Glossary
 * 
 * WordPress Glossary is a plugin for creating and maintaining a glossary of
 * terms and definitions
 *
 * @author Brian Reich <brian@brianreich.dev>
 * @copyright Copyright (C) 2023 Brian Reich
 * @version $version$
 *
 * @wordpress-plugin
 * Plugin Name:         WordPress Glossary
 * Plugin URI:          https://brianreich.dev/wordpress-plugins/wordpress-glossary/
 * Description:         a plugin for creating and maintaining a glossary of terms and definitions
 * Version:             $version$
 * Requires at least:   6.0
 * Requires PHP:        7.2
 * Author:              Brian Reich <brian@brianreich.dev>
 * Author URI:          https://brianreich.dev/
 * License:             Proprietary
 * License URI:         https://brianreich.dev/wordpress-plugins/wordpress-rss/license
 * Text Domain:         wordpress-rss
 * Update URI:          https://brianreich.dev/wordpress-plugins/wordpress-rss/update
 */

require_once(__DIR__ . '/vendor/autoload.php');

use BR\WordPress\Glossary\Plugin;

// Initialize the plugin class. Constructor takes care of the rest.
$plugin = new Plugin(__FILE__);
