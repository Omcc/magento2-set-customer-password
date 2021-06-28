<?php

namespace Swe\SetCustomerPassword\Block\Adminhtml\Customer\Edit\Tab\View;

use Magento\Customer\Block\Adminhtml\Edit\Tab\View\PersonalInfo;

/**
 * Class SetPassword
 *
 * @package Swe\SetCustomerPassword\Block\Adminhtml\Customer\Edit\Tab\View
 */
class SetPassword extends PersonalInfo
{
    /**
     * Don't show block if not allowed by ACL
     *
     * @inheritdoc
     */
    protected function _toHtml()
    {
        if (!$this->_authorization->isAllowed('Swe_SetCustomerPassword::set_password')) {
            return;
        }

        return parent::_toHtml();
    }
}