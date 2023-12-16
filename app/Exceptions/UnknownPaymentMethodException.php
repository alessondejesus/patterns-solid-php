<?php

namespace App\Exceptions;

use Exception;

class UnknownPaymentMethodException extends Exception
{
    protected $code = '501';
    protected $message = 'Credentials not found';
}
