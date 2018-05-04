<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeroImage extends Model
{
    public function images()
    {
        return $this->belongsTo('App\Hero');
    }
}
