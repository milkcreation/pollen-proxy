<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Proxy\AbstractProxy;
use tiFy\Contracts\User\User as UserContract;
use tiFy\Contracts\User\UserMeta;

/**
 * @method static UserMeta meta()
 */
class User extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return mixed|object|UserContract
     */
    public static function getInstance()
    {
        return parent::getInstance();
    }

    /**
     * @inheritDoc
     */
    public static function getInstanceIdentifier(): string
    {
        return 'user';
    }
}