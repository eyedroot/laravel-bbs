<?php

namespace Database\Factories;

use Beaverlabs\Board\Models\Board\BoardAuthority;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BoardAuthorityFactory extends Factory
{
    protected $model = BoardAuthority::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
