<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $newTrainObject = new Train();
            $newTrainObject->company = $faker->randomElements(['Trenitalia', 'Italo', 'Ventarail Srl', 'Ferrotramviaria SpA', 'AW Rail', 'Trenord SpA']);
            $newTrainObject->departure_station = $faker->city();
            $newTrainObject->arrival_station = $faker->city();
            $newTrainObject->departure_time = $faker->dateTime();
            $newTrainObject->arrival_time = $faker->dateTime();
            $newTrainObject->train_code = $faker->bothify('??-#####');
            $newTrainObject->number_of_carriages = $faker->numberBetween(1, 15);
            $newTrainObject->on_time = $faker->boolean();
            $newTrainObject->deleted = $faker->boolean();
            $newTrainObject->save();
        }
    }
}
