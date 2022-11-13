<?php declare(strict_types=1);

namespace Saloon\Helpers;

use Saloon\Helpers\Str;

class StateHelper
{
    /**
     * Generate a random string for the state.
     *
     * @return string
     */
    public static function createRandomState(): string
    {
        return Str::random(32);
    }
}
