<?php

namespace App\Abstracts;

use App\Models\Budget;

abstract class Tax
{
    private ?Tax $otherTax;

    public function __construct(Tax $otherTax = null)
    {
        $this->otherTax = $otherTax;
    }

    abstract protected function handleCalc(Budget $budget) : float;

    public function calc(Budget $budget) : float
    {
        return $this->handleCalc($budget) + $this->handleCalc2($budget);
    }

    private function handleCalc2(Budget $budget) : float
    {
        return $this->otherTax === null ? 0 : $this->otherTax->handleCalc($budget);
    }
}