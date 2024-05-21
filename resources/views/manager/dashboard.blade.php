@extends('layout.manager')

@section('title','Dashboard')


@section('content')
<section id="home" class="py-28 px-[3%]">
    <!-- component -->
<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Utilisateurs
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                
                <tr class="border-b">
                   
                    <th class="text-left p-3 px-5">Nom</th>
                    <th class="text-left p-3 px-5">Email</th>
                
                    <th></th>
                </tr>
                @foreach ($users as $user)
                @if($user->role == 'user'  )

                <tr class="border-b hover:bg-gray-200 bg-gray-50"  >
                    
                    <td class="p-3 px-5">{{$user->name}}</td>
                    <td class="p-3 px-5">{{$user->email}}</td>
                    <td class="p-3 px-5 flex justify-end gap-4" >
                        <div data-id="{{$user->id}}" >
                            <button type="submit" class="decon text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Deconnecter</button>

                        </div>
                        
                    </td>
                </tr>
                @endif
                @endforeach

                
            </tbody>
        </table>
    </div>
</div>





</section>

@endsection

@section('scripts')
<script type="text/javascript" >

    $('.decon').click(function(e){
        e.preventDefault()
        let ele = $(this)
        if(confirm('deconnecter le client')){
            $.ajax({
                url:'{{route('manager.deconnection')}}',
                method:"PATCH",
                data:{
                    // _token: '{{ csrf_token() }}',
                    _token:'{{ csrf_token() }}',
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