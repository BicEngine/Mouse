<?php

declare(strict_types=1);

namespace Bic\Mouse\Attribute;

use Bic\Mouse\Event\MouseMoveEvent;

/**
 * @template-extends OnMouseEvent<MouseMoveEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnMouseMoveEvent extends OnMouseEvent
{
    public function __construct()
    {
        parent::__construct(MouseMoveEvent::class);
    }
}
