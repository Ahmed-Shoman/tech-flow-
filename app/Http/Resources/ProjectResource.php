<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id'              => $this->id,
            'name'            => $this->name,
            'image'           => $this->image,
            'website_link'    => $this->website_link,
            'frontend_tech'   => $this->frontend_tech,
            'backend_tech'    => $this->backend_tech,
            'gallery'         => $this->gallery,
            'created_at'      => $this->created_at->format('Y-m-d'),
        ];
    }
}