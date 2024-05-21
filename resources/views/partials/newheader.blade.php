<header class= " flex justify-between  bg-white sm:flex w-full fixed top-0 right-0 py-3 px-[9%] shadow-md  items-center ">
    <a href="{{route('admin.index')}}" class="w-10"><img src="{{asset('logo/logo-deux.png')}}" alt="" class="w-10 sm:w-full align-middle"></a>
    <ul class="hidden sm:flex  justify-between">
        <li class="{{ 'manager'== request()->path()?'text-indigo-700 ':''}}" ><a href="{{route('manager.index')}}" class="px-4 text-lg  font-semibold">Les commandes</a></li>
        <li class="{{ 'manager/dashboard' == request()->path()?'text-indigo-700 font-extrabold':''}}"><a id="#home" href="{{route('manager.dashboard')}}" class=" px-4 text-lg  font-semibold">Dashboard</a></li>
        
    </ul>
    <a href="{{route('logout',Auth::user()->id)}}" class="ml-5 flex w-24 justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Déconnecter</a>
    
</header>
