<?php

namespace Beaverlabs\Board\Models\Article;

use Beaverlabs\Board\Models\Article\Types\ArticleState;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes, HasFactory;

    protected $connection = 'bbs_source';

    protected $fillable = [
        'state',
        'board_id',
        'category_id',
        'user_id',
        'title',
        'content',
        'recovered_at',
    ];

    protected $casts = [
        'state' => ArticleState::class,
        'created_at' => 'immutable_datetime',
    ];
}
