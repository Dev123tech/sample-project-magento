<?php

declare(strict_types=1);

namespace Synamen\GoogleContent\Model\ResourceModel;

use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class AttributeMapping
 *
 * @package Synamen\GoogleContent\Model\ResourceModel
 */
class AttributeMapping extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('synamen_attribute_mapping', 'id');
    }

    /**
     * @return void
     * @throws LocalizedException
     */
    public function deleteAttributeMapping()
    {
        $connection = $this->getConnection();
        $connection->delete($this->getMainTable(), ['id > ?' => 0]);
    }
}
