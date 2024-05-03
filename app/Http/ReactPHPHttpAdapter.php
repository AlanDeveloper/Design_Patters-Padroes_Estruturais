<?php

namespace App\Http;

use App\Interfaces\HttpAdapter;

class ReactPHPHttp implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        echo "ReactPHP";
    }
}