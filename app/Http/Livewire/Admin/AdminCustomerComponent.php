<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminCustomerComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $customers = User::where('utype', 'USR')
            ->latest()
            ->paginate(10);
        return view('livewire.admin.admin-customer-component', ['customers' => $customers])->layout('layouts.main');
    }
}
