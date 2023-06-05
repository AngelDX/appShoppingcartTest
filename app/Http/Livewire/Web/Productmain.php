<?php

namespace App\Http\Livewire\Web;

use App\Models\Category;
use App\Models\Product;
use App\Traits\CarTrait;
use Livewire\Component;
use Livewire\WithPagination;

class Productmain extends Component{
    Use WithPagination;
    Use CarTrait;
    public $rating=5;
    public $sendCategory;

    public function render(){
        //Consulta usando query scops
        $products=Product::where('availability',1)->category($this->sendCategory)->latest('id')->paginate(6);
        $categories=Category::all();
        return view('livewire.web.productmain',compact('products','categories'));
    }

    public function agregarProducto($id){
        $product=Product::find($id);
        $this->emit('actualizarContador');
        $this->emit('loadCart');
        $this->agregar($product);
    }


}
