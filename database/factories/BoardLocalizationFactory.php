<?php

namespace Database\Factories;

use Beaverlabs\Board\Models\Board\BoardLocalization;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BoardLocalizationFactory extends Factory
{
    protected $model = BoardLocalization::class;

    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
