<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Booking extends Model
{
    use AutoNumberTrait;

    public function getAutoNumberOptions()
    {
        return [
            'code' => [
                'format' => 'INV' . time() . '?',
                'length' => 5
            ]
        ];
    }

    public function getApprovalAttribute()
    {

        switch ($this->status) {
            case 1:
                return 'Success';
                break;

            case 2:
                return 'Failed';
                break;

            default:
                return 'Pending';
                break;
        }
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function schedulle()
    {
        return $this->belongsTo('App\Schedulle');
    }

    public function payment()
    {
        return $this->belongsTo('App\Payment');
    }
}
