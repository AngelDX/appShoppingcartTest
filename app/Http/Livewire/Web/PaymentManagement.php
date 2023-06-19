<?php

namespace App\Http\Livewire\Web;

use App\Traits\CarTrait;
use Livewire\Component;

class PaymentManagement extends Component{
    Use CarTrait;
    public $totalImporte=0;

    public function mount(){
        $this->totalImporte=$this->totalImporteCart();
    }

    public function render(){
        $cart=$this->carro;
        $this->totalImporte=$this->totalImporteCart();
        return view('livewire.web.payment-management',compact('cart'))->layout('layouts.index');
    }

}
