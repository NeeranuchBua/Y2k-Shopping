<!-- home page -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Y2K Shopping') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 text-center">
                    {{ __("Welcome to Y2K store!") }}
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="w-40 mt-5  sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800  mx-auto overflow-hidden shadow-sm sm:rounded-lg">
                <div class ="p-6 text-gray-900 dark:text-gray-100 text-center">
                <!-- <input type="submit" name="submit" value="Let's Get Started...">  -->
                <a href = "/productpage" >Let's Get Started... </a>
                </div>
                
                </div>
            </div>
        </div>
    </div>

</x-app-layout>



    
