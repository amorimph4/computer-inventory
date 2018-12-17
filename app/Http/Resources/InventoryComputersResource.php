<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class InventoryComputersResource extends Resource
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
            'id' => $this->id,
            'name' => $this->name, 
            'launch_year' => $this->launch_year, 
            'manufacturer' => $this->manufacturer, 
            'operational_system' => $this->operational_system,
            'cpu' => $this->cpu,
            'memory' => $this->memory,
            'storage' => $this->storage,
            'initial_price' => (float) $this->initial_price,
            'image' => $this->image,
            'comments' => $this->comments,
            'created' => $this->created_at->format("d/m/Y"),
        ];
    }
}
