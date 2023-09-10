<?php

declare(strict_types=1);

namespace Bic\Mouse;

/**
 * @psalm-import-type ButtonID from ButtonInterface
 * @phpstan-import-type ButtonID from ButtonInterface
 */
final class UserButton implements ButtonInterface
{
    /**
     * @var array<ButtonID, ButtonInterface>
     */
    private static array $instances = [];

    /**
     * @param ButtonID $id
     *
     * @internal Please use {@see UserButton::create()} instead.
     */
    private function __construct(
        private readonly int $id,
    ) {
    }

    /**
     * @return ButtonID
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param ButtonID $id
     */
    public static function create(int $id): ButtonInterface
    {
        return self::$instances[$id] ??= new self($id);
    }
}
