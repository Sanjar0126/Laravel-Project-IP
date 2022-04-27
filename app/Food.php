<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'category'
    ];

    public function orderlines() {
        return $this->hasMany(Orderline::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'food';
}
