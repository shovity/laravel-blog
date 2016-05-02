<?php

use Illuminate\Database\Seeder;
use App\Anime;

class AnimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 50; $i++)
        {
        	Anime::create([
        		'name' => str_random(10),
        		'point' => rand(1, 100)
        	]);
        }
    }
}
