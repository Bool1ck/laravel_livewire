<?php

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;

new
#[Layout('layouts.admin', ['test1' => 'Test 1 param'])]
#[Title('Admin - create page')]
class extends Component {
    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $content = '';

    public function storePost()
    {
        $this->validate();
        \App\Models\Post::create(['title' => $this->title, 'body' => $this->content, 'user_id' => \Illuminate\Support\Facades\Auth::user()->id]);
//        $this->title = '';
//        $this->content = '';
        $this->reset('title');
        $this->js('alrm(2222)');
    }
    //
};
?>

<div>
    <p>Admin post create</p>
    <form wire:submit="storePost">
        <div>
            <label>title</label>
            <input wire:model="title">
            <div>
                @error('title') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div>
            <label>Content</label>
            <textarea wire:model="content"></textarea>
            <div>
                @error('content') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <button type="submit">Add</button>
    </form>
</div>

<script>

    this.$js.alrm = (message = '1111') => {
        alert(message)
    }

</script>
