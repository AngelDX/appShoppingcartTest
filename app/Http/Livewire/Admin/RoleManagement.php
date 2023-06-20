<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleManagement extends Component{
    public $isOpen=false;
    public $usuario,$rolname,$rolpermissions;
    public function render(){
        $roles=Role::paginate();
        $permissions=Permission::all();
        return view('livewire.admin.role-management',compact('roles','permissions'));
    }

    public function create(){
        $this->isOpen=true;
        $this->reset(['rolname','rolpermissions']);
        $this->resetValidation();
    }

    public function edit($id){
        $this->resetValidation();
        $this->isOpen=true;
        $role=Role::find($id);
        $this->rolname=$role->name;
        //$this->rolpermissions=$role->permissions->pluck('id');
        $this->rolpermissions=[true,false,false];
    }

}
