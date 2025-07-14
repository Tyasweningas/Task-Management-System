<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    protected function setUp(): void
{
    parent::setUp();

    $this->app['router']->group([
        'middleware' => 'api',
        'prefix' => 'api',
    ], function () {
        require base_path('routes/api.php');
    });
}

}
