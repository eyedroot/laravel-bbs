<?php

use Beaverlabs\Board\BoardInterface;
use Beaverlabs\Board\Exceptions\Board\EmptyAuthorityException;

it('throws EmptyAuthorityException', function () {
    $this->app->make(BoardInterface::class, ['board_slug' => 1]);
})->throws(EmptyAuthorityException::class);
