@extends('layout.main')

@section('title', 'Корзина')

@section('body')
    <form action="/basket" method="GET">
        <div class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
            <div class="w-96 rounded border border-gray-200 bg-white">
                <header class="flex items-center justify-between p-4">
                    <span class="text-sm text-gray-700"> 0 Selected </span>

                    <button type="button" id="no_fltr" class="text-sm text-gray-900 underline underline-offset-4">
                        Все товары
                    </button>
                </header>

                <ul class="space-y-1 border-t border-gray-200 p-4">
                    <li>
                        <label for="FilterInStock" class="inline-flex items-center gap-2">
                            <input type="checkbox" id="in_stock" name="in_stock" value="1" {{-- @if (isset($filters['in_stock']) && $filters['in_stock'] === '1') checked @endif --}}
                                class="h-5 w-5 rounded border-gray-300 out_stock" />

                            <span class="text-sm font-medium text-gray-700"> In Stock
                                1221</span>
                        </label>
                    </li>

                    <li>
                        <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                            <input type="checkbox" id="out_stock" name="in_stock" value="0"
                                class="h-5 w-5 rounded border-gray-300 out_stock" />

                            <span class="text-sm font-medium text-gray-700"> Out of Stock
                                1212</span>
                        </label>
                    </li>
                </ul>
            </div>
        </div>


        <input type="number" id="max_price" name="max_price" placeholder="122"
            class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />

        <button type="submit" class="bg-white">Submit</button>
    </form>
@endsection
