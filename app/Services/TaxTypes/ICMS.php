<?php

namespace App\Services\TaxTypes;

use App\Abstracts\Tax;
use App\Models\Budget;

class ICMS extends Tax
{
    public function handleCalc(Budget $budget) : float
    {
        return $budget->value * 0.1;
    }
}