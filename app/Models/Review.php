<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    public $timestamps = false;
    protected $fillable = [
        'title', 'body', 'band', 'profile', 'website', 'purchase_link', 'date', 'review_date','release_name','review_type','reviewer',
        'posted_by_user', 'modified_by_user', 'last_modified', 'thumb','img'
    ];

    public function getThumbAttribute($img)
    {
        if (is_null($img)) {
            return $img;
        } else {
            return asset('storage/'.$img);
        }
    }

    public function getImgAttribute($img)
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

    public function setImgAttribute($img)
    {
        return $this->attributes['img'] = \Storage::disk('public')->putFile('library/image/Reviews', $img);
    }

}
