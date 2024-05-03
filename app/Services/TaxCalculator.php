<?php

namespace App\Services;

use App\Abstracts\Tax;
use App\Models\Budget;

class TaxCalculator
{
    public function calc(Budget $budget, Tax $tax) : float
    {
        return $tax->calc($budget);
    }
}