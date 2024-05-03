<?php

namespace App\Abstracts;

use App\Abstracts\Tax;
use App\Models\Budget;

abstract class TaxWith2Rates extends Tax
{
    abstract protected function applyMaxTax(Budget $budget) : bool;
    abstract protected function minTax(Budget $budget) : float;
    abstract protected function maxTax(Budget $budget) : float;

    public function handleCalc(Budget $budget) : float
    {
        if ($this->applyMaxTax($budget)) {
            return $this->maxTax($budget);
        }

        return $this->minTax($budget);
    }
}