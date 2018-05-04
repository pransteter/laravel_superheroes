<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeroImage extends Model
{
    public function hero()
    {
        return $this->belongsTo('App\Hero');
    }
}
