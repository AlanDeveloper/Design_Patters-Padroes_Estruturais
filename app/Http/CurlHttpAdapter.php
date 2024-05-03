<?php

namespace App\Http;

use App\Interfaces\HttpAdapter;

class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        
        curl_exec($curl);
        curl_close($curl);
    }
}