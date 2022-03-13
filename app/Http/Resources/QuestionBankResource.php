<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionBankResource extends JsonResource
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
            'name' => $this->template_name,
            'description' => $this->description,
            'sub_templates' => QuestionBankSubTemplateResource::collection(
                $this->sub_template()
                    ->with('questions')
                    ->where('status', '=', 1)
                    ->get()
            )
        ];
    }
}
