<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodMenu extends Model
{
    protected $fillable = ['name', 'price', 'description', 'image'];

    public function orders()
    {
        return $this->hasMany(FoodOrder::class);
    }
}
