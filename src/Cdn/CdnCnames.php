<?php

declare(strict_types=1);

namespace Woda\WordPress\WpRocket\Cdn;

use Woda\WordPress\WpRocket\AbstractArrayMerger;

class CdnCnames extends AbstractArrayMerger
{
    public function registerCallbacks(): void
    {
        add_filter('rocket_cdn_cnames', [$this, 'mergeArrays']);
    }
}
