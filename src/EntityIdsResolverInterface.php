<?php declare(strict_types=1);

namespace MateuszMesek\DocumentDataIndexerApi;

use Traversable;

interface EntityIdsResolverInterface
{
    /**
     * @param \Magento\Framework\Indexer\Dimension[] $dimensions
     * @return \Traversable
     */
    public function resolve(array $dimensions): Traversable;
}