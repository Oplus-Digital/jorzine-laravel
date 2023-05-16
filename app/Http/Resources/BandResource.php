<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'band_name' => $this->band_name,
            'profile' => $this->profile,
            'website' => $this->website,
            'facebook' => $this->facebook,
            'twitter' => $this->twitter,
            'myspace' => $this->myspace,
            'year' => $this->year,
            'label' => $this->label,
            'genre' => $this->genre,
            'origin' => $this->origin,
            'active' => $this->active,
            'bio' => strip_tags($this->bio),
            'line_up' => $this->line_up,
            'embed_code' => $this->embed_code,
            'img' => $this->img,
            'img1' => $this->img1,
            'img2' => $this->img2,
            'img3' => $this->img3,
            'thumb' => $this->thumb,
            'thumb1' => $this->thumb1,
            'thumb2' => $this->thumb2,
            'thumb3' => $this->thumb3,
            'posted_by_user' => $this->posted_by_user,
            'modified_by_user' => $this->modified_by_user,
            'date' => $this->date,
        ];
    }
}
