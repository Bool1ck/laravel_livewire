<?php

use Livewire\Component;

new class extends Component
{
    public $counter = 0;

    public function increment()
    {
        $this->counter++;
    }
    public function decrement()
    {
        $this->counter--;
    }
};
?>

<div>
    <p>Counter: {{$this->counter}}</p>
    <hr>
    <button wire:click="increment">++</button>&nbsp;&nbsp;&nbsp;
    <button wire:click="decrement">--</button>
</div>
