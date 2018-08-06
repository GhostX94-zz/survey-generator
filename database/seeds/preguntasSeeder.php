<?php

use Illuminate\Database\Seeder;

class preguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limite = 15;
        $count = 0;

        for($var= 0; $var < $limite;$var++){
        DB::table('preguntas')->insert([
            'nombre' => 'Pregunta'.$var,
            'titulo' => '',
                'tipoPregunta' => 'Abiertas'
        ]);
    }
       $limite= 0;
       $limite= 15;

        //Preguntas Cerradas
        for ($var = 0; $var < $limite; $var++) {
            DB::table('preguntas')->insert([
                'nombre' => 'Pregunta' . $var,
                'titulo' => '',
                'tipoPregunta' => 'Cerradas',
            ]);
        }

        //Mixtas
        $limite= 0;
       $limite= 15;
       for ($var = 0; $var < $limite; $var++) {
        DB::table('preguntas')->insert([
            'nombre' => 'Pregunta' . $var,
            'titulo' => '',
            'tipoPregunta' => 'Mixtas',
        ]);
    }




    }
}
