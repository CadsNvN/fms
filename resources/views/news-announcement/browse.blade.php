<x-welcome-layout>
  <div class="flex justify-center mt-5">
    <h1 class="text-4xl font-bold uppercase mb-4">
      News & Announcements
    </h1>
  </div>
    
  

  <div class="container w-full px-5 py-20 mx-auto text-center">
    <div class="flex flex-wrap -mx-4">
        @foreach ($announcements as $announcement)
        <div class="w-full md:w-1/2 lg:w-1/4 p-4">
            <div class="relative block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-blue-800">
                <div class="flex">
                    <div class="relative mx-4 -mt-4 overflow-hidden rounded-lg bg-cover bg-no-repeat shadow-lg dark:shadow-black/20"
                        data-te-ripple-init data-te-ripple-color="light">
                        <img src="https://mdbcdn.b-cdn.net/img/new/standard/city/024.webp" class="w-full" />
                        {{-- {{$announcement->image ? asset('storage/' . $announcement->image) : asset('images/Torreslogo.png')}} --}}
                        <a href="#!">
                            <div
                                class="absolute top-0 right-0 bottom-0 left-0 h-full w-full overflow-hidden bg-fixed opacity-0 transition duration-300 ease-in-out hover:opacity-100 bg-[hsla(0,0%,98.4%,.15)]">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-6">
                    <h5 class="mb-3 text-lg font-bold">{{$announcement->title}}</h5>
                    <p class="mb-4 text-neutral-500 dark:text-neutral-300">
                        <small>Published <u>{{$announcement->date}}</u> by
                            <a href="#!">Matt Francia</a></small>
                    </p>
                    <p class="mb-4 pb-2">
                        {{$announcement->description}}
                    </p>
                    <a href="#!" data-te-ripple-init data-te-ripple-color="light"
                        class="inline-block rounded-full bg-primary px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">Read
                        more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</x-welcome-layout>