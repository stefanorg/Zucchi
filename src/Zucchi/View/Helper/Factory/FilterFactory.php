<?php
namespace Zucchi\View\Helper\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zucchi\View\Helper\Filter;
/**
* Factory
*/
class FilterFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $viewHelperManager)
    {
        $sm = $viewHelperManager->getServiceLocator();
        $helper = new Filter();
        $helper->setServiceLocator($sm);
        return $helper;
    }
}