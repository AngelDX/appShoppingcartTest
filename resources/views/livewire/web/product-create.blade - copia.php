  <!-- Main modal -->
  <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
      <div class="relative w-full max-w-2xl max-h-full">
          <!-- Modal content -->
          <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
              <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                  <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  <span class="sr-only">Close modal</span>
              </button>
              <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Registro de nuevo producto</h3>
                    <div class="flex mb-4 justify-between gap-2">
                        <div class="mb-2 md:mb-0 w-full">
                            <x-label value="Categoria del producto" class="font-bold text-left"/>
                            <select wire:model.defer="product.category_id" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full">
                                <option selected>Seleccione Opción</option>
                                @foreach ($categories as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            <x-input-error for="product.category_id"/>
                        </div>
                    </div>
                    <div class="flex mb-4 justify-between gap-2">
                        <div class="mb-2 md:mb-0 w-full">
                            <x-label value="Nombre corto" class="font-bold text-left"/>
                            <x-input wire:model.defer="product.name" name="stand" type="text" class="w-full"/>
                            <x-input-error for="product.name"/>
                        </div>
                    </div>
                    <div class="flex mb-4 justify-between gap-2">
                        <div class="mb-2 md:mb-0 w-full">
                            <x-label value="Nombre completo" class="font-bold text-left"/>
                            <x-input wire:model.defer="product.fullname" name="stand" type="text" class="w-full"/>
                            <x-input-error for="product.fullname"/>
                        </div>
                    </div>
                    <div class="flex mb-4 justify-between gap-2">
                        <div class="mb-2 md:mb-0 w-full">
                            <x-label value="Descripción" class="font-bold text-left"/>
                            <textarea wire:model.defer="product.description" name="obsevaciones" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"></textarea>
                            <x-input-error for="product.description"/>
                        </div>
                    </div>
                    <div class="flex mb-4 justify-between gap-2">
                        <div class="mb-2 md:mb-0 w-full">
                            <x-label value="Precio" class="font-bold text-left"/>
                            <x-input wire:model.defer="product.price" name="stand" type="text" class="w-full"/>
                            <x-input-error for="product.price"/>
                        </div>
                        <div class="mb-2 md:mb-0 w-full">
                            <x-label value="Stock" class="font-bold text-left"/>
                            <x-input wire:model.defer="product.stock" name="stand" type="text" class="w-full"/>
                            <x-input-error for="product.stock"/>
                        </div>
                        <div class="mb-2 md:mb-0 w-full">
                            <x-label value="Descuento (%)" class="font-bold text-left"/>
                            <x-input wire:model.defer="product.discount" name="stand" type="text" class="w-full"/>
                            <x-input-error for="product.discount"/>
                        </div>
                    </div>
                    <div class="flex mb-4 justify-between gap-2">
                        <div class="mb-2 md:mb-0 w-full">
                            <div class="form-check">
                                <input wire:model.defer="product.availability" value="1" class="form-check-input appearance-none h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox"  checked>
                                <label class="form-check-label inline-block text-gray-800" for="flexRadioDefault1">
                                Producto disponible
                                </label>
                            </div>
                            <x-input-error for="product.availability"/>
                        </div>
                    </div>
                    <button wire:click.prevent="store()" wire:loading.attr="disabled" wire:target="store" class="disabled:bg-gray-600 w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Registrar producto
                    </button>
              </div>
          </div>
      </div>
  </div>
