<?php

namespace Beaverlabs\Board\Models\Board\Types;

enum BoardState: string
{
    case PUBLIC = 'PUBLIC';
    case PRIVATE = 'PRIVATE';
    case ANONYMOUS = 'ANONYMOUS';
    case RESTRICTED = 'RESTRICTED';
}
