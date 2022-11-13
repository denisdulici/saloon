<?php declare(strict_types=1);

namespace Saloon\Tests\Fixtures\Connectors;

use Saloon\Http\Connector;
use Sammyjo20\MissingClass;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Tests\Fixtures\Requests\UserRequest;
use Saloon\Tests\Fixtures\Requests\ErrorRequest;

/**
 * @method getMyUser($userId, $groupId): UserRequest
 * @method errorRequest(...$args): UserRequest
 */
class InvalidRequestSelectionConnector extends Connector
{
    use AcceptsJson;

    /**
     * Manually specify requests that the connector will register as methods
     *
     * @var array|string[]
     */
    protected array $requests = [
        MissingClass::class, // Invalid Class
        TestConnector::class, // Invalid Connector
    ];

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

    public function __construct(public ?string $apiKey = null)
    {
        //
    }
}
