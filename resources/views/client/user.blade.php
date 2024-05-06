@extends('layout.global')

@section('title','home-user')

@section('content')

<h1 class="text-center text-5xl"> bienvenue user</h1>
<a href="{{route('logout')}}">logout</a>

@endsection

