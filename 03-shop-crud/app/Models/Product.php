<?php

namespace App\Models;

use App\Models\Catigore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'image',
        'quantity',
        'price',
    ];
    
    public function catigore()
    {
        return $this->belongsTo(Catigore::class, 'cat_id');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }
}