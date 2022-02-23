<?php

namespace Sammyjo20\Saloon\Tests\Resources\Connectors;

use Sammyjo20\Saloon\Http\SaloonConnector;
use Sammyjo20\Saloon\Traits\Features\HasTimeout;
use Sammyjo20\Saloon\Traits\Features\AcceptsJson;

class TimeoutConnector extends SaloonConnector
{
    use AcceptsJson;
    use HasTimeout;

    protected int $connectTimeout = 10;

    protected int $requestTimeout = 5;

    /**
     * Define the base url of the api.
     *
     * @return string
     */
    public function defineBaseUrl(): string
    {
        return apiUrl();
    }

    /**
     * Define the base headers that will be applied in every request.
     *
     * @return string[]
     */
    public function defaultHeaders(): array
    {
        return [];
    }
}
