<?php

declare(strict_types=1);

namespace Pollen\Proxy;

use Pollen\Support\Concerns\ConfigBagAwareTraitInterface;
use ReStatic\ProxyManager as BaseProxyManager;

/**
 * @mixin BaseProxyManager
 */
interface ProxyManagerInterface extends ConfigBagAwareTraitInterface
{
}