@extends('layouts.app')

@section('content')
<div class="grid grid-cols-1 m-auto w-full h-screen bg-dunes bg-cover bg-center"
    style="background-image: url('https://images.unsplash.com/photo-1609081219090-a6d81d3085bf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1026&q=80')">
    <div class="flex text-gray-900">
        <div class="m-auto pb-16 sm:m-auto w-4/5 block text-center">
            <h1 class="sm:text-black text-3xl sm:text-5xl uppercase font-normal text-shadow-md">
                Shop Tech Items
            </h1>

            <p class="pb-10 font-thin pt-6">
                Get items for the cheapest price
            </p>

            <a href="/shop"
                class="px-8 py-4 text-lg uppercase shadow-md text-gray-900 font-bold bg-white hover:text-white hover:outline hover:outline-white hover:bg-transparent rounded-full w-full">
                Shop Now <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex mb-1 h-5 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection
