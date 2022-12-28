<?php

namespace Database\Seeders;

use App\Models\RegimeTributario;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegimesTributariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regimes_tributarios')->insert(array(
            0 =>
                array(
                    'reg_name' => 'Simples Nacional',
                ),
            1 =>
                array(
                    'reg_name' => 'Simples Nacional - Excesso de sublimite de receita bruta',
                ),
            2 =>
                array(
                    'reg_name' => 'Regime Normal',
                )
        ));
    }
}
