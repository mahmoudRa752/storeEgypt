<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'A51',
            'price'=>'5500',
            'image'=>'sams.jpg',
            'cat_id'=>'1',
            'new'=>'1',
            'brand'=>'Samsung'
        ]);
        Product::create([
            'name'=>'canon3',
            'price'=>'1120',
            'image'=>'camera1.jpg',
            'cat_id'=>'3',
            'new'=>'0',
            'brand'=>'Canon'
        ]);
        Product::create([
            'name'=>'sony',
            'price'=>'540',
            'image'=>'sonymob.jpg',
            'cat_id'=>'1',
            'new'=>'1',
            'brand'=>'Sony'
        ]);
        Product::create([
            'name'=>'dell44',
            'price'=>'15000',
            'image'=>'lapdell.jpg',
            'cat_id'=>'2',
            'new'=>'0',
            'brand'=>'Dell'
        ]);
        Product::create([
            'name'=>'hp123',
            'price'=>'12100',
            'image'=>'laphp.jpg',
            'cat_id'=>'2',
            'new'=>'1',
            'brand'=>'Hp'
        ]);
    }
}
