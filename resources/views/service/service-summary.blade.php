<x-app-layout>
    <section>
        <div class="max-w-[1300px] mx-auto p-4">
            <div class="flex space-x-4">
            
                <div class="w-full flex flex-col space-y-4 pt-1">
                    <a class="nav-button text-sm px-4 py-2 w-fit rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" 
                    href="{{ route('service.other-services', $serviceId) }}"
                    >Back</a>

                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-2xl font-semibold mb-4">PACKAGE INCLUSIONS</h2>
                        <div class="flex flex-col">
                            <p class="text-base flex items-center">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Retrieval of Remains
                            </p>
                            <p class="text-base flex items-center ">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Embalming
                            </p>
                            <p class="text-base flex items-center ">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Viewing Equipment
                            </p>
                            <p class="text-base flex items-center ">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Flower
                            </p>
                            <p class="text-base flex items-center">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Hot and Cold Water Despenser with gallons of water
                            </p>
                            <p class="text-base flex items-center ">
                                <i class='bx bx-check text-3xl text-green-500 mr-3'></i>
                                Facilitation of Death Certificate and Permits c/o
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-4">
                        <div class="bg-white p-4 rounded-md shadow-md">
                            <img src="{{ asset('images/BatesVille.jpg') }}" alt="Product Image" class="w-full h-64 object-cover mb-4 rounded">
                            <h2 class="text-lg font-semibold">{{ $casket->name }}</h2>
                            <p class="text-sm text-gray-500 mb-2">{{ $casket->description }}</p>
                            <p class="text-xl font-bold text-blue-600 mb-2">&#8369;{{ $casket->price }}</p>
                        </div>

                        <div class="bg-white p-4 rounded-md shadow-md">
                            <img src="{{ asset('images/BatesVille.jpg') }}" alt="Product Image" class="w-full h-64 object-cover mb-4 rounded">
                            <h2 class="text-lg font-semibold">{{ $hearse->name }}</h2>
                            <p class="text-sm text-gray-500 mb-2">{{ $hearse->description }}</p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-md shadow-md ">
                        <h2 class="text-2xl font-semibold mb-4">DECEASED INFORMATION</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Full Name</label>
                                <p class="text-gray-700">{{ $deceasedInformation->firstName }} {{ $deceasedInformation->middleName }} {{ $deceasedInformation->lastName }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Date of Birth</label>
                                <p class="text-gray-700">{{ $deceasedInformation->dob }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Age</label>
                                <p class="text-gray-700">{{ $deceasedInformation->age }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Sex</label>
                                <p class="text-gray-700">{{ $deceasedInformation->sex }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Height</label>
                                <p class="text-gray-700">{{ $deceasedInformation->height }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Weight</label>
                                <p class="text-gray-700">{{ $deceasedInformation->weight }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Address</label>
                                <p class="text-gray-700">{{ $deceasedInformation->address }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Occupation</label>
                                <p class="text-gray-700">{{ $deceasedInformation->occupation }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Citizenship</label>
                                <p class="text-gray-700">{{ $deceasedInformation->citizenship }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Religion</label>
                                <p class="text-gray-700">{{ $deceasedInformation->religion }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Civil Status</label>
                                <p class="text-gray-700">{{ $deceasedInformation->civilStatus }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Father's Name</label>
                                <p class="text-gray-700">{{ $deceasedInformation->fathersName }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Mother's Maiden Name</label>
                                <p class="text-gray-700">{{ $deceasedInformation->mothersMaidenName }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Place of Death</label>
                                <p class="text-gray-700">{{ $deceasedInformation->placeOfDeath }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Time of Death</label>
                                <p class="text-gray-700">{{ $deceasedInformation->timeOfDeath }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Date of Death</label>
                                <p class="text-gray-700">{{ $deceasedInformation->dateOfDeath }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Cause of Death</label>
                                <p class="text-gray-700">{{ $deceasedInformation->causeOfDeath }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Address of Cemetery</label>
                                <p class="text-gray-700">{{ $deceasedInformation->addressOfCemetery }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Place of Viewing</label>
                                <p class="text-gray-700">{{ $deceasedInformation->placeOfViewing }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Date of Interment</label>
                                <p class="text-gray-700">{{ $deceasedInformation->dateOfInterment }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Time of Interment</label>
                                <p class="text-gray-700">{{ $deceasedInformation->timeOfInterment}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-md shadow-md">
                        <h2 class="text-2xl font-semibold mb-4">INFORMANT'S INFORMATION</h2>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Full Name</label>
                                <p class="text-gray-700">{{ $informant->firstName }} {{ $informant->middleName }} {{ $informant->lastName }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Age</label>
                                <p class="text-gray-700">{{ $informant->age }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Address</label>
                                <p class="text-gray-700">{{ $informant->address }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Occupation</label>
                                <p class="text-gray-700">{{ $informant->occupation }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Telephone Number</label>
                                <p class="text-gray-700">{{ $informant->telePhoneNo }}</p>
                            </div>
                            <div>
                                <label class="text-sm font-semibold">Cellphone Number</label>
                                <p class="text-gray-700">{{ $informant->cellPhoneNo }}</p>
                            </div>
                            <div class="col-span-2">
                                <label class="text-sm font-semibold">Relationship to the Deceased</label>
                                <p class="text-gray-700">{{ $informant->relationshipToTheDeceased }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <form action="{{ route('service.service-request.store', $serviceId) }}" method="POST"
                         class="w-full h-fit rounded-md bg-white shadow-md flex flex-col p-4 space-y-4 ">
                         @csrf
                            <h2 class="text-xl font-semibold ">SUMMARY</h2>
    
                            <div class="flex items-center justify-between">
                                <p class="text-base font-medium ">TOTAL</p>
                                <p class="text-base font-medium ">&#8369;{{ $casket->price }}</p>
                            </div>
                            
                            <button type="submit" class=" text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer">Request Service</button>
                        </form>
                    </div>
                   
                </div>
            
            </div>
        </div>
    </section>
</x-app-layout>