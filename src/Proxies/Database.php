<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Illuminate\Database\Connection;
use Illuminate\Database\Schema\Builder as Schema;
use Illuminate\Database\Query\Builder as Query;
use Pollen\Database\DatabaseManagerInterface;
use Pollen\Proxy\AbstractProxy;

/**
 * @method static void addConnection(array $config, string $name = 'default')
 * @method static Connection getConnection(string|null $name = null)
 * @method static Schema schema(string|null $connexion = null)
 * @method static Query table(string $table, string|null $connexion = null)
 */
class Database extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return DatabaseManagerInterface
     */
    public static function getInstance(): DatabaseManagerInterface
    {
        return parent::getInstance();
    }

    /**
     * @inheritDoc
     */
    public static function getInstanceIdentifier(): string
    {
        return DatabaseManagerInterface::class;
    }
}