<?php
namespace App\Domain\UseCase;

use App\Domain\ObjectValues\CEP;
use App\Domain\Repositories\SearchCepRepository;

class SearchCEPs{

    private $searchCepRepository;

    public function __construct(SearchCepRepository $searchCepRepository)
    {
        $this->searchCepRepository = $searchCepRepository;
    }
    public function execute(string $ceps):Array{

        $arrayCeps = explode(",", $ceps); 
        
        foreach ($arrayCeps as $key=> $cep) {
            $cep = new CEP($cep);
            $response = $this->searchCepRepository->search($cep);
            $arrayResponse[] = $response;
        }
        return $arrayResponse;
    }
}