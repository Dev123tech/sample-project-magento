<?php
declare(strict_types=1);


namespace Synamen\GoogleContent\Model\ResourceModel\GoogleAttributes;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{

    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \Synamen\GoogleContent\Model\GoogleAttributes::class,
            \Synamen\GoogleContent\Model\ResourceModel\GoogleAttributes::class
        );
    }
}