<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserManagement extends Component{

    public $isOpen=false;
    public $user,$selectroles;

    public function render(){
        $users=User::paginate();
        $roles=Role::all();
        return view('livewire.admin.user-management',compact('users','roles'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['user']);
        $this->resetValidation();
    }
}
