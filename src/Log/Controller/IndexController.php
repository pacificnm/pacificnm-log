<?php
namespace Log\Controller;

use Zend\View\Model\ViewModel;
use Application\Controller\AbstractApplicationController;
use Log\Service\ServiceInterface;

class IndexController extends AbstractApplicationController
{
    /**
     * 
     * @var ServiceInterface
     */
    protected $service;
    
    /**
     * 
     * @param ServiceInterface $service
     */
    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
        
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Application\Controller\AbstractApplicationController::indexAction()
     */
    public function indexAction()
    {
        parent::indexAction();
        
        $this->getEventManager()->trigger('logIndex', $this, array(
            'authId' => $this->identity()->getAuthId(),
            'requestUrl' => $this->getRequest()->getUri()
        ));
        
        $logFiles = $this->service->getLogFiles();
        
        
        // return view
        return new ViewModel(array(
            'logFiles' => $logFiles
        ));
    }
}