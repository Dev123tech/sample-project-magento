<?php
declare(strict_types=1);

namespace Synamen\GoogleContent\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class GoogleAttributes extends AbstractDb
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('google_product_attributes', 'id');
    }
}