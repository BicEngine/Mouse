<?php

declare(strict_types=1);

namespace Bic\Mouse\Attribute;

use Bic\Contracts\Event\OnEvent;
use Bic\Mouse\Event\MouseEvent;

/**
 * @template TEvent of MouseEvent
 *
 * @template-extends OnEvent<TEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnMouseEvent extends OnEvent
{
    /**
     * @param class-string<TEvent> $event
     */
    public function __construct(string $event = MouseEvent::class)
    {
        parent::__construct($event);
    }
}
