<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'date',
        'hour',
        'message',
        'status'
    ];
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
