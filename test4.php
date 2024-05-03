<?php

use App\Models\Budget;
use App\Services\TaxCalculator;
use App\Services\TaxTypes\ICMS;
use App\Services\TaxTypes\ISS;

require 'vendor/autoload.php';

$calculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $calculator->calc($budget, new ICMS(new ISS()));