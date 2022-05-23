<?php
namespace App\Domain\ObjectValues;

use App\Domain\Exceptions\CepInvalidException;

class CEP{

    private $cep;
    public function __construct(string $cep)
    {
        if (empty($cep) || !$this->isValid($cep)) {
            throw new CepInvalidException($cep);
        }
        $this->cep = $cep;
    }
    private function isValid($cep){
        return preg_match('/^[0-9]{5,5}([- ]?[0-9]{3,3})?$/', $cep);
    }
    public function __toString()
    {
        return $this->cep;
    }


    
}