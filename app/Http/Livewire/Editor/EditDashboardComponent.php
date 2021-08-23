<?php

namespace App\Http\Livewire\Editor;

use Livewire\Component;

class EditDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.editor.edit-dashboard-component')->layout('layouts.homebase');
    }
}
