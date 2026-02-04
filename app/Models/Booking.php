<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'guest_name',
        'guest_email',
        'guest_phone',
        'room_name',
        'check_in',
        'check_out',
        'guests',
        'room_price',
        'food_total',
        'grand_total',
        'payment_method',
        'payment_status',
        'status',
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class, 'guest_email', 'email');
    }

}
