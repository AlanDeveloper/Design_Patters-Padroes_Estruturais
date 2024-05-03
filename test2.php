<?php

use App\Http\CurlHttpAdapter;
use App\Http\ReactPHPHttp;
use App\Models\Budget;
use App\Services\RegisterBudget;

require 'vendor/autoload.php';

// $register = new RegisterBudget(new CurlHttpAdapter);
$register = new RegisterBudget(new ReactPHPHttp);
$register->register(new Budget);