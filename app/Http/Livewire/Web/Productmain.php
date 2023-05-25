<?php

namespace App\Http\Livewire\Web;

use App\Carro;
use App\Models\Product;
use App\Traits\CarTrait;
use Livewire\Component;

class Productmain extends Component{

    Use CarTrait;

    public function render(){
        $products=Product::paginate(6);
        return view('livewire.web.productmain',compact('products'));
    }

    public function agregarProducto(Product $product){
        $this->emit('actualizarContador');
        $this->emit('loadCart');
        $this->agregar($product);
    }


}
