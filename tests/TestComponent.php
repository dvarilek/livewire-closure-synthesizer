<?php

declare(strict_types=1);

namespace Tests;

use Livewire\Component;
use Closure;

class TestComponent extends Component
{

    public ?Closure $testClosure = null;

    public bool $closureMatches = false;

    public function callClosure(): mixed
    {
        return ($this->testClosure)();
    }

    public function closureMatches(Closure $testClosure): void
    {
        $this->closureMatches = $this->testClosure instanceof $testClosure
            && ($this->testClosure)() === $testClosure();
    }

    public function render(): string
    {
        return '<div></div>';
    }
}