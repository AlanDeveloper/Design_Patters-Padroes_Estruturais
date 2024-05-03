<?php

namespace App\Interfaces;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}