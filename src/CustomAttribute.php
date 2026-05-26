<?php declare(strict_types=1);


namespace TestExtendingInternalInterface;

use Override;

final class CustomAttribute implements AttributeContract
{
    public readonly int|string $value;

    private function __construct()
    {
        $this->value = 'custom-attribute';
    }

    #[Override]
    public static function cases(): array
    {
        return [new self()];
    }

    #[Override]
    public static function from(int|string $value): self
    {
        return new self();
    }

    #[Override]
    public static function tryFrom(int|string $value): self
    {
        return new self();
    }

    public static function fromValue(string $value): self
    {
        return new self();
    }
}
