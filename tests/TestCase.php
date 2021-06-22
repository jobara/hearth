<?php

namespace FluidProject\Hearth\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use FluidProject\Hearth\HearthServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'FluidProject\\Hearth\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            HearthServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        include_once __DIR__.'/../database/migrations/create_hearth_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
