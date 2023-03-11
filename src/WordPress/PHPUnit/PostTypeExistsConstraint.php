<?php

/**
 * This file contains BR\WordPress\PHPUnit\PostTypeExistsConstraint.
 *
 * @author Brian Reich <brian@brianreich.dev>
 * @copyright MIT
 */

declare(strict_types=1);

namespace BR\WordPress\PHPUnit;

use PHPUnit\Framework\Constraint\Constraint;

class PostTypeExistsConstraint extends Constraint
{
    public function matches($other): bool
    {
        return post_type_exists($other);
    }

    public function toString(): string
    {
        return 'post type exists';
    }
}
