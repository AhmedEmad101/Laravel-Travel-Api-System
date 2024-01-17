<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
//use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
class ToursResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
                    'TravelsID'=>$this->Travel_ID,
                    'name' =>$this->Name,
                    'starting date'=>$this->StartingDate,
                    'Ending date'=>$this->EndingDate,
                    'price' => $this->Price
        ];
    }
}
