<?php

declare(strict_types=1);

namespace Bic\Mouse\Event;

use Bic\Mouse\ButtonInterface;

/**
 * @template TContext of object
 *
 * @template-extends MouseEvent<TContext>
 */
abstract class MouseButtonEvent extends MouseEvent
{
    /**
     * @param TContext $target
     */
    public function __construct(
        object $target,
        public readonly int $x,
        public readonly int $y,
        public readonly ButtonInterface $button,
    ) {
        parent::__construct($target);
    }
}
