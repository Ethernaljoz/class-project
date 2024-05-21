@extends('layout.global')

@section('title', 'Client')

@section('content')

<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        
        
        <div class="flex justify-between items-center">
                <a href="{{ route('logout',Auth::user()->id) }}" class="text-2xl font-bold tracking-tight text-gray-900">Nos produits</a>
                <div>
                    <h1 class="text-3xl font-bold">{{Auth::user()->name}}</h1>

                    <a href="{{ route('client.cart') }}"
                        class="inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Panier
                        <span
                            class="inline-flex items-center justify-center w-4 h-4 ms-2 text-base font-semibold text-white rounded-full">
                            {{ Session::has('cart') ? Session::get('cart')->totalQty : '0' }}
                        </span>
                    </a>
                </div>

            </div>

            <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:gap-x-8">

                @foreach ($products as $product)
                    <a href="{{ route('client.add', ['id' => $product->id]) }}" {{-- onclick="event.preventDefault()" --}}
                        class="group relative border px-1 pt-1 pb-2 rounded shadow-sm">
                        <div
                            class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-100 lg:aspect-none group-hover:opacity-75 lg:h-80">
                            <img src={{ $product->imageUrl }} alt="Front of men&#039;s Basic Tee in black."
                                class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                        </div>
                        <div class="mt-4 flex justify-between">
                            <div>
                                <h3 class="text-lg font-bold text-gray-700">

                                    {{ $product->name }}

                                </h3>

                            </div>
                            <p class="text-lg font-bold text-gray-900">{{ $product->price }}</p>
                        </div>
                    </a>
                @endforeach


                <!-- More products... -->
            </div>
        </div>
    </div>
@include('partials.footer')

@endsection

