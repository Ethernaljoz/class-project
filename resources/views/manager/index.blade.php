@extends('layout.global')

@section('title', 'Manager')

@section('content')
    <section id="home" class="py-28 px-[3%]">
        <div class="pointer-events-auto h-screen w-screen max-w-xl mx-auto">
            <div class="flex h-full flex-col bg-white shadow-xl">
                <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                    <div class="flex items-start justify-between">
                        <div class="ml-3 flex h-7 items-center">
                            <a href="{{ route('client.index') }}"
                                class="relative -m-2 p-2 text-lg font-bold text-indigo-600 hover:text-indigo-700">

                                &larr;retour
                            </a>
                        </div>
                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Vos commandes
                        </h2>
                    </div>

                    <div class="mt-8">
                        <div class="flow-root">

                            <div class="flex flex-col gap-10">
                            

                                @foreach ($orders as $order)
    
                                    <div class="border shadow-md ">
                                        <div>
                                            <p class="py-3 px-5">{{ $order->user->name }}</p>
                                            @foreach ($order->cart->items as $item)

                                                <ul class="bg-gray-50">
                                                    <li class="border-b py-3 px-5 flex justify-between">
                                                        <span> {{ $item['item']['name'] }} ||
                                                            {{ $item['qty'] }}Unite</span>
                                                        <span>{{ $item['price'] }}CFA</span>
                                                    </li>
                                                </ul>
                                                @endforeach
                                                
                                                @foreach ($order->cart->items as $item)
                                                <p class="text-2xl font-semibold bg-slate-500">
                                                    {{ $item['item']['servir']==false ? 'pas servi' :'deja servi'}}
                                                </p>

                                            @endforeach

                                        </div>
                                        <div class="py-4 px-5">
                                            <p class="text-lg text-end">Prix Total: <span
                                                    class="text-xl font-bold">{{ $order->cart->totalPrice }}CFA</span></p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>
        </div>


    </section>



@endsection
