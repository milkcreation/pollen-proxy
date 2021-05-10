<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Proxy\AbstractProxy;
use tiFy\Contracts\Cache\Cache as CacheContract;
use tiFy\Contracts\Cache\Store;

/**
 * @method static boolean has(string $key)
 * @method static boolean forget(string $key)
 * @method static mixed get(string $key)
 * @method static mixed put(string $key, $value, int $seconds)
 * @method static Store store(string|null $name = null)
 */
class Cache extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return CacheContract|Store
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
        return 'cache';
    }
}