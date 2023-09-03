<?php

use Beaverlabs\Board\Contracts\Board;
use Beaverlabs\Board\Exceptions\Board\BoardAuthorityException;

it('throws EmptyAuthorityException', function () {
    $this->app->make(Board::class, ['board_slug' => 1]);
})->throws(BoardAuthorityException::class);
