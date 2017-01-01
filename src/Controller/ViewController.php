<?php
namespace Pacificnm\Log\Controller;

use Zend\View\Model\ViewModel;
use Pacificnm\Controller\AbstractApplicationController;

class ViewController extends AbstractApplicationController
{
    public function __construct()
    {
        
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Pacificnm\Controller\AbstractApplicationController::indexAction()
     */
    public function indexAction()
    {
        parent::indexAction();
        
        $this->getEventManager()->trigger('logView', $this, array(
            'authId' => $this->identity()->getAuthId(),
            'requestUrl' => $this->getRequest()->getUri()
        ));
        
        $file = $this->params()->fromRoute('file');
        
        $fileContent = file_get_contents('./data/log/' .$file);
        
        return new ViewModel(array(
            'fileContent' => $fileContent
        ));
    }
}