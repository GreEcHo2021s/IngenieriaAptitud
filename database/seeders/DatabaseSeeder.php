<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Formulario;
use App\Models\Preguntas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
{
    $faker = Faker::create();

    for ($i = 0; $i < 10; $i++) {
        Formulario::create([
            'nombre' => $faker->firstName,
            'apellido' => $faker->lastName,
            'dni' => $faker->unique()->randomNumber(4),
            'email'=>$faker->unique()->email(),
            'fecha_nacimiento' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'educacion_alcanzada' => $faker->randomElement(['Primaria', 'Secundaria', 'Terciaria']),
            'edad' => $faker->numberBetween(18, 80)
        ]);
    }
    $coleccion_preguntas = [
        ['Dato 1',1],
        ['Dato 1',1],
        ['Dato 1',1]
    ];

    foreach ($coleccion_preguntas as $dato) {
        $question = new Preguntas();
        $question->pregunta = $dato[0];
        $question->area = $dato[1];
        $question->carreraid= 1;
        $question->carrera="1";
        $question->save();
    }

}

}
