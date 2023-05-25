<?php

namespace App\Http\Livewire\Web;

use App\Traits\CarTrait;
use Livewire\Component;

class Shoppingcar extends Component{

    Use CarTrait;
    protected $listeners=['loadCart'];
    public $totalImporte=0;

    public function render(){
        return view('livewire.web.shoppingcar');
    }

    public function disminuirProducto($id){
        $this->restar($id);
        $this->emit('actualizarContador');
    }

    public function aumentarProducto($id){
        $this->sumar($id);
        $this->emit('actualizarContador');
    }

    public function loadCart(){
        $this->carro;
    }
}
