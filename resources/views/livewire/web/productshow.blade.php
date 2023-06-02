<x-index-layout>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <img src="{{Storage::url($product->image->url)}}">
        </div>
        <div>
            <div>
                <h1 class="text-gray-900 text-2xl">{{Str::upper($product->name)}}</h1>
                <h2 class="text-gray-600 text-xl">{{$product->fullname}}</h2>
            </div>
            <div class="flex">
                <ul class="flex items-center cursor-pointer mr-2">
                    <li class="mr-1">
                        <i class="fas fa-star text-{{$rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                    </li>
                    <li class="mr-1">
                        <i class="fas fa-star text-{{$rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                    </li>
                    <li class="mr-1">
                        <i class="fas fa-star text-{{$rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                    </li>
                    <li class="mr-1">
                        <i class="fas fa-star text-{{$rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                    </li>
                    <li class="mr-1r">
                        <i class="fas fa-star text-{{$rating == 5 ? 'yellow' : 'gray'}}-400"></i>
                    </li>
                </ul>
                <p class="text-gray-400">Valoración del producto</p>
            </div>
            <div class="my-4">
                <h3 class="text-lg text-gray-800">Caracteristicas destacadas</h3>
                <p class="text-gray-600">{{$product->description}}</p>
            </div>
            <div class="my-4">
                <h3>Precio</h3>
                <div class="flex justify-between">
                    <div>Normal</div>
                    <div>S/ {{$product->price}}</div>
                </div>
                <div class="flex justify-between">
                    <div>Descuento</div>
                    <div>-{{$product->discount}}%</div>
                </div>
                <div class="flex justify-between">
                    <div>Oferta</div>
                    <div>S/ {{$product->price_discount}}</div>
                </div>
            </div>
            <div>
                <button wire:click="agregarProducto({{$product}})" class="bg-indigo-600 w-full text-white px-4 py-2 rounded-md hover:bg-indigo-400">
                    <i class="fa-solid fa-cart-arrow-down text-yellow-400"></i> Agregar
                </button>
            </div>
        </div>

    </div>
</x-index-layout>
