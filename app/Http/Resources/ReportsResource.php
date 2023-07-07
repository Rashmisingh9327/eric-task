<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Models\Report;

class ReportsResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $this->collection->transform(function (Report $report) {
            return (new ReportResource($report));
        });

        return [
            'version' => '1.0.0',
            'author_url' => '',
            'data' => $this->collection
        ];
    }
}