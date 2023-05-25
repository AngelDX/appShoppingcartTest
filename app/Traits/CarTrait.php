<?php
namespace App\Traits;

trait CarTrait{

    public $carro;

    public function agregar($producto){
        $this->carro=session()->get('cart');
        //Si el carro esta vacio se agregar un nuevo producto
        if(!$this->carro){
            $this->carro=[
                $producto->id=>[
                    "nombre"=>$producto->name,
                    "cantidad"=>1,
                    "precio"=>$producto->price,
                    "imagen"=>$producto->image->url,
                    "subtotal"=>$producto->price
                ]
            ];
        //Si el carro existe y el producto tambien, sumamos mas 1 la cantidad
        }else if(isset($this->carro[$producto->id])){
            $this->carro[$producto->id]['cantidad']++;
            $this->carro[$producto->id]['subtotal']=$this->carro[$producto->id]['subtotal']+$this->carro[$producto->id]['precio'];
        }else{ //si el carro existe pero el producto no esta en el carro
            $this->carro[$producto->id] = [
                "nombre" =>$producto->name,
                "cantidad"=>1,
                "precio"=>$producto->price,
                "imagen"=>$producto->image->url,
                "subtotal"=>$producto->subtotal+$producto->price
            ];
        }
        session()->put('cart',$this->carro);
    }

    public function sumar($id){
        $this->carro=session()->get('cart');
        if(isset($this->carro[$id])){
            $this->carro[$id]['cantidad']++;
            $this->carro[$id]['subtotal']=$this->carro[$id]['subtotal']+$this->carro[$id]['precio'];
        }
        session()->put('cart',$this->carro);
    }

    public function restar($id){
        $this->carro=session()->get('cart');
        if(isset($this->carro[$id])){
            $this->carro[$id]['cantidad']--;
            $this->carro[$id]['subtotal']=$this->carro[$id]['subtotal']-$this->carro[$id]['precio'];
            if ($this->carro[$id]['cantidad']<1) {
                unset($this->carro[$id]);
            }
        }
        session()->put('cart',$this->carro);
    }

    public function totalItems(){
        return count(session()->get('cart'));
    }

    public function totalImporte(){
        $sesionitems=session()->get('cart');
        dd($sesionitems);
        foreach ($sesionitems as $items) {
            $items->precio;
        }
        return null;
    }

}
