<?php

/**
 * This file contains Tests\BR\WordPress\Glossary\PluginTest.
 *
 * @author Brian Reich <brian@brianreich.dev>
 * @copyright MIT
 */

declare(strict_types=1);

namespace Tests\BR\WordPress\Glossary;

use BR\WordPress\Glossary\Plugin;
use BR\WordPress\PHPUnit\HasActionHandlerRegisteredConstraint;
use BR\WordPress\PHPUnit\TestCase;

use function Patchwork\redefine;

/**
 * Tests BR\WordPress\Glossary\Plugin.
 *
 * Uses the WP_Mock library to mock calls to WordPress API.
 *
 * @see https://github.com/10up/wp_mock
 */
class PluginTest extends TestCase
{
    protected $actions = [];

    /**
     * Verifies that the plugin class exists.
     *
     * @return void
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists(\BR\WordPress\Glossary\Plugin::class));
    }

    /**
     * Verifies post type registration is functioning.
     *
     * Verifies that plugin's init action handler that registers post types is
     * registered.
     *
     * @return void
     */
    public function testRegistersPostType()
    {
        $plugin = new Plugin();
        $this->assertActionHandlerIsRegistered(
            'init',
            [$plugin, 'registerTermPostType'],
            'init handler to register terms post type is not registered'
        );
    }
}
