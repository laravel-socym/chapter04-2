<?php
declare(strict_types=1);

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CommentResourceCollection extends ResourceCollection
{
    public function toArray($request): array
    {
        return $this->collection->map(function ($value) {
            return new CommentResource($value);
        })->all();
    }
}
