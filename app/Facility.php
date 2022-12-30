<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Booking;

class Facility extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
