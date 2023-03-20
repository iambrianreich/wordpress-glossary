<?php

/**
 * This file contains BR\WordPress\Glossary\Plugin.
 *
 * @author Brian Reich <brian@brianreich.dev>
 * @copyright MIT
 */

declare(strict_types=1);

namespace BR\WordPress\Glossary;

class Plugin
{
    public const TERM_POST_TYPE = 'term';

    public function __construct()
    {
        add_action('init', [$this, 'registerTermPostType']);
    }

    public function registerTermPostType()
    {
        register_post_type(
            self::TERM_POST_TYPE,
            array(
                'labels' => array(
                    'name' => __('Terms'),
                    'singular_name' => __('Glossary'),
                    'archives' => __('Glossary'),
                    'menu_name' => __('Glossary'),
                ),
                'description' => __('Defines speific words used frequently in the site content.'),
                'supports' => ['title', 'author', 'thumbnail', 'excerpt', 'editor', 'revisions'],
                'show_in_rest' => true,
                'public' => true,
                'has_archive' => true,
                'rewrite' => [
                    'slug' => 'glossary'
                ]
            )
        );
    }
}
