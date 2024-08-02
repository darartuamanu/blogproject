<?php

// app/Http/Resources/PostCollection.php

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
        // Check for a specific query parameter to determine if it's a detail page request
        $isDetailPage = $request->query('detail') === 'true';

        return [
            'data' => $this->collection->transform(function ($post) use ($isDetailPage) {
                return [
                    'id' => $post->id,
                    'title' => $post->title,
                    'description' => $isDetailPage ? $post->description : substr($post->description, 0, 400) . (strlen($post->description) > 400 ? '...' : ''),
                    'created_at' => $post->created_at->toDateString(),
                    
                ];
            }),
            'meta' => [
                'total' => $this->collection->count(),
            ],
        ];
    }
}

