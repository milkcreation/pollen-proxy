<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Proxy\AbstractProxy;
use tiFy\Contracts\User\RoleManager;
use tiFy\Contracts\User\RoleFactory;

/**
 * @method static RoleFactory|null get(string $name)
 * @method static RoleManager|null register(string $name, array|RoleFactory $attrs = [])
 * @method static RoleManager|null set(string|array $role_name, array|RoleFactory|null $attrs = null)
 */
class Role extends AbstractProxy
{
    /**
     * @inheritDoc
     */
    public static function getInstanceIdentifier(): string
    {
        return 'user.role';
    }
}