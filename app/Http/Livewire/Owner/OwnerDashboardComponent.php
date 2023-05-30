<?php

namespace App\Http\Livewire\Owner;

use Livewire\Component;

class OwnerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.owner.owner-dashboard-component')->layout('layouts.main');
    }
}
