<?php

declare(strict_types=1);

namespace Tests;

use Dvarilek\ClosureSynthesizer\ClosureSynthesizerServiceProvider;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    /**
     * @param  Application $app
     * @return list<ServiceProvider>
     */
    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            ClosureSynthesizerServiceProvider::class,
        ];
    }
}
