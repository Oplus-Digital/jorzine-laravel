<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $table = 'interviews';

    public $timestamps = false;
    protected $fillable = [
        'title', 'body', 'band', 'profile', 'date', 'interview_date','interviewer',
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
