<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Http\Resources\PeopleResource;

class PeopleCollection extends ResourceCollection
{
    // private $pagination;

    // public function __construct($resource)
    // {
    //     $this->links = [
    //         'self' => route('people.index')
    //     ];

    //     $this->meta = [
    //         'total' => (string)$resource->count()
    //     ];

    //     $resource = $resource->getCollection();

    //     parent::__construct($resource);
    // }


    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => PeopleResource::collection($this->collection),
        ];
    }

    public function with($request)
    {
        return [
            // 'links' => [
            //     // 'self' => route('people.index'),
            //     'link' => $this->withPath('/custom/url')
            // ]
        ];
    }

    public function withResponse($request, $response)
    {
        // $response->header('Content-Type', 'application/vnd.api+json');
    }
}
