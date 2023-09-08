<?php

declare(strict_types=1);

namespace Bic\Mouse\Event;

/**
 * @template TContext of object
 *
 * @template-extends MouseEvent<TContext>
 */
final class MouseMoveEvent extends MouseEvent
{
    /**
     * @param TContext $target
     */
    public function __construct(
        object $target,
        public readonly int $x,
        public readonly int $y,
    ) {
        parent::__construct($target);
    }
}
