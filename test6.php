<?php

use App\Models\Budget;
use App\Models\DataExtrinsic;
use App\Models\Order;

require 'vendor/autoload.php';

$orders = [];
$data = new DataExtrinsic();
$data->date_finished = new DateTimeImmutable();
$data->client_name = md5((string) rand(1, 100000));

for ($i=0; $i < 10000; $i++) { 
    $order = new Order();
    $order->data = $data;
    $order->budget = new Budget();

    $orders[] = $order;
}

echo memory_get_peak_usage();