<?php
namespace Application\Service;

use Zend\EventManager\EventManagerInterface;

class GreetingService
{
    private $eventManager;
    
    public function getGreeting()
    {
        $this->eventManager->trigger('getGreeting');
        return "Hello";
    }
    
    public function getEventManager()
    {
        return $this->eventManager;
    }
    
    public function setEventManager(EventManagerInterface $em)
    {
        $this->eventManager = $em;
    }
}
