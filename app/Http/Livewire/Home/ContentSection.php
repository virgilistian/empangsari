<?php

namespace App\Http\Livewire\Home;

use Livewire\Component;

class ContentSection extends Component
{
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }
    
    public function render()
    {
        return view('livewire.home.content-section');
    }
}
