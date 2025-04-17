<?php

declare(strict_types=1);

namespace Dvarilek\ClosureSynthesizer;

use Laravel\SerializableClosure\Exceptions\PhpVersionNotSupportedException;
use Livewire\Mechanisms\HandleComponents\Synthesizers\Synth;
use Laravel\SerializableClosure\SerializableClosure;
use Closure;

class ClosureSynth extends Synth
{

    /**
     * @var string
     */
    public static string $key = 'closure';

    /**
     * @param  mixed $target
     *
     * @return bool
     */
    public static function match(mixed $target): bool
    {
        return $target instanceof Closure;
    }

    /**
     * @param  Closure $target
     *
     * @return array{0: string, 1: empty}
     * @throws PhpVersionNotSupportedException
     */
    public function dehydrate(Closure $target): array
    {
        $serializedClosure = serialize(new SerializableClosure($target));

        return [encrypt($serializedClosure), []];
    }

    /**
     * @param  string $target
     *
     * @return Closure
     */
    public function hydrate(string $target): Closure
    {
        $serializedClosure = decrypt($target);

        return unserialize($serializedClosure)->getClosure();
    }
}