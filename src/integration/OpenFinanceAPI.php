<?php

namespace App\Integrations;

use Illuminate\Support\Facades\Http;

class OpenFinanceAPI
{
    private $baseUrl;
    private $token;

    public function __construct()
    {
        $this->baseUrl = env('OPEN_FINANCE_API_URL', 'https://api.openfinance.dev');
        $this->token = env('OPEN_FINANCE_TOKEN');
    }

    public function getExtrato(string $cpf)
    {
        $response = Http::withToken($this->token)
            ->get("{$this->baseUrl}/accounts/{$cpf}/transactions");

        if ($response->failed()) {
            return [
                'status' => 'error',
                'message' => 'Falha ao consultar extrato Open Finance'
            ];
        }

        return $response->json();
    }
}
