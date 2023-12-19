<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Sales;
use App\Models\Order;

class GenerateSalesReport extends Command
{
    protected $signature = 'sales:generate-report';
    protected $description = 'Generate and store sales report';

    public function handle()
    {
        $pipeline = [
            [
                '$group' => [
                    '_id' => '$product_id',
                    'total_purchase' => ['$sum' => '$total_quantity'],
                    'price' => ['$first' => '$total_price'],
                    'total_price' => ['$sum' => '$total_price'],
                ],
            ],
            [
                '$project' => [
                    '_id' => 0,
                    'product_id' => '$_id',
                    'total_purchase' => 1,
                    'price' => 1,
                    'total_price' => 1,
                ],
            ],
        ];

        $result = Order::raw(function ($collection) use ($pipeline) {
            return $collection->aggregate($pipeline)->toArray();
        });

        foreach ($result as $saleData) {
            Sales::create(json_decode(json_encode($saleData), true));
        }

        $this->info('Sales report generated and stored successfully.');
    }
}
