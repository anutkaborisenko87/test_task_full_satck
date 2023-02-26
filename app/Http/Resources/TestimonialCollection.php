<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class TestimonialCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function ($resource) {
                return [
                    'id' => $resource->id,
                    'Reviewer' => $resource->Reviewer,
                    'Rating' => $resource->Rating,
                    'Employee' => $resource->Employee,
                    'Employees_position' => $resource->Employees_position,
                    'Company' => $resource->Company,
                    'Review' => $resource->Review,
                ];
            }),
            'meta' => [
                'pagination' => [
                    'total' => $this->total(),
                    'count' => $this->count(),
                    'per_page' => $this->perPage(),
                    'current_page' => $this->currentPage(),
                    'total_pages' => $this->lastPage()
                ]
            ]
        ];
    }
}
