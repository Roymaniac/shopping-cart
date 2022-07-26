@extends('layouts.app')

@section('content')

<div class="mx-auto w-4/5">
    <h1 class="text-5xl text-gray-800 font-bold pt-12 mb-8">
        Shop
    </h1>

    <hr class="border-1 border-gray-300">
</div>

<div class="grid grid-cols-1 gap-4 lg:grid-cols-3 sm:grid-cols-2 pt-20 mx-auto w-4/5">
    @foreach ($products as $product)

    <a href="/shop/{{ $product->id }}">
        <div class="w-full px-4 lg:px-0">
            <div class="p-3 bg-white rounded shadow-md">
                <div class="">
                    <div class="relative w-full mb-3 h-62 lg:mb-0">
                        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}"
                            alt="{{ $product->name }}" class="object-fill w-full h-full rounded">
                    </div>
                    <div class="flex-auto p-2 justify-evenly">
                        <div class="flex flex-wrap ">
                            <div class="flex items-center justify-between w-full min-w-0 ">
                                <h2 class="mr-auto text-lg cursor-pointer hover:text-gray-900 ">
                                    {{ $product->name }}
                                </h2>
                            </div>
                            <p class="font-thin text-md text-black pb-4">
                                {{ $product->detail }}
                            </p>
                        </div>
                        <div class="mt-1 text-xl font-semibold mb-4">${{ $product->price }}</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>

@endsection
