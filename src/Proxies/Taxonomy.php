<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Proxy\AbstractProxy;
use tiFy\Contracts\Taxonomy\Taxonomy as TaxonomyContract;
use tiFy\Contracts\Taxonomy\TaxonomyFactory;
use tiFy\Contracts\Taxonomy\TaxonomyTermMeta;

/**
 * @method static TaxonomyFactory|null get(string $name)
 * @method static TaxonomyTermMeta meta()
 * @method static TaxonomyFactory register(string $name, array $args = [])
 */
class Taxonomy extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return mixed|object|TaxonomyContract
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
        return 'taxonomy';
    }
}