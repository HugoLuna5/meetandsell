<?php

use Illuminate\Database\Seeder;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('positions')->insert([
        	'position' => 'Dueño',
        	'value'	   => '1',
        ]);

        \DB::table('positions')->insert([
            'position' => 'Director',
            'value'    => '2',
        ]);

        \DB::table('positions')->insert([
            'position' => 'Gerente',
            'value'    => '3',
        ]);

        \DB::table('positions')->insert([
            'position' => 'Encargado',
            'value'    => '4',
        ]);

        \DB::table('positions')->insert([
            'position' => 'Estudiante',
            'value'    => '5',
        ]);

        \DB::table('positions')->insert([
            'position' => 'Otro',
            'value'    => '6',
        ]);
    }
}
