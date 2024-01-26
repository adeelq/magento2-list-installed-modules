<?php

namespace Adeelq\ListInstalledModules\Controller\Adminhtml;

use Magento\Backend\App\Action;

abstract class Modules extends Action
{
    /**
     * @inheritDoc
     */
    const ADMIN_RESOURCE = 'Adeelq_ListInstalledModules::ListInstalledModules';
}
