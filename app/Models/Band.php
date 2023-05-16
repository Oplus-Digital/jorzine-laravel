<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    use HasFactory;
    protected $table = 'bands';

    public function getThumbAttribute($img)
    {
        if (is_null($img)) {
            return $img;
        } else {
            return asset($img);
        }
    }



}
