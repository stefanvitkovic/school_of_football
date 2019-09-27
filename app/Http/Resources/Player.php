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
            'date' => $this->date,
            'full_info' => $this->full_info,
            'full_positions' => $this->full_positions,
            'height' => $this->height,
            'weight' => $this->weight,
        ];
    }
}
