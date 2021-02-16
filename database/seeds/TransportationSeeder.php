<?php

use Illuminate\Database\Seeder;
use App\Transportation;

class TransportationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Transportation::create([
        	'name' 			=> 'Lion Air',
        	'economy_chair'  => 100,
            'bussiness_chair'  => 20,
            'first_chair'        => 5,
        ]);

        Transportation::create([
            'name'          => 'Garuda Air',
            'economy_chair'  => 150,
            'bussiness_chair'  => 10,
            'first_chair'        => 3,
        ]);

        Transportation::create([
            'name'          => 'Batik Air',
            'economy_chair'  => 130,
            'bussiness_chair'  => 20,
            'first_chair'        => 5,
        ]);
    }
}
