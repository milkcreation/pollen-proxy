<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Proxy\AbstractProxy;

class Cron extends AbstractProxy
{
    public static function getInstanceIdentifier(): string
    {
        return 'cron';
    }
}