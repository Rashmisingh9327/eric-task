<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'id' => (int)$this->id,
			
			'status' => (string)$this->status,
			'type' => (string)$this->type,
			
			'gender' => (string)$this->gender,
			'birthday' => (string)$this->birthday,
			
			'parameters' => (string)$this->parameters,
			
			'region' => (string)$this->region,
			'bmd' => (string)$this->bmd,
			
			'created_at' => (string)$this->created_at
        ];
    }
}
