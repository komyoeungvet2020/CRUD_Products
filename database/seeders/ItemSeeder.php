<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert([
            [
                'name'=>'Car',
                'price'=>1000.0,
            ],
            [
                'name'=>'Moto',
                'price'=>1000.0,
            ],
            [
                'name'=>'Computer',
                'price'=>1000.0,
            ],
            [
                'name'=>'Phone',
                'price'=>1000.0,
            ],
            [
                'name'=>'Book',
                'price'=>1000.0,
            ],
            [
                'name'=>'Pen',
                'price'=>1000.0,
            ],
        ]);
    }
}
