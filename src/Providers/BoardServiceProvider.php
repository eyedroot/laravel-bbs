<?php

namespace Beaverlabs\Board\Providers;


use Beaverlabs\Board\Board;
use Beaverlabs\Board\Models\User\User;
use Illuminate\Support\ServiceProvider;

class BoardServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(Board::class, function () {
            return new Board();
        });
    }

    public function boot(): void
    {
        \config(['auth.providers.users.model' => User::class]);

        $this->mergeConfigFrom(__DIR__ . '/../../config/database.php', 'database');
    }
}
