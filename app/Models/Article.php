<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';

    public function getThumbAttribute($img)
    {
        if (is_null($img)) {
            return $img;
        } else {
            return asset($img);
        }
    }

}
