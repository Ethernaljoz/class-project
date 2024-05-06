@extends('layout.global')

@section('title', 'Home')

@section('content')


    <section class="h-full py-10 flex flex-col items-center">
        <img  class="max-w-4xl mx-auto " src="{{ asset('logo/logo-un.png') }}" width="350" height="450" alt="logo-GAB">
        
        <h1 class="text-center text-3xl font-bold mt-4">
            GESTION AUTOMATISEE D'UN BAR
        </h1>
        <a href="{{route('login')}}" class="flex w-48 justify-center rounded-md bg-indigo-600 px-3 py-1.5 mt-4 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
            Let's start
        </a>
    </section>



@endsection
