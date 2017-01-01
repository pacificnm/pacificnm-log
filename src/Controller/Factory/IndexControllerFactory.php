<?php
namespace Pacificnm\Log\Controller\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\Log\Controller\IndexController;

class IndexControllerFactory
{

    /**
     *
     * @param ServiceLocatorInterface $serviceLocator            
     * @return \Pacificnm\Log\Controller\IndexController
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        $realServiceLocator = $serviceLocator->getServiceLocator();
        
        $logService = $realServiceLocator->get('Pacificnm\Log\Service\ServiceInterface');
        
        return new IndexController($logService);
    }
}