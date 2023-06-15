<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserManagement extends Component{

    public $isOpen=false;

    public function render(){
        $users=User::paginate();
        return view('livewire.admin.user-management',compact('users'));
    }
}
