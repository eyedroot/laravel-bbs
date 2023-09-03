<?php

namespace Beaverlabs\Board;

use Beaverlabs\Board\Contracts\Board as BoardContract;
use Beaverlabs\Board\Exceptions\Board\BoardAuthorityException;
use Beaverlabs\Board\Exceptions\Board\BoardSlugException;
use Beaverlabs\Board\Models\Board\BoardAuthority;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Board implements BoardContract
{
    /** @var Collection<int, BoardAuthority> */
    private Collection $boardAuthority;

    /**
     * @throws BoardAuthorityException
     */
    public function __construct(
        public readonly int $boardId,
        public readonly ?int $articleId = null,
    )
    {
        $this->setBoardAuthority($boardId);
    }

    /**
     * @throws BoardAuthorityException
     */
    private function setBoardAuthority(int $boardId): void
    {
        $this->boardAuthority = BoardAuthority::where('board_id', $boardId)->get();

        if ($this->boardAuthority->isEmpty()) {
            throw BoardAuthorityException::make($boardId);
        }
    }

    /**
     * @throws BoardSlugException
     */
    public static function findBoardSlug(string $boardSlug): int
    {
        try {
            $board = Models\Board\Board::where('slug', $boardSlug)->firstOrFail();
        } catch (ModelNotFoundException) {
            throw Exceptions\Board\BoardSlugException::make($boardSlug);
        }

        return $board->id;
    }
}
