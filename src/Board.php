<?php

namespace Beaverlabs\Board;

use Beaverlabs\Board\Exceptions\Board\EmptyAuthorityException;
use Beaverlabs\Board\Models\Board\BoardAuthority;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Board implements BoardInterface
{
    private BoardAuthority $boardAuthority;

    /**
     * @throws EmptyAuthorityException
     */
    public function __construct(
        public readonly int $boardId,
        public readonly ?int $articleId = null,
    )
    {
        try {
            $this->boardAuthority = BoardAuthority::findOrFail($boardId);
        } catch (ModelNotFoundException) {
            throw EmptyAuthorityException::make($boardId);
        }
    }
}
