<?php

namespace Beaverlabs\Board\Providers;


use Beaverlabs\Board\Models\User\User;
use Illuminate\Support\ServiceProvider;

class BoardServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        \config(['auth.providers.users.model' => User::class]);

        $this->mergeConfigFrom(__DIR__ . '/../../config/database.php', 'database');
    }
}
