@extends('layout.global')

@section('title','home')

@section('content')



@endsection

{{-- logout button --}}
<a class="" href="{{route('logout')}}">logout</a>



{{-- card component --}}

<div class="relative flex w-96 flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
    <div class="relative mx-4 mt-4 h-96 overflow-hidden rounded-xl bg-white bg-clip-border text-gray-700">
      <img
        src="https://images.unsplash.com/photo-1629367494173-c78a56567877?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=927&amp;q=80"
        class="h-full w-full object-cover"
      />
    </div>
    <div class="p-6">
      <div class="mb-2 flex items-center justify-between">
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          Apple AirPods
        </p>
        <p class="block font-sans text-base font-medium leading-relaxed text-blue-gray-900 antialiased">
          $95.00
        </p>
      </div>
      <p class="block font-sans text-sm font-normal leading-normal text-gray-700 antialiased opacity-75">
        With plenty of talk and listen time, voice-activated Siri access, and an
        available wireless charging case.
      </p>
    </div>
    <div class="p-6 pt-0">
      <button
        class="block w-full select-none rounded-lg bg-blue-gray-900/10 py-3 px-6 text-center align-middle font-sans text-xs font-bold uppercase text-blue-gray-900 transition-all hover:scale-105 focus:scale-105 focus:opacity-[0.85] active:scale-100 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
        type="button"
      >
        Add to Cart
      </button>
    </div>
  </div>
  <div class="w-full pt-5 px-4 mb-8 mx-auto ">
      <div class="text-sm text-gray-700 py-1">
          Made with <a class="text-gray-700 font-semibold" href="https://www.material-tailwind.com/docs/html/card?ref=tailwindcomponents" target="_blank">Material Tailwind</a> by <a href="https://www.creative-tim.com?ref=tailwindcomponents" class="text-gray-700 font-semibold" target="_blank"> Creative Tim</a>.
      </div>
  </div>
  
  <!-- stylesheet -->
  <link
    rel="stylesheet"
    href="https://unpkg.com/@material-tailwind/html@latest/styles/material-tailwind.css"
  />


  
{{-- FIN  card component --}}




{{-- card component --}}

<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<div class="bg-white">
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">Customers also purchased</h2>

    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              
                <span aria-hidden="true" class="absolute inset-0"></span>
                Basic Tee
              
            </h3>
            <p class="mt-1 text-sm text-gray-500">Black</p>
          </div>
          <p class="text-sm font-medium text-gray-900">$35</p>
        </div>
      </div>

      <!-- More products... -->
    </div>
  </div>
</div>

  
{{-- FIN  card component --}}


















<div class=' w-full bg-gray-400 flex h-screen  '>


  {{-- PRODUCT --}}

  <div class="w-full mx-auto flex justify-center items-center bg-slate-500">
      {{-- <h1 class="text-center text-white font-bold text-3xl">bienvenue</h1> --}}

      

  </div>
  

  {{-- FIN PRODUCT --}}

   {{-- LE SIDEBAR --}}
  <div class='w-96 border-r border-slate-500 p-4 flex flex-col'>

      <div class='divider px-3'></div>
      <div class="flex justify-between items-center mb-8">
          <h1 class="text-3xl font-bold">Table :</h1>
          <span class="px-6 py-4 rounded-md bg-slate-200 text-center text-3xl font-bold"> 10</span>
      </div>
      <hr>
      <h2 class="text-lg">vos commandes</h2>
      <a class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" href="{{route('logout')}}">logout</a>
      
  </div>
  {{-- FIN DU SIDEBAR --}}

</div>




{{-- footer --}}

<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <h2 class="text-center text-lg font-semibold leading-8 text-gray-900">Trusted by the world’s most innovative teams</h2>
    <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
      <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
      <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
      <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
    </div>
  </div>
</div>








{{-- manager index --}}

@extends('layout.global')

@section('title', 'Manager')

