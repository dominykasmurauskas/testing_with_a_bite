<?php

namespace AppBundle\Exception;

use PHPUnit\Framework\Exception;

class NotABuffetException extends Exception
{
    protected $message = 'Please do not mix the carnivorous and non-carnivorous dinosaurs!';
}
