<?php

namespace Database\Seeders;

use App\Models\Optional;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++){
            $optional = new Optional();
            $optional->name = $faker->sentence(2);
            $optional->description = $faker->text(200);
            $optional->save();
        }
    }
}
