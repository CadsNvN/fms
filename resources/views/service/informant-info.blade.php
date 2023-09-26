<x-app-layout>
    <section>
        <div class="mx-auto max-w-[1300px] px-4">
            <x-service-progress :serviceId="$serviceId" :page="$page"/>
            <div class="w-full flex flex-col py-4">
                <div class="w-full flex items-center justify-between space-x-4">
                    <div class="w-1/2">
                        <x-candle />
                    </div>
                    
                    <form action="{{ route('service.informant.store', $serviceId) }}" method="POST" class="w-2/3 pt-16">
                        @csrf
                        <div class="flex flex-col space-y-5">
                            <div class="">
                                <p class="text-2xl font-medium">INFORMANT'S INFORMATION</p>
                            </div>

                            <div class="form-section flex flex-col space-y-4" id="personal-info">
                                
                                <div class="w-full flex space-x-4 items-start">
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">FIRST NAME</label>
                                        <input type="text" name="firstName" placeholder="First name" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('firstName') ?? ($informant->firstName ?? '') }}">
                                        @error('firstName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
            
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">MIDDLE NAME</label>
                                        <input type="text" name="middleName" placeholder="Middle name" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('middleName') ?? ($informant->middleName ?? '') }}">
                                        @error('middleName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">LAST NAME</label>
                                        <input type="text" name="lastName" placeholder="Last name" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('lastName') ?? ($informant->lastName ?? '') }}">
                                        @error('lastName')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                </div>
        
                                <div class="w-full flex space-x-4 items-center">
                                    
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">AGE</label>
                                        <input type="number" name="age" placeholder="Age" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('age') ?? ($informant->age ?? '') }}">
                                        @error('age')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">OCCUPATION</label>
                                        <select name="occupation" class="w-full text-sm bg-inherit border border-gray-300 rounded " >
                                            <option value="farmer" {{ (old('occupation') == 'farmer' || $informant->occupation == 'farmer') ? 'selected' : '' }}>Famer</option>
                                            <option value="teacher" {{ (old('occupation') == 'teacher' || $informant->occupation == 'teacher') ? 'selected' : '' }}>Teacher</option>
                                            <option value="engineer" {{ (old('occupation') == 'engineer' || $informant->occupation == 'engineer') ? 'selected' : '' }}>Engineer</option>
                                            <option value="business" {{ (old('occupation') == 'business' || $informant->occupation == 'business') ? 'selected' : '' }}>Business</option>
                                            <option value="police" {{ (old('occupation') == 'police' || $informant->occupation == 'police') ? 'selected' : '' }}>Police</option>
                                        </select>
                                        @error('occupation')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="w-full flex flex-col space-y-1">
                                    <label class="text-xs ">ADDRESS</label>
                                    <input type="text" name="address" placeholder="Address" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                    value="{{ old('address') ?? ($informant->address ?? '') }}">
                                    @error('address')
                                        <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="flex items-center space-x-4 py-1">
                                    <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" 
                                    href="{{ route('service.deceased', $serviceId) }}"
                                    >Back</a>
                                    <a class="nav-button text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer" data-next="contact-info">Next</a>
                                </div>
                            </div>  
                            
                            <div class="form-section flex flex-col space-y-4" id="contact-info" style="display: none;">
                                <div class="w-full flex space-x-4 items-center">
                                
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">TELEPHONE NUMBER</label>
                                        <input type="text" name="telePhoneNo" placeholder="Telephone number" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('telePhoneNo') ?? ($informant->telePhoneNo ?? '') }}">
                                        @error('telePhoneNo')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
        
                                    <div class="w-full flex flex-col space-y-1">
                                        <label class="text-xs ">CELLPHONE NUMBER</label>
                                        <input type="text" name="cellPhoneNo" placeholder="Cellphone Number" class="w-full text-sm bg-inherit border border-gray-300 rounded "
                                        value="{{ old('cellPhoneNo') ?? ($informant->cellPhoneNo ?? '') }}">
                                        @error('cellPhoneNo')
                                            <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
        
                                <div class="w-full flex flex-col space-y-1">
                                    <label class="text-xs ">RELATIONSHIP TO THE DECEASED</label>
                                    <select name="relationshipToTheDeceased" class="w-full text-sm bg-inherit border border-gray-300 rounded " >
                                        <option value="son" {{ (old('son') == 'farmer' || $informant->relationshipToTheDeceased == 'son') ? 'selected' : '' }}>Son</option>
                                        <option value="sibling" {{ (old('occupation') == 'sibling' || $informant->relationshipToTheDeceased == 'sibling') ? 'selected' : '' }}>Sibling</option>
                                        <option value="mother" {{ (old('occupation') == 'mother' || $informant->relationshipToTheDeceased == 'mother') ? 'selected' : '' }}>Mother</option>
                                        <option value="father" {{ (old('occupation') == 'father' || $informant->relationshipToTheDeceased == 'father') ? 'selected' : '' }}>Father</option>
                                        <option value="daugther" {{ (old('occupation') == 'police' || $informant->relationshipToTheDeceased == 'daugther') ? 'selected' : '' }}>Daugther</option>
                                        <option value="grand parent" {{ (old('occupation') == 'grand parent' || $informant->relationshipToTheDeceased == 'grand parent') ? 'selected' : '' }}>Grand Parent</option>
                                    </select>
                                    @error('relationshipToTheDeceased')
                                        <span class="text-xs text-red-500 pl-2">{{ $message }}</span>
                                    @enderror
                                </div> 

                                <div class="flex items-center space-x-3 py-1">
                                    <a class="nav-button text-sm px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 hover:text-gray-700 cursor-pointer" data-back="personal-info">Back</a>
                                    <button type="submit" class=" text-sm px-4 py-2 rounded bg-blue-600 hover:bg-blue-700 text-white cursor-pointer">Next</button>
                                </div>
                            </div>

                            <script>
                                const formSections = document.querySelectorAll(".form-section");
                                const navButtons = document.querySelectorAll(".nav-button");
                            
                                function hideAllSections() {
                                    formSections.forEach(section => {
                                        section.style.display = "none";
                                    });
                                }
                            
                                navButtons.forEach(button => {
                                    button.addEventListener("click", () => {
                                        const nextSectionId = button.getAttribute("data-next");
                                        const backSectionId = button.getAttribute("data-back");
                            
                                        if (nextSectionId) {
                                            hideAllSections();
                                            document.getElementById(nextSectionId).style.display = "block";
                                        } else if (backSectionId) {
                                            hideAllSections();
                                            document.getElementById(backSectionId).style.display = "block";
                                        }
                                    });
                                });
                            </script>
      
                            
                        </div>
    
                        
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>