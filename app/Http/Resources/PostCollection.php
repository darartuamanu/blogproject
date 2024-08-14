<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($post) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'excerpt' => $post->excerpt, // You might want to use a method to limit text length
                    'created_at' => $post->created_at->toDateString(),
                ];
            }),
            'links' => [
                'self' => url()->current(),
            ],
        ];
    }
}
