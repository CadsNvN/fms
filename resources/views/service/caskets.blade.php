<x-app-layout>
    <section>
        <div class="max-w-[900px] mx-auto">
            <form action="{{ route('service.casket.select', $serviceId) }}" method="POST" id="casketForm">
                @csrf
                @method('PUT')
                <input id="selectedCasket" type="hidden" name="casketId" value="">
            </form>
                <div class="flex flex-wrap gap-4 p-4">
                    @foreach ($caskets as $casket)
                        <div class="flex relative rounded group w-96 h-64 hover:scale-150 transition-transform ease-in-out delay-150 duration-500 hover:z-20">
                            <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center rounded " src="{{ asset('images/BatesVille.jpg') }}">
                            <div class="overflow-y-auto p-4 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 group-hover:opacity-100 rounded">
                                <h2 class="tracking-widest text-lg font-bold text-blue-500 mb-1">&#8369;{{$casket->price}}</h2>
                                {{-- <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Holden Caulfield</h1> --}}
                                <p class="leading-relaxed">{{$casket->description}}</p>
                                <p class="pt-4 text-sm font-semibold">MORE IMAGES</p>
                                <div class="flex flex-col space-y-3">
                                    <img alt="gallery" class=" inset-0 w-full h-full object-cover object-center rounded " src="{{ asset('images/BatesVille.jpg') }}">
                                    <img alt="gallery" class=" inset-0 w-full h-full object-cover object-center rounded " src="{{ asset('images/BatesVille.jpg') }}">
                                    <img alt="gallery" class=" inset-0 w-full h-full object-cover object-center rounded " src="{{ asset('images/BatesVille.jpg') }}">
                                </div>                                
                            </div>
                            <button type="button" onclick="selectCasket({{ $casket->id }})" class="absolute z-20 top-4 right-8 px-4 py-2 text-sm rounded group-hover:bg-blue-600 group-hover:text-white opacity-0 group-hover:opacity-100">Select</button>
                        </div>
                    @endforeach
                </div>
            <script>
                function selectCasket(casketId) {
                    document.getElementById('selectedCasket').value = casketId;
                    document.getElementById('casketForm').submit();
                }
            </script>
        </div>
    </section>
</x-app-layout>

