<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderline extends Model
{
    protected $fillable = [

    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
