<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cart Summary Page') }}
        </h2>
    </x-slot>
    @foreach ($products as $product)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Product: ") }} {{$product->name}}
                </div>
                <h1 class="px-6">Price: {{$product->price}} {{" Baht"}}</h1>
                <img src="{{$product->description}}" width="200" height="200" class="px-6"/>
                <input type="number" name="" class="cart-qty-single" min="1" max="1000" >
            </div>
        </div>
    </div>
    @endforeach
</x-app-layout>