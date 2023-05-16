<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Release extends Model
{
    use HasFactory;
    protected $table = 'Releases';

    public function getThumbAttribute($img)
    {
        if (is_null($img)) {
            return $img;
        } else {
            return asset($img);
        }
    }

    public function getImgAttribute($img)
    {
        if (is_null($img)) {
            return $img;
        } else {
            return asset($img);
        }
    }



}
