<?php

declare(strict_types=1);

namespace Pollen\Proxy;

use Pollen\Support\Concerns\ConfigBagAwareTrait;
use Pollen\Support\Exception\ManagerRuntimeException;
use Psr\Container\ContainerInterface as Container;
use ReStatic\ProxyManager as BaseProxyManager;

class ProxyManager extends BaseProxyManager implements ProxyManagerInterface
{
    use ConfigBagAwareTrait;

    /**
     * Instance principale.
     * @var static|null
     */
    private static $instance;

    /**
     * @param array $config
     * @param Container $container
     */
    public function __construct(array $config, Container $container)
    {
        $this->setConfig($config);

        parent::__construct($container);

        if (!self::$instance instanceof static) {
            self::$instance = $this;
        }
    }

    /**
     * Récupération de l'instance principale.
     *
     * @return static
     */
    public static function getInstance(): ProxyManagerInterface
    {
        if (self::$instance instanceof self) {
            return self::$instance;
        }
        throw new ManagerRuntimeException(sprintf('Unavailable [%s] instance', __CLASS__));
    }
}