<?php

namespace App\Models;
use App\Interfaces\Budgeted;

class ItemBudget implements Budgeted
{
    public float $value;

    public function getValue(): float
    {
        sleep(1);
        return $this->value;
    }
}