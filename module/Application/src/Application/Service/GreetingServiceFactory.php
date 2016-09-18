<?php 
namespace Application\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class GreetingServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $greetingService = new GreetingService();
        
        $greetingService->setEventManager($serviceLocator->get('eventManager'));
        
        $loggingService = $serviceLocator->get('loggingService');

        //$loggingService = new LoggingService();

        $greetingService->getEventManager()->attach(
            'getGreeting',
            [$loggingService, 'onGetGreeting']
        );
        
        return $greetingService;
    }
}
