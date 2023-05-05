<?php

declare(strict_types=1);

namespace Synamen\GoogleContent\Model\Attribute;

use Synamen\GoogleContent\Model\ResourceModel\AttributeMapping\Collection;
use Synamen\GoogleContent\Model\ResourceModel\AttributeMapping\CollectionFactory;
use Magento\Ui\DataProvider\AbstractDataProvider;

/**
 * Class DataProvider
 *
 * @package Synamen\GoogleContent\Model
 */
class DataProvider extends AbstractDataProvider
{
    protected $loadedData;

    protected $rowCollection;

    /**
     * @param string            $name
     * @param string            $primaryFieldName
     * @param string            $requestFieldName
     * @param Collection        $collection
     * @param CollectionFactory $collectionFactory
     * @param array             $meta
     * @param array             $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        Collection $collection,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
        $this->collection    = $collection;
        $this->rowCollection = $collectionFactory;
    }

    /**
     * @return array
     */
    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }

        $collection = $this->rowCollection->create()->setOrder('id', 'ASC');
        foreach ($collection->getItems() as $item) {
            $this->loadedData['stores']['attribute_mapping_container'][] = $item->getData();
        }

        return $this->loadedData;
    }
}
