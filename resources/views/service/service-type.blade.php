<x-app-layout>
    <section>
        <div class="mx-auto max-w-[1240px] px-4">
            <div class="w-full flex flex-col items-center justify-center">

                <div class="py-12">
                    <p class="text-2xl font-medium">Please choose the service you need.</p>
                </div>

                <div class=" flex items-center space-x-4 rounded-md ">

                    <form action="{{ route('service.store') }}" method="POST" 
                    class="border-2 border-gray-400 hover:border-green-300 hover:bg-green-50 rounded-lg p-6 group cursor-pointer">
                    @csrf
                    <input type="hidden" name="service_type" value="Memorial Service">
                       <button type="submit" class="flex space-x-4 items-center">
                            <img src="{{ asset('icons/funeral.png') }}" alt=""
                            class="w-20 h-20">
                            <p class="text-base font-medium text-gray-700 group-hover:text-green-500">Memmorial Services</p>
                       </button>
                    </form>

                    <form action="{{ route('service.store') }}" method="POST" 
                    class="border-2 border-gray-400 hover:border-green-300 hover:bg-green-50 rounded-lg p-6 group cursor-pointer">
                    @csrf
                    <input type="hidden" name="service_type" value="Direct Crimation">
                        <button type="submit" class="flex space-x-4 items-center">
                            <img src="{{ asset('icons/urn.png') }}" alt=""
                            class="w-20 h-20 transition-transform transform hover:scale-105 filter hover:grayscale-0 hover:sepia-0 hover:hue-rotate-0 hover:saturate-100 hover:invert-0 hover:blur-0 hover:brightness-100 hover:contrast-100 hover:drop-shadow-md">
                             <p class="text-base font-medium text-gray-700 group-hover:text-green-500">Direct Crimation</p>
                        </button>
                     </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>