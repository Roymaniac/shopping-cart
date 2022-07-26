@props(["product"])
<div class="text-sm pt-8 breadcrumbs text-black mx-auto w-4/5 italic border-b border-gray-200">
    <ul class="inline-flex list-none bg-black bg-opacity-5 w-full">
        <li class="px-4 py-2 transition hover:shadow hover:border-green-300 hover:text-blue-500">
            &#x2190; <a href="{{ URL::Previous() }}" class="pl-4">Previous Page</a>
        </li>

        <li class="px-4 py-2 transition hover:shadow hover:border-green-300 hover:text-blue-500">
            <a href="{{ route('home') }}">Home</a>
        </li>

        <li class="px-4 py-2 transition hover:shadow hover:border-green-500 hover:text-blue-500">
            <a href="{{ route('shop') }}">Shop</a>
        </li>

        <li class="px-2 py-2 transition"> {{
            $product->brand }}</li>
    </ul>
</div>
