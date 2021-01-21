<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PeopleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            'type'          => 'people',
            'id'            => (string)$this->id,
            'attributes'    => [
                'name' => $this->name,
                'nickname' => $this->nickname,
                'birth_date' => $this->birth_date,
                'email' => $this->email,
                'gender' => $this->gender
            ],
            'links'         => [
                'self' => route('people.show', $this->id),
            ]
        ];
    }

    public function with($request)
    {
        return [
            'links' => [
                'self' => route('people.show', $this->id),
            ]
        ];
    }
}
