<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table = 'articles';
    public $timestamps = false;
    protected $fillable = [
        'title', 'body', 'band', 'profile', 'website', 'author', 'date', 'article_date',
        'posted_by_user', 'modified_by_user', 'last_modified', 'thumb'
    ];

    public function getThumbAttribute($img)
    {
        if (is_null($img)) {
            return $img;
        } else {
            return asset('storage/'.$img);
        }
    }

    public function setThumbAttribute($thumb)
    {
        return $this->attributes['thumb'] = \Storage::disk('public')->putFile('thumbs', $thumb);
    }

}
