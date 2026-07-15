<?php

use Livewire\Attributes\Title;
use Livewire\Component;

new #[Title('Admin - posts list')]
class extends Component {

    public function render()
    {
        return $this->view()
            ->title('Admin - Custom title')
            ->layout('layouts.admin')
            ->layoutData(['test1' => 'test 1 index']);
    }
};
?>

<div>
    <p>Admin posts list</p>
</div>
