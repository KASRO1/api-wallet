<?php

namespace App\Http\Livewire;

use App\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class UserSearch extends Component
{

    public $search = '';

    public function render()
    {
        $users = User::where('name', 'like', "%{$this->search}%")->get();

        return view('livewire.user-search', [
            'users' => $users ,
            'searchString' => $this->search
        ]);
    }
}
