<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NewResource extends JsonResource
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
           // 'body' => preg_replace('/\xc2\xa0/', ' ', $this->body),
            'band' => $this->band,
            'profile' => $this->profile,
            'posted_by_user' => $this->posted_by_user,
            'modified_by_user' => $this->modified_by_user,
            'news_date' => $this->news_date,
            'section_name' => $this->section_name,
        ];
    }
}
