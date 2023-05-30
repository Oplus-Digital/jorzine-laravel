<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReleaseResource extends JsonResource
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
            'label' => $this->label,
            'posted_by_user' => $this->posted_by_user,
            'modified_by_user' => $this->modified_by_user,
            'track_list' => $this->track_list,
            'img' => $this->img,
            'year' => $this->year,
            'month' => $this->month,
        ];
    }
}
