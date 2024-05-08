<?php

namespace App\Models;
use App\Interfaces\Budgeted;

class ItemBudget implements Budgeted
{
    public float $value;

    public function getValue(): float
    {
        return $this->value;
    }
}