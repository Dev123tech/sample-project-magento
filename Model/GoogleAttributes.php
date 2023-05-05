<?php
declare(strict_types=1);

namespace Synamen\GoogleContent\Model;

use Magento\Framework\Model\AbstractModel;

class GoogleAttributes extends AbstractModel
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\Synamen\GoogleContent\Model\ResourceModel\GoogleAttributes::class);
    }
}