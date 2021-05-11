<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Proxy\AbstractProxy;
use tiFy\Contracts\PostType\PostType as PostTypeContract;
use tiFy\Contracts\PostType\PostTypeFactory;
use tiFy\Contracts\PostType\PostTypePostMeta;
use tiFy\Contracts\PostType\PostTypeStatus;

/**
 * @method static PostTypeFactory|null get(string $name)
 * @method static PostTypePostMeta meta()
 * @method static PostTypeFactory register(string $name, array|PostTypeFactory $args = [])
 * @method static PostTypeStatus status(string $name, array $args = [])
 */
class PostType extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return mixed|object|PostTypeContract
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
        return 'post-type';
    }
}