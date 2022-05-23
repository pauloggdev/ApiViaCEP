<?php

namespace App\Infrastructure;

use App\Domain\ObjectValues\CEP;
use App\Domain\Repositories\SearchCepRepository;
use App\Domain\UseCase\OutputCEP;
use Illuminate\Support\Facades\Http;

class Viacep implements SearchCepRepository
{
    public function search(CEP $cep): array
    {
        $response = Http::get("http://viacep.com.br/ws/{$cep}/json/")->json();

        return [
            "cep" => $response['cep'],
            "label" => $response['logradouro'].", ".$response['localidade'],
            "logradouro" => $response['logradouro'],
            "complemento" => $response['complemento'],
            "bairro" => $response['bairro'],
            "localidade" => $response['localidade'],
            "uf" => $response['uf'],
            "ibge" => $response['ibge'],
            "gia" => $response['gia'],
            "ddd" => $response['ddd'],
            "siafi" => $response['siafi'],
        ];
    }
}
