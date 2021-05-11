<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Proxy\AbstractProxy;
use tiFy\Contracts\Http\RedirectResponse;
use tiFy\Contracts\Routing\Redirector;

/**
 * @method static RedirectResponse to(string $path, int $status = 302, array $headers = [])
 * @method static RedirectResponse route(string $name, array $parameters = [], int $status = 302, array $headers = [])
 */
class Redirect extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return mixed|object|Redirector
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
        return 'redirect';
    }
}