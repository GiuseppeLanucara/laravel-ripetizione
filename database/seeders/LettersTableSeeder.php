<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class LettersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('it_IT');
        for ($i = 0; $i < 20; $i++) {
            $newLetter = new Letter();
            $newLetter->name = $faker->firstName();
            $newLetter->lastname = $faker->lastName();
            $newLetter->address = $faker->streetAddress();
            $newLetter->city = $faker->city();
            $newLetter->arrival_date = $faker->date();
            $newLetter->gift = $faker->sentence(3, false);
            $newLetter->message = $faker->paragraph();
            $newLetter->rating = $faker->numberBetween(1, 5);
            $newLetter->save();
        }
    }
}
