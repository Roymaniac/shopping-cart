@extends('layouts.app')

@section('content')


<x-breadcrumb :product="$product" />

<div class="grid sm:grid-cols-2 gap-2 pt-12 sm:pt-20 mx-auto w-4/5">
    <div class="mx-auto">
        <img src="{{ asset($product->image_url) }}" alt="{{ $product->name }}" style="height:250px !important;">
    </div>

    <div>
        <h1 class="text-4xl text-gray-600 font-bold pb-8">
            {{ $product->name }}
        </h1>

        <p class="font-bold text-l text-black pb-8">
            Price: <span class="text-red-500">$ {{ $product->price }}</span>
        </p>

        <p class="font-bold text-l text-black pb-8">
            Shipping: <span class="text-red-500">$ {{ $product->shipping_cost }}</span>
        </p>

        <p class="font-thin text-sm text-blue-600 pb-8">
            {{ $product->detail }}
        </p>

        <p class="text-gray-800 text-thin text-l leading-6 pb-8">
            {{ $product->description }}
        </p>

        <x-rating :product="$product" />

        <a href="{{ route('add.to.cart', $product->id) }}"
            class="ml-4 px-10 py-3 text-md uppercase hover:bg-red-500 text-white font-bold bg-blue-600 rounded-full w-full"
            role="button" aria-pressed="true">
            Add To Cart <svg xmlns="http://www.w3.org/2000/svg" class="inline-flex mb-1 h-5 w-5" viewBox="0 0 20 20"
                fill="currentColor">
                <path
                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
            </svg>
        </a>

    </div>

    @endsection
