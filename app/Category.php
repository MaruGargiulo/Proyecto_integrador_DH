<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function stickers()
    {
        return $this->hasMany(Sticker::class);
    }
}
