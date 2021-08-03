<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    public function carts(){
        return $this->hasMany(Cart::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $guarded = [];
    use HasFactory;
}
