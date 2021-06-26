<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResourse extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_id' => (int) $this->user_id,
            'title' => $this->title,
            'exerpt' => $this->exerpt,
            'is_published' => $this->is_published,
            'published_at' => $this->published_at,
            'description' => $this->description,
        ];
    }
}
