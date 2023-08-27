<?php

namespace Beaverlabs\Board\Tests;

use Beaverlabs\Board\Providers\BoardServiceProvider;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TestCase extends \Orchestra\Testbench\TestCase
{
    use DatabaseMigrations;

    protected function getPackageProviders($app): array
    {
        return [
            BoardServiceProvider::class,
        ];
    }
}
