<?php

namespace Saloon\Helpers;

use DateInterval;
use DateTime;
use DateTimeImmutable;

class Date
{
    /**
     * Constructor
     *
     * @param DateTime $dateTime
     */
    public function __construct(protected DateTime $dateTime)
    {
        //
    }

    /**
     * Construct
     *
     * @return static
     */
    public static function now(): static
    {
        return new static(new DateTime);
    }

    /**
     * Add seconds
     *
     * @param int $seconds
     * @return $this
     */
    public function addSeconds(int $seconds): static
    {
        $this->dateTime->add(
            DateInterval::createFromDateString($seconds . ' seconds')
        );

        return $this;
    }

    /**
     * Get the datetime instance
     *
     * @return DateTimeImmutable
     */
    public function toDateTime(): DateTimeImmutable
    {
        return DateTimeImmutable::createFromMutable($this->dateTime);
    }
}
