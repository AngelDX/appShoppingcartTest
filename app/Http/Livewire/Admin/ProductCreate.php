<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class ProductCreate extends ModalComponent{
    public $product;
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
    public static function modalMaxWidth(): string
    {
        // 'sm'
        // 'md'
        // 'lg'
        // 'xl'
        // '2xl'
        // '3xl'
        // '4xl'
        // '5xl'
        // '6xl'
        // '7xl'
        return '7xl';
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
