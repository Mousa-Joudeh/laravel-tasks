<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Catigore extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'name',
        'description',
        'image',
        'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id');
    }
}