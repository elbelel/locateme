<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\BookingTimeSlot;

class TimeSlot extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_date_time',
        'end_date_time',
    ];

    public function timeslot()
    {
        return $this->hasMany(BookingTimeSlot::class);
    }
}
