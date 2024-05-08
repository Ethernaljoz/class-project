@extends('layout.global')

@section('title', 'home')

@section('content')
    @if (Session::has('cart'))
        <div class="pointer-events-auto h-screen w-screen max-w-xl mx-auto">
            <div class="flex h-full flex-col bg-white shadow-xl">
                <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                    <div class="flex items-start justify-between">
                        <div class="ml-3 flex h-7 items-center">
                            <a href="{{route('home.index')}}"
                                class="relative -m-2 p-2 text-lg font-bold text-indigo-600 hover:text-indigo-700">

                                &larr;retour
                            </a>
                        </div>
                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Vos commandes
                        </h2>
                    </div>

                    <div class="mt-8">
                        <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                @foreach ($products as $product)

                                <li class="flex py-6">
                                    
                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                <h3>
                                                   <span>{{$product['qty']}} </span> {{$product['item']['name']}}
                                                </h3>
                                                <p class="ml-4">{{$product['price']}} CFA</p>
                                            </div>
                                            
                                        </div>
                                        <div class="flex flex-1 items-end justify-between text-sm mt-5">
                                           
                                            <button type="button"
                                            class="flex items-center justify-center rounded-sm border border-transparent bg-red-500 px-4 py-1 text-base font-medium text-white shadow-sm hover:bg-red-600">Supprimer</button>

                                            <div class="flex gap-4">
                                                <button type="button"
                                                class="flex items-center justify-center rounded-sm border border-transparent bg-indigo-600 px-4 py-1 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Retirer -1</button>
                                                <button type="button"
                                                class="flex items-center justify-center rounded-sm border border-transparent bg-indigo-600 px-4 py-1 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Ajouter +1</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    
                                @endforeach
                                

                                <!-- More products... -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                    <div class="flex justify-between text-base font-medium text-gray-900">
                        <p>Prix Total</p>
                        <p class="text-2xl">{{$totalPrice}} CFA</p>
                    </div>

                    <div class="mt-6">
                        <a href="#"
                            class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Commander</a>
                    </div>

                </div>
            </div>
        </div>
    @else
        <h1>aucun </h1>
    @endif


@endsection
