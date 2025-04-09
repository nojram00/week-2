<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Item::truncate();
        $json_path = database_path('data/item-data.json');
        $data = file_get_contents($json_path);
        $items = json_decode($data, true);

        $array_items = [];

        foreach($items as $item){
            array_push($array_items, $item);
        }

        Item::factory()->createMany($array_items);
    }
}
