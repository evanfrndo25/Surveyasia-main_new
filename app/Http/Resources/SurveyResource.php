<?php

namespace App\Http\Resources;

use App\Models\Question;
use Illuminate\Http\Resources\Json\JsonResource;

class SurveyResource extends JsonResource
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
            'id' => $this->id,
            'title' => $this->title,
            'slug' => $this->slug,
            'description' => $this->description,
            'creator' => new UserResource($this->user),
            'created_at' => $this->created_at,
            'questions' => QuestionResource::collection($this->questions()->with(['options', 'chartConfig'])->get()),
            'answers' => $this->whenLoaded('answers'),
        ];
    }
}
