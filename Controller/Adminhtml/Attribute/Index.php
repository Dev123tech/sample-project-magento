<?php

declare(strict_types=1);

namespace Synamen\GoogleContent\Controller\Adminhtml\Attribute;

use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\ImportExport\Controller\Adminhtml\Export\Index
{
    /**
     * @inheritDoc
     */
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->setActiveMenu('Synamen_GoogleContent::attribute_mapping');
        $resultPage->getConfig()->getTitle()->prepend(__('attribute mapping'));
        $resultPage->getConfig()->getTitle()->prepend(__('attribute mapping'));
        $resultPage->addBreadcrumb(__('attribute mapping'), __('attribute mapping'));

        return $resultPage;
    }

    /**
     * @inheritDoc
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Synamen_GoogleContent::attribute_mapping');
    }
}
