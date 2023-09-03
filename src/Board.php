<?php

namespace Beaverlabs\Board;

use Beaverlabs\Board\Contracts\Board as BoardContract;
use Beaverlabs\Board\Exceptions\Board\EmptyAuthorityException;
use Beaverlabs\Board\Models\Board\BoardAuthority;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Board implements BoardContract
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
