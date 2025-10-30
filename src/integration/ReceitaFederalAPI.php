<?php

namespace App\Integrations;

use Illuminate\Support\Facades\Http;

class ReceitaFederalAPI
{
    private $baseUrl = 'https://api.receitaws.com.br/v1/cnpj/';

    public function consultarCNPJ(string $cnpj)
    {
        $response = Http::get($this->baseUrl . $cnpj);

        if ($response->failed()) {
            return [
                'status' => 'error',
                'message' => 'Falha na consulta da Receita Federal'
            ];
        }

        return $response->json();
    }
}
