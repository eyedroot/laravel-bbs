<?php

namespace Beaverlabs\Board\Models\Board;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardAuthority extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'board_id',
        'authority',
        'user_id',
    ];

    protected $casts = [
        'authority' => Types\BoardAuthority::class,
        'created_at' => 'immutable_datetime',
    ];
}
