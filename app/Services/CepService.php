<?php

use Illuminate\Support\Facades\Http;

class CepService
{
    public function getAddressByCep($cep)
    {
        $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

        if ($response->ok()) {
            return $response->json();
        }

        return null;
    }
}
