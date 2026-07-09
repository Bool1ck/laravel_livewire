<?php

use Livewire\Attributes\Validate;
use App\Models\Post;
use Livewire\Component;

new class extends Component {
    #[Validate('required|string')]
    public $title = '';

    #[Validate('required')]
    public $body = '';

    public function create()
    {
        $this->validate();
        // 1. Создаем пост
            $post = Post::create([
                'title' => $this->title,
                'body' => $this->body,
                'user_id' => auth()->id()
            ]);

        $this->reset(['title', 'body']);
        session()->flash('success', 'Пост успешно сохранен!');
    }
};
?>

<div>
    <div>title: <input type="text" wire:model="title"></div>
    @error('title')
    <span style="color: red;">{{ $message }}</span>
    @enderror
    <div>content: <textarea wire:model="body"></textarea></div>
    @error('body')
    <span style="color: red;">{{ $message }}</span>
    @enderror
    <button wire:click="create">Add</button>
    {{-- Live as if you were to die tomorrow. Learn as if you were to live forever. - Mahatma Gandhi --}}
</div>
