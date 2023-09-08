<?php

declare(strict_types=1);

namespace Bic\Mouse\Attribute;

use Bic\Mouse\Event\MouseDownEvent;

/**
 * @template-extends OnMouseButtonEvent<MouseDownEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnMouseDownEvent extends OnMouseButtonEvent
{
    public function __construct()
    {
        parent::__construct(MouseDownEvent::class);
    }
}
