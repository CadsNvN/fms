<x-welcome-layout>
  <a href="{{route('news-announcement.browse')}}" class="inline-block text-black ml-4 mt-5 text-xl hover:text-blue-800">
    <i class="fa-solid fa-arrow-left"></i> 
    Back
  </a>

  <section class="body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex justify-center mb-5">
        <h2 class="text-4xl font-bold mb-4">{{$announcement->title}}</h2>
      </div>
      <div class="flex flex-col mx-auto">
        <div class="flex flex-wrap">
          {{-- Flowbite Cararousel --}}
          <div id="controls-carousel" class="relative w-1/2" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/Arrabieskie.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="/images/Arrabieskie.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/Arrabieskie.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/Arrabieskie.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="/images/Arrabieskie.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
          </div>
          {{-- End of Flowbite Carousel --}}
          <div class="w-1/3 mt-5 ml-3">
            <p class="text-gray-600" id="newsDetailContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris in ipsum consectetur fermentum.</p>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  

  
  


  <div class="container mx-auto mt-8">
    <!-- Placeholder for News Detail -->
    <div class="bg-white p-4 shadow-lg">
        <h2 class="text-2xl font-semibold mb-4" id="newsDetailTitle">News Title</h2>
        <p class="text-gray-600" id="newsDetailContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et mauris in ipsum consectetur fermentum.</p>
        <a href="browse_page.html" class="text-blue-500 hover:underline">Back to Browse</a>
    </div>
</div>
</x-welcome-layout>