<?php

declare(strict_types=1);

namespace Pollen\Proxy;

use Pollen\Container\BootableServiceProvider;

class ProxyServiceProvider extends BootableServiceProvider
{
    /**
     * @var string[]
     */
    protected $provides = [
        ProxyManagerInterface::class,
    ];

    /**
     * @inheritDoc
     */
    public function register(): void
    {
        $this->getContainer()->share(
            ProxyManagerInterface::class,
            function () {
                return new ProxyManager([], $this->getContainer());
            }
        );
    }
}
