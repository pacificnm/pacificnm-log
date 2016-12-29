<?php
namespace Log\Service;

interface ServiceInterface
{
    /**
     * 
     * @return \DirectoryIterator
     */
    public function getLogFiles();
    
    /**
     * 
     * @param unknown $folder
     * @return \DirectoryIterator
     */
    public function getLogFolders($folder);
}