<?php

namespace Synamen\GoogleContent\Ui\Component\Listing\Column\Feeds\Attribute;

use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory;

class Magento implements \Magento\Framework\Option\ArrayInterface
{
        public function __construct(
            CollectionFactory $collectionFactory,
            \Magento\Framework\ObjectManagerInterface $objectManager
        ) {
           $this->_collectionFactory = $collectionFactory;
           $this->_objectManager = $objectManager;
        }


    public function toOptionArray()
    {
		$attributes = $this->getAttributes();
        return  $attributes;
    }


    public function getAttributes() {
        
         $collection = $this->_collectionFactory->create();
         $attr_groups = array();
          
        foreach ($collection as $item) {
            $attr_groups[] = ['value' => $item->getData()['attribute_code'], 'label' => $item->getData()['attribute_code']];
        }

        return $attr_groups; 
    }


 
 
}