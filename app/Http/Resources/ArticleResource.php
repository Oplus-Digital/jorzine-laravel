<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'date' => $this->date,
            'author' => $this->author,
            'posted_by_user' => $this->posted_by_user,
            'thumb' => $this->thumb,
            'article_date' => $this->article_date,
        ];
    }
}
