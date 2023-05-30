<?php

namespace App\Http\Livewire\Web;

use App\Models\Category;
use App\Models\Product;
use App\Traits\CarTrait;
use Livewire\Component;

class Productmain extends Component{

    Use CarTrait;
    public $rating=5;
    public $sendCategory;

    public function render(){
        //Consulta usando query scops
        $products=Product::where('availability',1)->category($this->sendCategory)->paginate(6);
        $categories=Category::all();
        return view('livewire.web.productmain',compact('products','categories'));
    }

    public function agregarProducto(Product $product){
        $this->emit('actualizarContador');
        $this->emit('loadCart');
        // $this->emit('actulizarTotalImporte');
        $this->agregar($product);
    }


}
