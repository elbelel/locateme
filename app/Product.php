<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Shop;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
        'shops_id',
        'description',
        'image'
    ];


    public function shop()
    {
        return $this->belongsTo(Shop::class,'shops_id');
    }

}
