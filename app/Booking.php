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
        'facilities_id',
        'description',
        'image'
    ];


    public function facility()
    {
        return $this->belongsTo(Facility::class,'facilities_id');
    }
}
