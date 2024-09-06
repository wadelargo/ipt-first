<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                        @php
                            $products = [
                                [
                                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTn8SfVm34eY9PL3DKdp1bJ0G5zXvQ6CxAiqg&s',
                                    'title' => 'Product 1',
                                    'price' => '29.99',
                                    'description' => 'Description for product 1.'
                                ],
                                [
                                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrloZ_lHhAsVRnPjAyVxigmOm_187ehKOaog&s',
                                    'title' => 'Product 2',
                                    'price' => '39.99',
                                    'description' => 'Description for product 2.'
                                ],
                                [
                                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQxPaD1rZRDGZlmDdydIVEwYaA8jKm5LZxv1w&s',
                                    'title' => 'Product 3',
                                    'price' => '49.99',
                                    'description' => 'Description for product 3.'
                                ],
                                [
                                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrmXdVKFO5F4PoidDoeZdEgCc0IgNZTKn5Mw&s',
                                    'title' => 'Product 4',
                                    'price' => '59.99',
                                    'description' => 'Description for product 4.'
                                ],
                                [
                                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgooROemLq1pOWdtsxzEboj3MYenYTaZTCsg&s',
                                    'title' => 'Product 5',
                                    'price' => '69.99',
                                    'description' => 'Description for product 5.'
                                ],
                                [
                                    'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTHrcsbVx5Uxg4olzqp_Wt961Zk0V-Nx8ZCvg&s',
                                    'title' => 'Product 6',
                                    'price' => '79.99',
                                    'description' => 'Description for product 6.'
                                ],
                            ];
                        @endphp

                        @foreach($products as $product)
                            <div class="bg-white border border-gray-200 rounded-lg shadow-sm overflow-hidden">
                                <img src="{{ $product['image'] }}" class="w-full h-48 object-cover" alt="{{ $product['title'] }}">
                                <div class="p-4">
                                    <h5 class="text-lg font-bold">{{ $product['title'] }}</h5>
                                    <p class="text-gray-700">{{ $product['description'] }}</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="text-gray-900 font-bold">${{ $product['price'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
