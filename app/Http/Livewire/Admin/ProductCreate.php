<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ProductCreate extends ModalComponent{
    public $product,$file;
    protected $rules=[
        'product.name'=>'required',
        'product.fullname'=>'required',
        'product.description'=>'required',
        'product.price'=>'required',
        'product.stock'=>'required',
        'product.discount'=>'required',
        'product.availability'=>'required',
        'product.category_id'=>'required',
    ];

    public function mount(){
        $this->product['availability']=true;
    }

    public function render(){
        $categories=Category::all();
        return view('livewire.admin.product-create',compact('categories'));
    }
    public function store(){
        $this->validate();
        //dd($this->product);
    }

}
