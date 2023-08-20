<?php

namespace Beaverlabs\Board\Models\Board;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BoardCategory extends Model
{
    use SoftDeletes, HasFactory;

    protected $connection = 'bbs_source';
}
