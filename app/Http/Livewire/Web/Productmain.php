<?php

namespace App\Http\Livewire\Web;

use App\Carro;
use App\Models\Category;
use App\Models\Product;
use App\Traits\CarTrait;
use Livewire\Component;

class Productmain extends Component{

    Use CarTrait;
    public $rating=5;

    public function render(){
        $products=Product::paginate(6);
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
