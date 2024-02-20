@extends('layout.main')

@section('title', 'О нас')

@section('body')
    <div class="flex flex-col items-start gap-8 min-w-full">
        <h1 class="text-xl text-white share-tech-mono">Гитарные звуки, которые выбираются с умом и сердцем!</h1>
        <h1 class="text-lg text-white share-tech-mono">Мы - команда энтузиастов, которые разделяют страсть к музыке и
            электрогитарам. Наш
            интернет-магазин был основан в 2010 году с целью предоставить музыкантам возможность выбирать и покупать
            электрогитары с умом и сердцем.
            <br>
            Мы стремимся предоставить нашим клиентам широкий выбор электрогитар от известных брендов, а также уникальных и
            редких моделей. Наш персонал - эксперты в области электрогитар, которые всегда готовы помочь вам выбрать
            подходящую гитару и предложить советы по ее настройке и поддержанию.
            <br>
            Мы верим, что каждый музыкант заслуживает иметь инструмент, который будет идеально подходить его стилю игры и
            музыкальным предпочтениям. Поэтому мы делаем все возможное, чтобы предоставить нашим клиентам гитары высокого
            качества и отличного звука.
            <br>
            Мы также предоставляем быструю и надежное доставку по всему миру, а также гарантируем возврат средств в случае,
            если вам не понравится гитара, которую вы купили у нас.
            <br>
            Мы гордимся тем, что наш магазин является одним из самых популярных и уважаемых в отрасли, и мы будем рады
            помочь вам найти идеальную электрогитару для вашей музыкальной карьеры.
        </h1>

        <div class="max-w-2xl mx-auto">

            <div id="default-carousel" class="relative" data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset("imagex/>ibanez1.png")}}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset("imagex/ibanez1.png")}}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="{{asset("imagex/ibanez1.png")}}"
                            class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                        <span class="hidden">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                        <span class="hidden">Next</span>
                    </span>
                </button>
            </div>

            <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
        </div>

    @endsection
