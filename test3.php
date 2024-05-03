<?php

use App\Exports\BudgetExport;
use App\Exports\FileXml;
use App\Models\Budget;

require 'vendor/autoload.php';

$budget = new Budget();
$budget->value = 500;
$budget->items_quantity = 7;

$export = new BudgetExport($budget);
$export_xml = new FileXml('orcamento');

echo $export_xml->save($export);