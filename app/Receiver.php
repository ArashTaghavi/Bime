<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Receiver extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}