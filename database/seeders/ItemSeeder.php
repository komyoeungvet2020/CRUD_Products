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
                'description'=>'test system',
                'price'=>1000.0,
            ],
            [
                'name'=>'Moto',
                'description'=>'test system',
                'price'=>1000.0,
            ],
            [
                'name'=>'Computer',
                'description'=>'test system',
                'price'=>1000.0,
            ],
            [
                'name'=>'Phone',
                'description'=>'test system',
                'price'=>1000.0,
            ],
            [
                'name'=>'Book',
                'description'=>'test system',
                'price'=>1000.0,
            ],
            [
                'name'=>'Pen',
                'description'=>'test system',
                'price'=>1000.0,
            ],
        ]);
    }
}
