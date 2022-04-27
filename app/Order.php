<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    public function orderlines() {
        return $this->hasMany(Orderline::class);
    }
    //
    protected $fillable = [
        'status',
        'price'
    ];
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
    
    use SoftDeletes;
}
