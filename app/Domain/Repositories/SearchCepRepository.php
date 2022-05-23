<?php
namespace App\Domain\Repositories;

use App\Domain\ObjectValues\CEP;

interface SearchCepRepository{
    public function search(CEP $cep);
}