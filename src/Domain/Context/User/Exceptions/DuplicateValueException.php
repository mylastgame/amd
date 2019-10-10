<?php


namespace App\Domain\Context\User\Exceptions;


use Exception;
use Throwable;

class DuplicateValueException extends Exception
{
    public function __construct($value, string $context, $code = 0, Throwable $previous = null)
    {
        $message = "Duplicate value {$value} in {$context}";
        parent::__construct($message, $code, $previous);
    }

}