<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    //
    protected $fillable = [
        'message'
    ];
    public function user() {
        return $this->belongsTo('App\User');
    }

    use SoftDeletes;
}
