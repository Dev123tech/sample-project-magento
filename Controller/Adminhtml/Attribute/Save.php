<?php

declare(strict_types=1);

namespace Synamen\GoogleContent\Controller\Adminhtml\Attribute;

use Synamen\GoogleContent\Model\AttributeMappingFactory as AttributeMappingModelFactory;
use Synamen\GoogleContent\Model\ResourceModel\AttributeMappingFactory as AttributeMappingResourceModelFactory;
use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;

/**
 * Class Save
 *
 * @package Synamen\GoogleContent\Controller\Adminhtml\Row
 */
class Save extends Action
{
    protected $AttributeMappingModelFactory;

    protected $AttributeMappingResourceModelFactory;

    /**
     * @param Context                         $context
     * @param AttributeMappingModelFactory         $AttributeMappingModelFactory
     * @param AttributeMappingResourceModelFactory $AttributeMappingResourceModelFactory
     */
    public function __construct(
        Context $context,
        AttributeMappingModelFactory $AttributeMappingModelFactory,
        AttributeMappingResourceModelFactory $AttributeMappingResourceModelFactory
    ) {
        parent::__construct($context);
        $this->AttributeMappingModelFactory         = $AttributeMappingModelFactory;
        $this->AttributeMappingResourceModelFactory = $AttributeMappingResourceModelFactory;
    }

    /**
     * @inheritDoc
     */
    public function execute()
    {
        try {
            $dynamicRowResourceModel = $this->AttributeMappingResourceModelFactory->create();
            $dynamicRowData          = $this->getRequest()->getParam('attribute_mapping_container');
            $dynamicRowResourceModel->deleteAttributeMapping();

            if (\is_array($dynamicRowData) && !empty($dynamicRowData)) {
                foreach ($dynamicRowData as $dynamicRowDatum) {
                    $AttributeMappingModel = $this->AttributeMappingModelFactory->create();
                    unset($dynamicRowDatum['id']);
                    $AttributeMappingModel->addData($dynamicRowDatum);
                    $AttributeMappingModel->save();
                }
            }

            $this->messageManager->addSuccessMessage(__('Attributes have been saved successfully'));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__($e->getMessage()));
        }

        $this->_redirect('*/*/index/scope/stores');
    }

}
