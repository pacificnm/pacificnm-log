<?php
namespace Pacificnm\Log\Controller\Factory;

use Pacificnm\Log\Controller\ViewController;
use Zend\ServiceManager\ServiceLocatorInterface;

class ViewControllerFactory
{

    /**
     * 
     * @param ServiceLocatorInterface $serviceLocator
     * @return \Pacificnm\Log\Controller\ViewController
     */
    public function __invoke(ServiceLocatorInterface $serviceLocator)
    {
        return new ViewController();
    }
}
