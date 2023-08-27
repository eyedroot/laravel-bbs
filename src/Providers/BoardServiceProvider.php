<?php

namespace Beaverlabs\Board\Providers;


use Beaverlabs\Board\Board;
use Beaverlabs\Board\BoardInterface;
use Beaverlabs\Board\Models\User\User;
use Illuminate\Support\ServiceProvider;

class BoardServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        \config(['auth.providers.users.model' => User::class]);

        $this->app->singleton(BoardInterface::class, function ($app, $params) {
            $boardId = $params['board_slug'];

            return new Board($boardId);
        });
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
    }
}
