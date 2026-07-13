<?php

use Livewire\Component;

new class extends Component
{
    public $text;
    public $counter = 0;

    public function increment()
    {
        $this->counter++;
    }
    public function decrement()
    {
        $this->counter--;
    }

    public function doEmpty()
    {
     $this->text = '';
    }
};
?>

<div>
    <p>Counter: {{$this->counter}}</p>
    <hr>
    <button wire:click="increment">++</button>&nbsp;&nbsp;&nbsp;
    <button wire:click="decrement">--</button>
    @if(isset($text['id']) && $text['id'] == 1)
        <hr>
        <p>text: {{ $text['text'] }}</p>
        <button wire:click="doEmpty">Nulleble</button>
    @endif

</div>
