<?php

declare(strict_types=1);

namespace Bic\Mouse\Attribute;

use Bic\Mouse\Event\MouseButtonEvent;

/**
 * @template TEvent of MouseButtonEvent
 *
 * @template-extends OnMouseEvent<TEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnMouseButtonEvent extends OnMouseEvent
{
    /**
     * @param class-string<TEvent> $event
     */
    public function __construct(string $event = MouseButtonEvent::class)
    {
        parent::__construct($event);
    }
}
