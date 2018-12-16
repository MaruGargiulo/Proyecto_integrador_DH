<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
   
    protected $guarded = [];
    
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    public function trader()
    {
        return $this->belongsTo(User::class, 'trader_id', 'id');
    }

    public function ownerSticker()
    {
        return $this->belongsTo(Sticker::class, 'owner_sticker_id', 'id');
    }

    public function traderSticker()
    {
        return $this->belongsTo(Sticker::class, 'trader_sticker_id', 'id');
    }

    
}
