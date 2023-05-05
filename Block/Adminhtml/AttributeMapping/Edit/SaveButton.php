<?php

declare(strict_types=1);

namespace Synamen\GoogleContent\Block\Adminhtml\AttributeMapping\Edit;

use Magento\Customer\Block\Adminhtml\Edit\GenericButton;
use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 *
 * @package Synamen\GoogleContent\Block\Adminhtml\AttributeMapping\Edit
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * @inheritDoc
     */
    public function getButtonData()
    {
        $url = $this->getUrl('synamen_attribute/attribute/save');

        return [
            'label'      => __('Save'),
            'class'      => 'save primary',
            'on_click'   => "setLocation('" . $url . "')",
            'sort_order' => 90,
        ];
    }
}
