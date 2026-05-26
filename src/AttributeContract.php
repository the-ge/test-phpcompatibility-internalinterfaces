<?php declare(strict_types=1);

namespace TestExtendingInternalInterface;


interface AttributeContract extends \UnitEnum, \BackedEnum
{
    public static function fromValue(string $value): self;
}
