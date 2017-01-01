<?php
namespace Pacificnm\Log\Service;

class Service implements ServiceInterface
{
    /**
     * 
     * {@inheritDoc}
     * @see \Pacificnm\Log\Service\ServiceInterface::getLogFiles()
     */
    public function getLogFiles()
    {
        // load top level folders
        $dirs = new \DirectoryIterator('./data/log/');
        
        return $dirs;
    }
    
    /**
     * 
     * {@inheritDoc}
     * @see \Pacificnm\Log\Service\ServiceInterface::getLogFolders()
     */
    public function getLogFolders($folder)
    {
        $files = new \DirectoryIterator('./data/log/' . $folder);
        
        return $files;
    }
}