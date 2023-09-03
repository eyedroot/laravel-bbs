<?php

use Beaverlabs\Board\Board;

if (! function_exists('board_id_from_slug')) {
    function board_id_from_slug(string $boardSlug): ?int
    {
        return Board::findBoardSlug($boardSlug);
    }
}
