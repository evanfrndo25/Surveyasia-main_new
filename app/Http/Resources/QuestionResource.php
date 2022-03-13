<?php

namespace App\Http\Resources;

use App\Models\QuestionsOption;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'question' => $this->question,
            'configuration' => $this->configuration,
            'questionBank' => $this->from_question_bank,
            'options' => QuestionOptionsResource::collection($this->whenLoaded('options')),
            'chart_config' => $this->whenLoaded('chartConfig')
        ];
    }
}
