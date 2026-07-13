<?php

use Livewire\Component;

new class extends Component
{
    public $postId;

    public function mount($id)
    {
        $this->postId = $id;
    }

    public function render()
    {
        return $this->view()->title("Site post show id:{$this->postId}");
    }
};
?>

<div>
    <p>Site post {{ $postId }} show</p>
</div>
