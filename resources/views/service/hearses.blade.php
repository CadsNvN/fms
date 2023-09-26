<x-app-layout>
    <section>
        <div class="max-w-[900px] mx-auto">
            <form action="{{ route('service.hearse.select', $serviceId) }}" method="POST" id="hearseForm">
                @csrf
                @method('PUT')
                <input id="selectedHearse" type="hidden" name="hearseId" value="">
            </form>
                <div class="flex flex-wrap gap-4 p-4">
                    @foreach ($hearses as $hearse)
                        <div class="flex relative rounded group w-96 h-64 hover:scale-150 transition-transform ease-in-out delay-150 duration-500 hover:z-20 hover:shadow-2xl">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded " src="{{ asset('images/Torres_Escaro2.jpg') }}">
                            <div class="overflow-y-auto p-4 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 group-hover:opacity-100 rounded">
                                {{-- <h2 class="tracking-widest text-lg font-bold text-blue-500 mb-1">&#8369;{{$hearse->price}}</h2> --}}
                                {{-- <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1> --}}
                                <p class="leading-relaxed">{{$hearse->description}}</p>
                                <p class="pt-4 text-sm font-semibold">MORE IMAGES</p>
                                <div class="flex flex-col space-y-3">
                                    <img alt="gallery" class=" inset-0 w-full h-full object-cover object-center rounded " src="{{ asset('images/Torres_Escaro2.jpg') }}">
                                    <img alt="gallery" class=" inset-0 w-full h-full object-cover object-center rounded " src="{{ asset('images/Torres_Escaro2.jpg') }}">
                                    <img alt="gallery" class=" inset-0 w-full h-full object-cover object-center rounded " src="{{ asset('images/Torres_Escaro2.jpg') }}">
                                </div>                                
                            </div>
                            <button type="button" onclick="selectHearse({{ $hearse->id }})" class="absolute z-20 top-4 right-8 px-4 py-2 text-sm rounded group-hover:bg-blue-600 group-hover:text-white opacity-0 group-hover:opacity-100">Select</button>
                        </div>
                    @endforeach
                </div>
            <script>
                function selectHearse(casketId) {
                    document.getElementById('selectedHearse').value = casketId;
                    document.getElementById('hearseForm').submit();
                }
            </script>
        </div>
    </section>
</x-app-layout>

