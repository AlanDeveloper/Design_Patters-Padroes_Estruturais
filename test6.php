<?php

use App\Models\Budget;
use App\Models\DataExtrinsic;
use App\Models\Order;

require 'vendor/autoload.php';

$orders = [];

$client_name = md5((string) rand(1, 100000));
$date_finished = new DateTimeImmutable();
$data = new DataExtrinsic($client_name, $date_finished);

for ($i=0; $i < 10000; $i++) { 
    $order = new Order();
    $order->data = $data;
    $order->budget = new Budget();

    $orders[] = $order;
}

echo memory_get_peak_usage();