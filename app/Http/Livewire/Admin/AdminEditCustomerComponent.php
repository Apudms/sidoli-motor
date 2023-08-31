<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;

class AdminEditCustomerComponent extends Component
{
    public $name;
    public $email;
    public $password;
    public $editPassword;
    public $newPassword;
    public $user_id;
    public $email_verified_at;
    public $remember_token;

    public function mount($id)
    {
        $this->user_id = $id;
        $user = User::where('id', $id)->first();
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->email_verified_at = $user->email_verified_at;
        $this->remember_token = $user->remember_token;
    }

    public function updated($field)
    {
        $validationRules = [
            'name' => 'required|max:60',
            'email' => 'required',
        ];

        // Jika newPassword diisi, tambahkan validasi
        if ($field == 'newPassword' && $this->newPassword) {
            $validationRules['newPassword'] = 'required|min:8';
            $validationRules['password'] = 'required|min:8';
        }

        $this->validateOnly($field, $validationRules);
    }

    public function updateCustomer()
    {
        $validationRules = [
            'name' => 'required|max:60',
            'email' => 'required',
        ];

        // Jika newPassword diisi, tambahkan validasi
        if ($this->newPassword) {
            $validationRules['password'] = 'required|min:8';
            $validationRules['newPassword'] = 'required|min:8';
        }

        $this->validate($validationRules);

        $user = User::find($this->user_id);
        $user->name = $this->name;
        $user->email = $this->email;
        $user->email_verified_at = now();
        $user->remember_token = Str::random(30);

        // Jika newPassword diisi, ubah password
        if ($this->newPassword) {
            $user->password = bcrypt($this->newPassword);
        }

        $user->save();

        session()->flash('message', 'Data Customer berhasil diubah!');
        return redirect()->route('admin.customer');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-customer-component')->layout('layouts.main');
    }
}
