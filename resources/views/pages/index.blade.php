<?php

use function Livewire\Volt\{state};

state(['teste' => 'Esse é o nosso teste de volt']);

$updateTest = fn ($newTeste) => $this->teste = $newTeste;

?>

<x-default>
    @volt
        <div>
            <p>&nbsp;{{ $teste }}</p>
            <input type="text" value="{{ $teste }}" wire:model.live="teste" class="width-100">
        </div>
    @endvolt
</x-default>
