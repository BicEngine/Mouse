<?php

declare(strict_types=1);

namespace Bic\Mouse;

/**
 * @psalm-type ButtonID = int<0, max>
 * @phpstan-type ButtonID int<0, max>
 */
interface ButtonInterface
{
    /**
     * @return ButtonID
     */
    public function getId(): int;
}
