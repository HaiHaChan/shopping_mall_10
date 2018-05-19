<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'address',
        'email',
        'phone',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public static function getName()
    {
        return static::pluck('name', 'id');
    }
}
