<?php

namespace App\Exports;

use App\Interfaces\ContentExport;
use App\Models\Budget;

class BudgetExport implements ContentExport
{
    private Budget $budget;

    public function __construct(Budget $budget)
    {
        $this->budget = $budget;
    }

    public function content(): array
    {
        return [
            'valor' => $this->budget->value,
            'quantidade_itens' => $this->budget->items_quantity,
        ];
    }
}