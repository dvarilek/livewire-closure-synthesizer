<?php

declare(strict_types=1);

namespace Dvarilek\ClosureSynthesizer;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class ClosureSynthesizerServiceProvider extends ServiceProvider
{

    /**
     * @return void
     */
    public function boot(): void
    {
        /* @phpstan-ignore staticMethod.notFound */
        Livewire::propertySynthesizer(ClosureSynth::class);
    }
}