<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedulle extends Model
{
    public function transportation()
    {
        return $this->belongsTo('App\Transportation');
    }
}
