<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Session\SessionManagerInterface;
use Pollen\Proxy\AbstractProxy;

/**
 *
 */
class Session extends AbstractProxy
{
    /**
     * @inheritDoc
     *
     * @return SessionManagerInterface
     */
    public static function getInstance(): SessionManagerInterface
    {
        return parent::getInstance();
    }

    /**
     * @inheritDoc
     */
    public static function getInstanceIdentifier(): string
    {
        return SessionManagerInterface::class;
    }
}