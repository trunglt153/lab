<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for($i=0; $i<100; $i++){
            DB::table('books')->insert(
                [
                    'title' => fake()->text(100),
                    'thumbnail' => fake()->imageUrl(),
                    'author' => fake()->text(50),
                    'publisher' => fake()->text(50),
                    'publication' => fake()->dateTime(),
                    'price' => fake()->randomFloat(2, 10, 100),
                    'quantity' => fake()->numberBetween(1, 100) ,
                    'category_id' => rand(1, 5),
                ]
            );
        }
    }
}
