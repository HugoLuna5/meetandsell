<?php

use Illuminate\Database\Seeder;

class VisitorTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('visitor_types')->insert([
        	'type' => 'Comprador',
        ]);

        \DB::table('visitor_types')->insert([
            'type' => 'Vendedor',
        ]);

        \DB::table('visitor_types')->insert([
            'type' => 'Visitante',
        ]);
    }
}
