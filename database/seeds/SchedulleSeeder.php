<?php

use Illuminate\Database\Seeder;
use App\Schedulle;

class SchedulleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schedulle::create([
        	'transportation_id'	=> 1,
        	'date'				=> '2021-02-12 22:52:10',
        	'from_code'			=> 84,
        	'destination_code'	=> 252,
        	'economy_price'				=> 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 2,
            'date'              => '2021-02-10 22:52:10',
            'from_code'         => 85,
            'destination_code'  => 23,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 2,
            'date'              => '2021-02-15 22:52:10',
            'from_code'         => 86,
            'destination_code'  => 45,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 3,
            'date'              => '2021-03-15 22:52:10',
            'from_code'         => 1,
            'destination_code'  => 2,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 2,
            'date'              => '2021-02-13 22:52:10',
            'from_code'         => 3,
            'destination_code'  => 4,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 2,
            'date'              => '2021-03-15 22:52:10',
            'from_code'         => 5,
            'destination_code'  => 6,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 3,
            'date'              => '2021-02-15 22:52:10',
            'from_code'         => 7,
            'destination_code'  => 8,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 2,
            'date'              => '2021-02-10 22:52:10',
            'from_code'         => 9,
            'destination_code'  => 10,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 2,
            'date'              => '2021-02-15 22:52:10',
            'from_code'         => 11,
            'destination_code'  => 12,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);

        Schedulle::create([
            'transportation_id' => 3,
            'date'              => '2021-02-15 22:52:10',
            'from_code'         => 13,
            'destination_code'  => 14,
            'economy_price'             => 660000,
            'bussiness_price'             => 660000,
            'first_price'             => 660000
        ]);
    }
}
