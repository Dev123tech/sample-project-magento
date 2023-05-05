<?php

declare(strict_types=1);

namespace Synamen\GoogleContent\Model;

use Magento\Framework\Model\AbstractModel;

/**
 * Class AttributeMapping
 *
 * @package Synamen\GoogleContent\Model
 */
class AttributeMapping extends AbstractModel
{

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(\Synamen\GoogleContent\Model\ResourceModel\AttributeMapping::class);
    }
}
