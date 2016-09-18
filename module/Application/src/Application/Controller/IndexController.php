<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController{

    public function IndexAction(){
        //eval(\Psy\sh());
        return new ViewModel(['greeting' => 'Hello!']);
    }
}
