<?php

declare(strict_types=1);

namespace Bic\Mouse\Attribute;

use Bic\Contracts\Event\MatcherInterface;
use Bic\Mouse\ButtonInterface;
use Bic\Mouse\Event\MouseButtonEvent;

/**
 * @template TEvent of MouseButtonEvent
 *
 * @template-extends OnMouseEvent<TEvent>
 * @template-implements MatcherInterface<TEvent>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class OnMouseButtonEvent extends OnMouseEvent implements MatcherInterface
{
    /**
     * @param class-string<TEvent> $event
     */
    public function __construct(
        string $event = MouseButtonEvent::class,
        public readonly ?ButtonInterface $button = null,
    ) {
        parent::__construct($event);
    }

    public function match(object $event): bool
    {
        return $this->button === null || $event->button === $this->button;
    }
}
