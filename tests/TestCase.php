<?php

namespace Beaverlabs\Skeleton\Tests;

use Illuminate\Foundation\Testing\DatabaseMigrations;

abstract class TestCase extends \Illuminate\Foundation\Testing\TestCase
{
    use \Orchestra\Testbench\Concerns\CreatesApplication;
    use DatabaseMigrations;

    protected function setUp(): void
    {
        parent::setUp();

//        $this->app->register(GgServiceProvider::class);
//        $this->app->register(EventServiceProvider::class);
    }
}
