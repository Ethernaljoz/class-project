@extends('layout.manager')

@section('title', 'Manager')

@section('content')
    <section id="home" class="py-28 px-[3%]">

        <div class="flex items-start justify-between">
            <div class="ml-3 flex h-7 items-center">

            </div>
            <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Les commandes en cours
            </h2>
        </div>

        <div class="mt-8">
            <div class="flow-root">

                <div class="flex  gap-5">

                    @foreach ($orders as $order)
                    @if ($order->payer != true )
                    {{-- @if ($order->payer != true && $order->servir!=true) --}}
                        <div class="border shadow-md ">
                            <div>
                                <p class="py-3 px-5 text-center text-lg font-bold">{{ $order->user->name }}</p>
                                {{-- <p class="py-3 px-5">servi ? : {{ $order->servir ? 'oui':' non' }}</p>
                                <p class="py-3 px-5">payé ? : {{ $order->payer ? 'oui':' non' }}</p> --}}
                                @foreach ($order->cart->items as $item)
                                    <ul class="bg-gray-50">
                                        <li class="border-b py-3 px-5 flex justify-between">
                                            <span class="mr-3"> {{ $item['item']['name'] }} ||
                                                {{ $item['qty'] }} unité</span>
                                            <span>{{ $item['price'] }} CFA</span>
                                        </li>
                                    </ul>
                                @endforeach
                                
                                
                                
                            </div>
                            <div class="flex flex-col "> 

                                <div class="py-3 px-5 flex justify-between">
                                    <span class="text-lg text-end">Prix Total: </span>
                                    <span class="text-xl font-bold">{{ $order->cart->totalPrice }} CFA</span>
                                </div>
    
                                <div class=" flex  items-end justify-between text-sm bg-gray-100 py-2 px-5 " data-id="{{$order->id}}">
    
                                    <button type="submit"
                                    class="servir flex items-center justify-center rounded-sm border border-transparent px-4 py-1 text-base font-medium text-white shadow-sm {{$order->servir ? 'bg-black':' bg-indigo-600 hover:bg-indigo-700 '}}" >{{$order->servir ? 'Déja servi':' Servir'}}</button>
    
                                    <button type="submit"
                                        class="payer flex items-center justify-center rounded-sm border border-transparent bg-red-500 px-4 py-1 text-base font-medium text-white shadow-sm hover:bg-red-600">{{$order->payer ? 'Déja payé':' Payer'}}</button>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            @endif
                            @endforeach
                </div>

            </div>
        </div>



    </section>



@endsection



@section('scripts')
<script type="text/javascript" >

    $('.servir').click(function(e){
        e.preventDefault()
        let ele = $(this)
        if(confirm('servir le client')){
            $.ajax({
                url:'{{route('manager.servir')}}',
                method:"PUT",
                data:{
                    _token: '{{ csrf_token() }}',
                    id:ele.parents("div").attr("data-id")
                },
                success: function(response){
                    window.location.reload()
                }
            })
        }
    })

    $('.payer').click(function(e){
        e.preventDefault()
        let ele = $(this)
        if(confirm('confirmer le payement du client')){
            $.ajax({
                url:'{{route('manager.payer')}}',
                method:"PUT",
                data:{
                    _token: '{{ csrf_token() }}',
                    id:ele.parents("div").attr("data-id")
                },
                success: function(response){
                    window.location.reload()
                }
            })
        }
    })

    

</script>

@endsection