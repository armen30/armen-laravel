<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    protected $fillable = [
        'brand',
        'color',
        'price',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
