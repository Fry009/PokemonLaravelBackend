<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PokemonController extends Controller
{
    public function show($pokemon)
    {
        $client = new Client(); // Cliente HTTP para hacer peticiones
        $response = $client->get("https://pokeapi.co/api/v2/pokemon/{$pokemon}"); // Llamada a la API
        $data = json_decode($response->getBody()->getContents(), associative: true); // Decodifica la respuesta

        return response()->json($data); // Retorna los datos en formato JSON
    }
}
