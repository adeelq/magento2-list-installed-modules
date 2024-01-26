<?php

namespace Adeelq\ListInstalledModules\Block\Adminhtml;

use Magento\Backend\Block\Widget\Container;
use Magento\Backend\Block\Widget\Context;
use Magento\Framework\Module\ModuleListInterface;

class ListModulesBlock extends Container
{
    /**
     * @var ModuleListInterface
     */
    private ModuleListInterface $moduleList;

    /**
     * @param Context $context
     * @param ModuleListInterface $moduleList
     * @param array $data
     */
    public function __construct(Context $context, ModuleListInterface $moduleList, array $data = [])
    {
        parent::__construct($context, $data);
        $this->moduleList = $moduleList;
    }

    /**
     * @return array
     */
    public function getModulesList(): array
    {
        return $this->moduleList->getAll();
    }
}
