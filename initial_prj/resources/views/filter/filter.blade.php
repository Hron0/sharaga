<!--
  Heads up! 👋

  Plugins:
    - @tailwindcss/forms
-->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


<div class="flex flex-col gap-8">
  <div class="relative">
    <div x-data="{ isOpen: false }">
      <button
        x-on:click="isOpen = !isOpen"
        type="button"
        class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600 dark:text-white"
      >
        <span class="text-sm font-medium"> Availability </span>

        <span class="transition" :class="{ '-rotate-180': isOpen }">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-4 w-4"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>

      <div
        x-cloak
        x-transition
        x-show="isOpen"
        x-on:click.away="isOpen = false"
        x-on:keydown.escape.window="isOpen = false"
        class="absolute start-0 top-auto z-50 mt-2"
      >
        <div
          class="w-96 rounded border border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-offset-gray-900"
        >
          <header class="flex items-center justify-between p-4">
            <span class="text-sm text-gray-200"> 0 Selected </span>

            <button
              type="button"
              class="text-sm underline underline-offset-4 text-gray-200"
            >
              Reset
            </button>
          </header>

          <ul class="space-y-1 border-t border-gray-200 p-4 dark:border-gray-700">
            <li>
              <label for="FilterInStock" class="inline-flex items-center gap-2">
                <input
                  type="checkbox"
                  id="FilterInStock"
                  class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:focus:ring-offset-gray-900"
                />

                <span class="text-sm font-medium text-gray-200">
                  In Stock (5+)
                </span>
              </label>
            </li>


            <li>
              <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                <input
                  type="checkbox"
                  id="FilterOutOfStock"
                  class="h-5 w-5 rounded border-gray-300 dark:border-gray-600 dark:bg-gray-900 dark:focus:ring-offset-gray-900"
                />

                <span class="text-sm font-medium text-gray-200">
                  Out of Stock (10+)
                </span>
              </label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="relative">
    <div x-data="{ isOpen: false }">
      <button
        x-on:click="isOpen = !isOpen"
        type="button"
        class="flex cursor-pointer items-center gap-2 border-b border-gray-400 pb-1 text-gray-900 transition hover:border-gray-600 dark:text-white"
      >
        <span class="text-sm font-medium"> Price </span>

        <span class="transition" :class="{ '-rotate-180': isOpen }">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            class="h-4 w-4"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
          </svg>
        </span>
      </button>

      <div
        x-cloak
        x-transition
        x-show="isOpen"
        x-on:click.away="isOpen = false"
        x-on:keydown.escape.window="isOpen = false"
        class="absolute start-0 top-auto z-50 mt-2"
      >
        <div
          class="w-96 rounded border border-gray-200 bg-white dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-offset-gray-900"
        >
          <header class="flex items-center justify-between p-4">
            <span class="text-sm text-gray-700 dark:text-gray-200">
              The highest price is $600
            </span>

            <button
              type="button"
              class="text-sm text-gray-900 underline underline-offset-4 dark:text-white"
            >
              Reset
            </button>
          </header>

          <div class="border-t border-gray-200 p-4 dark:border-gray-700">
            <div class="flex justify-between gap-4">
              <label for="FilterPriceFrom" class="flex items-center gap-2">
                <span class="text-sm text-gray-600 dark:text-gray-300">$</span>

                <input
                  type="number"
                  id="FilterPriceFrom"
                  placeholder="From"
                  class="w-full rounded-md border-gray-200 shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:focus:ring-offset-gray-900 sm:text-sm"
                />
              </label>

              <label for="FilterPriceTo" class="flex items-center gap-2">
                <span class="text-sm text-gray-600 dark:text-gray-300">$</span>

                <input
                  type="number"
                  id="FilterPriceTo"
                  placeholder="To"
                  class="w-full rounded-md border-gray-200 shadow-sm dark:border-gray-700 dark:bg-gray-900 dark:text-white dark:focus:ring-offset-gray-900 sm:text-sm"
                />
              </label>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>