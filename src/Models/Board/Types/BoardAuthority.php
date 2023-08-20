<?php

namespace Beaverlabs\Board\Models\Board\Types;

enum BoardAuthority: string
{
    case OWNER = 'OWNER';
    case ADMIN = 'ADMIN';
    case MEMBER = 'MEMBER';
    case GUEST = 'GUEST';
}
