<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
			
			'first_name' => (string)$this->first_name,
			'last_name' => (string)$this->last_name,

			'phone' => (string)$this->phone,
			'email' => (string)$this->email,

			'address_line_1' => (string)$this->address_line_1,
			'address_line_2' => (string)$this->address_line_2,
			'city' => (string)$this->city,
			'province' => (string)$this->province,
			'country' => (string)$this->country,
			'zip' => (string)$this->zip,
			
			'created_at' => (string)$this->created_at
        ];
    }
}
