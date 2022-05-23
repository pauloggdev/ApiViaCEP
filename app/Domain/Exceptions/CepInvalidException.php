<?php
namespace App\Domain\Exceptions;
use Exception;
use Throwable;

class CepInvalidException extends Exception{

    public function __construct($cep, $code = 0, Throwable $previous = null)
    {
        $message = "CEP: {$cep} invalido";
        parent::__construct($message, $code, $previous);
    }
    

}