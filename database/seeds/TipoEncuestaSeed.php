<?php

use Illuminate\Database\Seeder;

class TipoEncuestaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipoEncuesta')->insert([
            'nombre' => 'Cerradas'
        ]);
        DB::table('tipoEncuesta')->insert([
            'nombre' => 'Abiertas'
        ]);
        DB::table('tipoEncuesta')->insert([
            'nombre' => 'Mixtas'
        ]);
    }
}
