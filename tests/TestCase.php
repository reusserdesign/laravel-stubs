<?php

namespace ReusserDesign\Stubs\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use ReusserDesign\Stubs\StubsServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            StubsServiceProvider::class,
        ];
    }
}
