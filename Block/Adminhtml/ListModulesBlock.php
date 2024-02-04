<?php

namespace Adeelq\ListInstalledModules\Block\Adminhtml;

use Adeelq\CoreModule\Helper\Base;
use Magento\Backend\Block\Widget\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Module\ModuleListInterface;
use Throwable;

class ListModulesBlock extends Container
{
    /**
     * @var ModuleListInterface
     */
    private ModuleListInterface $moduleList;

    /**
     * @var Base
     */
    private Base $baseHelper;

    /**
     * @param Context $context
     * @param ModuleListInterface $moduleList
     * @param Base $baseHelper
     * @param array $data
     */
    public function __construct(Context $context, ModuleListInterface $moduleList, Base $baseHelper, array $data = [])
    {
        parent::__construct($context, $data);
        $this->moduleList = $moduleList;
        $this->baseHelper = $baseHelper;
    }

    /**
     * @return array
     */
    public function getModulesList(): array
    {
        try {
            return $this->moduleList->getAll();
        } catch (Throwable $e) {
            $this->baseHelper->logError(__METHOD__, $e);
            return [];
        }
    }
}
