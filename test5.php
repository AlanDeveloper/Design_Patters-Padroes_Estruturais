<?php

use App\Models\Budget;
use App\Models\ItemBudget;

require 'vendor/autoload.php';

$budget = new Budget();
$item1 = new ItemBudget();
$item1->value = 200;
$item2 = new ItemBudget();
$item2->value = 500;

$budget->addItem($item1);
$budget->addItem($item2);

$old_budget = new Budget();
$item3 = new ItemBudget();
$item3->value = 250;

$old_budget->addItem($item3);
$budget->addItem($old_budget);

echo $budget->getValue();