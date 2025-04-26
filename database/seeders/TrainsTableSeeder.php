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
     */
    public function run(Faker $faker): void
    {
        for($i = 0; $i < 30; $i++) {

            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->orario_partenza = $faker->dateTimeBetween('now', '+2 hours');
            $newTrain->orario_arrivo = $faker->dateTimeBetween('+2 hours', '+4 hours');
            $newTrain->codice_treno = $faker->unique()->numberBetween(1000, 9999);
            $newTrain->numero_carrozze = $faker->numberBetween(1, 20);
            $newTrain->prezzo = $faker->randomFloat(2, 10, 100);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();

            //salvo il treno
            $newTrain->save();
        }
    }
}
