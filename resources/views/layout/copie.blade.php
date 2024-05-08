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