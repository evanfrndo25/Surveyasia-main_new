<?php

namespace App\Http\Resources;

use App\Models\Question;
use Illuminate\Http\Resources\Json\JsonResource;

class QuestionBankSubTemplateResource extends JsonResource
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
            'sub_template_name' => $this->sub_template_name,
            'goals' => $this->goals,
            'status' => $this->status,
            'questions' => QuestionResource::collection(
                $this->questions()
                    ->with('options')
                    // ->orderByDesc('question_type')
                    ->get()
            )
        ];
    }
}
