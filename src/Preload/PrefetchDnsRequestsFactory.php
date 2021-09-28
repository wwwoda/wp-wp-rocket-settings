<?php

declare(strict_types=1);

namespace Woda\WordPress\WpRocket\Preload;

use Psr\Container\ContainerInterface;
use Woda\WordPress\Config\Config;

class PrefetchDnsRequestsFactory
{
    public function __invoke(ContainerInterface $container): PrefetchDnsRequests
    {
        $config = Config::get($container);
        return new PrefetchDnsRequests(
            $config->array('wp-rocket/preload/prefetch-urls'),
            $config->bool('wp-rocket/preload/prefetch-urls-merge'),
        );
    }
}
