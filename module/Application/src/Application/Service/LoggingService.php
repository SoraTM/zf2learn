<?php 
namespace Application\Service;

class LoggingService
{
    public function onGetGreeting($e)
    {
        error_log(print_r($e, true), 3, 'error.log');
    }
}
