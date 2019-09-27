<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Player extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'last_name' => $this->last_name,
            'date' => $this->date,
            'height' => $this->height,
            'weight' => $this->weight,
            'abilities' => $this->ability,
            'positions' => $this->position,
            'category' => $this->category[0],
        ];
    }
}
