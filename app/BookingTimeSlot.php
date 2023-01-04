<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Booking;
use App\TimeSlot;
use App\User;

class BookingTimeSlot extends Model
{
    use HasFactory;
    protected $fillable = [
        'bookings_id',
        'time_slots_id',
        'date',
        'users_id',
        'status'
    ];

    public function Booking()
    {
        return $this->belongsTo(Booking::class,'bookings_id');
    }
    public function timeslot()
    {
        return $this->belongsTo(TimeSlot::class,'time_slots_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'users_id');
    }
}
