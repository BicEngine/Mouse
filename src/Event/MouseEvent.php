<?php

declare(strict_types=1);

namespace Bic\Mouse\Event;

/**
 * @template TContext of object
 */
abstract class MouseEvent
{
    /**
     * @param TContext $target
     */
    public function __construct(
        public readonly object $target,
    ) {
    }
}
