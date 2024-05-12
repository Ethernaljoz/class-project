


<header class= " flex justify-between  bg-white sm:flex w-full fixed top-0 right-0 py-3 px-[9%] shadow-md  items-center ">
    <a href="{{route('admin.index')}}" class="w-10"><img src="{{asset('logo/logo-deux.png')}}" alt="" class="w-10 sm:w-full align-middle"></a>
    <ul class="hidden sm:flex  justify-between">
        <li class="{{ 'admin/dashboard'== request()->path()?'text-indigo-700 ':''}}" ><a href="{{route('admin.index')}}" class="px-4 text-lg  font-semibold">All User</a></li>
        <li class="{{ 'admin/register' == request()->path()?'text-indigo-700':''}}"><a id="#home" href="{{route('admin.register')}}" class=" px-4 text-lg  font-semibold">Register User</a></li>
        
    </ul>
    <a href="{{route('logout')}}" class="ml-5 flex w-24 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">logout</a>
    {{-- <div class=" flex justify-center text-[30px]  items-center  sm:hidden"><i class='bx bx-menu'></i></div> --}}

</header>



