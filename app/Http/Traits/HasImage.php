<?php


namespace App\Http\Traits;


trait HasImage
{
    public function setImageAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['image'] = uploadImage('uploads', $image);
        else
            $this->attributes['image'] = $image;
    }

    public function setLicenceImageAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['licence_image'] = uploadImage('uploads', $image);
        else
            $this->attributes['licence_image'] = $image;
    }

    public function setPickupImageAttribute($image)
    {
        if (!is_null($image) and is_file($image))
            $this->attributes['pickup_image'] = uploadImage('uploads', $image);
        else
            $this->attributes['pickup_image'] = $image;
    }


    public function getImageAttribute($image)
    {
        if (is_null($image))
            return asset('admin/assets/images/user.jpg');
        elseif (filter_var($image, FILTER_VALIDATE_URL))
            return $image;
        else
            return getimg($image);
    }
}
