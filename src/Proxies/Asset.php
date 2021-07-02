<?php

declare(strict_types=1);

namespace Pollen\Proxy\Proxies;

use Pollen\Asset\AssetInterface;
use Pollen\Asset\AssetManagerInterface;
use Pollen\Asset\AssetQueueInterface;
use Pollen\Asset\QueueInterface;
use Pollen\Asset\Queues\CssAssetQueue;
use Pollen\Asset\Queues\HtmlQueue;
use Pollen\Asset\Queues\JsAssetQueue;
use Pollen\Asset\Queues\LinkTagQueue;
use Pollen\Asset\Queues\MetaTagQueue;
use Pollen\Asset\Queues\TitleTagQueue;
use Pollen\Proxy\AbstractProxy;

/**
 * @method static AssetManagerInterface addGlobalJsVar(string $key, $value, bool $inFooter = false, ?string $namespace = 'app')
 * @method static AssetManagerInterface addAsset(AssetInterface $asset)
 * @method static AssetManagerInterface addInlineCss(string $css)
 * @method static AssetManagerInterface addInlineJs(string $js, bool $inFooter = false)
 * @method static AssetInterface[]|array all()
 * @method static AssetManagerInterface dequeue(string $name)
 * @method static AssetManagerInterface enqueue(QueueInterface $queue, ?string $name = null)
 * @method static AssetQueueInterface enqueueCss(AssetInterface $asset, array $htmlAttrs = [], int $priority = CssAssetQueue::NORMAL, string|null $queueName = null)
 * @method static QueueInterface enqueueHtml(string $html, bool $inFooter = false, int $priority = HtmlQueue::NORMAL, string|null $queueName = null)
 * @method static AssetQueueInterface enqueueJs(AssetInterface $asset, bool $inFooter = false, array $htmlAttrs = [], int $priority = JsAssetQueue::NORMAL, string|null $queueName = null)
 * @method static QueueInterface enqueueLink(string $rel, string $href, array $htmlAttrs = [], int $priority = LinkTagQueue::NORMAL, string|null $queueName = null)
 * @method static QueueInterface enqueueMeta(string $name, string $content, array $htmlAttrs = [], int $priority = MetaTagQueue::NORMAL, string|null $queueName = null)
 * @method static QueueInterface enqueueTitle(string $title, array $htmlAttrs = [], int $priority = TitleTagQueue::NORMAL, string|null $queueName = null)
 * @method static AssetInterface|null get(string $name)
 * @method static string getBasePath()
 * @method static string getBaseUrl()
 * @method static string getFooter()
 * @method static string getHead()
 * @method static string has(?string $name = null)
 * @method static AssetManagerInterface setBasPath(string $basePath)
 * @method static AssetManagerInterface setBaseUrl(string $baseUrl)
 * @method static AssetManagerInterface remove(string $name)
 */
class Asset extends AbstractProxy
{
    /**
     * {@inheritDoc}
     *
     * @return AssetManagerInterface
     */
    public static function getInstance(): AssetManagerInterface
    {
        return parent::getInstance();
    }

    /**
     * @inheritDoc
     */
    public static function getInstanceIdentifier(): string
    {
        return AssetManagerInterface::class;
    }
}