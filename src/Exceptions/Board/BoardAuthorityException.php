<?php

namespace Beaverlabs\Board\Exceptions\Board;

use Beaverlabs\Board\Exceptions\FatalConfigurationException;

class BoardAuthorityException extends FatalConfigurationException
{
    public static function make(int $boardId): self
    {
        return new self("Board authority not found for board id: {$boardId}");
    }
}
