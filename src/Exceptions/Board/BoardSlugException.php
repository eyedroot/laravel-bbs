<?php

namespace Beaverlabs\Board\Exceptions\Board;

use Beaverlabs\Board\Exceptions\EstablishedException;

class BoardSlugException extends EstablishedException
{
    public static function make(string $boardSlug): self
    {
        return new self("Board slug {$boardSlug} is not established.");
    }
}
