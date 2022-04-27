<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function food() {
        return $this->hasMany(Food::class);
    }

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'categories';
}
