<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Proxy\AbstractProxy;
use tiFy\Contracts\Column\Column as ColumnContract;
use tiFy\Contracts\Column\ColumnItem as ColumnDriverContract;

/**
 * @method static add(string $screen, string $name, array|ColumnDriverContract $attrs)
 * @method static stack(string $screen, array[]|ColumnDriverContract[] $attrs)
 */
class Column extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return mixed|object|ColumnContract
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
        return 'column';
    }
}