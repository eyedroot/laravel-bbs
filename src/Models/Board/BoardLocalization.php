<?php

namespace Beaverlabs\Board\Models\Board;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardLocalization extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'locales',
    ];

    protected $casts = [
        'locales' => 'array',
    ];
}
