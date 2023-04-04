<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Y2K Shopping') }}
        </h2>
    </x-slot>
    @foreach ($products as $product)
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 dark:text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Product: ") }} {{$product->name}}
                </div>
                <h1 class="px-6">Price: {{$product->price}} {{" Baht"}}</h1>
                @foreach ($discounts as $discount)
                    @if ($discount->cloth_id == $product->cloth_id)
                        <h1 class="px-6">Discount: {{$discount->percentage}} {{" %"}}</h1>
                        <h1 class="px-6">Discount Price: {{$discount->price}} {{" Baht"}}</h1>
                    @endif
                @endforeach
                <img src="{{$product->description}}" width="300" height="300" class="px-6"/>
                <div class="px-6">
                    <img src='https://parspng.com/wp-content/uploads/2022/12/cartpng.parspng.com-2.png' width="50" height='100'/>
                    <h1>Add to cart</h1>
                </div>
             </div>
        </div>
    </div>
    @endforeach
</x-app-layout>