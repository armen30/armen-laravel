<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'user_id','category_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
