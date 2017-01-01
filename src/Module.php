<?php
namespace Pacificnm\Log;

class Module
{
    /**
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/pacificnm.log.global.php';
    }

    /**
     * 
     * @return string[][][]
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/' 
                ),
            ),
        );
    }
}
