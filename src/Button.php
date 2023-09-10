<?php

declare(strict_types=1);

namespace Bic\Mouse;

/**
 * @psalm-import-type ButtonID from ButtonInterface
 * @phpstan-import-type ButtonID from ButtonInterface
 */
enum Button: int implements ButtonInterface
{
    case LEFT = 0;
    case RIGHT = 1;
    case MIDDLE = 2;
    case X1 = 3;
    case X2 = 4;

    public function getId(): int
    {
        return $this->value;
    }

    /**
     * @param ButtonID $id
     */
    public static function create(int $id): ButtonInterface
    {
        return self::tryFrom($id) ?? UserButton::create($id);
    }
}
