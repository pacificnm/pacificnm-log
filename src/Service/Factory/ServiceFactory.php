<?php
namespace Pacificnm\Log\Service\Factory;

use Zend\ServiceManager\ServiceLocatorInterface;
use Pacificnm\Log\Service\Service;

class ServiceFactory
{

    /**
     *
     * @param ServiceLocatorInterface $serviceLocator            
     * @return \Pacificnm\Log\Service\LogService
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        return new Service();
    }
}