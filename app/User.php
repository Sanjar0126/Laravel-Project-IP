<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable 
{
    use Notifiable;
    
    public function contacts() {
        return $this->hasMany('App\Contact');
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 
        'password',
        'phone',
        'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
}
