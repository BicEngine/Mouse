<?php

declare(strict_types=1);

namespace Bic\Mouse\Attribute;

use Bic\Contracts\Event\MatcherInterface;
use Bic\Mouse\Event\MouseWheelEvent;
use Bic\Mouse\Wheel;

/**
 * @template-extends OnMouseEvent<MouseWheelEvent>
 * @template-implements MatcherInterface<MouseWheelEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnMouseWheelEvent extends OnMouseEvent implements MatcherInterface
{
    public function __construct(
        public readonly ?Wheel $wheel = null,
    ) {
        parent::__construct(MouseWheelEvent::class);
    }

    public function match(object $event): bool
    {
        return $this->wheel === null || $event->wheel === $this->wheel;
    }
}
