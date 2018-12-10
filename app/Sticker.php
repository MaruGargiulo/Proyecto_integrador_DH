<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sticker extends Model
{

    protected $guarded = [];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

}
