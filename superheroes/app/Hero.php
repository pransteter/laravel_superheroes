<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    public function images()
    {
        return $this->hasMany('App\HeroImage');
    }

    public function saveImages(array $images): bool
    {
        try {
            HeroImage::where('hero_id', $this->id)->delete();

            foreach ($images as $image) {
                if (!empty(trim((string) $image))) {
                    $heroImage = new HeroImage;

                    $heroImage->title = $this->nickname;
                    $heroImage->src   = $image;
                    $heroImage->main  = 0;

                    $this->images()->save($heroImage);
                }
            }
        } catch (\Exception $e) {
            return false;
        }

        return true;
    }
}
