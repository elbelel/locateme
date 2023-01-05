<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lat',
        'long',
        'description',
        'category',
        'image'
    ];
    
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
