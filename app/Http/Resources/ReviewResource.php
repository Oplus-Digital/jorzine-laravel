<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
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
            'title' => $this->title,
            'body' => strip_tags(str_replace('&nbsp;', ' ', $this->body)),
            'band' => $this->band,
            'profile' => $this->profile,
            'website' => $this->website,
            'purchase_link' => $this->purchase_link,
            'release_name' => $this->release_name,
            'review_type' => $this->review_type,
            'reviewer' => $this->reviewer,
            'review_date' => $this->review_date,
            'year' => $this->year,
            'month' => $this->month,
            'label' => $this->label,
            'highlights' => $this->highlights,
            'img' => $this->img,
            'thumb' => $this->thumb,
            'posted_by_user' => $this->posted_by_user,
            'modified_by_user' => $this->modified_by_user,
            'date' => $this->date,


        ];
    }
}
