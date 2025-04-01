<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UserList extends Component
{
    public $users;

    public function mount()
    {
        // Fetch all users from the database
        $this->users = User::where('email', 'lmosciski@example.org')->get();
    }

    public function render()
    {
        return view('livewire.user-list');
    }
}