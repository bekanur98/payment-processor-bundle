<?php


namespace App;


use Symfony\Component\HttpKernel\Bundle\Bundle;

class PaymentProcessorBundle extends Bundle
{
    public function getPath()
    {
        return \dirname(__DIR__);
    }
}