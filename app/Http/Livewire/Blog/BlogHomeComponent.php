<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;

class BlogHomeComponent extends Component
{
    public function render()
    {
        return view('livewire.blog.blog-home-component')->layout('layouts.homebase');
    }
}
