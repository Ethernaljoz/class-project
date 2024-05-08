@extends('layout.global')

@section('title', 'home')

@section('content')
    @if (Session::has('cart'))
        <div class="pointer-events-auto h-screen w-screen max-w-xl mx-auto">
            <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                    <div class="flex items-start justify-between">
                        <div class="ml-3 flex h-7 items-center">
                            <a href="{{route('home.index')}}"
                                class="relative -m-2 p-2 text-lg font-bold text-indigo-600 hover:text-indigo-700">

                                &larr;retour
                            </a>
                        </div>
                        <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart
                        </h2>
                    </div>

                    <div class="mt-8">
                        <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                <li class="flex py-6">
                                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                            alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                            class="h-full w-full object-cover object-center">
                                    </div>

                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                <h3>
                                                    <a href="#">Throwback Hip Bag</a>
                                                </h3>
                                                <p class="ml-4">$90.00</p>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                        </div>
                                        <div class="flex flex-1 items-end justify-between text-sm">
                                            <p class="text-gray-500">Qty 1</p>

                                            <div class="flex">
                                                <button type="button"
                                                    class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="flex py-6">
                                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                        <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg"
                                            alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                            class="h-full w-full object-cover object-center">
                                    </div>

                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                <h3>
                                                    <a href="#">Medium Stuff Satchel</a>
                                                </h3>
                                                <p class="ml-4">$32.00</p>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-500">Blue</p>
                                        </div>
                                        <div class="flex flex-1 items-end justify-between text-sm">
                                            <p class="text-gray-500">Qty 1</p>

                                            <div class="flex">
                                                <button type="button"
                                                    class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- More products... -->
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                    <div class="flex justify-between text-base font-medium text-gray-900">
                        <p>Prix Total</p>
                        <p>$262.00</p>
                    </div>

                    <div class="mt-6">
                        <a href="#"
                            class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Commander</a>
                    </div>

                </div>
            </div>
        </div>
    @else
        <h1>aucun </h1>
    @endif


@endsection
