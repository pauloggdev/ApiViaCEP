<?php

namespace App\Http\Controllers;
use App\Domain\UseCase\SearchCEPs;
use App\Infrastructure\Viacep;


class CepController extends Controller
{
    public function searchCEP($ceps): array
    {
        
        $viaCepRepository = new Viacep();
        $searchCeps = new SearchCEPs($viaCepRepository);
        return $searchCeps->execute($ceps);
    }
}
