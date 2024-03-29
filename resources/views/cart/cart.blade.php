@extends('layouts.app')

@section('content')
<div class="mx-auto w-4/5">
    <h1 class="text-5xl text-gray-800 font-bold pt-12 mb-8">
        Shopping Cart
    </h1>

    <hr class="border-1 border-gray-300">
</div>

<div class="flex flex-col mx-auto w-4/5">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-1">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Name
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Details
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Price
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Quantity
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Total
                            </th>

                            <th scope="col"
                                class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Delete
                            </th>
                        </tr>
                    </thead>

                    @if (session('cartItems'))
                    @foreach (session('cartItems') as $key=> $value)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img class="mt-2 h-6 w-10 rounded-sm" src="{{ asset($value['image_url']) }}"
                                            alt="{{  $value['name'] }}">
                                    </div>

                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">
                                            {{ $value['name'] }}
                                        </div>

                                        <div class="text-sm font-medium text-gray-400">
                                            {{ $value['brand'] }}
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-xs text-gray-900">{{ $value['detail'] }}</div>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-300 text-green-800">
                                    $ {{ $value['price'] }}
                                </span>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <form action="{{ route('update.from.cart', $key) }}" method="post">
                                    @csrf
                                    <select name="quantity" id="quantity" value="{{ $value['quantity'] }}"
                                        onchange="this.form.submit()">
                                        @for ($i = 1; $i <= 5; $i++) <option value="{{ $i }}" {{ $value['quantity']==$i
                                            ? 'selected' : '' }}>
                                            {{ $i }}
                                            </option>
                                            @endfor
                                    </select>
                                </form>
                            </td>

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"> $ {{ $value['quantity'] * $value['price']
                                    }} </div>
                            </td>

                            <td class="px-6 whitespace-nowrap text-right text-sm font-medium">
                                <a href="{{ route('delete.from.cart', $key) }}" role="button"
                                    class="text-red-600 hover:text-red-900">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                    @else
                    <td align="left" colspan="3">
                        <p class="font-bold text-l text-black py-6 px-6">
                            Shopping cart is empty.
                        </p>
                    </td>

                    @endif

                </table>
            </div>
        </div>
    </div>
</div>

@endsection
