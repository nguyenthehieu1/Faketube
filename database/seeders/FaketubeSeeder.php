<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Faketube;

class FaketubeSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++){
            Faketube::create([
                'channerlID' => $faker->id,
                'channerlName' => $faker->company,
                'decription' => $faker->sentence,
                'subscribersCount' => $faker->numberBetween(100, 10000),
                'URL' => $faker->url,
                'create_At' => $faker->dateTimeThisYear,
                'update_At' => $faker->dateTimeThisYear,
            ]);
        }
    }
}
