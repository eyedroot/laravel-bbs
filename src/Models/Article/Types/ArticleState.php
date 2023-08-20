<?php

namespace Beaverlabs\Board\Models\Article\Types;

enum ArticleState: string
{
    case PUBLISHED = 'PUBLISHED';
    case DELETED = 'DELETED';
    case HIDDEN = 'HIDDEN';
}
