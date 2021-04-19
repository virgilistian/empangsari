<?php

namespace App\Http\Livewire;

use App\Models\Menu;
use Livewire\Component;

class Menus extends Component
{
    
    public function render()
    {
        return view('livewire.menus', [
            'menus' => Menu::get()
        ]);
    }
}
