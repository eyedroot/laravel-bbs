<?php

namespace Beaverlabs\Board\Models\Board;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardCategory extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'board_id',
        'code',
        'localization_id',
    ];

    protected $casts = [
    ];
}
