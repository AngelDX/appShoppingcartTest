<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Role;

class RoleManagement extends Component{

    public $isOpen=false;

    public function render(){
        $roles=Role::paginate();
        return view('livewire.admin.role-management',compact('roles'));
    }
}
