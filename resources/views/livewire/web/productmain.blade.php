<div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
    @forelse ($products as $product)
    <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
        <div>
            <div class="grid grid-cols-2 gap-4">
                <div class="w-full object-cover">
                    <img src="{{Storage::url($product->image->url)}}">
                </div>
                <div>
                    <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{$product->name}}</h2>
                    <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                        {{$product->description}}
                    </p>
                </div>
            </div>
            <div class="mt-4 flex justify-end">
                <button wire:click="agregarProducto({{$product}})" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-400">
                    <i class="fa-solid fa-cart-arrow-down"></i> Agregar
                </button>
            </div>
        </div>
    </div>
    @empty
        <p>Productos vacios</p>
    @endforelse
</div>
