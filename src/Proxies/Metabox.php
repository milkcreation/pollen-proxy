<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Closure;
use Pollen\Metabox\MetaboxContextInterface;
use Pollen\Metabox\MetaboxDriverInterface;
use Pollen\Metabox\MetaboxManagerInterface;
use Pollen\Metabox\MetaboxScreenInterface;
use Pollen\Proxy\AbstractProxy;

/**
 * @method static MetaboxManagerInterface add(string $alias, string|array|MetaboxDriverInterface|Closure $driverDefinition, string $screen, string $context)
 * @method static MetaboxDriverInterface[] all()
 * @method static MetaboxManagerInterface dispatch(string|null $screenAlias = null)
 * @method static MetaboxContextInterface getContext(string $alias)
 * @method static MetaboxScreenInterface getScreen(string $alias)
 * @method static string|null getXhrRouteUrl(string $metabox, string|null $controller = null, array $params = [])
 * @method static bool hasScreen(string $alias)
 * @method static MetaboxManagerInterface registerContext(string $alias, string|array|MetaboxContextInterface|null $contextDefinition = null)
 * @method static MetaboxManagerInterface registerDriver(string $alias, string|array|MetaboxDriverInterface|null $driverDefinition = null)
 * @method static MetaboxManagerInterface registerScreen(string $alias, string|array|MetaboxScreenInterface|null $screenDefinition = null)
 * @method static MetaboxManagerInterface setBaseContext(string $baseContext)
 * @method static MetaboxManagerInterface setBaseDriver(string $baseDriver)
 * @method static MetaboxManagerInterface setBaseScreen(string $baseScreen)
 * @method static MetaboxManagerInterface setCurrentScreen(string $screen)
 * @method static MetaboxManagerInterface stack(string $screen, string $context, string[][]|array[][]|MetaboxDriverInterface[][] $driversDefinitions)
 */
class Metabox extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return MetaboxManagerInterface
     */
    public static function getInstance(): MetaboxManagerInterface
    {
        return parent::getInstance();
    }

    /**
     * @inheritDoc
     */
    public static function getInstanceIdentifier(): string
    {
        return MetaboxManagerInterface::class;
    }
}