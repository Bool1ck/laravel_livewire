<?php

use Livewire\Component;

new class extends Component
{
    public $posts = [];

    public function mount()
    {
        $this->posts = \App\Models\Post::where('user_id', \Illuminate\Support\Facades\Auth::user()->id)->get();
    }
};
?>

<div>
    @foreach($posts as $post)
        <div>
            <div>title: {{$post->title}}</div>
            <div><textarea disabled>{{$post->body}}</textarea></div>
        </div>
    @endforeach
</div>
