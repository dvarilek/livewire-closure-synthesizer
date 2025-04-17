<?php

use Livewire\Livewire;

test('livewire component persists closures across requests', function () {
    $closure = fn () => 'result';

    Livewire::test(\Tests\TestComponent::class, [
        'testClosure' => $closure
    ])
        ->call('closureMatches', $closure)
        ->assertSet('closureMatches', true);
});