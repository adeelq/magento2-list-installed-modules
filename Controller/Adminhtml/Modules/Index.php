<?php

namespace Adeelq\ListInstalledModules\Controller\Adminhtml\Modules;

use Adeelq\CoreModule\Controller\Adminhtml\AbstractIndex;
use Adeelq\ListInstalledModules\Controller\Adminhtml\Modules;

class Index extends AbstractIndex
{
    /**
     * @inheritDoc
     */
    const ADMIN_RESOURCE = Modules::ADMIN_RESOURCE;

    /**
     * @inheritDoc
     */
    protected function getLabelTitle(): string
    {
        return 'Installed Modules';
    }
}
