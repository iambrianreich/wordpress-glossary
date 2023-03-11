<?php

/**
 * This file contains BR\WordPress\PHPUnit\TestCase.
 *
 * @author Brian Reich <brian@brianreich.dev>
 * @copyright MIT
 */

declare(strict_types=1);

namespace BR\WordPress\PHPUnit;

use PHPUnit\Framework\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    public function assertActionHandlerIsRegistered(string $action, $handler, string $message = '')
    {
        return $this->assertThat($handler, new HasActionHandlerRegisteredConstraint('init'), $message);
    }
}
