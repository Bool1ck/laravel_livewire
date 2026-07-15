<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new
//#[Layout('layouts.admin')]
class extends Component {
    public $postId;

    public function mount($id)
    {
        $this->postId = $id;
    }

    public function render()
    {
        return $this->view()
            ->title("Admin - edit post, id: {$this->postId}")
            ->layout('layouts.admin', ['test2' => 'Test 2 param']);
    }
    //
};
?>

<div>
    <p>Admin post {{ $postId }} edit</p>
</div>
