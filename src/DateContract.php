<?php declare(strict_types=1);

namespace TestExtendingInternalInterface;

interface DateContract extends \DateTimeInterface
{
    public static function fromValue(string $value): self;
}
