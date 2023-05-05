<?php

declare(strict_types=1);

namespace Synamen\GoogleContent\Model\ResourceModel\AttributeMapping;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;


class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Synamen\GoogleContent\Model\AttributeMapping::class,
            \Synamen\GoogleContent\Model\ResourceModel\AttributeMapping::class
        );
    }
}
