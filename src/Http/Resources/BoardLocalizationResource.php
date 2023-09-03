<?php

namespace Beaverlabs\Board\Http\Resources;

use Beaverlabs\Board\Models\Board\BoardLocalization;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin BoardLocalization */
class BoardLocalizationResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
