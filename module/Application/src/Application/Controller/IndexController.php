<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    private $greetingService;
  
    public function setGreetingService($service)
    {
        //eval(\Psy\sh());
        $this->greetingService = $service;
    }
    
    public function indexAction()
    {
        //eval(\Psy\sh());
        $greetingService = $this->getServiceLocator()->get('greetingService');
        return new ViewModel(['greeting' => $this->greetingService->getGreeting()]);
    }
}
