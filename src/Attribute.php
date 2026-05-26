<?php declare(strict_types=1);


namespace TestExtendingInternalInterface;


enum Attribute: string implements AttributeContract
{
    case _unknown                         = '*';
    case _abbr                            = 'abbr';
    case _accept                          = 'accept';

    public static function fromValue(string $value): self
    {
        $name = '_'.str_replace(['-', '*'], ['_', 'asterisk'], $value);

        return \defined(self::class."::{$name}")
            ? self::{$name}
            : self::_unknown;
    }
}
