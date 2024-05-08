<?php

namespace App\Services;

use App\Interfaces\Budgeted;
use App\Models\Budget;

class CacheBudgetProxy extends Budget
{
    private float $cache_value = 0;
    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

    public function getValue(): float
    {
        if ($this->cache_value == 0) {
            $this->cache_value = $this->budget->getValue();
        }
        
        return $this->cache_value;
    }

    public function addItem(Budgeted $item): void
    {
        throw new \DomainException('Não é possível adicionar item no orçamento cacheado.');
    }
}