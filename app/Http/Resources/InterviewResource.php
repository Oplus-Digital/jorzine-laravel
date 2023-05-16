<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InterviewResource extends JsonResource
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
            'body' => strip_tags($this->body),
            'thumb' => $this->thumb,
            'stars' => $this->stars,
            'band' => $this->band,
            'profile' => $this->profile,
            'interviewer' => $this->interviewer,
            'posted_by_user' => $this->posted_by_user,
            'modified_by_user' => $this->modified_by_user,
            'interview_date' => $this->interview_date,
        ];
    }
}
