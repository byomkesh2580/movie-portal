<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    public function item()
    {
        return $this->belongsTo(Item::class);
    }   

    public function episode()
    {
        return $this->belongsTo(Episode::class);
    }   
}
