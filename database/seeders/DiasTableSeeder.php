<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dias')->insert(array(
                0 =>
                    array(
                        'dia_name' => 'Domingo'
                    ),
                1 =>
                    array(
                        'dia_name' => 'Segunda-feira'
                    ),
                2 =>
                    array(
                        'dia_name' => 'Terça-feira'
                    ),
                3 =>
                    array(
                        'dia_name' => 'Quarta-feira'
                    ),
                4 =>
                    array(
                        'dia_name' => 'Quinta-feira'
                    ),
                5 =>
                    array(
                        'dia_name' => 'Sexta-feira'
                    ),
                6 =>
                    array(
                        'dia_name' => 'Sábado'
                    ),

            )
        );

    }
}
