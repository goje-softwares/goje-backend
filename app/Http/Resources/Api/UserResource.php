<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     */
    public function toArray($request)
    {
        return [
            'data' => [
                'name' => $this->name,
                'email' => $this->email
            ],
            'access_token' => $this->token,
            'token_type' => 'Bearer',
        ];
    }
}
