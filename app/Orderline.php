<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orderline extends Model
{
    protected $fillable = [
        'price',
        'quantity'
    ];

    use SoftDeletes;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
