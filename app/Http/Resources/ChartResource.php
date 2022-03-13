<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ChartResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'name' => $this->id,
            'description' => $this->description,
            'chart_type' => $this->chart_type,
            'type' => $this->type,
            'library_from' => $this->library_from,
            'supported_questions' => $this->supported_questions,
            'default_configuration' => $this->default_configuration
        ];
    }
}
