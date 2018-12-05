<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{

    protected $guarded = [];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}
