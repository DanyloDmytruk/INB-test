<?php

namespace App\Http\Resources\RandomNum;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RandomNumResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'number' => $this->number,
            'created_at' => $this->created_at,
        ];
    }
}
