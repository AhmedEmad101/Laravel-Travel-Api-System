<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Travels;

class TravelsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return
        [
            'IsPublic' => $this->IsPublic,
            'Slug' => $this->Slug,
            'Name' =>$this ->Name,
            'Description'=>$this->Description ,
            'NumberOfDays' => $this->NumberOfDays,


    ];
    }
}
