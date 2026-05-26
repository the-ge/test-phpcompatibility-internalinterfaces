<?php declare(strict_types=1);

namespace TestExtendingInternalInterface;

use Override;
use DateTimeInterface;
use DateInterval;
use DateTimeZone;

abstract class AbstractDate implements DateContract
{
    #[Override]
    abstract public static function fromValue(string $value): DateContract;

    #[Override]
    abstract public function diff(DateTimeInterface $targetObject, bool $absolute = false): DateInterval;

    #[Override]
    abstract public function format(string $format): string;

    #[Override]
    abstract public function getOffset(): int;

    #[Override]
    abstract public function getTimestamp(): int;

    #[Override]
    abstract public function getTimezone(): DateTimeZone|false;

    #[Override]
    abstract public function __wakeup(): void;

    #[Override]
    abstract public function __serialize(): array;

    /** @param array<string, mixed> $data */
    #[Override]
    abstract public function __unserialize(array $data): void;

    #[Override]
    abstract public function getMicrosecond(): int;
}
