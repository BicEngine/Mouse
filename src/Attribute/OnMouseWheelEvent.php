<?php

declare(strict_types=1);

namespace Bic\Mouse\Attribute;

use Bic\Mouse\Event\MouseWheelEvent;

/**
 * @template-extends OnMouseEvent<MouseWheelEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnMouseWheelEvent extends OnMouseEvent
{
    public function __construct()
    {
        parent::__construct(MouseWheelEvent::class);
    }
}
