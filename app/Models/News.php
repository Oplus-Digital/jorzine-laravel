<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    public $timestamps = false;

    protected $fillable = [
        'title','body','band','profile','section_name','date','news_date','posted_by_user','modified_by_user','last_modified'
    ];

    public function getThumbAttribute($img)
    {
        if (is_null($img)) {
            return $img;
        } else {
            return asset($img);
        }
    }



}
