<?php

namespace App\Models;

use App\Abstracts\BudgetState;
use App\Interfaces\Budgeted;
use App\Services\BudgetStateTypes\OnApproval;

class Budget implements Budgeted
{
    private array $items;
    public BudgetState $state;

    public function __construct() {
        $this->state = new OnApproval();
        $this->items = [];
    }

    public function addItem(Budgeted $item): void
    {
        $this->items[] = $item; 
    }

    public function getValue(): float
    {
        return array_reduce($this->items, function (float $total, Budgeted $item) {
            return $total + $item->getValue();
        }, 0);
    }

    public function applyExtraDiscount() : void
    {
        $this->value -= $this->state->calcExtraDiscount($this);
    }

    public function approve() : void
    {
        $this->state->approve($this);
    }

    public function reject() : void
    {
        $this->state->reject($this);
    }

    public function finish() : void
    {
        $this->state->finish($this);
    }
}