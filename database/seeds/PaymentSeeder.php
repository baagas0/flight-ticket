<?php

use Illuminate\Database\Seeder;
use App\Payment;
use Facades\Services\TripayService;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels = TripayService::channel();
        if ($channels) {
            foreach ($channels as $channel) {
                Payment::updateOrCreate([
                    'code' => $channel['code'],
                ], [
                    'name'         => $channel['name'],
                    'group'        => $channel['group'],
                    'fee_flat'     => $channel['fee']['flat'],
                    'fee_percent'  => $channel['fee']['percent'],
                    'deactived_at' => $channel['active'] == true ? NULL : now()
                ]);
            }
        }

        Payment::updateOrCreate([
            'code' => 'MANUAL',
        ], [
            'name'         => 'Transfer Manual',
            'group'        => 'Bank Tranfer',
            'fee_flat'     => 0,
            'fee_percent'  => 0,
            'deactived_at' => NULL
        ]);

        return true;
    }
}
