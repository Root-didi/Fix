<?php

namespace Pterodactyl\Http\Requests\Api\Application\Locations;

use Pterodactyl\Services\Acl\Api\AdminAcl;
use Pterodactyl\Http\Requests\Api\Application\ApplicationApiRequest;

class GetLocationsRequest extends ApplicationApiRequest
{
    /**
     * @var string
     */
    protected $resource = AdminAcl::RESOURCE_LOCATIONS;

    /**
     * @var int
     */
    protected $permission = AdminAcl::READ;
}
