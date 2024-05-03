<?php

namespace App\Services;

use App\Interfaces\HttpAdapter;
use App\Models\Budget;
use App\Services\BudgetStateTypes\Finished;

class RegisterBudget
{
    private $http;
    public function __construct(HttpAdapter $http)
    {
        $this->http = $http;
    }

    public function register(Budget $budget): void
    {
        if ($budget->state instanceof Finished) {
            throw new \DomainException("Apenas orçamentos finalizados podem ser registrados na API.");
        }
        
        $this->http->post("http://api.registrar.orcamento", [
            "valor" => $budget->value,
            "quantidadeItens" => $budget->items_quantity,
        ]);
    }
}