@section('content')
<section id="home" class="py-28 px-[3%]">
    <!-- component -->
    <div class="flex gap-10">

        @foreach ($orders as $order)
            <div class="border shadow-md">
                <div>
                    <p class="py-3 px-5">{{$order->user->name}}</p>
                    <ul class="bg-gray-50">
                        @foreach ($order->cart->items as $item)
                        <li class="border-b py-3 px-5 flex justify-between">
                            <span class="text-left pr-5"> {{$item['item']['name']}} |{{$item['qty']}}Unite</span>
                            <span>{{$item['price']}}CFA</span>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="py-4 px-5">
                    <p class="text-lg text-end">Prix Total: <span class="text-xl font-bold">{{$order->cart->totalPrice}}CFA</span></p>
                </div>
            </div>
    
            {{-- @foreach ($order->cart->items as $item)
                @if ($item['item']['servir']==true)
                    <a href="#" class="h-44 w-40 bg-gray-300 p-4 rounded-md">
                        <p class="text-2xl font-semibold">Commande</p>
                        <p class="text-2xl font-semibold">de la table</p>
                        <h2 class="text-center text-4xl pt-3 font-extrabold">{{$order->user->id}}</h2>
                
                    </a>
                    @else
                    <h1>Nada</h1>
                @endif
            @endforeach --}}
                
        @endforeach
    </div>
    
    {{-- <a href="#" class="h-44 w-40 bg-gray-300 p-4 rounded-md">
        <p class="text-2xl font-semibold">Commande </p>
        <p class="text-2xl font-semibold">de la table</p>
        <h2 class="text-center text-4xl pt-3 font-extrabold">{{$order->user->id}}</h2>

    </a> --}}



</section>



@endsection














{{-- manager manager --}}



@extends('layout.global')

@section('title','home')

@section('content')

@foreach ($orders as $order)
<ul>
    @foreach ($order->cart->items as $item)
        <li>{{ $item['item']['name'] }}</li>
        <li>{{ $item-> }}</li>
    @endforeach
</ul>
<h1>{{$order->user->id}}</h1>
@endforeach

<section id="home" class="py-28 px-[3%]">


    <div class="pointer-events-auto h-screen w-screen max-w-xl mx-auto">
        <div class="flex h-full flex-col bg-white shadow-xl">
            <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
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

                <div class="mt-8">
                    <div class="flow-root">
                      
                        <div class="flex gap-10">

                            @foreach ($orders as $order)
                                <div class="border shadow-md">
                                    <div>
                                        <p class="py-3 px-5">{{$order->user->name}}</p>
                                        <ul class="bg-gray-50">
                                            @foreach ($order->cart->items as $item)
                                            <li class="border-b py-3 px-5 flex justify-between">
                                                <span> {{$item['item']['name']}} || {{$item['qty']}}Unite</span>
                                                <span>{{$item['price']}}CFA</span>
                                            </li>
                                            @endforeach
                    
                                        </ul>
                                    </div>
                                    <div class="py-4 px-5">
                                        <p class="text-lg text-end">total price:{{$order->cart->totalPrice}}</p>
                                    </div>
                                </div>
                        
                                {{-- @foreach ($order->cart->items as $item)
                                    @if ($item['item']['servir']==true)
                                        <a href="#" class="h-44 w-40 bg-gray-300 p-4 rounded-md">
                                            <p class="text-2xl font-semibold">Commande</p>
                                            <p class="text-2xl font-semibold">de la table</p>
                                            <h2 class="text-center text-4xl pt-3 font-extrabold">{{$order->user->id}}</h2>
                                    
                                        </a>
                                        @else
                                        <h1>Nada</h1>
                                    @endif
                                @endforeach --}}
                                    
                            @endforeach
                        </div>
                        
                    </div>
                </div>
            </div>

            

            </div>
        </div>
    </div>

    <!-- component -->
    <div class="flex gap-10">

        @foreach ($orders as $order)
            <div class="border shadow-md">
                <div>
                    <p class="py-3 px-5">{{$order->user->name}}</p>
                    <ul class="bg-gray-50">
                        @foreach ($order->cart->items as $item)
                        <li class="border-b py-3 px-5 flex justify-between">
                            <span> {{$item['item']['name']}} || {{$item['qty']}}Unite</span>
                            <span>{{$item['price']}}CFA</span>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="py-4 px-5">
                    <p class="text-lg text-end">total price:{{$order->cart->totalPrice}}</p>
                </div>
            </div>
    
            {{-- @foreach ($order->cart->items as $item)
                @if ($item['item']['servir']==true)
                    <a href="#" class="h-44 w-40 bg-gray-300 p-4 rounded-md">
                        <p class="text-2xl font-semibold">Commande</p>
                        <p class="text-2xl font-semibold">de la table</p>
                        <h2 class="text-center text-4xl pt-3 font-extrabold">{{$order->user->id}}</h2>
                
                    </a>
                    @else
                    <h1>Nada</h1>
                @endif
            @endforeach --}}
                
        @endforeach
    </div>
    
    {{-- <a href="#" class="h-44 w-40 bg-gray-300 p-4 rounded-md">
        <p class="text-2xl font-semibold">Commande </p>
        <p class="text-2xl font-semibold">de la table</p>
        <h2 class="text-center text-4xl pt-3 font-extrabold">{{$order->user->id}}</h2>

    </a> --}}



</section>






{{-- index finish --}}

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
                                    <div class="border shadow-md">
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

      