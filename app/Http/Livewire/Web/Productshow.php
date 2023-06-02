<?php

namespace App\Http\Livewire\Web;

use App\Models\Product;
use Livewire\Component;

class Productshow extends Component{

    public $rating=5;

    public function render($id){
        $product=Product::find($id);
        $rating=5;
        return view('livewire.web.productshow',compact('product','rating'))->layout('layouts.guest');
    }

}
