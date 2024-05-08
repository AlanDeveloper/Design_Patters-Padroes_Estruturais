<?php

namespace App\Models;

use DateTimeInterface;

class DataExtrinsic
{
    private string $client_name;
    private DateTimeInterface $date_finished;

    public function __construct(string $client_name, DateTimeInterface $date_finished)  
    {
        $this->client_name = $client_name;
        $this->date_finished = $date_finished;
    }

    public function getClientName(): string
    {
        return $this->client_name;
    }

    public function getDateFinished(): DateTimeInterface
    {
        return $this->date_finished;
    }
}