<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pizza;
use Faker\Generator as Faker;


class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i=0; $i < 20; $i++){
            $newPizza = new Pizza();
            $newPizza->nome_pizza =$faker->firstNameFemale() ;
            $newPizza->ingredienti = 'pomodoro '.'mozzarella '.$faker->randomElement(['prosciutto', 'salame', 'olive', 'funghi']);
            $newPizza->impasto = $faker->randomElement(['00', 'integrale', 'tumminia', 'kamut']);  
            $newPizza->tempo_preparazione = $faker->dateTimeBetween('30s','120s');
            $newPizza->disponibilità = $faker->randomElement([true, false]);
            $newPizza->created_at = $faker->time();
            $newPizza->updated_at = $faker->time();
            $newPizza->save();
        }
    }
}
