@extends('layout.main')

@section('title', 'Каталог')

@section('body')

    <section>
        <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
            <header>
                <h2 class="text-xl font-TechReg font-bold text-gray-200 sm:text-3xl">Электро-гитары</h2>

                <p class="mt-4 max-w-md text-gray-400">
                    8-струнки 🤙🤙🤙
                </p>
            </header>

            <form action="/shop" method="GET" id="products_form" class="mt-8 sm:flex sm:items-center sm:justify-between">

                <div class="hidden sm:flex sm:gap-4">
                    <div class="relative"> {{-- Availability --}}
                        <details class="group [&_summary::-webkit-details-marker]:hidden">
                            <summary
                                class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-200 transition hover:border-gray-600">
                                <span class="text-sm font-medium"> Availability </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div
                                class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                                <div class="w-96 rounded border border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> 0 Selected </span>

                                        <button type="button" id="no_fltr"
                                            class="text-sm text-gray-900 underline underline-offset-4">
                                            Все товары
                                        </button>
                                    </header>

                                    <ul class="space-y-1 border-t border-gray-200 p-4">
                                        <li>
                                            <label for="FilterInStock" class="inline-flex items-center gap-2">
                                                <input type="checkbox" id="in_stock" name="in_stock" value="1"
                                                    {{-- @if (isset($filters['in_stock']) && $filters['in_stock'] === '1') checked @endif --}}
                                                    class="h-5 w-5 rounded border-gray-300 out_stock" />

                                                <span class="text-sm font-medium text-gray-700"> In Stock
                                                    ({{ $counts[0] }}) </span>
                                            </label>
                                        </li>

                                        <li>
                                            <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                                                <input type="checkbox" id="out_stock" name="in_stock" value="0"
                                                    @if (isset($filters['in_stock']) && $filters['in_stock'] === '0') checked @endif
                                                    class="h-5 w-5 rounded border-gray-300 out_stock" />

                                                <span class="text-sm font-medium text-gray-700"> Out of Stock
                                                    ({{ $counts[1] }}) </span>
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </details>
                    </div>

                    <div class="relative"> {{-- Price --}}
                        <details class="group [&_summary::-webkit-details-marker]:hidden">
                            <summary
                                class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-200 transition hover:border-gray-600">
                                <span class="text-sm font-medium"> Price </span>

                                <span class="transition group-open:-rotate-180">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </span>
                            </summary>

                            <div
                                class="z-50 group-open:absolute group-open:top-auto group-open:mt-2 ltr:group-open:start-0">
                                <div class="w-96 rounded border border-gray-200 bg-white">
                                    <header class="flex items-center justify-between p-4">
                                        <span class="text-sm text-gray-700"> The highest price is ${{ $edge_prices[1] }}
                                        </span>

                                        <button type="button" class="text-sm text-gray-900 underline underline-offset-4">
                                            Reset
                                        </button>
                                    </header>

                                    <div class="border-t border-gray-200 p-4">
                                        <div class="flex justify-between gap-4">
                                            <label for="FilterPriceFrom" class="flex items-center gap-2">
                                                <span class="text-sm text-gray-600">$</span>

                                                <input type="number" id="min_price" name="min_price" placeholder="{{$edge_prices[0]}}"
                                                    class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                            </label>

                                            <label for="FilterPriceTo" class="flex items-center gap-2">
                                                <span class="text-sm text-gray-600">$</span>

                                                <input type="number" id="max_price" name="max_price" placeholder="{{$edge_prices[1]}}"
                                                    class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>

                <div class="hidden sm:block"> {{-- Order-by --}}
                    <label for="SortBy" class="sr-only">SortBy</label>

                    <select id="SortBy" class="h-10 rounded border-gray-300 text-sm">
                        <option>Sort By</option>
                        <option value="Title, DESC">Title, DESC</option>
                        <option value="Title, ASC">Title, ASC</option>
                        <option value="Price, DESC">Price, DESC</option>
                        <option value="Price, ASC">Price, ASC</option>
                    </select>
                </div>
            </form>

            <label for="default-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Default
                range</label>
            <input id="default-range" type="range" value="50"
                class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p class="text-center text-white font-bold font-Inter text-xl">{{ $error }}</p>
                    @endforeach
                </div>
            @else
                <ul class="mt-4 grid gap-4 sm:grid-cols-2 lg:grid-cols-4"> {{-- Products --}}

                    @foreach ($filteredProducts as $guitar)
                        <li>
                            <a href="{{route('productPage', $guitar->id)}}" class="flex flex-col gap-2 overflow-hidden">
                                <img src="{{ asset($guitar->image) }}" alt=""
                                    class="h-[350px] w-full object-scale-down transition duration-500 group-hover:scale-105 sm:h-[450px]" />

                                <div class="relative bg-gray-300/20 pt-3 px-3 pb-2 rounded-md">
                                    <h3
                                        class="text-xs text-gray-100 flex flex-row justify-between group-hover:underline group-hover:underline-offset-4">
                                        <span>{{ $guitar->name }}</span>
                                        <span>
                                            {{($guitar->available == 1) ? 'Available' : 'Not-Available'}}
                                        </span>
                                    </h3>

                                    <p class="mt-2">
                                        <span class="sr-only"> </span>

                                        <span class="tracking-wider text-gray-200"> {{ $guitar->price }} </span>
                                    </p>
                                </div>
                            </a>

                        </li>
                    @endforeach

                </ul>
            @endif
        </div>
    </section>

    <script src="{{ asset('js/shop_checkboxes.js') }}"></script>
    <script src="{{ asset('js/filter_auto.js') }}"></script>
@endsection
