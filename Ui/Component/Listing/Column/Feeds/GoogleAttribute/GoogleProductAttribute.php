<?php

namespace Synamen\GoogleContent\Ui\Component\Listing\Column\Feeds\GoogleAttribute;

use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Synamen\GoogleContent\Model\ResourceModel\GoogleAttributes\CollectionFactory;

class GoogleProductAttribute implements \Magento\Framework\Option\ArrayInterface
{
        public function __construct(
            CollectionFactory $googleAttributeFactory
        ) {
           $this->_googleAttributeFactory = $googleAttributeFactory;
        }


    public function toOptionArray()
    {
		$attributes = $this->getAttributes();
        return  $attributes;
    }


    public function getAttributes() {
        
         $collection = $this->_googleAttributeFactory->create();
         $attr_groups = array();
          
        foreach ($collection as $item) {
            $attr_groups[] = ['value' => $item->getData()['attribute_value'], 'label' => $item->getData()['attribute_value']];
        }

        return $attr_groups; 
    }


 
 
}