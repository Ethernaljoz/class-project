@extends('layout.global')

@section('title','Login')

@section('content')


<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="{{asset('logo/logo-deux.png')}}" alt="Your Company">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Se connecter</h2>
    </div>

  
    <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="{{route('login.post')}}" method="POST">
       @csrf
        @if ($errors->any())
        <div class="w-full bg-slate-100 rounded-md py-2">
          <ul class="px-2">
            @foreach ($errors->all() as $error)
              <li class="text-red-500 text-base font-bold">{{ $error }}</li>
            @endforeach
          </ul>
        </div>
          
        @endif
        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email </label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Mot de passe</label>
            
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password"  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
          </div>
        </div>
  
        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Se connecter</button>
        </div>
      </form>
  
    </div>
  </div>


@endsection