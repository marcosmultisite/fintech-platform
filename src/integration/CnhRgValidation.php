<?php

namespace App\Integrations;

use Illuminate\Support\Facades\Http;

class CnhRgValidation
{
    private $baseUrl;

    public function __construct()
    {
        $this->baseUrl = env('VALIDATION_API_URL', 'https://api.validacao.dev');
    }

    public function validarDocumento(string $tipo, string $numero)
    {
        $response = Http::post("{$this->baseUrl}/validate", [
            'document_type' => $tipo,
            'document_number' => $numero,
        ]);

        if ($response->failed()) {
            return [
                'status' => 'error',
                'message' => 'Erro ao validar documento'
            ];
        }

        return $response->json();
    }
}
