<?php

namespace Beaverlabs\Board\Providers;


use Beaverlabs\Board\Core as BoardCore;
use Beaverlabs\Board\Models\User\User;
use Illuminate\Support\ServiceProvider;

class BoardServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(BoardCore::class, function () {
            return new BoardCore();
        });
    }

    public function boot(): void
    {
        \config(['auth.providers.users.model' => User::class]);

        $this->mergeConfigFrom(__DIR__ . '/../../config/database.php', 'database');
    }
}
