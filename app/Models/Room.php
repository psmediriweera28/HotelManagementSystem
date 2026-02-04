<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected function booking()
    {
        return $this->hashMany(Booking::class);
    }
}
