<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Models\Patient;

class PatientsResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Patient $patient) {
            return (new PatientResource($patient));
        });

        return [
            'version' => '1.0.0',
            'author_url' => '',
            'data' => $this->collection
        ];
    }
}