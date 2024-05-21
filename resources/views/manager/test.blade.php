@extends('layout.global')

@section('title','home')

@section('content')

{{-- @foreach ($orders as $order)
<ul>
    @foreach ($order->cart->items as $item)
        <li>{{ $item['item']['name'] }}</li>
        <li>{{ $item['price'] }}</li>
    @endforeach
</ul>
<h1>{{$order->user->id}}</h1>
@endforeach --}}

<section id="home" class="py-28 px-[3%]">


    
                <div class="flex items-start justify-between">
                    <div class="ml-3 flex h-7 items-center">
                        <a href="{{route('client.index')}}"
                            class="relative -m-2 p-2 text-lg font-bold text-indigo-600 hover:text-indigo-700">

                            &larr;retour
                        </a>
                    </div>
                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Vos commandes
                    </h2>
                </div>
                {{-- {{var_dump($order)}} --}}

                {{-- {{var_dump($order->items[2]["item"])}} --}}
                {{var_dump($order)}}

                {{-- <div class="mt-8">
                    <div class="flow-root">
                      
                        <div class="flex gap-10">


                            @foreach ($orders as $order)
                                
                                        @foreach ($order->cart->items as $item)
                                            @if ($item['item']['servir']==false)
                                                <a href="#" class="h-44 w-40 bg-gray-300 p-4 rounded-md">
                                                    <p class="text-2xl font-semibold">Commande</p>
                                                    <p class="text-2xl font-semibold">de la</p>
                                                    <h2 class="text-center text-4xl pt-3 font-extrabold">{{$order->user->name}}</h2>
                                            
                                                </a>
                                                @else
                                                <h1>Nada</h1>
                                            @endif
                                        @endforeach
                                            
                            @endforeach   
                </div> --}}
    
    {{-- <a href="{{route('manager.index')}}" class="h-44 w-40 bg-gray-300 p-4 rounded-md">
        <p class="text-2xl font-semibold">Commande </p>
        <p class="text-2xl font-semibold">de la table</p>
        <h2 class="text-center text-4xl pt-3 font-extrabold">{{$order->user->name}}</h2>

    </a> --}}
