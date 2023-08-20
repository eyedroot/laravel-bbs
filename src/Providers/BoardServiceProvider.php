<?php

namespace Beaverlabs\Board\Providers;


use Beaverlabs\Board\Board;
use Beaverlabs\Board\Models\User\User;
use Illuminate\Support\ServiceProvider;

class BoardServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(Board::class, function ($app, $params) {
            return new Board(
                $params['board_id'],
                $params['board_slug'],
            );
        });
    }

    public function boot(): void
    {
        \config(['auth.providers.users.model' => User::class]);

        $this->mergeConfigFrom(__DIR__ . '/../../config/database.php', 'database');
    }
}
