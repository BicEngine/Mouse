<?php

declare(strict_types=1);

namespace Bic\Mouse\Event;

use Bic\Mouse\Wheel;

/**
 * @template TContext of object
 *
 * @template-extends MouseEvent<TContext>
 */
class MouseWheelEvent extends MouseEvent
{
    /**
     * @param TContext $target
     */
    public function __construct(
        object $target,
        public readonly Wheel $wheel,
    ) {
        parent::__construct($target);
    }
}
