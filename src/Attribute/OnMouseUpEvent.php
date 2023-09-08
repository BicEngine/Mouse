<?php

declare(strict_types=1);

namespace Bic\Mouse\Attribute;

use Bic\Mouse\Event\MouseUpEvent;

/**
 * @template-extends OnMouseButtonEvent<MouseUpEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnMouseUpEvent extends OnMouseButtonEvent
{
    public function __construct()
    {
        parent::__construct(MouseUpEvent::class);
    }
}
