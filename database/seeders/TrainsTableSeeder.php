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
        for ($i = 0; $i < 10; $i++) {
            $newTrainObject = new Train();
            $newTrainObject->company = $faker->randomElement(['Doctor Who GallittoLine', 'Trenitalia', 'Italo', 'Ventarail Srl', 'Ferrotramviaria SpA', 'AW Rail', 'Trenord SpA']);
            $newTrainObject->departure_station = $faker->city();
            $newTrainObject->arrival_station = $faker->city();
            $newTrainObject->departure_time = $faker->dateTimeBetween('-1 days', '+1 days');
            $newTrainObject->arrival_time = $faker->dateTime();
            $newTrainObject->train_code = $faker->bothify('??-#####');
            $newTrainObject->number_of_carriages = $faker->numberBetween(10, 15);
            $newTrainObject->on_time = $faker->boolean();
            $newTrainObject->deleted = $faker->boolean();
            $newTrainObject->save();
        }
    }
}
