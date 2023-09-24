<x-app-layout>
    <section>
        <div class="max-w-[1300px] mx-auto px-4">
            <div class="flex items-center">
                <div class="w-1/2">
                    <x-candle/>
                </div>

                <div class="w-2/3">
                    <div class="">
                        <div class="mb-4">
                            <p class="text-2xl font-medium">PACKAGE INCLUSIONS</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-base flex items-center border-b border-gray-300 hover:border-green-300">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Retrieval of Remains
                            </p>
                            <p class="text-base flex items-center border-b border-gray-300">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Embalming
                            </p>
                            <p class="text-base flex items-center border-b border-gray-300">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Viewing Equipment
                            </p>
                            <p class="text-base flex items-center border-b border-gray-300">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Flower
                            </p>
                            
                            <div class="flex items-center justify-between border-b border-gray-300">
                                <p class="text-base flex items-center">
                                    <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                    Casket
                                </p>
                        
                                @if ($serviceInfo->casket === null) 
                                    <span class="text-xs text-red-500">No Casket Choosen Yet</span>
                                @else 
                                    <span class="text-xs text-blue-500">{{$serviceInfo->casket->name}}</span>
                                
                                @endif
                                <a href="{{ route('service.caskets', $serviceId) }}" class="text-sm text-blue-600 flex items-center">
                                    Select Casket
                                    <i class='bx bx-right-arrow-alt text-xl text-blue-600 ml-1 mt-[3px]'></i>
                                </a>
                            </div>
                            <div class="flex items-center justify-between border-b border-gray-300">
                                <p class="text-base flex items-center">
                                    <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                    Hearse of Interment
                                </p>
                                <span class="text-xs text-red-500">No Hearse Choosen Yet</span>
                                <a href="{{ route('service.hearses', $serviceId) }}" class="text-sm text-blue-600 flex items-center">
                                    Select Hearse
                                    <i class='bx bx-right-arrow-alt text-xl text-blue-600 ml-1 mt-[3px]'></i>
                                </a>
                            </div>
                            <div class="flex items-center space-x-4 border-b border-gray-300">
                                <p class="text-base flex items-center">
                                    <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                    Hot and Cold Water Despenser with
                                </p>
                                <input type="text" name="gallonsOfWater" class="w-10 h-6 text-xs text-center rounded border-2 border-gray-300 bg-inherit">
                                <span class="text-base "> gallons of water</span>
                            </div>
                            <p class="text-base flex items-center border-b border-gray-300">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Facilitation of Death Certificate and Permits c/o
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>