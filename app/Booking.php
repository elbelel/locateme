<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Facility;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'session_id',
        'duration',
        'year',
        'price',
        'facilities_id'
    ];


    public function facility()
    {
        return $this->hasMany(Facility::class,'facilities_id');
    }
}
